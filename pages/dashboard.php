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
            <div class="card_inner" onclick="window.location.href = '<?php echo SITE_URL; ?>pages/goal_details.php';"> 
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
            <div class="card_inner" onclick="window.location.href = '<?php echo SITE_URL; ?>pages/goal_details.php';"> 
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

        



        
    <div id="chart_div" style="width: 100%; height: 500px;"></div>
        
        <!-- Add more cards as needed -->
    </div>



</div>   


    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year',  'profite'],
          ['2013',      150],
          ['2014',      350],
          ['2015',      50],
          ['2016',      650],
          ['2017',     700],
          ['2018',      250],
          ['2019',      1250],
          ['2020',      2150]
        ]);

        var options = {
          title: 'Company Performance',
          hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
          vAxis: {minValue: 0}
        };

        var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }
    </script>

<?php 
include __DIR__ . '/../includes/footer.php';
?>
