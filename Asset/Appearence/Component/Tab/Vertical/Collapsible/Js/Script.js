document.addEventListener('DOMContentLoaded', function() {
    const appContainer = document.querySelector('.app-container');
    const toggleTabs = document.getElementById('toggleTabs');    
    const tabItems = document.querySelectorAll('.tab-item');
    const tabContents = document.querySelectorAll('.tab-content');
    const activeTabInput = document.getElementById('active_tab_input');

    // Function to activate a tab by content ID
    function activateTab(contentId) {
        // Remove active class from all tabs and contents
        tabItems.forEach(tab => tab.classList.remove('active'));
        tabContents.forEach(content => content.classList.remove('active'));
        
        // Find the tab item that controls this content
        const tabElement = document.querySelector(`.tab-item[data-tab="${contentId}"]`);
        if (tabElement) {
            // Add active class to both tab and content
            tabElement.classList.add('active');
            document.getElementById(contentId).classList.add('active');
            
            // Update hidden input with tab ID (not content ID) for form submission
            if (activeTabInput) {
                activeTabInput.value = tabElement.id;
            }
            
            // Update URL hash with the content ID (data-tab value)
            if (window.location.hash !== `#${contentId}`) {
                history.pushState(null, null, `#${contentId}`);
            }
        }
    }

    // Initialize from URL hash if present
    if (window.location.hash) {
        const contentIdFromHash = window.location.hash.substring(1);
        // Verify the content exists before activating
        if (document.getElementById(contentIdFromHash)) {
            activateTab(contentIdFromHash);
        }
    } else {
        // Activate first tab by default if no hash
        const firstTab = document.querySelector('.tab-item');
        if (firstTab) {
            activateTab(firstTab.getAttribute('data-tab'));
        }
    }

    // Toggle tabs collapse/expand
    toggleTabs.addEventListener('click', function(e) {
        e.preventDefault();
        
        if (appContainer.classList.contains('collapsed')) 
        {
            appContainer.classList.remove('collapsed');
            appContainer.classList.add('expanded');
        } 
        else if (appContainer.classList.contains('expanded')) 
        {
            appContainer.classList.remove('expanded');
            appContainer.classList.add('collapsed');
        } 
        else
        {
            // Default behavior if neither class is present
            if (window.innerWidth <= 768) 
            {
                appContainer.classList.add('expanded');
            } 
            else 
            {
                appContainer.classList.add('collapsed');
            }
        }
    });
    
    // Handle tab switching
    tabItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            const contentId = this.getAttribute('data-tab');
            activateTab(contentId);
            
            // Collapse tabs on mobile after selection
            if (window.innerWidth <= 768) {
                appContainer.classList.remove('expanded');
            }
        });
    });
    
    // Close expanded tabs when clicking outside on mobile
    document.addEventListener('click', function(e) {
        if (window.innerWidth <= 768 && 
            appContainer.classList.contains('expanded') &&
            !e.target.closest('.vertical-tabs') && 
            e.target !== toggleTabs) {
            appContainer.classList.remove('expanded');
        }
    });
    
    // Handle window resize
    window.addEventListener('resize', function() {
        if (window.innerWidth > 768) {
            appContainer.classList.remove('expanded');
        }
    });

    // Handle back/forward navigation
    window.addEventListener('popstate', function() {
        if (window.location.hash) {
            const contentIdFromHash = window.location.hash.substring(1);
            if (document.getElementById(contentIdFromHash)) {
                activateTab(contentIdFromHash);
            }
        }
    });
});