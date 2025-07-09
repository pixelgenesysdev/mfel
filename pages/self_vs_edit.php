<?php 
include __DIR__ . '/../includes/head.php';
?>



<div id="page_box">
    <div class="topbar  col-lg-12 d-flex align-items-center justify-content-between mb-3 mt-3">
            <h2 class="page_title">Self Visualizing</h2>
            <!-- Upload Button -->
             <div class="buttons_box">
                <button class="btn btn-primary btn-sm" type="button" id="imageupload_but" onclick="imageupload()">Upload Photo</button>
                <button class="btn btn-primary btn-sm" type="button" id="imagedownload_but" onclick="downloadImage()"><i class="fa-solid fa-download"></i></button>
                <input type="file" id="imageUploadInput" accept="image/*" style="display:none" onchange="previewImage(event)">
            </div>
    </div>

    <div class="content col-lg-12 d-flex flex-wrap" >
        <div class="imagebox col-lg-6">
             <div class="g-bg">
                <img src="<?php echo SITE_URL; ?>assets/images/self_vs_edit.png" id="image_place" onclick="imageupload()" alt="" style="cursor: pointer;" >
            </div>
        </div>
        <div class="contentbox col-lg-6">
            <div class="tabedits col-lg-12 d-flex" >
                <div class="tab col-lg-5">
                    <div class="g-bg">
                        <button class="tablinks active" onclick="openTab(event, 'Tab1')" id="defaultOpen" style="background-image: url('<?php echo SITE_URL; ?>assets/images/button_bg.png');">Persona</button>
                        <button class="tablinks" onclick="openTab(event, 'Tab2')" style="background-image: url('<?php echo SITE_URL; ?>assets/images/button_bg.png');">Location</button>
                        <button class="tablinks" onclick="openTab(event, 'Tab3')" style="background-image: url('<?php echo SITE_URL; ?>assets/images/button_bg.png');">Hairstyle</button>
                        <button class="tablinks" onclick="openTab(event, 'Tab4')" style="background-image: url('<?php echo SITE_URL; ?>assets/images/button_bg.png');">Clothing</button>
                        <button class="tablinks" onclick="openTab(event, 'Tab2')" style="background-image: url('<?php echo SITE_URL; ?>assets/images/button_bg.png');">Location</button>
                        <button class="tablinks" onclick="openTab(event, 'Tab3')" style="background-image: url('<?php echo SITE_URL; ?>assets/images/button_bg.png');">Hairstyle</button>
                        <button class="tablinks" onclick="openTab(event, 'Tab4')" style="background-image: url('<?php echo SITE_URL; ?>assets/images/button_bg.png');">Clothing</button>
                        <button class="tablinks" onclick="openTab(event, 'Tab2')" style="background-image: url('<?php echo SITE_URL; ?>assets/images/button_bg.png');">Location</button>
                        <button class="tablinks" onclick="openTab(event, 'Tab3')" style="background-image: url('<?php echo SITE_URL; ?>assets/images/button_bg.png');">Hairstyle</button>
                        <button class="tablinks" onclick="openTab(event, 'Tab4')" style="background-image: url('<?php echo SITE_URL; ?>assets/images/button_bg.png');">Clothing</button>
                        <button class="tablinks" onclick="openTab(event, 'Tab2')" style="background-image: url('<?php echo SITE_URL; ?>assets/images/button_bg.png');">Location</button>
                        <button class="tablinks" onclick="openTab(event, 'Tab3')" style="background-image: url('<?php echo SITE_URL; ?>assets/images/button_bg.png');">Hairstyle</button>
                        <button class="tablinks" onclick="openTab(event, 'Tab4')" style="background-image: url('<?php echo SITE_URL; ?>assets/images/button_bg.png');">Clothing</button>
                        

                        
                    </div>                
                </div>
                <div class="tab_box  col-lg-7">
                    <div class="g-bg">
                        <div id="Tab1" class="tabcontent">
                                <ul class="edits-list col-lg-12 d-flex flex-wrap">
                                     <li class="edit-item col-lg-6">
                                        <div class="item">
                                            <img src="<?php echo SITE_URL; ?>assets/images/media_tab_image.png" alt="edits Thumbnail" class="edits-thumbnail">
                                            <p class="edit-title">Toddler</p>
                                        </div>
                                    </li>
                                     <li class="edit-item col-lg-6">
                                        <div class="item">
                                            <img src="<?php echo SITE_URL; ?>assets/images/media_tab_image.png" alt="edits Thumbnail" class="edits-thumbnail">
                                            <p class="edit-title">Toddler</p>
                                        </div>
                                    </li>
                                     <li class="edit-item col-lg-6">
                                        <div class="item">
                                            <img src="<?php echo SITE_URL; ?>assets/images/media_tab_image.png" alt="edits Thumbnail" class="edits-thumbnail">
                                            <p class="edit-title">Toddler</p>
                                        </div>
                                    </li>
                                     <li class="edit-item col-lg-6">
                                        <div class="item">
                                            <img src="<?php echo SITE_URL; ?>assets/images/media_tab_image.png" alt="edits Thumbnail" class="edits-thumbnail">
                                            <p class="edit-title">Toddler</p>
                                        </div>
                                    </li>
                                     <li class="edit-item col-lg-6">
                                        <div class="item">
                                            <img src="<?php echo SITE_URL; ?>assets/images/media_tab_image.png" alt="edits Thumbnail" class="edits-thumbnail">
                                            <p class="edit-title">Toddler</p>
                                        </div>
                                    </li>
                                     <li class="edit-item col-lg-6">
                                        <div class="item">
                                            <img src="<?php echo SITE_URL; ?>assets/images/media_tab_image.png" alt="edits Thumbnail" class="edits-thumbnail">
                                            <p class="edit-title">Toddler</p>
                                        </div>
                                    </li>

                                </ul>
                        </div>
                        <div id="Tab2" class="tabcontent">
                                <ul class="edits-list col-lg-12 d-flex flex-wrap">
                                    <li class="edit-item col-lg-6">
                                        <div class="item">
                                            <img src="<?php echo SITE_URL; ?>assets/images/media_tab_image.png" alt="edits Thumbnail" class="edits-thumbnail">
                                            <p class="edit-title">Toddlser</p>
                                        </div>
                                    </li>
                                    <li class="edit-item col-lg-6">
                                        <div class="item">
                                            <img src="<?php echo SITE_URL; ?>assets/images/media_tab_image.png" alt="edits Thumbnail" class="edits-thumbnail">
                                            <p class="edit-title">Toddler</p>
                                        </div>
                                    </li>
                                    <li class="edit-item col-lg-6">
                                        <div class="item">
                                            <img src="<?php echo SITE_URL; ?>assets/images/media_tab_image.png" alt="edits Thumbnail" class="edits-thumbnail">
                                            <p class="edit-title">Toddler</p>
                                        </div>
                                    </li>
                                </ul>
                        </div>
                        <div id="Tab3" class="tabcontent">
                                <ul class="edits-list col-lg-12 d-flex flex-wrap">
                                    <li class="edit-item col-lg-6">
                                        <div class="item">
                                            <img src="<?php echo SITE_URL; ?>assets/images/media_tab_image.png" alt="edits Thumbnail" class="edits-thumbnail">
                                            <p class="edit-title">Toddlser</p>
                                        </div>
                                    </li>
                                    <li class="edit-item col-lg-6">
                                        <div class="item">
                                            <img src="<?php echo SITE_URL; ?>assets/images/media_tab_image.png" alt="edits Thumbnail" class="edits-thumbnail">
                                            <p class="edit-title">Toddler</p>
                                        </div>
                                    </li>
                                    <li class="edit-item col-lg-6">
                                        <div class="item">
                                            <img src="<?php echo SITE_URL; ?>assets/images/media_tab_image.png" alt="edits Thumbnail" class="edits-thumbnail">
                                            <p class="edit-title">Toddler</p>
                                        </div>
                                    </li>
                                    <li class="edit-item col-lg-6">
                                        <div class="item">
                                            <img src="<?php echo SITE_URL; ?>assets/images/media_tab_image.png" alt="edits Thumbnail" class="edits-thumbnail">
                                            <p class="edit-title">Toddler</p>
                                        </div>
                                    </li>
                                    <li class="edit-item col-lg-6">
                                        <div class="item">
                                            <img src="<?php echo SITE_URL; ?>assets/images/media_tab_image.png" alt="edits Thumbnail" class="edits-thumbnail">
                                            <p class="edit-title">Toddler</p>
                                        </div>
                                    </li>
                                    <li class="edit-item col-lg-6">
                                        <div class="item">
                                            <img src="<?php echo SITE_URL; ?>assets/images/media_tab_image.png" alt="edits Thumbnail" class="edits-thumbnail">
                                            <p class="edit-title">Toddler</p>
                                        </div>
                                    </li>
                                    <li class="edit-item col-lg-6">
                                        <div class="item">
                                            <img src="<?php echo SITE_URL; ?>assets/images/media_tab_image.png" alt="edits Thumbnail" class="edits-thumbnail">
                                            <p class="edit-title">Toddler</p>
                                        </div>
                                    </li>
                                </ul>
                        </div>
                        <div id="Tab4" class="tabcontent">
                                <ul class="edits-list col-lg-12 d-flex flex-wrap">
                                    <li class="edit-item col-lg-6">
                                        <div class="item">
                                            <img src="<?php echo SITE_URL; ?>assets/images/media_tab_image.png" alt="edits Thumbnail" class="edits-thumbnail">
                                            <p class="edit-title">Toddler</p>
                                        </div>
                                    </li>
                                    <li class="edit-item col-lg-6">
                                        <div class="item">
                                            <img src="<?php echo SITE_URL; ?>assets/images/media_tab_image.png" alt="edits Thumbnail" class="edits-thumbnail">
                                            <p class="edit-title">Toddler</p>
                                        </div>
                                    </li>
                                </ul>
                        </div>
                    </div>    
                 </div>    
            </div>    
        </div>
    </div>
