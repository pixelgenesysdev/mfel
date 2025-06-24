<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>

<div id="sidebar" class="col-lg-2">
    <nav id="sidebar_left">
        <div class="box">
            <ul class="tab_item">
                <li class="item-list <?php if ($current_page == 'dashboard.php') echo 'active'; ?>">
                    <a href="<?php echo SITE_URL; ?>pages/dashboard.php">
                        <img src="<?php echo SITE_URL; ?>assets/images/home_icon_sidebar.png" class="icon" alt="Home"> Home
                    </a>
                </li>
                <li class="item-list <?php if ($current_page == 'task.php') echo 'active'; ?>">
                    <a href="<?php echo SITE_URL; ?>pages/task.php">
                        <img src="<?php echo SITE_URL; ?>assets/images/tasks_icon_sidebar.png" class="icon" alt="Task"> Task
                    </a>
                </li>
                <li class="item-list <?php if ($current_page == 'chat_bot.php') echo 'active'; ?>">
                    <a href="<?php echo SITE_URL; ?>pages/chat_bot.php">
                        <img src="<?php echo SITE_URL; ?>assets/images/chat_bot_icon_sidebar.png" class="icon" alt="Chat Bot"> Chat Bot
                    </a>
                </li>
                <li class="item-list <?php if ($current_page == 'goals.php') echo 'active'; ?>">
                    <a href="<?php echo SITE_URL; ?>pages/goals.php">
                        <img src="<?php echo SITE_URL; ?>assets/images/goals_icon_sidebar.png" class="icon" alt="Goals"> Goals
                    </a>
                </li>
                <li class="item-list <?php if ($current_page == 'self_vs.php') echo 'active'; ?>">
                    <a href="<?php echo SITE_URL; ?>pages/self_vs.php">
                        <img src="<?php echo SITE_URL; ?>assets/images/self_icon_sidebar.png" class="icon" alt="Self VS"> Self VS
                    </a>
                </li>
                <li class="item-list <?php if ($current_page == 'subscription_logs.php') echo 'active'; ?>">
                    <a href="<?php echo SITE_URL; ?>pages/subscription_logs.php">
                        <img src="<?php echo SITE_URL; ?>assets/images/subscription_icon_sidebar.png" class="icon" alt="Subscription Logs"> Subscription Logs
                    </a>
                </li>
                <li class="item-list <?php if ($current_page == 'contact_us.php') echo 'active'; ?>">
                    <a href="<?php echo SITE_URL; ?>pages/contact_us.php">
                        <img src="<?php echo SITE_URL; ?>assets/images/contact_icon_sidebar.png" class="icon" alt="Contact Us"> Contact Us
                    </a>
                </li>
                <li class="item-list <?php if ($current_page == 'privacy_policy.php') echo 'active'; ?>">
                    <a href="<?php echo SITE_URL; ?>pages/privacy_policy.php">
                        <img src="<?php echo SITE_URL; ?>assets/images/privacy_icon_sidebar.png" class="icon" alt="Privacy Policy"> Privacy Policy
                    </a>
                </li>
                <li class="item-list <?php if ($current_page == 'terms_and_conditions.php') echo 'active'; ?>">
                    <a href="<?php echo SITE_URL; ?>pages/terms_and_conditions.php">
                        <img src="<?php echo SITE_URL; ?>assets/images/terms_icon_sidebar.png" class="icon" alt="Terms & Conditions"> Terms & Conditions
                    </a>
                </li>
                <li class="item-list <?php if ($current_page == 'about_us.php') echo 'active'; ?>">
                    <a href="<?php echo SITE_URL; ?>pages/about_us.php">
                        <img src="<?php echo SITE_URL; ?>assets/images/about_icon_sidebar.png" class="icon" alt="About Us"> About Us
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</div>
