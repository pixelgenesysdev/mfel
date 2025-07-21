 <?php include __DIR__ .  '/../auth/include/header.php'; ?>
    
 


 <div id="main-box" style="background-image: url('<?php echo SITE_URL; ?>assets/images/big_bg.png');">

        <div id="left_box" class="hero-image">
            <a href="<?php echo SITE_URL; ?>auth/landing.php">
                <img src="<?php echo SITE_URL; ?>assets/images/icon_big.png" alt="Hero Image" class="img-fluid">
            </a>
        </div>

    <div id="right_box" class="content-box">

           
            <div class="form-container">
                    <h2>Enter OTP</h2>
                    <p class="description">An email has been sent to you with a verification code. Please enter it here.</p>
                <!--   <form action="" method="POST"> -->
                    <div class="otp-inputs">
                        <input type="text" class="otp-input" maxlength="1" pattern="[0-9]">
                        <input type="text" class="otp-input" maxlength="1" pattern="[0-9]">
                        <input type="text" class="otp-input" maxlength="1" pattern="[0-9]">
                        <input type="text" class="otp-input" maxlength="1" pattern="[0-9]">
                        <input type="text" class="otp-input" maxlength="1" pattern="[0-9]">
                        <input type="text" class="otp-input" maxlength="1" pattern="[0-9]">
                    </div>
                    
                    <button class="submit-btn btn" id="submit-otp" onclick='window.location.href = "reset-password.php";'>Submit</button>
                    
                    <div class="last-line timer">00:40</div>
                    
                    <div class=" last-line resend">
                        <a href="#">Resend Code</a>
                    </div>
                <!-- </form> -->
                    <div class="last-line back-link">
                        <a href="login.php">Back to Login</a>
                    </div>
            </div>

        <script>
            // OTP input auto-focus
            const otpInputs = document.querySelectorAll('.otp-input');
            otpInputs.forEach((input, index) => {
                input.addEventListener('input', () => {
                    if (input.value.length === 1 && index < otpInputs.length - 1) {
                        otpInputs[index + 1].focus();
                    }
                });
                
                input.addEventListener('keydown', (e) => {
                    if (e.key === 'Backspace' && input.value.length === 0 && index > 0) {
                        otpInputs[index - 1].focus();
                    }
                });
            });

           
           
        </script>

    </div>
    
</div>       



 <?php include __DIR__ .  '/../auth/include/footer.php'; ?>
