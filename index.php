<?php 
include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php");

$posts = array();
$postsTitle = 'Recent Posts';

if (isset($_GET['t_id'])) {
  $posts = getPostsByTopicId($_GET['t_id']);
  $postsTitle = "You searched for posts under '" . $_GET['name'] . "'";
} else if (isset($_POST['search-term'])) {
  $postsTitle = "You searched for '" . $_POST['search-term'] . "'";
  $posts = searchPosts($_POST['search-term']);
} else {
  $posts = getPublishedPosts();
}

?>


<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from designing-world.com/affan-1.1.0/page-home.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 May 2021 12:39:21 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="MSM KOZHIKODE - NORTH">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#0134d4">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags-->
    <!-- Title-->
    <title>MSM KOZHIKODE NORTH</title>
    <!-- Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <!-- Favicon-->
    <!-- <link rel="icon" href="assets3/img/core-img/favicon.ico"> -->
    <link rel="apple-touch-icon" href="assets3/img/icons/icon-96x96.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets3/img/icons/icon-152x152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="assets3/img/icons/icon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets3/img/icons/icon-180x180.png">
    <!-- CSS Libraries-->
    <link rel="stylesheet" href="assets3/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets3/css/animate.css">
    <link rel="stylesheet" href="assets3/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets3/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets3/css/bootstrap-icons.css">
    <link rel="stylesheet" href="assets3/css/magnific-popup.css">
    <link rel="stylesheet" href="assets3/css/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="assets3/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="assets3/css/apexcharts.css">
    <!-- Core Stylesheet-->
    <link rel="stylesheet" href="style.css">
    <!-- Web App Manifest-->
    <link rel="manifest" href="manifest.json">
  </head>
  <style>
     .p1 {
  animation: color-change 1s infinite;
}

@keyframes color-change {
  0% { color: blue; }
  50% { color: black; }
  100% { color: red; }
}
  </style>
  <body>
    <!-- Preloader-->
    <div class="preloader d-flex align-items-center justify-content-center" id="preloader">
      <div class="spinner-grow text-primary" role="status">
        <div class="sr-only">Loading...</div>
      </div>
    </div>
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
    <!-- Header Area-->
    <div class="header-area" id="headerArea">
      <div class="container">
        <!-- Paste your Header Content from here-->
        <!-- # Header Five Layout-->
        <!-- # Copy the code from here ...-->
        <!-- Header Content-->
        <div class="header-content header-style-five position-relative d-flex align-items-center justify-content-between">
          <!-- Logo Wrapper-->
          <div class="logo-wrapper text-bold"><a href="index.php"><strong>MSM KOZHIKODE (N)</strong></a></div>
          <!-- Navbar Toggler-->
          <div class="navbar--toggler" id="affanNavbarToggler"><span class="d-block"></span><span class="d-block"></span><span class="d-block"></span></div>
        </div>
        <!-- # Header Five Layout End-->
      </div>
    </div>
    <!-- Dark mode switching-->
    <div class="dark-mode-switching">
      <div class="d-flex w-100 h-100 align-items-center justify-content-center">
        <div class="dark-mode-text text-center"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-moon" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M14.53 10.53a7 7 0 0 1-9.058-9.058A7.003 7.003 0 0 0 8 15a7.002 7.002 0 0 0 6.53-4.47z"/>
</svg>
          <p class="mb-0">Switching to dark mode</p>
        </div>
        <div class="light-mode-text text-center"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-brightness-high" viewBox="0 0 16 16">
<path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
</svg>
          <p class="mb-0">Switching to light mode</p>
        </div>
      </div>
    </div>
    <!-- Sidenav Black Overlay-->
    <div class="sidenav-black-overlay"></div>
    <!-- Side Nav Wrapper-->
    <div class="sidenav-wrapper" id="sidenavWrapper">
      <!-- Go Back Button-->
      <div class="go-back-btn" id="goBack">
        <svg class="bi bi-x" width="24" height="24" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M11.854 4.146a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708-.708l7-7a.5.5 0 0 1 .708 0z"></path>
          <path fill-rule="evenodd" d="M4.146 4.146a.5.5 0 0 0 0 .708l7 7a.5.5 0 0 0 .708-.708l-7-7a.5.5 0 0 0-.708 0z"></path>
        </svg>
      </div>
      <!-- Sidenav Profile-->
      <div class="sidenav-profile">
        <div class="sidenav-style1"></div>
        <!-- User Thumbnail-->
        <div class="user-profile"><img src="assets3/img/bg-img/msmlogo2.png" alt=""></div>
        <!-- User Info-->
        <div class="user-info">
          <h6 class="user-name mb-0">MSM</h6><span>Kozhikode North District</span>
        </div>
      </div>
      <!-- Sidenav Nav-->
      <ul class="sidenav-nav ps-0">
        <li><a href="index.php">
            <svg width="18" height="18" viewBox="0 0 16 16" class="bi bi-house-door" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z"/>
