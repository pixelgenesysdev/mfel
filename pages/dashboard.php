<?php 
include __DIR__ . '/../includes/head.php';
?>

<div id="page_box" class="no_bg">


     <div class="health_management row_box col-lg-12 d-flex flex-wrap ">

        <div class="title col-lg-12">Health Metrics</div>
        <div class="cards">
            <div class="health_card ">
                <div class="card_inner"> 
                    <img src="<?php echo SITE_URL; ?>assets/images/stress_card.png" alt="">
                </div>
            </div>
            <div class="health_card ">
                <div class="card_inner"> 
                    <img src="<?php echo SITE_URL; ?>assets/images/happy_card.png" alt="">
                </div>
            </div>
            <div class="health_card ">
                <div class="card_inner"> 
                    <img src="<?php echo SITE_URL; ?>assets/images/energy_card.png" alt="">
                </div>
            </div>
            <div class="health_card ">
                <div class="card_inner"> 
                    <img src="<?php echo SITE_URL; ?>assets/images/sleep_card.png" alt="">
                </div>
            </div>
            <div class="health_card ">
                <div class="card_inner"> 
                    <img src="<?php echo SITE_URL; ?>assets/images/stress_card.png" alt="">
                </div>
            </div>

            <!--  Add more health cards as needed -->
        
        </div>

    </div>


    <div class="cards goals_management row_box col-lg-12 d-flex flex-wrap ">

        <div class="title col-lg-12">Goals Management</div>

        <div class="card  col-lg-6">
            <div class="card_inner"> 
                <div class="card-header">
                <div class="leftop">
                        <div class="icon"><img src="<?php echo SITE_URL; ?>assets/images/fire_icon.png" alt=""></div>
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

        <div class="card  col-lg-6">
            <div class="card_inner"> 
                <div class="card-header">
                <div class="leftop">
                        <div class="icon"><img src="<?php echo SITE_URL; ?>assets/images/fire_icon.png" alt=""></div>
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

        




        
        <!-- Add more cards as needed -->
    </div>



</div>   

<?php 
include __DIR__ . '/../includes/footer.php';
?>
