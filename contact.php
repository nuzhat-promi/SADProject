
<!DOCTYPE html>
<html lang="en">
<head>
<title>Smart Batman</title>

<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Batman, Training Website for Batman, Military Officer, Barak NCO" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->

<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<!-- Font Awesome Icon -->
<link href="css/font-awesome.css" rel="stylesheet"> 

<!-- Flex Slider -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />

<!-- Custom stlylesheet -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- JavaScript -->
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>

<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!--//fonts-->

<!-- Icons -->
<link rel="shortcut icon" href="images/icon.png">

</head>
<body>
<!-- header -->
<header id="home">
	<div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default navbar-static-top">
			    
			    <!-- Collapse nav button -->
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.php">Smart Batman</a></h1>
				</div>
				<!-- Collapse nav button -->
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item menu__item--current"><a href="index.php" class="menu__link">Home</a></li>
							<li class="menu__item"><a href="contact.php" class="menu__link">Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>
<!-- banner -->
	<div class="w3ls-banner-1">
		
	</div>	
	<!-- //banner --> 
<!--//Header-->
<!-- //Modal1 -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
		<!-- Modal1 -->
		<div class="modal-dialog">
			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4>DISCIPLINE</h4>
							<img src="images/1.jpg" alt=" " class="img-responsive">
							<h5>We know what you love</h5>
							<p>Providing guests unique and enchanting views from their rooms with its exceptional amenities, makes Star Hotel one of bests in its kind.Try our food menu, awesome services and friendly staff while you are here.</p>
					</div>
				</div>
		</div>
	</div>
<!-- //Modal1 -->
</header>
<!-- contact -->
	<div class="contact">
		<div class="container">
			<div class="w3-heading-grid">
			
			<div class="w3layouts_head">
				<h3 class="tittle">Contact</h3>
					<div class="border"></div>
				</div>
				
			</div>
			<!--
			<div class="map">
				<h4>How to find us :</h4>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48388.364704188425!2d-73.99489843077946!3d40.7120108624803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a27e2f24131%3A0x64ffc98d24069f02!2sCANADA!5e0!3m2!1sen!2sin!4v1490244727346"  style="border:0" allowfullscreen></iframe>
			</div>
			-->
			
			
			<div class="contact-infom">
				<h4>Miscellaneous Information:</h4>
				<p>Smart Batman is a training website which was made as a group project for System Analysis and Design Lab. The group consists of six members: Nuzhat Tabassum Promi(201514039), Maria Afnan Pushpo(201514030), Mohoshina Akter Toma(201514032), Shoab Ur Rashid(201514034), Lt. Aftab(201514122), Lt. Kamrul(201514133).</p>
			</div>	
			<div class="contact-form">
				<h4>Contact Form</h4>
				<form action="contact.php" method="post">
					<input type="text" name="name" placeholder="Name" required="">
					<input type="email" name="email" placeholder="Email" required="email">
					<input type="text" name="phone" placeholder="Telephone" required="">
					<textarea name="msg" placeholder="Message" required=""></textarea>
					<input type="submit" name="submit" value="Submit">
					<!--<button class="btn1">Submit</button>-->
					<!--<input type="hidden" name="button_pressed" value="1" >-->
				</form>
			</div>	
		</div>
	</div>
	<!-- //contact -->

<?php

if(isset($_POST['submit']))
{
    $to      = 'nuzhat.mist@gmail.com';
    $subject = 'Feedback from Smart Batman';
    $message = 'Hello! Name: ' .$_POST['name'] . "\r\n\r\n";
    $message .= 'Email: ' .$_POST['email'] . "\r\n\r\n";
    $message .= 'Phone Number: ' .$_POST['phone'] . "\r\n\r\n";
    $message .= 'Feedback: ' .$_POST['msg'];
    $headers = 'From: webmaster@example.com' . "\r\n";
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    if($email){
        $headers .= 'Reply-To: $email' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    }

    $retval = mail($to, $subject, $message, $headers, '-faudhorabd@gmail.com');

    if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
}

?>

   <!-- Footer -->
	<div id="contact" class="w3l-footer">
		<div class="container">
         <div class="footer-info-agile">
				<div class="col-md-2 footer-info-grid links">
					<h4>Quick links</h4>
					<ul>
						       <li><a href="#home">Home</a></li> 
								<li><a href="index.php#about">About</a></li> 
								<li><a href="index.php#team">Team</a></li> 
								<li><a href="#contact">Contact</a></li> 
					</ul>
				</div>
				<div class="col-md-3 footer-info-grid address">
					<h4>Address</h4>
					<address>
						<ul>
							<li>Military Institute of Science and Technology</li>
							<li>Mirpur Cantonment</li>
							<li>Dhaka</li>
							<li>Telephone : +8801747100000</li>
							<li>Email : <a class="mail" href="#">info@example.com</a></li>
						</ul>
					</address>
				</div>
				<div class="col-md-3 footer-grid">
				   
				</div>
				<div class="col-md-4 footer-info-grid">
				<div class="connect-social">
					<h4>Connect with us</h4>
					<section class="social">
                        <ul>
							<li><a class="icon fb" href="https://www.facebook.com/Smart-Batman-163878957791598/?modal=admin_todo_tour"><i class="fa fa-facebook"></i></a></li>
							<li><a class="icon yt" href="https://www.youtube.com/channel/UCL89KKkLs0tZKld-iIS3NGw"><i class="fa fa-youtube-play"></i></a></li>
							<li><a class="icon gp" href="http://10minuteschool.com/"><i class="fa fa-google-plus"></i></a></li>
						</ul>
					</section>
				</div>
				</div>
				
				<div class="clearfix"></div>
			</div>

			<!--<div class="connect-agileits newsletter">
				<h4>Newsletter</h4>
					<p>Subscribe to our newsletter and we will inform you about newest courses and exams.
					</p>
					<form action="#" method="post" class="newsletter">
						<input class="email" type="email" placeholder="Your email address..." required="">
						<input type="submit" class="submit" value="Subscribe">
					</form>
			</div>-->
	   </div>
     </div>
	<div class="copy">
		<p>© 2018 Grp3 . All Rights Reserved | Design by <a href="#">Grp3 SAD Lab</a> </p>
	</div>
<!--/footer -->
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- flexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script>
			<!-- //flexSlider -->
		<script src="js/responsiveslides.min.js"></script>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider4").responsiveSlides({
							auto: true,
							pager:true,
							nav:false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
			</script>
		<!--search-bar-->
		<script src="js/main.js"></script>	
<!--//search-bar-->
	
	<!-- js for Counter -->
		<script type="text/javascript" src="js/numscroller-1.0.js"></script>
	<!-- /js for Counter -->

<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<div class="arr-w3ls">
		<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	</div>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>