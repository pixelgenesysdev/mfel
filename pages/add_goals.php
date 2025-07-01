<?php 
include __DIR__ . '/../includes/head.php';
?>

<div id="page_box">
    <div class="tab_content_box">
           <div class="topbar  col-lg-12 d-flex align-items-center justify-content-between mb-3 mt-3">
            <h2 class="page_title">Add Goals</h2>
        </div>
        <form id="add_goals_form" class="globals_form" method="post" action="<?php echo SITE_URL; ?>/pages/contact_us.php">
            
            <div class="row">
                <div class="col-lg-6">
                    <div class="form_group">
                        <label for="name">Goal Name:</label>
                        <input type="text" class="field" id="name" name="name" placeholder="Enter Goal Name" required>
                    </div>
                    <div class="form_group">
                        <label for="start_date">Start Date:</label>
                        <input type="date" class="field" id="start_date" placeholder="Select Start Date" name="start_date" required>
                    </div>
                    <div class="form_group">
                        <label for="end_date">End Date:</label>
                        <input type="date" class="field" id="end_date" placeholder="Select End Date" name="end_date" required>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form_group ">
                        <label for="goal_description">Goal Description</label>
                        <textarea class="field" id="goal_description" name="goal_description" placeholder="Enter Goal Description" required></textarea>
                    </div>
                </div>
                <div class="form_group col-lg-12">
                    <input type="submit" value="Submit" onclick="" >
                </div>
            </div>
        </form>
    </div>   
</div>   


<script>
    document.getElementById('add_goals_form').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission
        ShowAddGoalsFormPopup(); // Call the function to show the success message
        this.reset(); // Reset the form fields
    });
</script>


<?php 
include __DIR__ . '/../includes/footer.php';
?>
