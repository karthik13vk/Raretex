<?php
// if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip'))
    // ob_start('ob_gzhandler');
$title = isset($title) ? $title : '';
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title; ?></title>

    <link rel="icon" href="assets/images/new/favicon.png" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Style CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />    
    <link href="assets/css/style-new.css" rel="stylesheet" />

    <!-- Responsive CSS -->
    <link href="assets/css/responsive.css" rel="stylesheet" />

    <!-- fontawesome CSS -->
    <link href="assets/css/fontawesome-5.min.css" rel="stylesheet" />


    <!-- Animate CSS -->
    <link href="assets/css/aos.css" rel="stylesheet">

    <!-- fancyBox helpers -->
    <link href="assets/css/fancybox.css" rel="stylesheet" />
</head>