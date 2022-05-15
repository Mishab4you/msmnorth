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
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MSM KOZHIKODE - NORTH</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets2/img/portfolio/msmlogo2.png" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="assets2/css/styles.css" rel="stylesheet" />
    </head>
    <style>
        .btn2 {
    display: inline-block;
    font-weight: 400;
    color: #212529;
    text-align: center;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-color: #c10b0b;
    border: 0.125rem solid transparent;
        border-top-color: transparent;
        border-right-color: transparent;
        border-bottom-color: transparent;
        border-left-color: transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.5rem;
    transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
}
.btn-outline-light {
    color: #f8f9fa;
    border-color: #f8f9fa;
}
.btn:not(:disabled):not(.disabled) {
    cursor: pointer;
}
.btn-xl {
    padding: 1rem 1.75rem;
    font-size: 1.25rem;
}
a {
    color: #1abc9c;
    text-decoration: none;
    background-color: transparent;
}
.p1 {
  animation: color-change 1s infinite;
}

@keyframes color-change {
  0% { color: red; }
  50% { color: white; }
  100% { color: yellow; }
}
    </style>
    <body id="page-top">
    <!--Start of Tawk.to Script-->

<!--End of Tawk.to Script-->
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">Msm KOZHIKODE (N)</a>
                <button class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Events</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">About</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a></li>
                        <?php if (isset($_SESSION['id'])): ?>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="profile.php"><font color="#1abc9c"><?php echo $_SESSION['username']; ?></font></a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="logout.php">Logout</a></li>
                        <?php if($_SESSION['admin']): ?>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="admin/dashboard.php">Admin Panel</a></li>
                        <?php endif; ?>
                        <?php else: ?>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="logmodel.php">Register</a></li>
                        <?php endif; ?>

                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <header class="masthead bg-image text-white text-center"  style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');">
        <marquee> <p class="p1">Dear students, Announcing the winners of yesterday's quiz competition :<font color="red"> 1st - Khadeeja minha koylandi  ||  2nd - Najiya nasreen vadakara  ||  3rd - Salva rakheeb T vadakara.</font> Congratulations to the winners. For more details <a href="result.php">click here</a></p> </marquee>
            <div class="container d-flex align-items-center flex-column">
            <?php include(ROOT_PATH . '/app/includes/messages.php'); ?>
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="assets2/img/portfolio/msmlogo2.png" width="140px" />
                <div class="col-lg-4 mb-5 mb-lg-0">
                        <a class="btn btn-outline-light btn-social mx-1" href="https://m.facebook.com/MSM-Kozhikode-NORTH-108035594135005/"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://instagram.com/msm_kozhikodenorth?igshid=1j6q6gjz4c2ha"><i class="fab fa-fw fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://wa.me/+916238605493"><i class="fab fa-fw fa-whatsapp"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.youtube.com/channel/UCNTx-vlLzyDtvq35ta-iNNA"><i class="fab fa-youtube"></i></a>
                    </div><br>
                <!-- Masthead Heading-->
                <h2>Welcome To</h2>
               <marquee><h1 class="masthead-heading text-uppercase mb-0">MSM KOZHIKODE NORTH</h1></marquee>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Msm - Kozhikode North - District</p>
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" data-toggle="modal" data-target="#quiz">
                        <p class="p1">Today's Quiz</p>
                    </a><br> <br></div>
                <?php if (isset($_SESSION['id'])): ?>
                    <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="profile.php">
                        <i class="fas fa-user mr-2"></i>
                        Welcome <?php echo $_SESSION['username']; ?>
                    </a>
                    <?php else: ?>
                <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="logmodel.php">
                        <i class="fas fa-user mr-2"></i>
                        Register Now
                    </a><br> <br></div>
                   
                    <?php endif; ?>

                    <div class="text-center mt-4">
                    <a class="btn2 btn-xl btn-outline-light" href="live.php">
                        <i class="fas fa-play button mr-2"></i>   
                        Today's Live
                    </a>
                </div>

                

            </div>
        </header>
        <!-- Portfolio Section-->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Programmes</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets2/img/portfolio/moral.jpeg" alt="..." />
                            <center><button class="btn btn-primary"><p class="masthead-subheading font-weight-light mb-0">IQRA' MORAL SCHOOL</p></button></center>
                        </div>
                    </div>
                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets2/img/portfolio/cree.png" alt="..." /><br>
                            <center><button class="btn btn-primary"><p class="masthead-subheading font-weight-light mb-0">CRE</p></button></center>

                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-toggle="modal" data-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="assets2/img/portfolio/hs.jpeg" alt="..." />
                            <center><button class="btn btn-primary"><p class="masthead-subheading font-weight-light mb-0">HIGHSEC</p></button></center>

                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- About Section-->
         <!--Carousel Wrapper-->
    <div id="carousel-example-1z" class="carousel slide carousel-fade z-depth-1-half" data-ride="carousel">
      <!--Indicators-->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
        <li data-target="#carousel-example-1z" data-slide-to="3"></li>
        <li data-target="#carousel-example-1z" data-slide-to="4"></li>

      </ol>
      <!--/.Indicators-->
      <!--Slides-->
      <div class="carousel-inner" role="listbox">
        <!--First slide-->
        <div class="carousel-item active">
          <img class="d-block w-100" src="assets2/img/portfolio/msmwall.jpg" alt="First slide">
        </div>
        <!--/First slide-->
        <!--Second slide-->
        <div class="carousel-item">
          <img class="d-block w-100" src="assets2/img/portfolio/msm2.jpg" alt="Second slide">
        </div>
        <!--/Second slide-->
        <!--Third slide-->
        <div class="carousel-item">
          <img class="d-block w-100" src="assets2/img/portfolio/woodcraft.jpg" alt="Third slide">
        </div>


        <div class="carousel-item">
          <img class="d-block w-100" src="assets2/img/portfolio/hero-bg.jpg" alt="Second slide">
        </div>

        <div class="carousel-item">
          <img class="d-block w-100" src="assets2/img/portfolio/bgg.jpg" alt="Second slide">
        </div>
        <!--/Third slide-->
      </div>
      <!--/.Slides-->
      <!--Controls-->
      <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      <!--/.Controls-->
    </div><br><br>
    <!--/.Carousel Wrapper-->
        <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ml-auto"><p class="lead">
                    MUJAHID STUDENTS MOVEMENT 
                     ——————————————<br>
