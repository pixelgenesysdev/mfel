           
            <!-- Success Popup -->
            <div class="logout_popup-overlay" id="logout_success-popup">
                <div class="logout_popup-container">
                    <div class="logout_popup-icon success-icon">✓</div>
                    <h3 class="logout_popup-title">Logout!</h3>
                    <p class="logout_popup-message">Are you sure you want to logout?</p>
                    <div class="but-box">    
                        <button id="logout_success-ok" class="logout_popup-btn" onclick="window.location.href = '<?php echo SITE_URL; ?>auth/landing.php';">Yes</button>
                        <button class="logout_popup-btn" id="success-cancel-btn" onclick="closeLogoutPopup()">No</button>
                    </div>                      
                </div>
            </div> 

