<div class="app-container">
    <div class="vertical-tabs">
        <div class="tabs-header">
            <button class="toggle-tabs" id="toggleTabs">
                <i class="fas fa-chevron-left"></i>
            </button>
            <span class="tabs-title">Navigation</span>
        </div>
        <ul class="tab-items">
            <li class="tab-item active" data-tab="dashboard">
                <a href="#" class="tab-link">
                    <i class="fas fa-home"></i>
                    <span class="tab-text">Dashboard</span>
                </a>
            </li>
            <?php do_action('flex_theme_tab_item'); ?>
        </ul>
    </div>
    
    <main class="content-area">
        <div class="tab-content active" id="dashboard">
            <h1>Dashboard</h1>
            <p>Welcome to your dashboard. This is the main content area.</p>
        </div>

        <?php do_action('flex_theme_tab_item_content'); ?>
    </main>
</div>