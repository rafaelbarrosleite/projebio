<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   <meta name="description" content="Bootstrap Admin App + jQuery">
   <meta name="keywords" content="app, responsive, jquery, bootstrap, dashboard, admin">
   <link rel="icon" type="image/x-icon" href="favicon.ico">
   <title>Angle - Bootstrap Admin Template</title>
   <!-- =============== VENDOR STYLES ===============-->
   <!-- FONT AWESOME-->
   <link rel="stylesheet" href="<?php echo base_url();?>content/templateAngle/vendor/@fortawesome/fontawesome-free-webfonts/css/fa-brands.css">
   <link rel="stylesheet" href="<?php echo base_url();?>content/templateAngle/vendor/@fortawesome/fontawesome-free-webfonts/css/fa-regular.css">
   <link rel="stylesheet" href="<?php echo base_url();?>content/templateAngle/vendor/@fortawesome/fontawesome-free-webfonts/css/fa-solid.css">
   <link rel="stylesheet" href="<?php echo base_url();?>content/templateAngle/vendor/@fortawesome/fontawesome-free-webfonts/css/fontawesome.css">
   <!-- SIMPLE LINE ICONS-->
   <link rel="stylesheet" href="<?php echo base_url();?>content/templateAngle/vendor/simple-line-icons/css/simple-line-icons.css">
   <!-- ANIMATE.CSS-->
   <link rel="stylesheet" href="<?php echo base_url();?>content/templateAngle/vendor/animate.css/animate.css">
   <!-- WHIRL (spinners)-->
   <link rel="stylesheet" href="<?php echo base_url();?>content/templateAngle/vendor/whirl/dist/whirl.css">
   <!-- =============== PAGE VENDOR STYLES ===============-->
      <!-- WEATHER ICONS-->
      <link rel="stylesheet" href="<?php echo base_url();?>content/templateAngle/vendor/weather-icons/css/weather-icons.css">
   <!-- =============== BOOTSTRAP STYLES ===============-->
   <link rel="stylesheet" href="<?php echo base_url();?>content/templateAngle/css/bootstrap.css" id="bscss">
   <!-- =============== APP STYLES ===============-->
   <link rel="stylesheet" href="<?php echo base_url();?>content/templateAngle/css/app.css" id="maincss">
</head>

<body>
   <div class="wrapper">
      <!-- top navbar-->
      <header class="topnavbar-wrapper">
         <!-- START Top Navbar-->
         <nav class="navbar topnavbar">
            <!-- START navbar header-->
            <div class="navbar-header">
               <a class="navbar-brand" href="<?php echo base_url();?>index.php/areaRestrita/Cotacao">
                  <div class="brand-logo">
                     <img class="img-fluid" src="<?php echo base_url();?>content/img/logo.png" alt="App Logo">
                  </div>
                  <div class="brand-logo-collapsed">
                     <img class="img-fluid" src="<?php echo base_url();?>content/img/logo.png" alt="App Logo">
                  </div>
               </a>
            </div>
            <!-- END navbar header-->
            <!-- START Left navbar-->
            <ul class="navbar-nav mr-auto flex-row">
               <li class="nav-item">
                  <!-- Button used to collapse the left sidebar. Only visible on tablet and desktops-->
                  <a class="nav-link d-none d-md-block d-lg-block d-xl-block" href="#" data-trigger-resize="" data-toggle-state="aside-collapsed">
                     <em class="fas fa-bars"></em>
                  </a>
                  <!-- Button to show/hide the sidebar on mobile. Visible on mobile only.-->
                  <a class="nav-link sidebar-toggle d-md-none" href="#" data-toggle-state="aside-toggled" data-no-persist="true">
                     <em class="fas fa-bars"></em>
                  </a>
               </li>
            </ul>
            <!-- END Left navbar-->
            <!-- START Right Navbar-->
            <ul class="navbar-nav flex-row">

            </ul>
            <!-- END Right Navbar-->
            <!-- START Search form-->
            <form class="navbar-form" role="search" action="search.html">
               <div class="form-group">
                  <input class="form-control" type="text" placeholder="Type and hit enter ...">
                  <div class="fas fa-times navbar-form-close" data-search-dismiss=""></div>
               </div>
               <button class="d-none" type="submit">Submit</button>
            </form>
            <!-- END Search form-->
         </nav>
         <!-- END Top Navbar-->
      </header>