<path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
</svg>Home</a></li>
        <li><a href="live.php">
            <svg width="18" height="18" viewBox="0 0 16 16" class="bi bi-folder2-open" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v.64c.57.265.94.876.856 1.546l-.64 5.124A2.5 2.5 0 0 1 12.733 15H3.266a2.5 2.5 0 0 1-2.481-2.19l-.64-5.124A1.5 1.5 0 0 1 1 6.14V3.5zM2 6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5a.5.5 0 0 0-.5.5V6zm-.367 1a.5.5 0 0 0-.496.562l.64 5.124A1.5 1.5 0 0 0 3.266 14h9.468a1.5 1.5 0 0 0 1.489-1.314l.64-5.124A.5.5 0 0 0 14.367 7H1.633z"/>
</svg>Live<span class="badge bg-danger rounded-pill ms-2">220+</span></a></li>
        <li><a href="quiz.php">
            <svg width="18" height="18" viewBox="0 0 16 16" class="bi bi-collection" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M14.5 13.5h-13A.5.5 0 0 1 1 13V6a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5zm-13 1A1.5 1.5 0 0 1 0 13V6a1.5 1.5 0 0 1 1.5-1.5h13A1.5 1.5 0 0 1 16 6v7a1.5 1.5 0 0 1-1.5 1.5h-13zM2 3a.5.5 0 0 0 .5.5h11a.5.5 0 0 0 0-1h-11A.5.5 0 0 0 2 3zm2-2a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 0-1h-7A.5.5 0 0 0 4 1z"/>
</svg>Quiz<span class="badge bg-success rounded-pill ms-2">38</span></a></li>
        <!-- <li class="affan-dropdown-menu"><a href="#">
            <svg width="18" height="18" viewBox="0 0 16 16" class="bi bi-cart-check" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M11.354 5.646a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L8 8.293l2.646-2.647a.5.5 0 0 1 .708 0z"/>
<path fill-rule="evenodd" d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm7 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
</svg>Result</a>
          <ul>
            <li><a href="page-shop-grid.html">- Shop Grid</a></li>
            <li><a href="page-shop-list.html">- Shop List</a></li>
            <li><a href="page-shop-details.html">- Shop Details</a></li>
            <li><a href="page-cart.html">- Cart</a></li>
            <li><a href="page-checkout.html">- Checkout</a></li>
          </ul>
        </li> -->
        <!-- <li><a href="settings.html">
            <svg width="18" height="18" viewBox="0 0 16 16" class="bi bi-gear" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"/>
<path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"/>
</svg>Settings</a></li>
        <li>
          <div class="night-mode-nav">
            <svg width="18" height="18" viewBox="0 0 16 16" class="bi bi-moon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M14.53 10.53a7 7 0 0 1-9.058-9.058A7.003 7.003 0 0 0 8 15a7.002 7.002 0 0 0 6.53-4.47z"/>
</svg>Night Mode<div class="form-check form-switch">
<input class="form-check-input form-check-success" type="checkbox" id="darkSwitch">
</div>
          </div>
        </li>
        <li><a href="page-login.html">
            <svg width="18" height="18" viewBox="0 0 16 16" class="bi bi-box-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
