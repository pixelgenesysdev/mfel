 <?php include $_SERVER['DOCUMENT_ROOT'] . '/wordpress_projects/mfel/auth/include/header.php'; ?>
    
 


 <div id="main-box" style="background-image: url('<?php echo SITE_URL; ?>assets/images/big_bg.png');">

    <div id="left_box" class="hero-image">
        <a href="<?php echo SITE_URL; ?>auth/landing.php">
            <img src="<?php echo SITE_URL; ?>assets/images/icon_big.png" alt="Hero Image" class="img-fluid">
        </a>
    </div>

    <div id="right_box" class="content-box">

            <div class="form-container">
                <h2>Reset Password</h2>
                <p class="description">Please type your new password</p>
                <!-- <form action="" method="POST"> -->
                    <div class="form-group">
                        <label for="new-password">New Password</label>
                        <input type="password" name="password" id="new-password" placeholder="Enter your password">
                    </div>
                    
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" name="password" id="confirm-password" placeholder="Enter your confirm password">
                    </div>
                    
                    <button class="submit-btn btn" id="update-password">Update</button>
                <!-- </form> -->
                <div class="back-link last-line">
                    <a href="login.php">Back to Login</a>
                </div>
            </div>


 <?php include $_SERVER['DOCUMENT_ROOT'] . '/wordpress_projects/mfel/auth/include/popup.php'; ?>


           

        <script>
        document.getElementById('update-password').addEventListener('click', function() {
            const newPassword = document.getElementById('new-password').value;
            const confirmPassword = document.getElementById('confirm-password').value;
            
            if (newPassword !== confirmPassword) {
                showError("Passwords don't match!");
                return;
            }
            
            if (newPassword.length < 8) {
                showError("Password must be at least 8 characters long!");
                return;
            }
            
            // Here you would normally send the new password to your server
            showSuccess();
        });

        function showSuccess() {
            const popup = document.getElementById('success-popup');
            popup.classList.add('active');
            
            document.getElementById('success-ok-btn').addEventListener('click', function() {
                popup.classList.remove('active');
                window.location.href = "<?php echo SITE_URL; ?>pages/dashboard.php";
            });
        }

        function showError(message) {
            const popup = document.getElementById('error-popup');
            document.getElementById('error-message').textContent = message;
            popup.classList.add('active');
            
            document.getElementById('error-ok-btn').addEventListener('click', function() {
                popup.classList.remove('active');
            });
        }
    </script>

    </div>
    
</div>


 <?php include $_SERVER['DOCUMENT_ROOT'] . '/wordpress_projects/mfel/auth/include/footer.php'; ?>
