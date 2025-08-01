    <header id="header_top" class="animate-header">
        <div class="log_box">
           <a href="<?php echo SITE_URL; ?>/auth/landing.php"> <img src="<?php echo SITE_URL; ?>assets/images/logo.png" alt="MFEL Logo" class="logo"></a>
        </div>
        <div class="right_box">
            <ul class="tab_item">
                <li id="notification" class="item-list"><a href="javascript:void(0)" onclick="notificationopen()"><i class="fa-solid fa-bell"></i></a></li>
                <li id="humberger" class="item-list mobileshow"><a onclick="humbergeropen()" href="javascript:void(0)"><i class="fa-solid fa-bars"></i></a></li>
            </ul>
            
            <div class="notification_box">
                <div class="noti_head d-flex coloumn-direction-column">
                    <h4 class="noti_title">Notifications</h4>
                     <a href="javascript:void(0)">see all</a>
                </div>
                    <ul class="noti_list"> 
                        <li class="noti_item d-flex coloumn-direction-column" style="list-style: none" onclick="javascript:void(0)">
                            <div class="noti_icon"><img src="<?php echo SITE_URL; ?>assets/images/fire_icon.png" alt=""></div>
                            <div class="cont_box" >
                                <h6 class="noti_title">Notification Title</h6>
                                <div class="noti_text">message here....</div>
                                <span class="noti_time">2 mins ago</span>
                            </div>
                        </li>
                        <li class="noti_item d-flex coloumn-direction-column" style="list-style: none" onclick="javascript:void(0)">
                            <div class="noti_icon"><img src="<?php echo SITE_URL; ?>assets/images/metal_icon.png" alt=""></div>
                            <div class="cont_box" >
                                <h6 class="noti_title">Notification Title</h6>
                                <div class="noti_text">message here....</div>
                                <span class="noti_time">2 mins ago</span>
                            </div>
                        </li>
                        <li class="noti_item d-flex coloumn-direction-column" style="list-style: none" onclick="javascript:void(0)">
                            <div class="noti_icon"><img src="<?php echo SITE_URL; ?>assets/images/water_icon.png" alt=""></div>
                            <div class="cont_box" >
                                <h6 class="noti_title">Notification Title</h6>
                                <div class="noti_text">message here....</div>
                                <span class="noti_time">2 mins ago</span>
                            </div>
                        </li>
                        <li class="noti_item d-flex coloumn-direction-column" style="list-style: none" onclick="javascript:void(0)">
                            <div class="noti_icon"><img src="<?php echo SITE_URL; ?>assets/images/wood_icon.png" alt=""></div>
                            <div class="cont_box" >
                                <h6 class="noti_title">Notification Title</h6>
                                <div class="noti_text">message here....</div>
                                <span class="noti_time">2 mins ago</span>
                            </div>
                        </li>
                        <li class="noti_item d-flex coloumn-direction-column" style="list-style: none" onclick="javascript:void(0)">
                            <div class="noti_icon"><img src="<?php echo SITE_URL; ?>assets/images/fire_icon.png" alt=""></div>
                            <div class="cont_box" >
                                <h6 class="noti_title">Notification Title</h6>
                                <div class="noti_text">message here....</div>
                                <span class="noti_time">2 mins ago</span>
                            </div>
                        </li>
                        

                </ul>
            </div>
            
            
            <div class="user_box mobilehide">
                <img src="<?php echo SITE_URL; ?>assets/images/user_defaul_image.png" alt="User Profile" class="user_profile">
                
                <div class="dropdown">
                    <button class="dropbtn">
                        <span class="user_name">Jakob Botosh </span><i class="fa fa-angle-down"></i>
                    </button>
                    <div class="dropdown-content">
                        <a href="<?php echo SITE_URL; ?>/pages/my_profile.php">Profile</a>
                        <a href="javascript:void(0)" onclick="ShowLogoutSuccessPopup()">Logout</a>
                    </div>
                </div>
            </div>



          
        </div>
    </header>