<path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
</svg>Logout</a></li> -->
      </ul>
      <!-- Social Info-->
      <div class="social-info-wrap"><a href="https://m.facebook.com/MSM-Kozhikode-NORTH-108035594135005/"><i class="fa fa-facebook"></i></a><a href="https://instagram.com/msm_kozhikodenorth?igshid=1j6q6gjz4c2ha"><i class="fa fa-instagram"></i></a><a href="https://www.youtube.com/channel/UCNTx-vlLzyDtvq35ta-iNNA"><i class="fa fa-youtube"></i></a></div>
      <!-- Copyright Info-->
      <div class="copyright-info">
        <!-- <p>&copy; 2021 All rights reserved by<a href="#">Designing World.</a></p> -->
      </div>
    </div>
    <div class="page-content-wrapper">
      <!-- Hero Slides-->
      <div class="owl-carousel-one owl-carousel">
        <!-- Single Hero Slide-->
        <div class="single-hero-slide " style="background-image: url('assets3/img/bg-img/31.jpg')">
          <div class="slide-content h-100 d-flex align-items-center text-center">
            <div class="container">
              <h4 class="text-white mb-1" data-animation="fadeInUp" data-delay="100ms" data-wow-duration="500ms">Welcome To<br> <h1><font color="white"><strong>Msm Kozhikode North</strong> </font></h1></h4>
              <p class="text-white mb-4" data-animation="fadeInUp" data-delay="400ms" data-wow-duration="500ms">Msm - Kozhikode North - District</p>
            </div>
          </div>
        </div>
        <!-- Single Hero Slide-->
        <div class="single-hero-slide " style="background-image: url('assets3/img/bg-img/hero-bg.jpg')">
          <div class="slide-content h-100 d-flex align-items-center text-center">
            <div class="container">
              <h4 class="text-white mb-1" data-animation="fadeInUp" data-delay="100ms" data-wow-duration="1000ms">Welcome To<br> <h1><font color="white"><strong>The Official Web<br> Platform Of</strong> </font></h1></h4>
              <p class="text-white mb-4" data-animation="fadeInUp" data-delay="400ms" data-wow-duration="1000ms">Msm - Kozhikode North - District</p>
            </div>
          </div>
        </div>
        <!-- Single Hero Slide-->
        <div class="single-hero-slide " style="background-image: url('assets3/img/bg-img/msm2.jpg')">
          <div class="slide-content h-100 d-flex align-items-center text-center">
            <div class="container">
              <h4 class="text-white mb-1" data-animation="fadeInUp" data-delay="100ms" data-wow-duration="1000ms">Welcome To<br> <h1><font color="white"><strong>Msm Kozhikode North</strong> </font></h1></h4>
              <p class="text-white mb-4" data-animation="fadeInUp" data-delay="400ms" data-wow-duration="1000ms">Msm - Kozhikode North - District</p>
            </div>
          </div>
        </div>
        <!-- Single Hero Slide-->
        <div class="single-hero-slide " style="background-image: url('assets3/img/bg-img/woodcraft.jpg')">
          <div class="slide-content h-100 d-flex align-items-center text-center">
            <div class="container">
              <h4 class="text-white mb-1" data-animation="fadeInUp" data-delay="100ms" data-wow-duration="1000ms">Welcome To<br> <h1><font color="white"><strong>Msm Kozhikode North</strong> </font></h1></h4>
              <p class="text-white mb-4" data-animation="fadeInUp" data-delay="400ms" data-wow-duration="1000ms">Msm - Kozhikode North - District</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Welcome Toast-->
      <div class="toast toast-autohide custom-toast-1 toast-success home-page-toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="10000" data-bs-autohide="true">
        <div class="toast-body">
          <svg class="bi bi-bookmark-check text-white" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
            <path fill-rule="evenodd" d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
          </svg>
          <div class="toast-text ms-3 me-2">
            <p class="mb-1 text-white">Welcome to Msm Kozhikode North</p>
            <small class="d-block">Give Your Feedback To Us</small><br><a class="btn btn-creative btn-danger" href="feedback.php">Feedbacks</a>
          </div>
          <button class="btn btn-close btn-close-white position-relative p-1 ms-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
      </div><br>
      <!-- <marquee> <p class="p1">THE TIMING OF OUR QUIZ COMPETITION HAS BEEN CHANGED TO <font color="red">1:30pm</font></p> </marquee> -->

      <marquee> <p class="p1"><font color="red">All of our live videos will be displayed on this website after one week inshallah</font>, Announcing the winners of yesterday's quiz competition : 1st - Hamna Meppayur | 2nd - Jafna K.P Kakkattil | 3rd - Shasla Villipally. Congratulations to the winners!</p> </marquee>
      <div class="py-4">
        <div class="container direction-rtl">
          <div class="row g-3">
            <div class="col-3">
              <div class="feature-card text-center">
                <a href="live.php" class="card shadow mx-auto"><img src="assets3/img/bg-img/live.png" alt=""></a>
                <p class="p1 ">Today's Live</p>
              </div>
            </div>

            <div class="col-3">
              <div class="feature-card mx-auto text-center">
                <a href="feedback.php" class="card shadow mx-auto"><img src="assets3/img/bg-img/fb2.png" alt=""></a>
                <p class="p1">FeedBack</p>              
                </div>
            </div>

            <div class="col-3">
              <div class="feature-card mx-auto text-center">
                <a href="quiz.php" class="card shadow mx-auto"><img src="assets3/img/bg-img/quiz.jpeg" alt=""></a>
                <!-- <p class="p1">Today's Quiz</p> -->
                <p class="mb-0"><font color="black">Today's Quiz</font></p>
              </div>
            </div>


            <div class="col-3">
              <div class="feature-card mx-auto text-center">
                <a href="result.php" class="card shadow mx-auto"><img src="assets3/img/bg-img/quiz.jpeg" alt=""></a>
                <p class="p1">Quiz Result</p>
              </div>
            </div>



            <div class="col-3">
              <div class="feature-card mx-auto text-center">
                <a href="#" data-bs-toggle="modal" data-bs-target="#cre" class="card shadow mx-auto"><img src="assets3/img/bg-img/cree.png" alt=""></a>
                <p class="mb-0"><font color="black">CRE</font></p>              </div>
            </div>
            <div class="col-3">
              <div class="feature-card mx-auto text-center">
                <a href="#" data-bs-toggle="modal" data-bs-target="#iqra" data-bs-toggle="modal" data-bs-target="#iqura" class="card shadow mx-auto"><img src="assets3/img/bg-img/loading.jpg" alt="" width="140%"></a>
                <p class="mb-0"><font color="black">IQRA'Moral School</font></p>              </div>
            </div>
            <div class="col-3">
              <div class="feature-card mx-auto text-center">
                <a href="#" data-bs-toggle="modal" data-bs-target="#highsec" class="card shadow mx-auto"><img src="assets3/img/bg-img/hs.png" alt="" width="190px"></a>
                <p class="mb-0"><font color="black">HighSec</font></p>              </div>
            </div>
            <div class="col-3">
              <div class="feature-card mx-auto text-center">
                <a href="register.php" class="card shadow mx-auto"><img src="assets3/img/bg-img/reg.png" alt=""></i></a>
                <p class="mb-0"><font color="black">Registration</font></p>              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="card bg-danger mb-3 shadow-sm bg-gradient direction-rtl">
              <div class="card-body">
                <h2 class="text-white">Welcome To Our Today's Live Program</h2>
                <p class="text-white mb-4"> </p><a class="btn btn-warning" href="live.php">Todays's Live</a>
              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card bg-primary mb-3 shadow-sm bg-gradient direction-rtl">
              <div class="card-body">
                <h2 class="text-white">Quiz Ready!</h2>
                <p class="text-white mb-4"></p><a class="btn btn-info" href="quiz.php">Today's Quiz</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="page-content-wrapper py-3">
        <div class="container">
          <div class="card image-gallery-card direction-rtl">
            <div class="card-body"><img class="mb-3 rounded" src="assets3/img/bg-img/msmlogo2.png" alt="">
              <h5>MUJAHID STUDENTS MOVEMENT</h5>
              <p><font color="black">ഇസ്ലാം മതത്തിലെ അടിസ്ഥാന വിശ്വാസങ്ങൾ, ആചാരങ്ങൾ, അനുഷ്ഠാനങ്ങൾ ആഘോഷങ്ങൾ തുടങ്ങിയവ പ്രമാണബന്ധിതമായി പ്രചരിപ്പിക്കുന്നു വിദ്യാർഥികൾക്കിടയിൽ ഇസ്ലാമിനെക്കുറിച്ചുള്ള തെറ്റിദ്ധാരണകൾ അകറ്റുവാനുതകുന്ന ബോധവൽക്കരണം നടത്തുന്നു ലഹരിയുടെ ഉപയോഗം, ലൈംഗിക വൈകൃതങ്ങൾ, സാങ്കേതിക വിദ്യയുടെ ദുരുപയോഗം, സാമ്പത്തിക കുറ്റകൃത്യങ്ങൾ, അച്ചടക്കരാഹിത്യം തുടങ്ങിയ അധാർമികതകളുടെ ദൂഷ്യഫലങ്ങൾ ബോധ്യപ്പെടുത്തി, ധാർമിക ജീവിതത്തിനാവശ്യമായ പാഠങ്ങൾ പകർന്നു നൽകുന്നു റാഗിംഗ്,രാഷ്ട്രീയ സംഘർഷങ്ങൾ തുടങ്ങിയവയാൽ സംഘർഷ ഭരിതമായ കലാലയങ്ങളിൽ വിശ്വമാനവീകതയും സാഹോദര്യവും പ്രചരിപ്പിക്കുന്നു. കലാലയങ്ങളുടെ മതേതരാന്തരീക്ഷം നിലനിർത്തുവാനായി പരിശ്രമിക്കുന്നു</font> </p>
              <!-- Gallery Wrapper-->
              <div class="mb-4 gallery-wrapper row g-3">
                <!-- Single Image Gallery-->
                <div class="col-6 single-image-gallery marketing">
                  <!-- Gallery Image--><a class="gallery-img" href="assets3/img/bg-img/msm2.jpg" data-effect="mfp-zoom-in"><img src="assets3/img/bg-img/msm2.jpg" alt=""></a>
                  <!-- Fav Icon--><a class="fav-icon shadow" href="#"><svg width="16" height="16" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
  </svg></a>
                </div>
                <!-- Single Image Gallery-->
                <div class="col-6 single-image-gallery top">
                  <!-- Gallery Image--><a class="gallery-img" href="assets3/img/bg-img/hero-bg.jpg" data-effect="mfp-zoom-in"><img src="assets3/img/bg-img/hero-bg.jpg" alt=""></a>
                  <!-- Fav Icon--><a class="fav-icon shadow" href="#"><svg width="16" height="16" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
  </svg></a>
                </div>
                <!-- Single Image Gallery-->
                <div class="col-6 single-image-gallery design">
                  <!-- Gallery Image--><a class="gallery-img" href="assets3/img/bg-img/woodcraft.jpg" data-effect="mfp-zoom-in"><img src="assets3/img/bg-img/woodcraft.jpg" alt=""></a>
                  <!-- Fav Icon--><a class="fav-icon shadow" href="#"><svg width="16" height="16" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
  </svg></a>
                </div>
                <!-- Single Image Gallery-->
                <div class="col-6 single-image-gallery marketing">
                  <!-- Gallery Image--><a class="gallery-img" href="assets3/img/bg-img/31.jpg" data-effect="mfp-zoom-in"><img src="assets3/img/bg-img/31.jpg" alt=""></a>
                  <!-- Fav Icon--><a class="fav-icon shadow" href="#"><svg width="16" height="16" viewBox="0 0 16 16" class="bi bi-heart-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
  </svg></a>
                </div>
              </div>
              <h5>HISTORY </h5>
              <p><font color="black">കേരളത്തിലെ മുസ്ലിം നവോത്ഥാന പ്രവർത്തനങ്ങൾക്ക് നേതൃത്വം നൽകിയ സയ്യിദ് സനാഉള്ള മക്തി തങ്ങൾ, വക്കം അബ്ദുൽഖാദിർ മൗലവി തുടങ്ങിയവരുടെ പാത പിന്തുടർന്ന് ഇ.മൊയ്തുമൗലവി, മുഹമ്മദ് അബ്ദുറഹിമാൻ സാഹിബ്, കെ.എം മൗലവി, കെ.എം സീതി സാഹിബ് തുടങ്ങിയവർ രൂപീകരിച്ച കേരള മുസ്ലിം ഐക്യ സംഘത്തിന്റെ തുടർച്ചയായി 1950 ൽ രൂപീകൃതമായ കേരള നദുവത്തുൽ മുജാഹിദീൻ 1970 ൽ രൂപം കൊടുത്ത വിദ്യാർത്ഥി സംഘടനയാണ് മുജാഹിദ് സ്റ്റുഡൻസ് മൂവ്മെന്റ് (എം എസ് എം). </font></p>
             <br></div></div></div></div>
           
      <div class="container">
        <div class="card">
          <div class="card-body">
            <h2>Contact Us</h2>
            <div class="testimonial-slide owl-carousel testimonial-style3">
              <!-- Single Testimonial Slide-->
              <div class="single-testimonial-slide">
                <div class="text-content"><span class="d-inline-block badge bg-warning mb-2"><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill"></i></span>
                  <h6 class="mb-2">
                    <strong>Location :</strong><br>
                    
                    Kozhikode North District Committee<br>
                    Salafi complex Near Civil Station, Koyilandy- 673305</h6>
                    
                </div>
              </div>
              <!-- Single Testimonial Slide-->
              <div class="single-testimonial-slide">
                <div class="text-content"><span class="d-inline-block badge bg-warning mb-2"><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill"></i></span>
                  <h6 class="mb-2">
                  <font color="red">President</font><br>
