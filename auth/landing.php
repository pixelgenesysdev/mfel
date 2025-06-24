 <?php include $_SERVER['DOCUMENT_ROOT'] . '/wordpress_projects/mfel/auth/include/header.php'; ?>
    
 


 <div id="main-box" style="background-image: url('<?php echo SITE_URL; ?>assets/images/big_bg.png');">

    <div id="left_box" class="hero-image">
            <a href="<?php echo SITE_URL; ?>auth/landing.php">
                <img src="<?php echo SITE_URL; ?>assets/images/icon_big.png" alt="Hero Image" class="img-fluid">
            </a>
        </div>

    <div id="right_box" class="content-box">
            
            <div class="logo-image">
                <a href="<?php echo SITE_URL; ?>"><img src="<?php echo SITE_URL; ?>assets/images/icon_big.png" alt="Hero Image" class="img-fluid"></a>
            </div>
            <div class="form-container">
                    <h2>Let's start my five elements life!</h2>
                    <a href="#" class="btn btn-google">Continue with Google</a>
                    <a href="#" class="btn btn-apple">Continue with Apple</a>
                    <a href="#" class="btn btn-facebook">Continue with Facebook</a>
                    <a href="login.php" class="btn btn-primary">Sign In with Password</a>
                    <p class="text-center last-line">Don't have an account? <a href="signup.php" class="link">Sign Up</a></p>
            </div>
    </div>
    
</div>



    <?php include $_SERVER['DOCUMENT_ROOT'] . '/wordpress_projects/mfel/auth/include/footer.php'; ?>