ഇസ്ലാം മതത്തിലെ അടിസ്ഥാന വിശ്വാസങ്ങൾ, ആചാരങ്ങൾ, അനുഷ്ഠാനങ്ങൾ ആഘോഷങ്ങൾ തുടങ്ങിയവ പ്രമാണബന്ധിതമായി പ്രചരിപ്പിക്കുന്നു വിദ്യാർഥികൾക്കിടയിൽ ഇസ്ലാമിനെക്കുറിച്ചുള്ള തെറ്റിദ്ധാരണകൾ അകറ്റുവാനുതകുന്ന ബോധവൽക്കരണം നടത്തുന്നു ലഹരിയുടെ ഉപയോഗം, ലൈംഗിക വൈകൃതങ്ങൾ, സാങ്കേതിക വിദ്യയുടെ ദുരുപയോഗം, സാമ്പത്തിക കുറ്റകൃത്യങ്ങൾ, അച്ചടക്കരാഹിത്യം തുടങ്ങിയ അധാർമികതകളുടെ ദൂഷ്യഫലങ്ങൾ ബോധ്യപ്പെടുത്തി, ധാർമിക ജീവിതത്തിനാവശ്യമായ പാഠങ്ങൾ പകർന്നു നൽകുന്നു റാഗിംഗ്,രാഷ്ട്രീയ സംഘർഷങ്ങൾ തുടങ്ങിയവയാൽ സംഘർഷ ഭരിതമായ കലാലയങ്ങളിൽ വിശ്വമാനവീകതയും സാഹോദര്യവും പ്രചരിപ്പിക്കുന്നു. കലാലയങ്ങളുടെ മതേതരാന്തരീക്ഷം നിലനിർത്തുവാനായി പരിശ്രമിക്കുന്നു
                    </p></div>
                    <div class="col-lg-4 mr-auto"><p class="lead">
                    HISTORY                 <br>                            
                    ——————————————<br>