Muhammad P V :<br>
9567685768<br>

<font color="red">Secretary</font><br>
Sameel Swalahi Kuttyadi :<br>
9645005070<br>

<font color="red">Treasurer</font><br>
Sahad Narippatta :<br>
9645017088
                  </h6>
                </div>
              </div>
              <!-- Single Testimonial Slide-->
              <div class="single-testimonial-slide">
                <div class="text-content"><span class="d-inline-block badge bg-warning mb-2"><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill me-1"></i><i class="bi bi-star-fill"></i></span>
                  <h6 class="mb-2"><strong>
                    MUJAHID STUDENTS MOVEMENT</strong><br>
                    
                    Official Website Of Mujahid Students Movement (MSM),Kozhikode North, India,<br> the students wing of Kerala Nadvathul Mujahideen<br>
                    Designed<a href="http://msb.epizy.com"> By Msb Creations</a> .
                    </h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="pb-3"></div>
    </div>
    <!-- Footer Nav-->
    <div class="footer-nav-area" id="footerNav">
      <div class="container px-0">
        <!-- Paste your Footer Content from here-->
        <!-- Footer Content-->
        <div class="footer-nav position-relative">
          <ul class="h-100 d-flex align-items-center justify-content-between ps-0">
            <li class="active"><a href="index.php"><svg width="20" height="20" viewBox="0 0 16 16" class="bi bi-house" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"/>
