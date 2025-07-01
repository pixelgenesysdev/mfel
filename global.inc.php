<?php
define('SITE_NAME', 'MFEL');
define('ADMIN_EMAIL', 'support@mfive.com');

$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$host = $_SERVER['HTTP_HOST'];

// Manually set project folder path
$project_folder = '/wordpress_projects/mfel/';

$base_url = $protocol . $host . $project_folder;
define('SITE_URL', $base_url);

?>
