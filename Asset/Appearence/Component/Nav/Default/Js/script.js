window.onscroll = function() { customSticky(); };

var navbar = document.querySelector(".container-nav");
var containerNavLogo = document.querySelector(".container-nav-logo");
var adminBar = document.getElementById("wpadminbar");
var windowScrollPos = document.getElementById("window-scroll-position");
var adminBarHeight = adminBar ? adminBar.offsetHeight : 0;

// Ensure the sticky position is calculated correctly
var sticky = navbar.offsetTop - adminBarHeight;

function customSticky() {
  // Debugging: Log the scroll position and sticky threshold
  //windowScrollPos.innerHTML = window.scrollY + ',' + adminBarHeight + ',' + sticky;
  
  if (window.scrollY >= sticky) {
    containerNavLogo.style.display = 'flex';  // Set the display to flex
    navbar.classList.add("sticky");
  } else {
    containerNavLogo.style.display = 'none';  // Hide the logo when not sticky
    navbar.classList.remove("sticky");
  }
}
