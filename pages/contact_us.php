<?php 
include __DIR__ . '/../includes/head.php';
?>

<div id="page_box">
    <div class="tab_content_box">
        <h2 class="page_title">Contact Us</h2>
        <form id="contact_form" method="post"  class="globals_form" action="<?php echo SITE_URL; ?>/pages/contact_us.php">
            
        <div class="row">
                <div class="form_group col-lg-6">
                    <label for="name">Name:</label>
                    <input type="text" class="field" id="name" name="name" required>
                </div>
                <div class="form_group col-lg-6">
                    <label for="email">Email:</label>
                    <input type="email" class="field" id="email" name="email" required>
                </div>
                <div class="form_group col-lg-6">
                    <label for="subject">Subject:</label>
                    <input type="text" class="field" id="subject" name="subject" required>
                </div>
                <div class="form_group col-lg-6">
                    <label for="number">Number:</label>
                    <input type="text" class="field" id="number" name="number" required>
                </div>
                <div class="form_group col-lg-12">
                    <label for="message">Message:</label>
                    <textarea class="field" id="message" name="message" required></textarea>
                </div>
                <div class="form_group col-lg-12">
                    <input type="submit" value="Submit" onclick="" >
                </div>
            </div>
        </form>
    </div>   
</div>   


<script>
    document.getElementById('contact_form').addEventListener('submit', function(event) {
        event.preventDefault(); // Prevent the default form submission
        ShowContactFormPopup(); // Call the function to show the success message
        this.reset(); // Reset the form fields
    });
</script>


<?php 
include __DIR__ . '/../includes/footer.php';
?>
