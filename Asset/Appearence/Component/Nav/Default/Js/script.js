document.addEventListener('DOMContentLoaded', function() {
    // Get all required elements
    var navbar = document.querySelector(".container-nav");
    var containerNavLogo = document.querySelector(".container-nav-logo");
    var adminBar = document.getElementById("wpadminbar");
    var windowScrollPos = document.getElementById("window-scroll-position");

    // Check if essential elements exist
    if (!navbar || !containerNavLogo) {
        console.error('Navigation elements missing - check your HTML structure');
        return; // Exit if elements don't exist
    }

    // Calculate sticky position
    var adminBarHeight = adminBar ? adminBar.offsetHeight : 0;
    var sticky = navbar.offsetTop - adminBarHeight;

    // Sticky function
    function customSticky() {
        if (window.scrollY >= sticky) {
            containerNavLogo.style.display = 'flex';
            navbar.classList.add("sticky");
        } else {
            containerNavLogo.style.display = 'none';
            navbar.classList.remove("sticky");
        }
    }

    // Initial check in case page loads scrolled
    customSticky();

    // Set up scroll event listener
    window.addEventListener('scroll', customSticky);

    // Debugging info (optional)
    if (windowScrollPos) {
        window.addEventListener('scroll', function() {
            windowScrollPos.innerHTML = `ScrollY: ${window.scrollY}, AdminBar: ${adminBarHeight}, StickyPos: ${sticky}`;
        });
    }
});