<div class="mobilemenu" style="   transition: 0.5s; transform: translateX(100%);background-image: url('<?php echo SITE_URL; ?>assets/images/big_bg.png');">
                <div class="closebuttonhumberger">
                    <i class="fa-solid fa-xmark" onclick="humbergerclose()" style="cursor: pointer;"></i>
                </div>


                <ul class="sidebar_item">

                    <div class="user_box">
                        <img src="<?php echo SITE_URL; ?>assets/images/user_defaul_image.png" alt="User Profile" class="user_profile">
                        
                        <div class="dropdown">
                            <a class="dropbtn" href="<?php echo SITE_URL; ?>pages/my_profile.php" >
                                <span class="user_name">Jakob Botosh</span>
                            </a>
                            
                        </div>
                    </div>
                    <li class="item-list" >
                        <a href="<?php echo SITE_URL; ?>pages/dashboard.php">
                            <img src="<?php echo SITE_URL; ?>assets/images/home_icon_sidebar.png" class="icon" alt="Home"> Home
                        </a>
                    </li>
                    <li class="item-list">
                        <a href="<?php echo SITE_URL; ?>pages/task.php">
                            <img src="<?php echo SITE_URL; ?>assets/images/tasks_icon_sidebar.png" class="icon" alt="Task"> Task
                        </a>
                    </li>
                    <li class="item-list">
                        <a href="<?php echo SITE_URL; ?>pages/chat_bot.php">
                            <img src="<?php echo SITE_URL; ?>assets/images/chat_bot_icon_sidebar.png" class="icon" alt="Chat Bot"> Chat Bot
                        </a>
                    </li>
                    <li class="item-list">
                        <a href="<?php echo SITE_URL; ?>pages/goals.php">
                            <img src="<?php echo SITE_URL; ?>assets/images/goals_icon_sidebar.png" class="icon" alt="Goals"> Goals
                        </a>
                    </li>
                    <li class="item-list">
                        <a href="<?php echo SITE_URL; ?>pages/media.php">
                            <img src="<?php echo SITE_URL; ?>assets/images/media_icon_sidebar.png" class="icon" alt="Media"> Media
                        </a>
                    </li>
                    <li class="item-list">
                        <a href="<?php echo SITE_URL; ?>pages/self_vs.php">
                            <img src="<?php echo SITE_URL; ?>assets/images/self_icon_sidebar.png" class="icon" alt="Self VS"> Self VS
                        </a>
                    </li>
                    <li class="item-list">
                        <a href="<?php echo SITE_URL; ?>pages/subscription_logs.php">
                            <img src="<?php echo SITE_URL; ?>assets/images/subscription_icon_sidebar.png" class="icon" alt="Subscription Logs"> Subscription Logs
                        </a>
                    </li>
                    <li class="item-list">
                        <a href="<?php echo SITE_URL; ?>pages/privacy_policy.php">
                            <img src="<?php echo SITE_URL; ?>assets/images/privacy_icon_sidebar.png" class="icon" alt="Privacy Policy"> Privacy Policy
                        </a>
                    </li>
                    <li class="item-list">
                        <a href="<?php echo SITE_URL; ?>pages/terms_and_conditions.php">
                            <img src="<?php echo SITE_URL; ?>assets/images/terms_icon_sidebar.png" class="icon" alt="Terms & Conditions"> Terms & Conditions
                        </a>
                    </li>
                    <li class="item-list">
                        <a href="<?php echo SITE_URL; ?>pages/about_us.php">
                            <img src="<?php echo SITE_URL; ?>assets/images/about_icon_sidebar.png" class="icon" alt="About Us"> About Us
                        </a>
                    </li>
                    <li class="item-list">
                        <a href="javascript:void(0)" onclick="ShowLogoutSuccessPopup()">
                            <img src="<?php echo SITE_URL; ?>assets/images/logout_icon_sidebar.png" class="icon" alt="Logout"> Logout
                        </a>
                    </li>

                </ul>
    </div>


<script>
    function humbergeropen() {
        let humberger = document.getElementById("humberger");
        let menu = document.getElementsByClassName("mobilemenu")[0];
        menu.classList.toggle("active");
        menu.style.transform = "translateX(0%)";
        console.log(menu);  

    }
    function humbergerclose() {
        let menu = document.getElementsByClassName("mobilemenu")[0];
        menu.classList.remove("active");
        menu.style.transform = "translateX(100%)";
    }


    function notificationopen() {
        let humberger = document.getElementById("notification");
        let menu = document.getElementsByClassName("notification_box")[0];
        menu.classList.toggle("active");

        if (menu.classList.contains("active")) {
            menu.style.display = "block";
            menu.style.opacity = "1";
            return;
        } else {
            menu.style.display = "none";
            menu.style.opacity = "0";
        }
        console.log(menu);

    }

</script>


<style>
    .metal.card .card_inner{
        background-image: url(<?php echo SITE_URL; ?>assets/images/metal_card_bg.png);
    }
     .fire.card .card_inner{
        background-image: url(<?php echo SITE_URL; ?>assets/images/fire_card_bg.png);
    }
     .wood.card .card_inner{
        background-image: url(<?php echo SITE_URL; ?>assets/images/wood_card_bg.png);
    }
     .water.card .card_inner{
        background-image: url(<?php echo SITE_URL; ?>assets/images/water_card_bg.png);
    }


</style>

