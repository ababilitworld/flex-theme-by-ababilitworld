<div class="panel">
    <div class="panel-header">
        <h2 class="panel-title">User Settings</h2>
    </div>
    <div class="panel-body">
        <!-- Personal Information Row -->
        <div class="panel-row two-columns">
            <div class="form-field">
                <label class="form-label">
                    First Name
                    <span class="required">*</span>
                </label>
                <input type="text" class="form-control" placeholder="Enter your first name">
                <span class="help-text">Your legal first name as it appears on official documents</span>
            </div>

            <div class="form-field">
                <label class="form-label">
                    Last Name
                    <span class="required">*</span>
                </label>
                <input type="text" class="form-control" placeholder="Enter your last name">
                <span class="help-text">Your legal last name (surname)</span>
            </div>
        </div>

        <!-- Contact Information Row -->
        <div class="panel-row">
            <div class="form-field">
                <label class="form-label">Email Address</label>
                <input type="email" class="form-control" placeholder="your.email@example.com">
                <span class="help-text">We'll never share your email with anyone else</span>
            </div>

            <div class="form-field">
                <label class="form-label">Phone Number</label>
                <input type="tel" class="form-control" placeholder="+1 (555) 123-4567">
                <span class="help-text">Include country code for international numbers</span>
            </div>

            <div class="form-field">
                <label class="form-label">Country</label>
                <select class="form-control">
                    <option value="">Select a country</option>
                    <option value="US">United States</option>
                    <option value="CA">Canada</option>
                    <option value="UK">United Kingdom</option>
                </select>
                <span class="help-text">Your primary country of residence</span>
            </div>
        </div>

        <!-- Preferences Row -->
        <div class="panel-row">
            <div class="form-field">
                <label class="form-label">Theme Preference</label>
                <select class="form-control">
                    <option value="light">Light Theme</option>
                    <option value="dark">Dark Theme</option>
                    <option value="system">System Default</option>
                </select>
                <span class="help-text">Choose your preferred interface appearance</span>
            </div>

            <div class="form-field">
                <label class="form-label">Email Notifications</label>
                <div class="switch-wrapper">
                    <label class="switch">
                        <input type="checkbox" class="switch-input" checked>
                        <span class="switch-slider">
                            <span class="switch-on">ON</span>
                            <span class="switch-off">OFF</span>
                        </span>
                    </label>
                </div>
                <span class="help-text">Receive email notifications about your account</span>
            </div>
        </div>

        <!-- Full-width Field -->
        <div class="panel-row">
            <div class="form-field full-width">
                <label class="form-label">Bio</label>
                <textarea class="form-control" rows="3" placeholder="Tell us about yourself"></textarea>
                <span class="help-text">Maximum 500 characters. This will be displayed on your public profile.</span>
            </div>
        </div>
    </div>
</div>

<div class="panel">
    <div class="panel-header">
        <h2 class="panel-title">Account Security</h2>
    </div>
    <div class="panel-body">
        <div class="panel-row three-columns">
            <div class="form-field">
                <label class="form-label">Two-Factor Auth</label>
                <div class="switch-wrapper">
                    <label class="switch">
                        <input type="checkbox" class="switch-input">
                        <span class="switch-slider">
                            <span class="switch-on">ON</span>
                            <span class="switch-off">OFF</span>
                        </span>
                    </label>
                </div>
                <span class="help-text">Add an extra layer of security to your account</span>
            </div>

            <div class="form-field">
                <label class="form-label">Login Alerts</label>
                <div class="switch-wrapper">
                    <label class="switch">
                        <input type="checkbox" class="switch-input" checked>
                        <span class="switch-slider">
                            <span class="switch-on">ON</span>
                            <span class="switch-off">OFF</span>
                        </span>
                    </label>
                </div>
                <span class="help-text">Get notified about new sign-ins</span>
            </div>

            <div class="form-field">
                <label class="form-label">Password Reset</label>
                <div class="switch-wrapper">
                    <label class="switch">
                        <input type="checkbox" class="switch-input">
                        <span class="switch-slider">
                            <span class="switch-on">ON</span>
                            <span class="switch-off">OFF</span>
                        </span>
                    </label>
                </div>
                <span class="help-text">Require email verification for password resets</span>
            </div>
        </div>
    </div>
</div>