<path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"/>
</svg><span>Home</span></a></li>
            <li><a href="live.php"><svg width="20" height="20" viewBox="0 0 16 16" class="bi bi-play-circle" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
              <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z"/><span>Live</span></a></li>
            <li><a href="register.php"><svg width="20" height="20" viewBox="0 0 16 16" class="bi bi-folder2-open" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M1 3.5A1.5 1.5 0 0 1 2.5 2h2.764c.958 0 1.76.56 2.311 1.184C7.985 3.648 8.48 4 9 4h4.5A1.5 1.5 0 0 1 15 5.5v.64c.57.265.94.876.856 1.546l-.64 5.124A2.5 2.5 0 0 1 12.733 15H3.266a2.5 2.5 0 0 1-2.481-2.19l-.64-5.124A1.5 1.5 0 0 1 1 6.14V3.5zM2 6h12v-.5a.5.5 0 0 0-.5-.5H9c-.964 0-1.71-.629-2.174-1.154C6.374 3.334 5.82 3 5.264 3H2.5a.5.5 0 0 0-.5.5V6zm-.367 1a.5.5 0 0 0-.496.562l.64 5.124A1.5 1.5 0 0 0 3.266 14h9.468a1.5 1.5 0 0 0 1.489-1.314l.64-5.124A.5.5 0 0 0 14.367 7H1.633z"/>
