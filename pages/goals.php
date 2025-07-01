<?php 
include __DIR__ . '/../includes/head.php';
?>

<div id="page_box" class="no_bg">

     
    <div class="cards goals_management row_box row d-flex flex-wrap ">
        <div class="topbar  col-md-12 row d-flex align-items-center justify-content-between mb-3 mt-3">
            <h2 class="page_title">Goals</h2>
            <button class=" btn btn-primary btn-sm" type="button" id="view" onclick="window.location.href = '<?php echo SITE_URL; ?>pages/add_goals.php';" >Add Goals</button>
        </div>
        <div class="card fill fire col-lg-6">
            <div class="card_inner" style="background-image: url('<?php echo SITE_URL; ?>assets/images/fire_card_bg.png');" onclick="window.location.href = '<?php echo SITE_URL; ?>pages/goal_details.php';"> 
                <div class="card-header">
                <div class="leftop">
                        <div class="icon"><img src="<?php echo SITE_URL; ?>assets/images/fire_icon_white.png" alt=""></div>
                        <h3>Balance my fire element</h3>
                    </div>
                    <div class="rightop">
                        <i class="fa-solid fa-ellipsis"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="sideleft">
                        <p><strong>Start Date:</strong> 1 jan, 2025</p>
                        <p><strong>Target Date:</strong> 30 jan, 2025</p>
                    </div>
                    <div class="sideright">
                        <div class="icon_box">
                            <i class="fas fa-check"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card fill water col-lg-6">
            <div class="card_inner" style="background-image: url('<?php echo SITE_URL; ?>assets/images/water_card_bg.png');" onclick="window.location.href = '<?php echo SITE_URL; ?>pages/goal_details.php';"> 
                <div class="card-header">
                <div class="leftop">
                        <div class="icon"><img src="<?php echo SITE_URL; ?>assets/images/water_icon_white.png" alt=""></div>
                        <h3>Balance my water element</h3>
                    </div>
                    <div class="rightop">
                        <i class="fa-solid fa-ellipsis"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="sideleft">
                        <p><strong>Start Date:</strong> 1 jan, 2025</p>
                        <p><strong>Target Date:</strong> 30 jan, 2025</p>
                    </div>
                    <div class="sideright">
                        <div class="icon_box">
                            <i class="fas fa-check"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card fill metal col-lg-6">
            <div class="card_inner" style="background-image: url('<?php echo SITE_URL; ?>assets/images/metal_card_bg.png');" onclick="window.location.href = '<?php echo SITE_URL; ?>pages/goal_details.php';"> 
                <div class="card-header">
                <div class="leftop">
                        <div class="icon"><img src="<?php echo SITE_URL; ?>assets/images/metal_icon_white.png" alt=""></div>
                        <h3>Balance my metal element</h3>
                    </div>
                    <div class="rightop">
                        <i class="fa-solid fa-ellipsis"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="sideleft">
                        <p><strong>Start Date:</strong> 1 jan, 2025</p>
                        <p><strong>Target Date:</strong> 30 jan, 2025</p>
                    </div>
                    <div class="sideright">
                        <div class="icon_box">
                            <i class="fas fa-check"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card fill wood col-lg-6">
            <div class="card_inner" style="background-image: url('<?php echo SITE_URL; ?>assets/images/wood_card_bg.png');" onclick="window.location.href = '<?php echo SITE_URL; ?>pages/goal_details.php';"> 
                <div class="card-header">
                <div class="leftop">
                        <div class="icon"><img src="<?php echo SITE_URL; ?>assets/images/wood_icon_white.png" alt=""></div>
                        <h3>Balance my wood element</h3>
                    </div>
                    <div class="rightop">
                        <i class="fa-solid fa-ellipsis"></i>
                    </div>
                </div>
                <div class="card-body">
                    <div class="sideleft">
                        <p><strong>Start Date:</strong> 1 jan, 2025</p>
                        <p><strong>Target Date:</strong> 30 jan, 2025</p>
                    </div>
                    <div class="sideright">
                        <div class="icon_box">
                            <i class="fas fa-check"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        




        
        <!-- Add more cards as needed -->
    </div>



</div>   

<?php 
include __DIR__ . '/../includes/footer.php';
?>
