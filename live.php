<?php 
include("path.php");
include(ROOT_PATH . "/app/controllers/users.php");



?>


<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from designing-world.com/affan-1.1.0/page-blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 May 2021 12:40:19 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="LIVE - MSM KKD NORTH">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#0134d4">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags-->
    <!-- Title-->
    <title>LIVE - MSM KOZHIKODE NORTH</title>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.6.0/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
  <script type="text/javascript">
        var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
        (function () {
            var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/6094e3d8b1d5182476b68a2e/1f52pk26u';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!-- Preloader-->
    <div class="preloader d-flex align-items-center justify-content-center" id="preloader">
      <div class="spinner-grow text-primary" role="status">
        <div class="sr-only">Loading...</div>
      </div>
    </div>
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
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
    <!-- RTL mode switching-->
    <div class="rtl-mode-switching">
      <div class="d-flex w-100 h-100 align-items-center justify-content-center">
        <div class="rtl-mode-text text-center"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-text-right" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-4-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm4-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-4-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
</svg>
          <p class="mb-0">Switching to RTL mode</p>
        </div>
        <div class="ltr-mode-text text-center"><svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-text-left" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M2 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
</svg>
          <p class="mb-0">Switching to default mode</p>
        </div>
      </div>
    </div>
    <div id="setting-popup-overlay"></div>
    <!-- Setting Popup Card-->
    <div class="card setting-popup-card shadow-lg" id="settingCard">
      <div class="card-body">           
        <div class="container">
          <div class="setting-heading d-flex align-items-center justify-content-between mb-3">
            <p class="mb-0">Settings</p><a class="btn-close" id="settingCardClose" href="#"></a>
          </div>
          <div class="single-setting-panel">
            <div class="form-check form-switch mb-2">
              <input class="form-check-input" type="checkbox" id="availabilityStatus" checked>
              <label class="form-check-label" for="availabilityStatus">Availability status</label>
            </div>
          </div>
          <div class="single-setting-panel">
            <div class="form-check form-switch mb-2">
              <input class="form-check-input" type="checkbox" id="sendMeNotifications" checked>
              <label class="form-check-label" for="sendMeNotifications">Send me notifications</label>
            </div>
          </div>
          <div class="single-setting-panel">
            <div class="form-check form-switch mb-2">
              <input class="form-check-input" type="checkbox" id="darkSwitch">
              <label class="form-check-label" for="darkSwitch">Dark mode</label>
            </div>
          </div>
          <div class="single-setting-panel">
            <div class="form-check form-switch">
              <input class="form-check-input" type="checkbox" id="rtlSwitch">
              <label class="form-check-label" for="rtlSwitch">RTL mode</label>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Header Area-->
    <div class="header-area" id="headerArea">
      <div class="container">
        <!-- Paste your Header Content from here-->
        <!-- Header Content-->
        <div class="header-content position-relative d-flex align-items-center justify-content-between">
          <!-- Back Button-->
          <div class="back-button"><a href="index.php"><svg width="32" height="32" viewBox="0 0 16 16" class="bi bi-arrow-left-short" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z"/>
</svg></a></div>
          <!-- Page Title-->
          <div class="page-heading">
            <h6 class="mb-0">Msm Kozhikode North</h6>
          </div>
          <!-- Settings-->
          <div class="setting-wrapper"><a class="setting-trigger-btn" id="settingTriggerBtn" href="#"><svg width="18" height="18" viewBox="0 0 16 16" class="bi bi-gear" fill="url(#gradientSettings)" xmlns="http://www.w3.org/2000/svg">
<defs>
<linearGradient spreadMethod="pad" id="gradientSettings" x1="0%" y1="0%" x2="100%" y2="100%">
<stop offset="0" style="stop-color: #0134d4; stop-opacity:1;"/>
<stop offset="100%" style="stop-color: #28a745; stop-opacity:1;"/>
</linearGradient>
</defs>
<path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z"/>
<path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z"/>
</svg><span></span></a></div>
        </div>
      </div>
    </div>
    <div class="page-content-wrapper">
      <div class="container">
        <div class="pt-3 d-block"></div>
        <!-- <marquee> <p class="p1">THE TIMING OF OUR QUIZ COMPETITION HAS BEEN CHANGED TO <font color="red">1:30pm</font></p> </marquee> -->

        <marquee> <p class="p1"><font color="red">All of our live videos will be displayed on this website after one week inshallah</font>, Announcing the winners of yesterday's quiz competition : 1st - Hamna Meppayur | 2nd - Jafna K.P Kakkattil | 3rd - Shasla Villipally. Congratulations to the winners!</p> </marquee>
        <div class="blog-details-post-thumbnail position-relative">













        <!-- <iframe  src="https://www.youtube.com/embed/pZUDnyEfb3Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
          <!-- <iframe  class="w-100 rounded-lg"  width="370" height="390" src="https://www.youtube.com/embed/6vyYHVElfaM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
         <img class="w-100 rounded-lg" src="assets3/img/bg-img/tq.jpeg" alt=""> 
         <!-- <iframe  src="https://www.youtube.com/embed/0dpXN74llnE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
        
         <!-- <iframe  class="w-100 rounded-lg"  width="370" height="390" src="https://www.youtube.com/embed/hX9Ze8wVpI4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
        </div>
      </div>















       
        <div class="toast toast-autohide custom-toast-1 toast-success home-page-toast" role="alert" aria-live="assertive" aria-atomic="true" data-bs-delay="10000" data-bs-autohide="true">
        <div class="toast-body">
          <svg class="bi bi-bookmark-check text-white" width="30" height="30" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"></path>
            <path fill-rule="evenodd" d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path>
          </svg>
          <div class="toast-text ms-3 me-2">
          <p class="mb-1 text-white"></p><small class="d-block">Give Your Feedback To Us</small><br><a class="btn btn-creative btn-danger" href="feedback.php">Feedbacks</a>
          </div>
          <button class="btn btn-close btn-close-white position-relative p-1 ms-auto" type="button" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
      </div>
      <div class="blog-description py-3">
        <div class="container"><a class="badge bg-danger mb-2 d-inline-block" href="#">Live Ended</a><br>
        <!-- <div class="container"><a class="badge bg-danger mb-2 d-inline-block" href="#"><i class="fas fa-eye"></i> Viewers : 233 <i class="fas fa-users"></i></a> -->

          <h3 class="mb-3"></h3>
          <div class="d-flex align-items-center mb-4"><a class="badge-avater" href="#"><img class="img-circle" src="assets3/img/bg-img/user1.png" alt=""></a><span class="ms-2"><font color="black">Team Msm Kozhikode North</font></span></div>
        
        </div>
      </div><br>

      <div class="py-4">
        <div class="container direction-rtl">
          <div class="row g-3">
          
            <div class="col-3">
              <div class="feature-card text-center">
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
                <p class="p1">Quiz Results</p>
              </div>
            </div>
            <div class="col-3">
              <div class="feature-card mx-auto text-center">
                <a href="register.php" class="card shadow mx-auto"><img src="assets3/img/bg-img/reg.png" alt=""></a>
                <p class="mb-0"><font color="black">Registration</font></p>              </div>
            </div>
            
            <div class="col-3">
              <div class="feature-card mx-auto text-center">
                <a href="#!" data-bs-toggle="modal" data-bs-target="#cre" class="card shadow mx-auto"><img src="assets3/img/bg-img/cree.png" alt=""></a>
                <p class="mb-0"><font color="black">CRE</font></p>              </div>
            </div>
            <div class="col-3">
              <div class="feature-card mx-auto text-center">
                <a href="live.php"  class="card shadow mx-auto"><img src="assets3/img/bg-img/ref.png" alt="" width="140%"></a>
                <p class="mb-0"><font color="black">Refresh Page</font></p>              </div>
            </div>
            <div class="col-3">
              <div class="feature-card mx-auto text-center">
                <a href="index.php" class="card shadow mx-auto"><img src="assets3/img/bg-img/call.jpg" alt="" width="190px"></a>
                <p class="mb-0"><font color="black">Contact</font></p>              </div>
            </div>
            <div class="col-3">
              <div class="feature-card mx-auto text-center">
                <a href="index.php" class="card shadow mx-auto"><img src="assets3/img/bg-img/msmlogo2.png" alt=""></i></a>
                <p class="mb-0"><font color="black">Main Page</font></p></div>
            </div>
          </div>
        </div>
      </div>
      <div class="page-content-wrapper py-3">
        <div class="blog-wrapper direction-rtl">
          <div class="container">
            <div class="row g-3">
              <!-- Single Blog Card-->
              <div class="col-6 col-sm-4 col-md-3">
                <div class="card position-relative shadow-sm"><img class="card-img-top" src="assets3/img/bg-img/day1.jpeg" alt=""><span class="badge bg-warning text-dark position-absolute card-badge">Coming Soon..</span>
                  <div class="card-body"><span class="badge bg-danger rounded-pill mb-2 d-inline-block">Day 1</span><a class=" d-block mb-3 text-dark" href="#!">നാഥന്റെ മുന്നിൽ വിനയത്തോടെ</a><br><br><a class="btn btn-primary btn-sm" href="#!">Uploading Soon...</a></div>
                </div>
              </div>
              <!-- Single Blog Card-->
              <div class="col-6 col-sm-4 col-md-3">
                <div class="card position-relative shadow-sm"><img class="card-img-top" src="assets3/img/bg-img/day2.jpeg" alt=""><span class="badge bg-warning text-dark position-absolute card-badge">Coming Soon..</span>
                  <div class="card-body"><span class="badge bg-danger rounded-pill mb-2 d-inline-block">Day 2</span><a class=" d-block mb-3 text-dark" href="#!">മാതാപിതാക്കൾ: വിശ്യാസിയുടെ സ്വർഗ്ഗത്തിന്റെ താക്കോൽ</a><a class="btn btn-primary btn-sm" href="#!">Uploading Soon...</a></div>
                </div>
              </div>
              <!-- Single Blog Card-->
              <div class="col-6 col-sm-4 col-md-3">
                <div class="card position-relative shadow-sm"><img class="card-img-top" src="assets3/img/bg-img/day3.jpeg" alt=""><span class="badge bg-warning text-dark position-absolute card-badge">Coming Soon..</span>
                  <div class="card-body"><span class="badge bg-danger rounded-pill mb-2 d-inline-block">Day 3</span><a class=" d-block mb-3 text-dark" href="#!"><strong>പ്രവാചകജീവിതം ഉത്തമ മാതൃക</strong></a><a class="btn btn-primary btn-sm" href="#!">Uploading Soon...</a></div>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-md-3">
                <div class="card position-relative shadow-sm"><img class="card-img-top" src="assets3/img/bg-img/day4.jpeg" alt=""><span class="badge bg-warning text-dark position-absolute card-badge">Coming Soon..</span>
                  <div class="card-body"><span class="badge bg-danger rounded-pill mb-2 d-inline-block">Day 4</span><a class=" d-block mb-3 text-dark" href="#!"><strong>സമയത്തെ ധന്യമാക്കുക</strong></a><a class="btn btn-primary btn-sm" href="#!">Uploading Soon...</a></div>
                </div>
              </div>
              <div class="col-6 col-sm-4 col-md-3">
                <div class="card position-relative shadow-sm"><img class="card-img-top" src="assets3/img/bg-img/tdy.jpeg" alt=""><span class="badge bg-warning text-dark position-absolute card-badge">Coming Soon..</span>
                  <div class="card-body"><span class="badge bg-danger rounded-pill mb-2 d-inline-block">Day 5</span><a class=" d-block mb-3 text-dark" href="#!"><strong>ജീവിത വഴികളിൽ തളരാതെ മുന്നോട്ട്</strong></a><a class="btn btn-primary btn-sm" href="#!">Uploading Soon...</a></div>
                </div>
              </div>
      
      <br>
      <!-- All Comments-->
      <div class="container">
        <h3 class="masthead-heading mb-0">Comments</h3><br>
        <form method="POST" id="comment_form">
            <div class="form-group">
                <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name"
                    required />
            </div>
            <div class="form-group">
                <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment"
                    rows="5" required></textarea>
            </div>
            <div class="form-group">
                <input type="hidden" name="comment_id" id="comment_id" value="0" />
                <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
            </div>
        </form>
        <span id="comment_message"></span>
        <br />
        <div id="display_comment"></div>
    </div>


    <script>
        $(document).ready(function () {

            $('#comment_form').on('submit', function (event) {
                event.preventDefault();
                var form_data = $(this).serialize();
                $.ajax({
                    url: "add_comment.php",
                    method: "POST",
                    data: form_data,
                    dataType: "JSON",
                    success: function (data) {
                        if (data.error != '') {
                            $('#comment_form')[0].reset();
                            $('#comment_message').html(data.error);
                            $('#comment_id').val('0');
                            load_comment();
                        }
                    }
                })
            });

            load_comment();

            function load_comment() {
                $.ajax({
                    url: "fetch_comment.php",
                    method: "POST",
                    success: function (data) {
                        $('#display_comment').html(data);
                    }
                })
            }

            $(document).on('click', '.reply', function () {
                var comment_id = $(this).attr("id");
                $('#comment_id').val(comment_id);
                $('#comment_name').focus();
            });

        });
    </script>


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
    <script src="js/pwa.js"></script>
  </body>

<!-- Mirrored from designing-world.com/affan-1.1.0/page-blog-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 May 2021 12:40:19 GMT -->
</html>