</div>   

<?php 
include __DIR__ . '/../includes/footer.php';
?>



<style>
 

    .imagebox img {
        width: 100%;
        height: 520px;
        border-radius: 20px;
        object-fit: cover;
    }



    .tabcontent img {
        width: 100%;
    }

    .tabcontent ul {
        margin: 0;
        padding: 0;
    }

    .tabcontent li {
        list-style: none;
    }

    .g-bg {
        background: #F8F8F8;
        padding: 15px;
        border-radius: 20px;
        height: 100%;
        margin: 0px 13px;
        display: flex;
        flex-direction: column;
        align-items: center;
        flex-wrap: nowrap;
    }
    .tab button.tablinks {
        padding: 10px 30px;
        font-size: 13px;
        position: relative;
        display: flex;
    }
    .tabcontent  .item {
        margin: 5px 6px 10px;
        gap: 9px;
        display: flex;
        flex-direction: column;
        text-align: center;
    }

    .tabcontent .item p.edit-title {
        margin: 0;
        font-size: 15px !important;
        font-weight: 600;
    }

</style>

<script>
    
    // Function to open a tab

    function openTab(evt, tabName) {
    var i, tabcontent, tablinks;

    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    document.getElementById(tabName).style.display = "block";
    evt.currentTarget.className += " active";
    }

    // By default open Tab1
    document.getElementById("defaultOpen").click();

    
    function imageupload() {
        document.getElementById("imageUploadInput").click();
    }
    function previewImage(event) {
        const reader = new FileReader();

        reader.onload = function(){
            const imageBox = document.getElementById("image_place");
            imageBox.src = reader.result;
            imageBox.classList.add("withImage");
        };
        reader.readAsDataURL(event.target.files[0]);
    }
    function downloadImage() {
        const imageBox = document.getElementById("image_place");
        const imageURL = imageBox.src;

        if (imageURL === "" || imageURL.includes("self_vs_edit.png")) {
            alert("No image uploaded to download.");
            return;
        }

        const link = document.createElement("a");
        link.href = imageURL;
        link.download = "downloaded_image.png"; // Change filename if you want
        document.body.appendChild(link);
        link.click();
        document.body.removeChild(link);
    }
    
</script>