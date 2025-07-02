<?php 
include __DIR__ . '/../includes/head.php';
?>



<style>

        .hidden{
            display: none;
        }

        .e-feilds input {
            border: none ;
            width: 100%;
            outline: none ;

        }

        .e-feilds {
            background: transparent;
            width: 100%;
            padding: 11px 35px 7px 3px;
            font-size: 16px;
            font-family: 'Raleway';
            margin: 0px 0px 15px;
            color: #8A8A8A;
            border-bottom: 1px solid #8a8a8a2b !important;
        }

        .info-item {
            margin: 10px 0px;
        }

        .profile-info {
            padding-top: 3rem;
        }
        .profile-info {
            display: flex;
            flex-wrap: wrap;
        }

        .profile-info .info-item {
            width: calc(100% / 2);
            padding: 0px 15px;
        }

        .profile-info .button-item {
            width: 100%;
            padding: 0px 15px;
        }
        .password_fileds {
            display: flex;
            flex-wrap: wrap;
        }

        .password_fileds .ChangePasswordfleids {
            width: calc(100%/2);
            padding: 10px 10px;
            position: relative;
        }

        .password_fileds .ChangePasswordfleids span.eyeicon {
            position: absolute;
            right: 25px;
        }


            
</style>


<div id="page_box">
    <div class="topbar  col-lg-12 d-flex align-items-center justify-content-between mb-3 mt-3">
            <h2 class="page_title">My Profile</h2>
    </div>



            <div class="profile-container" id="profile_box">
               <div class="profile-pic" id="profile-pic">
                    <img id="profile-img-preview" src="<?php echo SITE_URL; ?>assets/images/default_my_profile.png" class="img-fluid" alt="">
                    <input type="file" id="profile-img-input" class="editable hidden" accept="image/*" onchange="previewImage(event)">
                </div>
                <div class="profile-info">
                    <div class="info-item">
                        <span>User Name</span>
                        <div class="e-feilds">    
                            <span id="display_value" class="highlight">Jaxon Maverick</span>
                            <input type="text" id="username-edit" class="editable hidden" value="Jaxonsssadsad Maverick">
                        </div>   
                    </div>
                    <div class="info-item">
                        <span>Email</span>
                        <div class="e-feilds">
                            <span id="email-display" class="highlight">JaxonMaverick@gmail.com</span>
                            <input type="email" id="email-edit" class="editable hidden" value="JaxonMaverick@gmail.com">
                        </div>
                    </div>
                    <div class="info-item">
                        <span>Phone Number</span>
                        <div class="e-feilds">
                            <span id="phone-display" class="highlight">012345674568</span>
                            <input type="tel" id="phone-edit" class="editable hidden" value="012345674568">
                        </div>
                    </div>
                     <div class="info-item">
                        <span>Lucky Element</span>
                        <div class="e-feilds">
                            <span id="lucky-display" class="highlight">Wood</span>
                            <input type="text" id="editfeild" class="editable hidden" value="Wood">
                        </div>
                    </div>
                    <div class="info-item">
                        <span>Animal Year</span>
                        <div class="e-feilds">
                            <span id="animal-display" class="highlight">Dragon</span>
                            <input type="text" id="animal-edit" class="editable hidden" value="Dragon">
                        </div>
                    </div>

                    

                    <div class="button-item">
                            <button class="edit-btn button btn-primary" id="editbutton" onclick="editbutton()">Edit Profile</button>
                            <button class="edit-btn button btn-primary" id="ChangePassword" onclick="ChangePassword()">Change Password</button>   
                            <button class="edit-btn button btn-primary hidden" id="updatebutton" onclick="updatepopup()">Update Profile</button>     
                    </div>
                </div>

              
            </div>


            <div id="forget_password" class="hidden">

                <div class="password_fileds">
                    <div class="ChangePasswordfleids">
                        <span>Current Password</span>
                        <div class="e-feilds password-wrapper">
                            <input type="password" id="current-password" class="editable" placeholder="Enter current password">
                            <span class="eyeicon">
                                <i id="eye-current" onclick="showPassword('current-password', 'eye-current')" class="fa-regular fa-eye"></i>
                            </span>
                        </div>
                    </div>

                    <div class="ChangePasswordfleids">
                        <span>New Password</span>
                        <div class="e-feilds password-wrapper">
                            <input type="password" id="new-password" class="editable" placeholder="Enter new password">
                            <span class="eyeicon">
                                <i id="eye-new" onclick="showPassword('new-password', 'eye-new')" class="fa-regular fa-eye"></i>
                            </span>
                        </div>
                    </div>

                    <div class="ChangePasswordfleids">
                        <span>Confirm Password</span>
                        <div class="e-feilds password-wrapper">
                            <input type="password" id="confirm-password" class="editable" placeholder="Enter confirm password">
                            <span class="eyeicon">
                                <i id="eye-confirm" onclick="showPassword('confirm-password', 'eye-confirm')" class="fa-regular fa-eye"></i>
                            </span>
                        </div>
                    </div>
                </div>


                <div class="button-item">
                    <button class="edit-btn button btn-primary" id="ChangePassword" onclick="ChangePasswordpopup()">Update Password</button>   
                </div>

            </div>
