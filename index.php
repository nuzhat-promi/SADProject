<?php
session_name('my_app');
session_start();
?>

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
<link rel="icon" href="images/icon.png">

<!-- Sweet Alert -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>

<body>

<?php
if(isset($_GET['message']))
echo '
<script>
    swal("'.$_GET['message'].'!", "Please Log-in again", "warning")
    .then((value) => {
                window.location.href = "http://cse.stereoserver.com/SAD/index.php";
});
</script>'; 

?>
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
							<li class="menu__item menu__item--current"><a href="#home" class="menu__link">Home</a></li>
							<li class="menu__item"><a href="#about" class="menu__link">About</a></li>
							<li class="menu__item"><a href="#team" class="menu__link">Team</a></li>
							<li class="menu__item"><a href="contact.php" class="menu__link">Contact Us</a></li>
							<li class="menu__item"><a href="admin.php" class="menu__link">Admin</a></li>
						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>

<!-- //header -->
<!-- banner -->
	<div class="w3ls-banner">
		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top">

							<div class="container">
								<div class="agileits-banner-info">
								<h4>NEED A TRAINED BATMAN? </h4>
									<h3><font color="black">Sign Up Now. It's absolutely free.</font></h3>
									<div class="agileits_w3layouts_more menu__item">
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-log-in"></span> Log In</a>
			</div>
								</div>	
							</div>
						</div>
					</li>
					<li>
						<div class="w3layouts-banner-top w3layouts-banner-top1">
							<div class="container">
								<div class="agileits-banner-info">
								<h4>FACING DIFFICULTY TRAINING YOUR BATMAN? </h4>
									<h3><font color="black">Smart Batman is one click away.</font></h3>
									<div class="agileits_w3layouts_more menu__item">
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-user"></span> Sign Up</a>
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-log-in"></span> Log In</a>
			</div>
								</div>	
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			<!--banner Slider starts Here-->
		</div>
	</div>	
	<!-- //banner -->
	
<!--//Header-->
<!-- //Modal1 -->
	<div class="modal fade" id="myModal1" tabindex="-1" role="dialog">
		<!-- Modal1 -->
		<div class="modal-dialog">
			<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
							<h4>SIGN UP</h4>
							<div class="imgcontainer">
							    <img src="images/avatar.png" alt="Avatar" class="avatar">
					        </div>
					</div>
					<div class="modal-body">
					    <form class="p_layout_size animate" action="">
					        <a href="http://cse.stereoserver.com/SAD/reg_off.php" class="btn btn-primary" role="button">Military Officer</a>
					        <a href="http://cse.stereoserver.com/SAD/reg_nco.php" class="btn btn-success" role="button">Barak NCO</a>
                        </form>
					</div>
					<div class="modal-footer">
                        <button type="button" class="cancelbtn" data-dismiss="modal">Cancel</button>
                    </div>
				</div>
		</div>
	</div>
<!-- //Modal1 -->
<!-- //Modal2 -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<!-- Modal2 -->
		<div class="modal-dialog">
			<!-- Modal content-->
			
			    <div class="modal-content">
			        <ul class="tab-group">
			            <center>
                        <li class="tab active"><a href="#officer">Military Officer</a></li>
                        <li class="tab"><a href="#barak">Barak NCO</a></li>
                        </center>
                    </ul>
                    <div class="modal-header">
							<h4>LOG IN</h4>
							<div class="imgcontainer">
							    <img src="images/avatar.png" alt="Avatar" class="avatar">
					        </div>
					</div>
			        <div class="tab-content">
			            <div id="officer">  <!-- id officer -->
					    <div class="modal-body">
					        <form class="p_layout_size animate" action="/SAD/action_login.php" method="post">
                            
                                <label for="ba_off"><b>B/A Number</b></label>
                                <input type="text" placeholder="Enter your B/A Number" name="ba_off" required>

                                <label for="psw_off"><b>Password</b></label>
                                <input type="password" placeholder="Enter your Password" name="psw_off" required>
                                
                                <!--
                                <label for="gender"><b>Gender</b></label>
                                <input type="radio" name="gender" value="officer">Military Officer
                                <input type="radio" name="gender" value="nco">Barak NCO
                                -->
                                
                                <button name="login_off_btn">Login</button>
                        <!--        <label>
                                    <input type="checkbox" checked="checked" name="remember_off"> Remember me
                                </label>   -->
                            </form>
                        </div>  <!-- //modal-body -->
                        <div class="modal-footer">
                            <button type="button" class="cancelbtn" data-dismiss="modal">Cancel</button>
                        <!--   <span class="psw">Forgot <a href="#">password?</a></span>   -->
                        </div>
					    </div>  
					    <!-- //id officer -->
					    
					    
					    <!-- id barak -->
					    <div id="barak"> 
					    <div class="modal-body">
					        <form class="p_layout_size animate" action="/SAD/action_login.php" method="post">
                                
                                <label for="sol_nco"><b>Soldier Number</b></label>
                                <input type="text" placeholder="Enter your Soldier Number" name="sol_nco" required>

                                <label for="psw_nco"><b>Password</b></label>
                                <input type="password" placeholder="Enter your Password" name="psw_nco" required>

                                <button name="login_nco_btn">Login</button>
                            <!--    <label>
                                    <input type="checkbox" checked="checked" name="remember_nco"> Remember me
                                </label>   -->
                            </form>
                        </div>  <!-- //modal-body -->
                        <div class="modal-footer">
                            <button type="button" class="cancelbtn" data-dismiss="modal">Cancel</button>
                            <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
                        </div>
				    	</div>  
				    	<!-- //id barak -->

                    </div>  
                    <!-- //Tab Content -->
				</div>
				
		</div>
	</div>
