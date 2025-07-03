<?php error_reporting(0);
include __DIR__ . '/../global.inc.php';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="icon" href="<?= SITE_URL; ?>assets/images/favicon.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= SITE_URL; ?>assets/css/style.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="..." crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="..." crossorigin="anonymous">
    <title><?= SITE_NAME; ?></title>


    <!-- font Raleway -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <!-- font pridi -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Pridi:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    

</head>
<body>
  <div id="loader">
    <div class="spinner"></div>
  </div>

  <script>


  </script>
<div class="main_box">


   <?php include $_SERVER['DOCUMENT_ROOT'] . '/wordpress_projects/mfel/includes/header.php';?>

 <div class="page_content_box row d-flex">

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/wordpress_projects/mfel/includes/sidebar.php';?>
   
    <div class="page_content col-lg-7">
        <div id="page_box_main" class="animate-content">
    