കേരളത്തിലെ മുസ്ലിം നവോത്ഥാന പ്രവർത്തനങ്ങൾക്ക് നേതൃത്വം നൽകിയ സയ്യിദ് സനാഉള്ള മക്തി തങ്ങൾ, വക്കം അബ്ദുൽഖാദിർ മൗലവി തുടങ്ങിയവരുടെ പാത പിന്തുടർന്ന് ഇ.മൊയ്തുമൗലവി, മുഹമ്മദ് അബ്ദുറഹിമാൻ സാഹിബ്, കെ.എം മൗലവി, കെ.എം സീതി സാഹിബ് തുടങ്ങിയവർ രൂപീകരിച്ച കേരള മുസ്ലിം ഐക്യ സംഘത്തിന്റെ തുടർച്ചയായി 1950 ൽ രൂപീകൃതമായ കേരള നദുവത്തുൽ മുജാഹിദീൻ 1970 ൽ രൂപം കൊടുത്ത വിദ്യാർത്ഥി സംഘടനയാണ് മുജാഹിദ് സ്റ്റുഡൻസ് മൂവ്മെന്റ് (എം എസ് എം).
                    </p></div>
                </div>
                <!-- About Section Button-->
                <!-- <div class="text-center mt-4">
                    <a class="btn btn-xl btn-outline-light" href="#!">
                        <i class="fas fa-download mr-2"></i>
                        We Love Msm
                    </a>
                </div> -->
            </div>
        </section>
        <!-- Contact Section-->
        <section class="page-section" id="contact">
            <div class="container">
                <!-- Contact Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Contact Section Form-->
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->
                        <form id="contactForm" name="sentMessage" novalidate="novalidate">
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Name</label>
                                    <input class="form-control" id="name" type="text" placeholder="Name" required="required" data-validation-required-message="Please enter your name." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Email Address</label>
                                    <input class="form-control" id="email" type="email" placeholder="Email Address" required="required" data-validation-required-message="Please enter your email address." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Phone Number</label>
                                    <input class="form-control" id="phone" type="tel" placeholder="Phone Number" required="required" data-validation-required-message="Please enter your phone number." />
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="control-group">
                                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                                    <label>Message</label>
                                    <textarea class="form-control" id="message" rows="5" placeholder="Message" required="required" data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <br />
                            <div id="success"></div>
                            <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Send</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                        Kozhikode North District Committee 
                            <br />
                            Salafi complex Near Civil Station, Koyilandy- 673305                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://m.facebook.com/MSM-Kozhikode-NORTH-108035594135005/"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://instagram.com/msm_kozhikodenorth?igshid=1j6q6gjz4c2ha"><i class="fab fa-fw fa-instagram"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://wa.me/+916238605493"><i class="fab fa-fw fa-whatsapp"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.youtube.com/channel/UCNTx-vlLzyDtvq35ta-iNNA"><i class="fab fa-youtube"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">MUJAHID STUDENTS MOVEMENT</h4>
                        <p class="lead mb-0">
                        Official Website Of Mujahid Students Movement (MSM),Kozhikode North, India, the students wing of Kerala Nadvathul Mujahideen  <br> Designed By <a href="http://msb.epizy.com">Msb Creations</a>
                            .
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white">
            <div class="container">
                <small>
                    Copyright &copy; MsM
                    <!-- This script automatically adds the current year to your website footer-->
                    <!-- (credit: https://updateyourfooter.com/)-->
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                </small>
            </div>
        </div>
        <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
        <div class="scroll-to-top d-lg-none position-fixed">
            <a class="js-scroll-trigger d-block text-center text-white rounded align-left" href="#page-top"><i class="fa fa-chevron-up"></i></a>
        </div>
        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-labelledby="portfolioModal1Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal1Label">IQRA' Moral School</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets2/img/portfolio/moral.jpeg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">
 കൗമാരക്കാരായ വിദ്യാർഥികൾക്ക് ഇസ്ലാമിന്റെ വെള്ളിവെളിച്ചം എത്തിച്ചുകൊടുക്കുക എന്ന ലക്ഷ്യമാണ് എം എസ് എം മോറൽ സ്കൂളിലൂടെ മുന്നോട്ടുവെക്കുന്നത്.
 അധാർമികതയുടെ കൂരിരുട്ടിൽ വഴിയറിയാതെ തപ്പിനടക്കുന്ന വിദ്യാർത്ഥി സമൂഹത്തിന് മതവും മനുഷ്യത്വവും മനസ്സിലാക്കാനും, സ്വഭാവ വിശുദ്ധിയും ജീവിത ചൈതന്യവുമാണ് ഒരു നല്ല സമൂഹത്തിന്റെ സംസ്കാരമെന്ന വിദ്യാർത്ഥികളെ ബോധ്യപ്പെടുത്തുകയാണ് എം എസ് എം മോറൽ സ്കൂൾ.
 ഖുർആൻ തജ്‌വീദ് തഫ്സീർ ഹദീസ് ഫിഖ്ഹ് വിശ്വാസം സ്വഭാവം ചരിത്രം എന്നീ വിഷയങ്ങളും മറ്റ് പൊതു വിഷയങ്ങളിലുമുള്ള ധാരണ വിദ്യാർത്ഥി സമൂഹത്തിൽ വളർത്തിയെടുക്കുകയാണ് ഇവിടെ എം എസ് എം. അതിവേഗം കറ പുരളുന്ന നമ്മുടെ മനസ്സുകളെ വിദ്യകൊണ്ട് ശുദ്ധീകരിക്കാൻ ഇതാ എം എസ് എം കൗമാരക്കാരായ വിദ്യാർഥികളെ വിളിക്കുന്നു മോറൽ സ്കൂളിലേക്ക്.</p>
                                    <a href="live.php" class="btn btn-danger btn-block">
                                        Go To Live!
                </a>
                <a href="quiz.php" class="btn btn-primary btn-block">
                                       Enter to quiz competition - coming soon! 
                </a>
              
                                    <!-- <a href="login.php" class="btn btn-primary btn-block">
                                        Register Now
                </a> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-labelledby="portfolioModal2Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal2Label">CRE</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets2/img/portfolio/cree.png" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">എന്താണ് സി ആർ ഇ ?<br>
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
<font color="red">District CONVEENERS</font><br>
nijas ahammad :<br>
 +91 7034504531<br>
<font color="red">Zone CONVEENERS</font><br>

Koyilandy - Hafeed ibrahim :
<br> +91 9946163681
<br>
Vadakara - fahad :
<br> +91 9567096077
<br>
Perambra -mishab sani :
<br> +91 97455 66919</button></p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal3Label">Highsec</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets2/img/portfolio/hs.jpeg" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5"></p>
                                    <a href="#" class="btn btn-danger btn-block" data-toggle="modal" data-target="#hs2020">
                                     
                                        HighSec 2020
                </a>
                <a href="#" class="btn btn-primary btn-block" data-toggle="modal" data-target="#!">
                                     
                                     HighSec 2019
             </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 4-->
        <div class="portfolio-modal modal fade" id="hs2020" tabindex="-1" role="dialog" aria-labelledby="portfolioModal4Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal4Label">HighSec 2020</h2>
                                    <!-- Icon Divider-->
                                 
                                     
                                        <h5>Day - 1</h5><br><br>
                                        <iframe width="560" height="315" src="https://www.youtube.com/embed/jAGuATREpnA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><br><br><br>
                                            <h5>Day - 2</h5><br><br>
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/rQ3GbHpWJX4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                    
                                    <!-- Portfolio Modal - Image-->
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5"></p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 5-->
        <div class="portfolio-modal modal fade" id="hs2019" tabindex="-1" role="dialog" aria-labelledby="portfolioModal5Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal5Label">Locked Safe</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <img class="img-fluid rounded mb-5" src="assets2/img/portfolio/safe.png" alt="..." />
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 6-->
        <div class="portfolio-modal modal fade" id="quiz" tabindex="-1" role="dialog" aria-labelledby="portfolioModal6Label" aria-hidden="true">
            <div class="modal-dialog modal-xl" role="document">
                <div class="modal-content">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fas fa-times"></i></span>
                    </button>
                    <div class="modal-body text-center">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal6Label">Quiz Competition</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <!-- <img class="img-fluid rounded mb-5" src="assets2/img/portfolio/submarine.png" alt="..." /> -->
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-5">
                                    <a href="quiz.php" class="btn btn-danger">Today's Quiz</a>
                                    <a href="result.php" class="btn btn-danger">Results</a>





                                    </p>
                                    <button class="btn btn-primary" data-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Close Window
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
        <!-- Contact form JS-->
        <script src="assets2/mail/jqBootstrapValidation.js"></script>
        <script src="assets2/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="assets2/js/scripts.js"></script>
    
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6095146a185beb22b30b04b3/1f535fgj0';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    </body>
</html>
