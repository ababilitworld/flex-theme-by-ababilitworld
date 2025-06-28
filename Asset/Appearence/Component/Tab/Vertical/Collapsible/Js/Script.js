document.addEventListener('DOMContentLoaded', function() {
    const appContainer = document.querySelector('.app-container');
    const toggleTabs = document.getElementById('toggleTabs');    
    const tabItems = document.querySelectorAll('.tab-item');
    const tabContents = document.querySelectorAll('.tab-content');
    
    // Toggle tabs collapse/expand
    toggleTabs.addEventListener('click', function(e) {
        e.preventDefault();
        appContainer.classList.toggle('collapsed');
        
        if (window.innerWidth <= 768) {
            appContainer.classList.toggle('expanded');
        }
    });
    
    // Handle tab switching
    tabItems.forEach(item => {
        item.addEventListener('click', function(e) {
            e.preventDefault();
            
            // Remove active class from all tabs
            tabItems.forEach(tab => tab.classList.remove('active'));
            tabContents.forEach(content => content.classList.remove('active'));
            
            // Add active class to clicked tab
            this.classList.add('active');
            const tabId = this.getAttribute('data-tab');
            document.getElementById(tabId).classList.add('active');
            
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
});