</svg><span>Register</span></a></li>
            <li><a href="#!"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
<path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
<path d="M2.165 15.803l.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z"/>
</svg><span>Chat</span></a></li>
            <li><a href="#!"><svg width="20" height="20" viewBox="0 0 16 16" class="bi bi-gear" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"/>
<path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"/>
</svg><span>Settings</span></a></li>
          </ul>
        </div>
      </div>
    </div>

     <!-- Static Backdrop Modal-->
     <div class="modal fade" id="cre" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="modal-title" id="staticBackdropLabel">CRE</h6>
            <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p class="mb-0">
            <img src="assets3/img/bg-img/cree.png" alt=""><br>
            എന്താണ് സി ആർ ഇ ?<br>
മുജാഹിദ് സ്റ്റുഡന്റ്സ് മൂവ്മെന്റ് (MSM) നടത്തുന്ന പ്രതി വാര പഠന ക്ലാസ്സ് ആണ് cre. ഹൈ സ്കൂൾ - ഹയർ സെക്കൻഡറി കോളേജ് തലങ്ങളിലെ വിദ്യാർത്ഥി വിദ്യാർത്ഥിനികൾക്ക് ഇസ്ലാമിക ബോധം പകർന്നു നൽകുന്നു. ശാസ്ത്രീയവും കേന്ദ്രീകൃത വുമായ പഠന മാർഗങ്ങളിലൂടെ മതത്തിന്റെ നന്മകളെ കൗമാര മനസ്സിലേക്ക് നിക്ഷേപിക്കുന്നു.. ഉത്തമ പൗരന്മാരായി വളരാൻ അവരെ പ്രാപ്തരാക്കുന്നു.<br>
എന്തുകൊണ്ട് CRE?<br>
പ്രാഥമിക മതവിദ്യാഭ്യാസം പോലും ഭൂരിഭാഗം വിദ്യാർത്ഥികൾക്കും ലഭിക്കുന്നില്ല. ആധുനികലോകത്ത് മതവിദ്യാഭ്യാസം പാർശ്വവത്കരിക്കപ്പെടുന്നു. ഒരു വിദ്യാർത്ഥി സ്വതന്ത്രമായി ചിന്തിക്കാൻ തുടങ്ങുന്ന പ്രായത്തിൽ അവന്റെ ചിന്തകളെ ശരിയായി നയിക്കുവാൻ പര്യാപ്തമായ മത വിദ്യാഭ്യാസ പദ്ധതി എന്ന് നിലവിലില്ല. തിന്മകൾ വ്യപകമായിക്കൊണ്ടിരിക്കുന്ന ലോകത്ത് ഒറ്റപെട്ട പ്രതിരോധങ്ങൾ പലപ്പോഴും ദുർബലമാകുന്നു.ഇത്തരം ഘട്ടങ്ങളിൽ തിന്മകൾക്കെതിരെയുള്ള വിദ്യാർത്ഥി സമൂഹത്തിന് കൂട്ടായ്മ രൂപപ്പെടുത്തേണ്ടത് അനിവാര്യമാണ്.



