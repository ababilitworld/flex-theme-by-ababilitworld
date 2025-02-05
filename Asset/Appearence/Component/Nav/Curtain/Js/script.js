document.addEventListener('DOMContentLoaded', function() {
    const menu = document.querySelector('.curtain-menu');
    const toggleButton = document.querySelector('.curtain-menu-toggle');

    toggleButton.addEventListener('click', function() {
        const isMenuActive = menu.classList.contains('active');

        if (isMenuActive) {
            // Slide up the menu (hide)
            menu.classList.remove('active');
            toggleButton.innerHTML = '☰ Menu'; // Change back to '☰' icon
            toggleButton.setAttribute('aria-expanded', 'false');
            
            // Use a timeout to hide the menu after the animation ends
            setTimeout(() => {
                if (!menu.classList.contains('active')) {
                    menu.style.visibility = 'hidden';
                }
            }, 1500); // Match this duration to the CSS transition duration (0.3s)
        } else {
            // Slide down the menu (show)
            menu.style.visibility = 'visible'; // Make visible immediately
            menu.classList.add('active');
            toggleButton.innerHTML = '× Close'; // Change to '×' icon
            toggleButton.setAttribute('aria-expanded', 'true');
        }
    });

    // Optional: Close menu when clicking outside
    document.addEventListener('click', function(event) {
        if (!menu.contains(event.target) && !toggleButton.contains(event.target)) {
            menu.classList.remove('active');
            toggleButton.innerHTML = '☰ Menu'; // Reset icon to '☰'
            toggleButton.setAttribute('aria-expanded', 'false');

            // Use a timeout to hide the menu after the animation ends
            setTimeout(() => {
                if (!menu.classList.contains('active')) {
                    menu.style.visibility = 'hidden';
                }
            }, 1500);
            // Match this duration to the CSS transition duration (0.3s)
        }
    });
});
