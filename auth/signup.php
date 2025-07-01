 <?php include $_SERVER['DOCUMENT_ROOT'] . '/wordpress_projects/mfel/auth/include/header.php'; ?>


  <div id="main-box" style="background-image: url('<?php echo SITE_URL; ?>assets/images/big_bg.png');">

        <div id="left_box" class="hero-image">
            <a href="<?php echo SITE_URL; ?>auth/landing.php">
                <img src="<?php echo SITE_URL; ?>assets/images/icon_big.png" alt="Hero Image" class="img-fluid">
            </a>
        </div>
        <div id="right_box" class="content-box">

           
            <div class="form-container">
                <h2>Create New Account!</h2>
                <!-- ✅ START: Form -->
                <!-- <form action="" method="POST"> -->
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="name" id="username" placeholder="Enter username">
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" placeholder="Enter your email address">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Enter your password">
                    </div>
                    <div class="form-group">
                        <label for="confirm-password">Confirm Password</label>
                        <input type="password" name="confirm_password" id="confirm-password" placeholder="Enter confirm password">
                    </div>
                    <button class="btn">Sign Up</button>
                    <p class="text-center last-line">Already have an account? <a href="login.php" class="link">Sign In</a></p>
                <!-- </form> -->
                 <!-- ✅ END: Form -->
           
            </div>

    
    </div>

    
<?php include $_SERVER['DOCUMENT_ROOT'] . '/wordpress_projects/mfel/auth/include/footer.php'; ?>
