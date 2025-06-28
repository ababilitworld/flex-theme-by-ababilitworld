document.addEventListener('DOMContentLoaded', function() {
    try {
        // Get all required elements with null checks
        const menu = document.querySelector('.curtain-menu');
        const toggleButton = document.querySelector('.curtain-menu-toggle');
        
        // Debugging: Log elements to console
        console.log('Menu element:', menu);
        console.log('Toggle button:', toggleButton);

        // Exit if essential elements don't exist
        if (!menu || !toggleButton) {
            console.error('Curtain menu elements not found. Check your HTML for:',
                         '\n- Element with class "curtain-menu"',
                         '\n- Element with class "curtain-menu-toggle"');
            return;
        }

        // Initialize menu state
        menu.style.visibility = 'hidden'; // Start hidden
        toggleButton.setAttribute('aria-expanded', 'false');

        // Toggle function
        function toggleMenu() {
            const isMenuActive = menu.classList.contains('active');

            if (isMenuActive) {
                // Close menu
                menu.classList.remove('active');
                toggleButton.innerHTML = '☰ Menu';
                toggleButton.setAttribute('aria-expanded', 'false');
                
                // Hide after animation completes
                setTimeout(() => {
                    if (!menu.classList.contains('active')) {
                        menu.style.visibility = 'hidden';
                    }
                }, 300); // Match CSS transition duration
            } else {
                // Open menu
                menu.style.visibility = 'visible';
                menu.classList.add('active');
                toggleButton.innerHTML = '× Close';
                toggleButton.setAttribute('aria-expanded', 'true');
            }
        }

        // Event listeners with error handling
        try {
            toggleButton.addEventListener('click', function(e) {
                e.stopPropagation(); // Prevent bubbling to document
                toggleMenu();
            });

            // Close when clicking outside
            document.addEventListener('click', function(event) {
                if (!menu.contains(event.target) && !toggleButton.contains(event.target)) {
                    if (menu.classList.contains('active')) {
                        toggleMenu();
                    }
                }
            });

            // Close on Escape key
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && menu.classList.contains('active')) {
                    toggleMenu();
                }
            });

        } catch (eventError) {
            console.error('Event listener error:', eventError);
        }

    } catch (error) {
        console.error('Curtain menu initialization error:', error);
    }
});