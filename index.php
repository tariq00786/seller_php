
<?php 

include 'common/head.php';
include 'components/header.php';

// index.php

$request_uri = $_SERVER['REQUEST_URI'];
switch ($request_uri) {
    case '/':
        include 'pages/home.php';
        break;
    case '/features':
        include 'pages/features.php';
        break;
        // submenu items
    case '/features/ads':
        include 'pages/features/ads.php';
        break;
    case '/about':
        include 'pages/about.php';
        break;
    case '/contact':
        include 'pages/contact.php';
        break;
    case '/reviews':
        include 'pages/reviews.php';
        break;
    case '/pricing':
        include 'pages/pricing.php';
        break;
   
}
?>
<?php include 'components/footer.php'; ?>
<?php include 'common/foot.php';   ?> 
