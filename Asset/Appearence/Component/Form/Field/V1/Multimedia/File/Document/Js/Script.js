jQuery(document).ready(function($) {
    // This will handle all buttons with class 'document-upload'
    $(document).on('click', '.document-upload', function(e) {
        e.preventDefault();
        
        var $button = $(this);
        var $input = $button.siblings('input[type="hidden"]');
        var previewContainerId = $input.attr('id') + '-preview';
        var $previewContainer = $('#' + previewContainerId);
        var inputName = $input.attr('name');
        var isMultiple = $input.attr('multiple') || inputName.endsWith('[]');
        
        // Supported document extensions
        var allowedExtensions = ['pdf', 'doc', 'docx', 'xls', 'xlsx'];
        var mimeTypes = [
            'application/pdf',
            'application/msword',
            'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            'application/vnd.ms-excel',
            'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet'
        ];

        // Create media uploader or reuse existing one
        var mediaUploader = wp.media.frames.file_frame || wp.media({
            title: 'Choose Documents',
            button: {
                text: 'Choose Documents'
            },
            multiple: isMultiple,
            library: {
                type: mimeTypes, // Filter library by MIME types
                uploadedTo: null // Show all files, not just attached to post
            },
            uploader: {
                filters: {
                    mime_types: [
                        {
                            title: "PDF Documents",
                            extensions: "pdf",
                            mime_types: "application/pdf"
                        },
                        {
                            title: "Word Documents",
                            extensions: "doc,docx",
                            mime_types: "application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"
                        },
                        {
                            title: "Excel Documents",
                            extensions: "xls,xlsx",
                            mime_types: "application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"
                        }
                    ]
                }
            }
        });

        mediaUploader.on('select', function() {
            console.log('Media selected, preparing to update form');
    
            var attachments = mediaUploader.state().get('selection').map(function(attachment) {
                console.log('Processing attachment:', attachment);
                attachment.toJSON();
                return attachment;
            });
            
            // Clear existing preview if not multiple
            if (!isMultiple) {
                $previewContainer.empty();
            }
            
            attachments.forEach(function(attachment) {
                if (attachment.attributes.filesizeHuman && 
                    attachment.attributes.filesize > 5242880) { // 5MB
                    alert('File size exceeds maximum allowed');
                    return;
                }
                // Get file extension
                var fileUrl = attachment.attributes.url.toLowerCase();
                var fileExt = fileUrl.split('.').pop();
                
                // Validate file type
                if (!allowedExtensions.includes(fileExt)) {
                    alert('Only document files are allowed (PDF, DOC, DOCX, XLS, XLSX)');
                    return;
                }
                
                // Create preview with remove button
                var item = $('<div class="document-preview-item"></div>');
                
                // Different icons for different file types
                var iconClass = 'dashicons-media-default';
                if (fileExt === 'pdf') {
                    iconClass = 'dashicons-media-pdf';
                } else if (fileExt === 'doc' || fileExt === 'docx') {
                    iconClass = 'dashicons-media-document';
                } else if (fileExt === 'xls' || fileExt === 'xlsx') {
                    iconClass = 'dashicons-media-spreadsheet';
                }
                
                item.append('<span class="dashicons ' + iconClass + '"></span>');
                item.append('<span class="document-name">' + attachment.attributes.title + '</span>');
                item.append('<input type="hidden" name="' + inputName + '" value="' + attachment.id + '">');
                item.append('<a href="#" class="remove-document" title="Remove document"><span class="dashicons dashicons-trash"></span></a>');
                
                $previewContainer.append(item);
            });
        });

        mediaUploader.on('uploader:error', function(error) {
            alert('Error uploading file: ' + error.message);
        });

        mediaUploader.open();
    });

    // Remove document handler
    $(document).on('click', '.remove-document', function(e) {
        e.preventDefault();
        $(this).closest('.document-preview-item').remove();
    });
});