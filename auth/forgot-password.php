 <?php include $_SERVER['DOCUMENT_ROOT'] . '/wordpress_projects/mfel/auth/include/header.php'; ?>
    
 


 <div id="main-box" style="background-image: url('<?php echo SITE_URL; ?>assets/images/big_bg.png');">

       <div id="left_box" class="hero-image">
            <a href="<?php echo SITE_URL; ?>auth/landing.php">
                <img src="<?php echo SITE_URL; ?>assets/images/icon_big.png" alt="Hero Image" class="img-fluid">
            </a>
        </div>

    <div id="right_box" class="content-box">

            <div class="form-container">
                <h2>Forgot Password</h2>
                <p>Enter your email address to receive a verification code</p>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" placeholder="Enter your email address">
                </div>
                <button id="submit-email" type="submit" class="btn">Continue</button>
                <p class="text-center last-line"><a href="login.php" class=" link">Back to Login</a></p>
            </div>



            <script>


                // Submit OTP and redirect to reset password
                document.getElementById('submit-email').addEventListener('click', function() {
                    // Here you would normally validate the OTP
                    // For demo, we'll just redirect
                    window.location.href = "otp.php";
                });
            </script>
    </div>
    
</div>


 <?php include $_SERVER['DOCUMENT_ROOT'] . '/wordpress_projects/mfel/auth/include/footer.php'; ?>
