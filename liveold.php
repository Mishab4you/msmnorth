<?php 
include("path.php");
include(ROOT_PATH . "/app/controllers/users.php");



?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>MSM KKD NORTH - LIVE</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets2/img/msmlogo.png" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
        type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="assets2/css/styles.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.6.0/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
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
    .button {
        border: 1px transparent;
        -webkit-border-radius: 40px;
        border-radius: 40px;
        color: #eeeeee;
        cursor: pointer;
        display: inline-block;
        font-family: Arial;
        font-size: 20px;
        padding: 8px 30px;
        text-align: center;
        text-decoration: none;
        margin-left: 20px;
        -webkit-animation: glowing 1300ms infinite;
        -moz-animation: glowing 1300ms infinite;
        -o-animation: glowing 1300ms infinite;
        animation: glowing 1300ms infinite;
      }
      @-webkit-keyframes glowing {
        0% {
          background-color: #0091b2;
          -webkit-box-shadow: 0 0 3px #0091b2;
        }
        50% {
          background-color: #21c7ed;
          -webkit-box-shadow: 0 0 15px #21c7ed;
        }
        100% {
          background-color: #0091b2;
          -webkit-box-shadow: 0 0 3px #0091b2;
        }
      }
      @keyframes glowing {
        0% {
          background-color: #0091b2;
          box-shadow: 0 0 3px #0091b2;
        }
        50% {
          background-color: #21c7ed;
          box-shadow: 0 0 15px #21c7ed;
        }
        100% {
          background-color: #0091b2;
          box-shadow: 0 0 3px #0091b2;
        }
      }
      /* .svg-btn {
        display: block;
        width: 230px;
        height: 230px;
        margin-left: 10px;
      }
      svg {
        fill: blue;
        -webkit-animation: glowing-polygon 1300ms infinite;
        -moz-animation: glowing-polygon 1300ms infinite;
        -o-animation: glowing-polygon 1300ms infinite;
        animation: glowing-polygon 1300ms infinite;
      } */
      @-webkit-keyframes glowing-polygon {
        0% {
          fill: #0091b2;
          -webkit-filter: drop-shadow( 0 0 3px #0091b2);
        }
        50% {
          fill: #21c7ed;
          -webkit-filter: drop-shadow( 0 0 15px #21c7ed);
        }
        100% {
          fill: #0091b2;
          -webkit-filter: drop-shadow( 0 0 3px #0091b2);
        }
      }
      @keyframes glowingPolygon {
        0% {
          fill: #0091b2;
          filter: drop-shadow( 0 0 3px #0091b2);
        }
        50% {
          fill: #21c7ed;
          filter: drop-shadow( 0 0 15px #21c7ed);
        }
        100% {
          fill: #0091b2;
          filter: drop-shadow( 0 0 3px #0091b2);
        }
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

    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.php">Msm Kozhikode (N)</a>
            <button
                class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded"
                type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="#portfolio">Events</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="#about">About</a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="#contact">Contact</a></li>
                    <?php if (isset($_SESSION['id'])): ?>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="#">
                            <font color="#1abc9c">
                                <?php echo $_SESSION['username']; ?>
                            </font>
                        </a></li>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="logout.php">Logout</a></li>
                    <?php if($_SESSION['admin']): ?>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="<?php echo BASE_URL . '/admin/dashboard.php'?>">Dashboard</a></li>
                    <?php endif; ?>
                    <?php else: ?>
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                            href="logmodel.php">Register</a></li>
                    <?php endif; ?>


                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->

    <header class="masthead bg-primary text-white text-center">
    <!-- <marquee> <p class="p1">Dear students, Announcing the winners of yesterday's quiz competition :<font color="red"> 1st - Khadeeja minha koylandi  ||  2nd - Najiya nasreen vadakara  ||  3rd - Salva rakheeb T vadakara.</font> Congratulations to the winners. For more details <a href="result.php">click here</a></p> </marquee> -->
    <marquee> <p class="p1">The timing of our iqra' moral school event has changed to <font color="red"><strong>10.30am - 11.30am</strong></font></p> </marquee>
    <!-- <marquee> <p class="p1">ചില സാങ്കേതിക കാരണങ്ങളാൽ പരിപാടിയുടെ ഷെഡ്യൂളിൽ ചെറിയ മാറ്റം വന്നിട്ടുണ്ട്</p> </marquee> -->

        <div class="container d-flex align-items-center flex-column">
            <button class="btn btn-danger h1 text-uppercase text-bold ">Today's Live</button>
            <br>







<button class="btn btn-danger"><i class="fas fa-eye"></i> Today's Total Viewers : 354  <i class="fas fa-users"></i></button><br><br>





<!-- <iframe   src="https://www.youtube.com/embed/AMZe4_JDGs0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
    <!-- <iframe width="370" height="390" src="https://www.youtube.com/embed/0DcUmq-hb6w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
            <!-- <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2F108035594135005%2Fvideos%2F218919389705862%2F&show_text=false&width=560" width="370" height="390" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe> -->
            <!-- <iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fhudaif.vo%2Fvideos%2F575658823837809%2F&width=1280"  style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe> -->
                <!-- <iframe width="370" height="390" src="https://www.youtube.com/embed/PEcfeo26WgE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
            <img class="img-fluid" src="assets2/img/portfolio/fac.jpeg" alt="..." />






















            <br><br>
            <div class="d-sm-flex align-items-center justify-content-between mb-12">
                <a href="quiz.php" class=" d-sm-inline-block btn btn-sm btn-warning shadow-sm"><i
                        class="fas fa-pen fa-sm text-white-50"></i> Quiz Competition</a>
                <a href="live.php" class=" d-sm-inline-block btn btn-sm btn-danger shadow-sm"><i
                        class="fas fa-recycle fa-sm text-white-50"></i> Refresh The Page</a><br><br>
                        <a href="result.php" class="button"><i
                        class="fas fa-recycle fa-sm text-white-50"></i> Quiz Winners!</a>
            </div><br>
            <a href="index.php" class="btn btn-danger btn-block h1 text-uppercase text-bold ">Back to main page</a>

            <br>

              
		  
        <div class="col form-group">
			<label>Share the live :</label> 
        <input type="text" class="form-control" value="http://live.msmnorth.com/live.php" id="myInput"><br>
<button class="btn btn-warning" onclick="myFunction()">Copy Link</button>
</div>
<script>
function myFunction() {
  var copyText = document.getElementById("myInput");
  copyText.select();
  copyText.setSelectionRange(0, 99999)
  document.execCommand("copy");
  alert("Copied the text: " + copyText.value);
}
</script><br>
<div class="border-top card-body text-center">Getting Trouble? Contact Us<br> +91 994715 4691</a><br>+91 91585 55799</a></div>




        </div>
    </header>
    <!-- Portfolio Section--><br>


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









    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes)-->
    <div class="scroll-to-top d-lg-none position-fixed">
        <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i
                class="fa fa-chevron-up"></i></a>
    </div>
    <!-- Portfolio Modals-->
    <!-- Portfolio Modal 1-->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog"
        aria-labelledby="portfolioModal1Label" aria-hidden="true">
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
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"
                                    id="portfolioModal1Label">Moral School</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cabin.png" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque
                                    assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam
                                    velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.
                                </p>
                                <button class="btn btn-primary" data-dismiss="modal">
                                    Apply Now
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Modal 2-->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog"
        aria-labelledby="portfolioModal2Label" aria-hidden="true">
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
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"
                                    id="portfolioModal2Label">Tasty Cake</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/cake.png" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque
                                    assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam
                                    velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.
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
    <!-- Portfolio Modal 3-->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog"
        aria-labelledby="portfolioModal3Label" aria-hidden="true">
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
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"
                                    id="portfolioModal3Label">Circus Tent</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/circus.png" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque
                                    assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam
                                    velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.
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
    <!-- Portfolio Modal 4-->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog"
        aria-labelledby="portfolioModal4Label" aria-hidden="true">
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
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"
                                    id="portfolioModal4Label">Controller</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/game.png" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque
                                    assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam
                                    velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.
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
    <!-- Portfolio Modal 5-->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog"
        aria-labelledby="portfolioModal5Label" aria-hidden="true">
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
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"
                                    id="portfolioModal5Label">Locked Safe</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/safe.png" alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque
                                    assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam
                                    velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.
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
    <!-- Portfolio Modal 6-->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog"
        aria-labelledby="portfolioModal6Label" aria-hidden="true">
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
                                <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0"
                                    id="portfolioModal6Label">Submarine</h2>
                                <!-- Icon Divider-->
                                <div class="divider-custom">
                                    <div class="divider-custom-line"></div>
                                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                    <div class="divider-custom-line"></div>
                                </div>
                                <!-- Portfolio Modal - Image-->
                                <img class="img-fluid rounded mb-5" src="assets/img/portfolio/submarine.png"
                                    alt="..." />
                                <!-- Portfolio Modal - Text-->
                                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque
                                    assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam
                                    velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.
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
    <script src="assets/mail/jqBootstrapValidation.js"></script>
    <script src="assets/mail/contact_me.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!--Start of Tawk.to Script-->
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
    <!--End of Tawk.to Script-->
</body>

</html>
