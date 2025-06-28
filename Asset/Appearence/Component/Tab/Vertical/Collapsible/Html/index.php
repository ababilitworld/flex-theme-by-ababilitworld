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
            <li class="tab-item" data-tab="analytics">
                <a href="#" class="tab-link">
                    <i class="fas fa-chart-line"></i>
                    <span class="tab-text">Analytics</span>
                </a>
            </li>
            <li class="tab-item" data-tab="messages">
                <a href="#" class="tab-link">
                    <i class="fas fa-envelope"></i>
                    <span class="tab-text">Messages</span>
                    <span class="tab-badge">5</span>
                </a>
            </li>
            <li class="tab-item" data-tab="calendar">
                <a href="#" class="tab-link">
                    <i class="fas fa-calendar"></i>
                    <span class="tab-text">Calendar</span>
                </a>
            </li>
            <li class="tab-item" data-tab="settings">
                <a href="#" class="tab-link">
                    <i class="fas fa-cog"></i>
                    <span class="tab-text">Settings</span>
                </a>
            </li>
        </ul>
    </div>
    
    <main class="content-area">
        <div class="tab-content active" id="dashboard">
            <h1>Dashboard</h1>
            <p>Welcome to your dashboard. This is the main content area.</p>
        </div>
        
        <div class="tab-content" id="analytics">
            <h1>Analytics</h1>
            <p>View your analytics data here.</p>
            <div class="chart-placeholder" style="height: 300px; background: #f0f0f0; display: flex; align-items: center; justify-content: center;">
                Analytics Chart
            </div>
        </div>
        
        <div class="tab-content" id="messages">
            <h1>Messages</h1>
            <p>You have 5 new messages.</p>
            <ul class="message-list" style="margin-top: 1rem;">
                <li style="padding: 0.5rem; border-bottom: 1px solid #eee;">Message 1</li>
                <li style="padding: 0.5rem; border-bottom: 1px solid #eee;">Message 2</li>
                <li style="padding: 0.5rem; border-bottom: 1px solid #eee;">Message 3</li>
            </ul>
        </div>
        
        <div class="tab-content" id="calendar">
            <h1>Calendar</h1>
            <p>Your upcoming events:</p>
            <div class="calendar-placeholder" style="height: 300px; background: #f0f0f0; display: flex; align-items: center; justify-content: center; margin-top: 1rem;">
                Calendar View
            </div>
        </div>
        
        <div class="tab-content" id="settings">
            <h1>Settings</h1>
            <form style="margin-top: 1rem;">
                <div style="margin-bottom: 1rem;">
                    <label style="display: block; margin-bottom: 0.5rem;">Profile Settings</label>
                    <input type="text" style="width: 100%; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px;">
                </div>
                <div style="margin-bottom: 1rem;">
                    <label style="display: block; margin-bottom: 0.5rem;">Notification Preferences</label>
                    <select style="width: 100%; padding: 0.5rem; border: 1px solid #ddd; border-radius: 4px;">
                        <option>All Notifications</option>
                        <option>Important Only</option>
                        <option>None</option>
                    </select>
                </div>
                <button type="submit" style="padding: 0.5rem 1rem; background: var(--primary-color); color: white; border: none; border-radius: 4px; cursor: pointer;">Save Settings</button>
            </form>
        </div>
    </main>
</div>