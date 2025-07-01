 <?php include $_SERVER['DOCUMENT_ROOT'] . '/wordpress_projects/mfel/auth/include/header.php'; ?>
    
 


 <div id="main-box" style="background-image: url('<?php echo SITE_URL; ?>assets/images/big_bg.png');">

        <div id="left_box" class="hero-image">
            <a href="<?php echo SITE_URL; ?>auth/landing.php">
                <img src="<?php echo SITE_URL; ?>assets/images/icon_big.png" alt="Hero Image" class="img-fluid">
            </a>
        </div>

    <div id="right_box" class="content-box">
        
            <div class="form-container">
                <h2 class="form-title">Login to Your Account!</h2>
                <form action="" method="POST">
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" placeholder="Enter your email address">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter your password">
                    </div>
                    <div class="remember-me">
                        <label for="remember">Remember Me</label>
                        <label class="toggle-switch">
                            <input type="checkbox" id="remember">
                            <span class="slider"></span>
                        </label>
                    </div>
                    <button class="btn">Sign In</button>
                </form>
                <p class="text-center last-line">Don't have an account? <a href="signup.php" class="link">Sign Up</a></p>
                <p class="text-center last-line"><a href="forgot-password.php" class="link">Forgot Password?</a></p>
            </div>
    </div>
    
</div>

 <?php include $_SERVER['DOCUMENT_ROOT'] . '/wordpress_projects/mfel/auth/include/footer.php'; ?>
