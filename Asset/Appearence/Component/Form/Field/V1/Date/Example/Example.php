<?php

$dateField = new Field();
$dateField->init([
    'name' => 'event_date',
    'label' => 'Event Date',
    'required' => true,
    'minDate' => date('Y-m-d'), // Today
    'maxDate' => '+1M', // One month from now
    'datepickerOptions' => [
        // Basic configuration
        'dateFormat' => 'yy-mm-dd', // ISO format
        'altFormat' => 'DD, d MM, yy', // Alternate format
        'altField' => '#alternate_date', // Alternate field selector
        
        // Regional/localization
        'firstDay' => 1, // Monday as first day (0=Sunday, 1=Monday, etc.)
        'monthNames' => ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
        'monthNamesShort' => ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        'dayNames' => ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
        'dayNamesShort' => ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'],
        'dayNamesMin' => ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
        
        // Visual customization
        'showAnim' => 'fadeIn', // or 'slideDown', 'show', etc.
        'duration' => 'fast', // animation speed
        'showButtonPanel' => true,
        'buttonImage' => '/path/to/calendar-icon.png',
        'buttonImageOnly' => true,
        'buttonText' => 'Select Date',
        
        // Behavior options
        'changeMonth' => true, // Show month dropdown
        'changeYear' => true, // Show year dropdown
        'yearRange' => 'c-10:c+10', // Year range (current ±10 years)
        'showWeek' => true, // Show week numbers
        'showOtherMonths' => true, // Show dates from other months
        'selectOtherMonths' => true, // Allow selecting other months' dates
        'showOn' => 'both', // 'focus', 'button', or 'both'
        'defaultDate' => '+1w', // Default selected date (1 week from now)
        
        // Time picker integration (if using timepicker addon)
        'timeFormat' => 'HH:mm', // 24-hour format
        'showTimepicker' => false,
        
        // Callbacks
        'beforeShow' => "function(input, inst) {
            // Custom logic before picker shows
            console.log('Before show', input, inst);
        }",
        'onSelect' => "function(dateText, inst) {
            // Custom logic when date is selected
            console.log('Selected date:', dateText, inst);
        }",
        'onClose' => "function(dateText, inst) {
            // Custom logic when picker closes
            console.log('Picker closed:', dateText, inst);
        }",
        
        // Accessibility
        'constrainInput' => true, // Constrain input to date format
        'autoSize' => false, // Automatically resize input
        
        // Theme/UI
        'numberOfMonths' => 1, // Show multiple months
        'showCurrentAtPos' => 0, // Position of current month
        'stepMonths' => 1, // Months to move when clicking prev/next
    ]
]);
$dateField->render();