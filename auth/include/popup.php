

            
            
<!-- Success Popup -->
            <div class="popup-overlay" id="success-popup">
                <div class="popup-container">
                    <div class="popup-icon success-icon">✓</div>
                    <h3 class="popup-title">Success!</h3>
                    <p class="popup-message">Your password has been updated successfully.</p>
                    <button class="popup-btn" onclick="window.location.href = '<?php echo SITE_URL; ?>page/dashboard.php';" id="success-ok-btn">OK</button>
                </div>
            </div>

            <!-- Error Popup -->
            <div class="popup-overlay" id="error-popup">
                <div class="popup-container">
                    <div class="popup-icon error-icon">✗</div>
                    <h3 class="popup-title">Error</h3>
                    <p class="popup-message" id="error-message">Passwords don't match!</p>
                    <button class="popup-btn" id="error-ok-btn">OK</button>
                </div>
            </div>