<br>
CRE സവിശേഷതകൾ.<br>
വിശ്വാസം കർമം സംസ്‌കരണം എന്നീ മേഖലകളിൽ സമഗ്രമായ അപഗ്രഥിക്കുന്ന മികച്ച സിലബസ്
ഇസ്ലാമിക പാഠങ്ങൾ ആധികാരിക പ്രമാണങ്ങൾ അടിസ്ഥാനമാക്കി സലഫുകളുടെ രീതിശാസ്ത്രം അവലംബിച് നടപ്പാക്കുന്ന പഠനരീതി

ആധുനിക സാങ്കേതികവിദ്യ ഉപയോഗിച്ചുള്ള അധ്യാപനം
സ്കൂൾ-കോളേജ്-പാഠ്യ പദ്ധതികളെയും പരീക്ഷകളെയും പരിഗണിച്ചുകൊണ്ടുള്ള പഠനക്രമം
കർമശാസ്ത്ര വിഷയങ്ങളിൽ പ്രായോഗിക പരിശീലനം
സെൽഫ് അസ്സെസ്സ്മെന്റ് ടെസ്റ്റും നവീന മൂല്യനിർണയ രീതിയും
ഓൺലൈൻ എക്സാം.
രണ്ട് വർഷം കൊണ്ട് പൂർത്തിയാകുന്ന സിലബസ്
എങ്ങനെയാണ് ക്ലാസ്സുകളുടെ രൂപം?
മൂന്ന് മാസമാണ് ഒരു കോഴ്സ്.ഓരോ വിഷയ സംബന്ധമായി പാഠപുസ്തകങ്ങൾ പഠിതാവിന് നൽകുന്നു.
  പൂർണമായും ഓൺലൈൻ മോഡിലാണ് പരീക്ഷ,വിജയികൾക്ക് സംസ്ഥാന സമിതിയുടെ കോഴ്സ് സർട്ടിഫിക്കറ്റുകൾ നൽകുന്നു.
എങ്ങിനെ ഇൗ കോഴ്സിൽ പങ്കെടുക്കാം?<br><br>For more details contact us :<br>
<button class="btn btn-warning">
<font color="red">DISTRICT CONVEENERS</font><br>
Nijas Ahammad :<br>
 +91 7034504531<br>
<font color="red">ZONE CONVEENERS</font><br>

