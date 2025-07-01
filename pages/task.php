

<?php 
include __DIR__ . '/../includes/head.php';
?>

<link rel="stylesheet" href="<?php echo SITE_URL; ?>assets/css/tasks.css">

<div id="page_box">
    
    <div class ="content_box_tasks short_detail">
        <div class="tab tasks_tab">
        <button class="tablinks daily" onclick="openTab(event, 'Tab1')" id="defaultOpen" style="background-image: url('<?php echo SITE_URL; ?>assets/images/button_bg.png');">Daily</button>
        <button class="tablinks oneTime" onclick="openTab(event, 'Tab2')" style="background-image: url('<?php echo SITE_URL; ?>assets/images/button_bg.png');">One Time</button>
        </div>

        <div id="Tab1" class="tabcontent task_tab">
            <div class="task_box">
                <ul class="task-list">
                    <li class="task-item">
                        <div class="item_inner" onclick="window.location.href = '<?php echo SITE_URL; ?>pages/task_details.php';">

                            <div class="count">
                                <span class="task-count">1</span>
                                <span class="task-label">Task</span>
                            </div>
                            <div class="task-details">
                                <h3 class="task-title">Fire</h3>
                                <p class="task-description">This is a brief description of the task.</p>
                                <div class="progress">
                                    <progress  class="progressBar" value="50" max="100"></progress>
                                    <span class="progress-label">50%</span>
                                </div>
                            </div>
                            <div class="task-info">
                                <img src="<?php echo SITE_URL; ?>assets/images/fire_icon.png" alt="Task Icon" class="task-icon">
                                <p class="status">Incomplete</p>
                            </div>
                        </div>
                    </li>
                    <li class="task-item">
                        <div class="item_inner" onclick="window.location.href = '<?php echo SITE_URL; ?>pages/task_details.php';">
                            <div class="count">
                                <span class="task-count">2</span>
                                <span class="task-label">Task</span>
                            </div>
                            <div class="task-details">
                                <h3 class="task-title">Water</h3>
                                <p class="task-description">This is a brief description of the task.</p>
                                <div class="progress">
                                    <progress  class="progressBar" value="30" max="100"></progress>
                                    <span class="progress-label">30%</span>
                                </div>
                            </div>
                            <div class="task-info">
                                <img src="<?php echo SITE_URL; ?>assets/images/water_icon.png" alt="Task Icon" class="task-icon">
                                <p class="status">Incomplete</p>
                            </div>
                        </div>   
                    </li>
                    <li class="task-item">
                        <div class="item_inner" onclick="window.location.href = '<?php echo SITE_URL; ?>pages/task_details.php';">
                            <div class="count">
                                <span class="task-count">3</span>
                                <span class="task-label">Task</span>
                            </div>
                            <div class="task-details">  
                                <h3 class="task-title">Earth</h3>
                                <p class="task-description">This is a brief description of the task.</p>
                                <div class="progress">
                                    <progress class="progressBar" value="80" max="100"></progress>
                                    <span class="progress-label">80%</span>
                                </div>
                            </div>    
                            <div class="task-info">
                                <img src="<?php echo SITE_URL; ?>assets/images/earth_icon.png" alt="Task Icon" class="task-icon">
                                <p class="status">Incomplete</p>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>


        </div>

        <div id="Tab2" class="tabcontent task_tab">
            <div class="task_box">
                <ul class="task-list">
            
                    <li class="task-item">
                        <div class="item_inner" onclick="window.location.href = '<?php echo SITE_URL; ?>pages/task_details.php';">
                            <div class="count">
                                <span class="task-count">1</span>
                                <span class="task-label">Task</span>
                            </div>
                            <div class="task-details">
                                <h3 class="task-title">Water</h3>
                                <p class="task-description">This is a brief description of the task.</p>
                                <div class="progress">
                                    <progress  class="progressBar" value="30" max="100"></progress>
                                    <span class="progress-label">30%</span>
                                </div>
                            </div>
                            <div class="task-info">
                                <img src="<?php echo SITE_URL; ?>assets/images/water_icon.png" alt="Task Icon" class="task-icon">
                                <p class="status">Incomplete</p>
                            </div>
                        </div>   
                    </li>
                    <li class="task-item">
                        <div class="item_inner" onclick="window.location.href = '<?php echo SITE_URL; ?>pages/task_details.php';">
                            <div class="count">
                                <span class="task-count">2</span>
                                <span class="task-label">Task</span>
                            </div>
                            <div class="task-details">  
                                <h3 class="task-title">Earth</h3>
                                <p class="task-description">This is a brief description of the task.</p>
                                <div class="progress">
                                    <progress class="progressBar" value="80" max="100"></progress>
                                    <span class="progress-label">80%</span>
                                </div>
                            </div>    
                            <div class="task-info">
                                <img src="<?php echo SITE_URL; ?>assets/images/earth_icon.png" alt="Task Icon" class="task-icon">
                                <p class="status">Incomplete</p>
                            </div>
                        </div>   
                    </li>
                    <li class="task-item">
                        <div class="item_inner" onclick="window.location.href = '<?php echo SITE_URL; ?>pages/task_details.php';">
                            <div class="count">
                                <span class="task-count">3</span>
                                <span class="task-label">Task</span>
                            </div>
                            <div class="task-details">
                                <h3 class="task-title">Fire</h3>
                                <p class="task-description">This is a brief description of the task.</p>
                                <div class="progress">
                                    <progress  class="progressBar" value="50" max="100"></progress>
                                    <span class="progress-label">50%</span>
                                </div>
                            </div>
                            <div class="task-info">
                                <img src="<?php echo SITE_URL; ?>assets/images/fire_icon.png" alt="Task Icon" class="task-icon">
                                <p class="status">Incomplete</p>
                            </div>
                        </div>
                    </li>

                </ul>
            </div>


        </div>


    </div>


</div>

<script>


        // Function to animate the progress bar on page load
            window.onload = function() {
                let progressBars = document.querySelectorAll('.progressBar'); // Select all progress bars

                progressBars.forEach(function(progressBar) {
                    let label = progressBar.nextElementSibling; // Get the label next to the progress bar
                    let targetValue = progressBar.value; // Get the target value from the progress bar
                    let value = 0;

                    // Use an interval to animate the progress bar from 0 to target value
                    let interval = setInterval(function() {
                        value++;
                        progressBar.value = value;
                        label.textContent = value + "%";

                        if (value >= targetValue) {
                            clearInterval(interval); // Stop when the progress reaches the target value
                        }
                    }, 30);  // Adjust this to make the animation faster or slower
                });
            };




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

</script>




<?php 
include __DIR__ . '/../includes/footer.php';
?>