</div>


<script>



    function editbutton() {
        const elements = document.getElementsByClassName("editable");
        const showfields = document.getElementsByClassName("highlight");   
        for (let i = 0; i < elements.length; i++) {
            elements[i].classList.remove("hidden");
        }
        for (let i = 0; i < showfields.length; i++) {
            showfields[i].classList.add("hidden");
        }
        document.getElementById("editbutton").classList.add("hidden");
        document.getElementById("ChangePassword").classList.add("hidden");
        document.getElementById("updatebutton").classList.remove("hidden");
        document.getElementsByClassName("page_title")[0].innerHTML = "Edit Profile";   
    }


    // function updateprofile() {
    //     const elements = document.getElementsByClassName("editable");
    //     const showfields = document.getElementsByClassName("highlight");   
    //     for (let i = 0; i < elements.length; i++) {
    //         elements[i].classList.add("hidden");
    //     }
    //     for (let i = 0; i < showfields.length; i++) {
    //         showfields[i].classList.remove("hidden");
    //     }
    //     document.getElementById("editbutton").classList.remove("hidden");
    //     document.getElementById("updatebutton").classList.add("hidden");
    //     document.getElementsByClassName("page_title")[0].innerHTML = "My Profile";
    // }

    function updatepopup() {
        const popup = document.getElementById('success-popup');
         // Change the popup message (optional)
        document.querySelector('#success-popup .popup-message').textContent = "Your profile has been updated successfully!";
        popup.classList.add('active');

        document.getElementById('success-ok-btn').addEventListener('click', function () {
            popup.classList.remove('active');
            // Optional: redirect or do anything after OK
            window.location.href = "my_profile.php";
            // updateprofile();
        });
    }

    function showPassword(fieldId, iconId) {
        const input = document.getElementById(fieldId);
        const icon = document.getElementById(iconId);

            if (input.type === "password") {
                input.type = "text";
                icon.classList.remove("fa-eye");
                icon.classList.add("fa-eye-slash");
            } else {
                input.type = "password";
                icon.classList.remove("fa-eye-slash");
                icon.classList.add("fa-eye");
            }
    }

    function ChangePassword() {
        document.getElementsByClassName("page_title")[0].innerHTML = "Change Password"; 
        document.getElementsByClassName("profile-container")[0].classList.add("hidden");
        document.getElementById("forget_password").style.display = "block";
        

    }
    
    function ChangePasswordpopup() {
        const popup = document.getElementById('success-popup');
         // Change the popup message (optional)
        document.querySelector('#success-popup .popup-message').textContent = "Your password has been updated successfully.";
        popup.classList.add('active');

        document.getElementById('success-ok-btn').addEventListener('click', function () {
            popup.classList.remove('active');
            // Optional: redirect or do anything after OK
            window.location.href = "my_profile.php";
        });
    }


</script>

    <?php 
include __DIR__ . '/../includes/footer.php';
?>