Koyilandy - Hafeed Ibrahim :
<br> +91 9946163681
<br>
Vadakara - Fahad :
<br> +91 9567096077
<br>
Perambra -Mishab Sani :
<br> +91 97455 66919</button></p>
          </div>
          <div class="modal-footer">
            <button class="btn btn-sm btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="iqra" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="modal-title" id="staticBackdropLabel">IQRA' MORAL SCHOOL</h6>
            <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p class="mb-0">
            <img src="assets3/img/bg-img/moral.jpeg" alt=""><br>
            കൗമാരക്കാരായ വിദ്യാർഥികൾക്ക് ഇസ്ലാമിന്റെ വെള്ളിവെളിച്ചം എത്തിച്ചുകൊടുക്കുക എന്ന ലക്ഷ്യമാണ് എം എസ് എം മോറൽ സ്കൂളിലൂടെ മുന്നോട്ടുവെക്കുന്നത്.
 അധാർമികതയുടെ കൂരിരുട്ടിൽ വഴിയറിയാതെ തപ്പിനടക്കുന്ന വിദ്യാർത്ഥി സമൂഹത്തിന് മതവും മനുഷ്യത്വവും മനസ്സിലാക്കാനും, സ്വഭാവ വിശുദ്ധിയും ജീവിത ചൈതന്യവുമാണ് ഒരു നല്ല സമൂഹത്തിന്റെ സംസ്കാരമെന്ന വിദ്യാർത്ഥികളെ ബോധ്യപ്പെടുത്തുകയാണ് എം എസ് എം മോറൽ സ്കൂൾ.
 ഖുർആൻ തജ്‌വീദ് തഫ്സീർ ഹദീസ് ഫിഖ്ഹ് വിശ്വാസം സ്വഭാവം ചരിത്രം എന്നീ വിഷയങ്ങളും മറ്റ് പൊതു വിഷയങ്ങളിലുമുള്ള ധാരണ വിദ്യാർത്ഥി സമൂഹത്തിൽ വളർത്തിയെടുക്കുകയാണ് ഇവിടെ എം എസ് എം. അതിവേഗം കറ പുരളുന്ന നമ്മുടെ മനസ്സുകളെ വിദ്യകൊണ്ട് ശുദ്ധീകരിക്കാൻ ഇതാ എം എസ് എം കൗമാരക്കാരായ വിദ്യാർഥികളെ വിളിക്കുന്നു മോറൽ സ്കൂളിലേക്ക്.</p>
 <br> <a href="live.php" class="btn btn-danger btn-block">
                                        Go To Live!
                </a><br><br><br>
                <a href="quiz.php" class="btn btn-primary btn-block">
                                       Enter to quiz competition
                </a>


            </p>
          </div>
          <div class="modal-footer">
            <button class="btn btn-sm btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>


    <div class="modal fade" id="highsec" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h6 class="modal-title" id="staticBackdropLabel">HIGH SEC</h6>
            <button class="btn btn-close p-1 ms-auto" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p class="mb-0">
            <img src="assets3/img/bg-img/hs.jpeg" alt="">

            </p>
          </div>
          <div class="modal-footer">
            <button class="btn btn-sm btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

    <!-- All JavaScript Files-->
    <script src="assets3/js/bootstrap.bundle.min.js"></script>
    <script src="assets3/js/jquery.min.js"></script>
    <script src="assets3/js/default/internet-status.js"></script>
    <script src="assets3/js/waypoints.min.js"></script>
    <script src="assets3/js/jquery.easing.min.js"></script>
    <script src="assets3/js/wow.min.js"></script>
    <script src="assets3/js/owl.carousel.min.js"></script>
    <script src="assets3/js/jquery.counterup.min.js"></script>
    <script src="assets3/js/jquery.countdown.min.js"></script>
    <script src="assets3/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets3/js/isotope.pkgd.min.js"></script>
    <script src="assets3/js/jquery.magnific-popup.min.js"></script>
    <script src="assets3/js/default/dark-mode-switch.js"></script>
    <script src="assets3/js/ion.rangeSlider.min.js"></script>
    <script src="assets3/js/jquery.dataTables.min.js"></script>
    <script src="assets3/js/default/active.js"></script>
    <script src="assets3/js/default/clipboard.js"></script>
    <!-- PWA-->
    <script src="assets3/js/pwa.js"></script>
  </body>

<!-- Mirrored from designing-world.com/affan-1.1.0/page-home.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 May 2021 12:39:26 GMT -->
</html>