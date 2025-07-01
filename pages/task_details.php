

<?php 
include __DIR__ . '/../includes/head.php';
?>

<link rel="stylesheet" href="<?php echo SITE_URL; ?>assets/css/tasks.css">
<div id="page_box">
     <h2 class="page_title">Task Details</h2>
     
    <div class ="content_box_tasks long_detail">
       
        <div id="Tab1" class="tabcontent task_tab">
            <div class="task_box">
                <ul class="task-list">
                    <li class="task-item">
                        <div class="item_inner">
                            <div class="count">
                                <span class="task-count">1</span>
                                <span class="task-label">Task</span>
                            </div>
                            <div class="task-details">
                                <h3 class="task-title">Fire</h3>
                                <H4 class="task-name">Structure and clarity</H4>
                                <p class="task-description">This is a brief description of the task.This is a brief description of the task.This is a brief description of the task.This is a brief description of the task.This is a brief description of the task.This is a brief description of the task.This is a brief description of the task.This is a brief description of the task.This is a brief description of the task.This is a brief description of the task.This is a brief description of the task.This is a brief description of the task.</p>
                                <div class="progress">
                                    <progress  class="progressBar" value="50" max="100"></progress>
                                    <span class="progress-label">50%</span>
                                </div>
                                <button class="mark-complete btn btn-primary">Mark as Complete</button>
                            </div>
                            <div class="task-info">
                                <img src="<?php echo SITE_URL; ?>assets/images/fire_icon.png" alt="Task Icon" class="task-icon">
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



</script>



<?php 
include __DIR__ . '/../includes/footer.php';
?>