<!-- //Modal2 -->

</header>

<!-- /about -->
 	<div id="about" class="about-wthree">
		<div class="container">
			<div class="ab-w3l-spa">
			<div class="w3layouts_head">
					<h3 class="tittle"> Welcome</h3>
						<div class="border"></div>
				</div>
               <p class="about-para-w3ls">Smart Batman is a training website where we provide details training program for Batman so that they can help their respective military officers more efficiently. The website will help them to learn all the regulations and norms with the help of videos. All video and instructions are done in Bengali Language since most Batman are children aged 6-16 yeas. We also help officers find suitable Batman.</p>
				<img src="images/background2.jpg" class="img-responsive" alt="Hair Salon">
					<div class="w3l-slider-img">
						<img src="images/background1.jpg" class="img-responsive" alt="Hair Salon">
					</div>
                    <div class="w3ls-info-about">
						<h4>You'll love all the amenities we offer!</h4>
						<p>Smart Batman at your service. </p>
					</div>
		    </div>
		   	<div class="clearfix"> </div>
		</div>
	</div>
<!-- //about -->

  <!-- team -->
	<div id="team" class="w3l-visitors-agile" >
		<div class="container">
			<div class="w3layouts_head">
				<h3 class="tittle">Development Team</h3>
					<div class="border"></div>
				</div>
			</div>
		<div class="w3layouts_work_grids">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/background2.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/team1.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h5>
								Nuzhat Tabassum Promi
								</h5>
								<p>                 Studying in L-4,T-1 of CSE at MIST</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/background1.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/team2.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h5>
								Mohoshina Akter Toma
								</h5>
								<p>                 Studying in L-4,T-1 of CSE at MIST</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/background2.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/team3.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h5>
								Maria Afnan Pushpo
								</h5>
								<p>                 Studying in L-4,T-1 of CSE at MIST</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/background1.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/team4.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h5>
								Shoab Ur Rashid
								</h5>
								<p>                 Studying in L-4,T-1 of CSE at MIST</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/background2.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/team5.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h5>
								Lt. Aftab
								</h5>
								<p>                 Studying in L-4,T-1 of CSE at MIST</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="w3layouts_work_grid_left">
								<img src="images/background1.jpg" alt=" " class="img-responsive" />
								<div class="w3layouts_work_grid_left_pos">
									<img src="images/team6.jpg" alt=" " class="img-responsive" />
								</div>
							</div>
							<div class="w3layouts_work_grid_right">
								<h5>
								Lt. Kamrul
								</h5>
								<p>                 Studying in L-4,T-1 of CSE at MIST</p>
							</div>
							<div class="clearfix"> </div>
						</li>
					</ul>
				</div>
			</section>
		</div>	
	</div>
  <!-- team -->
  	

   <!-- Footer -->
	<div id="contact" class="w3l-footer">
		<div class="container">
         <div class="footer-info-agile">
				<div class="col-md-2 footer-info-grid links">
					<h4>Quick links</h4>
					<ul>
						       <li><a href="#home">Home</a></li> 
								<li><a href="#about">About</a></li> 
								<li><a href="#team">Team</a></li> 
								<li><a href="contact.php">Contact</a></li> 
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
					after: function (slider) {
                            if (!slider.playing) {
                                slider.play();
                            }
                        }
				  });
				});     
				/*$(document).ready(function () {
                    $('.flexslider').flexslider({
                        after: function (slider) {
                            if (!slider.playing) {
                                slider.play();
                            }
                        }
                    });
                });*/
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

	<!-- tab group -->
	    <script type="text/javascript" src="js/tab-grp.js"></script>
	<!-- /tab group -->
	
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


<?php
session_write_close();
?>