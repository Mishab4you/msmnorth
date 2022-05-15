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
        <title>MSM NORTH - KKD</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets2/img/msm2.png" />
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
body {
    margin: 0;
    padding-top: 40px;
    color: #2e323c;
    background: #f5f6fa;
    position: relative;
    height: 100%;
}
.account-settings .user-profile {
    margin: 0 0 1rem 0;
    padding-bottom: 1rem;
    text-align: center;
}
.account-settings .user-profile .user-avatar {
    margin: 0 0 1rem 0;
}
.account-settings .user-profile .user-avatar img {
    width: 90px;
    height: 90px;
    -webkit-border-radius: 100px;
    -moz-border-radius: 100px;
    border-radius: 100px;
}
.account-settings .user-profile h5.user-name {
    margin: 0 0 0.5rem 0;
}
.account-settings .user-profile h6.user-email {
    margin: 0;
    font-size: 0.8rem;
    font-weight: 400;
    color: #9fa8b9;
}
.account-settings .about {
    margin: 2rem 0 0 0;
    text-align: center;
}
.account-settings .about h5 {
    margin: 0 0 15px 0;
    color: #007ae1;
}
.account-settings .about p {
    font-size: 0.825rem;
}
.form-control {
    border: 1px solid #cfd1d8;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    font-size: .825rem;
    background: #ffffff;
    color: #2e323c;
}

.card {
    background: #ffffff;
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    border: 0;
    margin-bottom: 1rem;
}


    </style>
    <body id="page-top">
        <!-- Navigation-->
            <div class="container">

</div>
<!-- Portfolio Modal 3-->
<div class="portfolio-modal modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="portfolioModal3Label" aria-hidden="true">
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
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0" id="portfolioModal3Label">Contact Us</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <!-- Portfolio Modal - Text-->

                                    <p class="mb-5">+91 9947154691</p>
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



        <div class="container">
<div class="row gutters">
<div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
		<div class="account-settings">
			<div class="user-profile">
				<div class="user-avatar">
					<img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
				</div>
				<h5 class="user-name"><?php echo $_SESSION['username']; ?></h5>
				<h6 class="user-email"><?php echo $_SESSION['email']; ?></h6>
			</div>
			<!-- <div class="about">
				<h5>About</h5>
				<p>I'm Yuki. Full Stack Designer I enjoy creating user-centric, delightful and human experiences.</p>
			</div> -->
		</div>
	</div>
</div>
</div>
<div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
<div class="card h-100">
	<div class="card-body">
        <div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mt-3 mb-2 text-danger">ലൈവ് നടക്കുന്ന സന്ദർഭങ്ങളിൽ നിങ്ങളുടെ പേരും ഫോൺ നമ്പറും വച്ച് ലോഗിൻ ചെയ്താൽ മാത്രമേ നിങ്ങൾക്ക് ലൈവിൽ പ്രവേശിക്കാനാവൂ. അതിനാൽ താഴെ കാണുന്ന നിങ്ങൾ നൽകിയ പേരും നമ്പറും ഓർത്തു വെക്കാൻ ശ്രമിക്കുക.</h6>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="Street">Your name</label>
					<p type="name" class="form-control" id="Street" placeholder="Enter Street"><font color="red"><?php echo $_SESSION['username']; ?></font></p>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="ciTy">Phone number</label>
					<p type="name" class="form-control" id="ciTy" placeholder="Enter City"><font color="red"><?php echo $_SESSION['phone']; ?></font></p>
				</div>
			</div>
			
		 </div><br>
		<div class="row gutters">
			<!---<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
				<h6 class="mb-2 text-primary">Registered Details</h6>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="fullName">Full Name</label>
					<p  class="form-control" id="fullName" placeholder="Enter full name"><!?php echo $_SESSION['username']; ?></p>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="eMail">Email</label>
					<p type="email" class="form-control" id="eMail" placeholder="Enter email ID"><!?php echo $_SESSION['email']; ?></p>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="phone">Phone</label>
					<p type="text" class="form-control" id="phone" placeholder="Enter phone number"><!?php echo $_SESSION['phone']; ?></p>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="website">Gender</label>
					<p type="url" class="form-control" id="website" placeholder="Website url"><!?php echo $_SESSION['gender']; ?></p>
				</div>
			</div>
            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="phone">Age</label>
					<p type="text" class="form-control" id="phone" placeholder="Enter phone number"><!?php echo $_SESSION['age']; ?></p>
				</div>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
				<div class="form-group">
					<label for="website">Zone</label>
					<p type="url" class="form-control" id="website" placeholder="Website url"><!?php echo $_SESSION['optionbox']; ?></p>
				</div>
			</div>---->
		</div> 
		
		<div class="row gutters">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                
				<div class="text-right">
                <a type="button" onclick="window.print()" class="btn btn-primary">Print</a>
					<a type="button" href="index.php" id="submit" name="submit" class="btn btn-secondary">Back</a><br><br>
                    <div class="border-top card-body text-center">For any correction contact us<br> <a href="https://wa.me/+919947154691">+91 994715 4691</a></div>

				</div>
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