
<?php 
include("core/init.php"); 

 ?>
 <!DOCTYPE html>
<html class="no-js sidebar-large"> <!--<![endif]-->
<head>
    <!-- BEGIN META SECTION -->
    <meta charset="utf-8">
    <title>Login | cs4 final year project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description" />
    <meta content="themes-lab" name="author" />
    <!-- END META SECTION -->
    <!-- BEGIN MANDATORY STYLE -->
    <link href="assets/css/icons/icons.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/plugins.min.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">
    <!-- END  MANDATORY STYLE -->
    <!-- BEGIN PAGE LEVEL STYLE -->
    <link href="assets/css/animate-custom.css" rel="stylesheet">
    <!-- END PAGE LEVEL STYLE -->
    <script src="assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<?php
    if (logged_in() === true){
        //session_start();
        echo 'You are Logged in';
    }
    else{
        echo 'You are not Logged in ';
        include("includes/layout/loginfooter.php");
        
    }

?>


