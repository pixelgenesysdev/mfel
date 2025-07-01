<?php 
include __DIR__ . '/../includes/head.php';
?>



<div id="page_box">
    <div class="topbar  col-lg-12 d-flex align-items-center justify-content-between mb-3 mt-3">
            <h2 class="page_title">Self Visualizing</h2>
    </div>

    <div class="content col-lg-12 d-flex align-items-center flex-column text-center" >
        <h3>Unleash Your Imagination!</h3>
        <p class="text">
            Ready to see yourself in a new light? Upload your photo and explore<br>
            how you'd look in different age groups, hairstyles, clothing,<br>
            and locations! Whether you're curious to see your future self, travel the world, or<br>
            try on new looks, this feature lets you visualize endless<br>
            possibilities.Let's have some fun with it!
        </p>
        <img src="<?php echo SITE_URL; ?>assets/images/self_vs_button.png" alt="" style="cursor: pointer;" onclick="window.location.href = '<?php echo SITE_URL; ?>pages/self_vs_edit.php';">
    </div>
</div>   

<?php 
include __DIR__ . '/../includes/footer.php';
?>
