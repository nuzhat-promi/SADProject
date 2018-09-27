<?php
session_name('my_app');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Error</title>

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
  <div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
			    
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
							<li class="menu__item menu__item--current"><a href="http://cse.stereoserver.com/SAD/index.php" class="menu__link">Home</a></li>
							<li class="menu__item"><a href="http://cse.stereoserver.com/SAD/index.php#about" class="menu__link">About</a></li>
							<li class="menu__item"><a href="http://cse.stereoserver.com/SAD/index.php#team" class="menu__link">Team</a></li>
							<li class="menu__item"><a href="contact.html" class="menu__link">Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>
<!-- //header -->

<div class="form">
    <h1>Error</h1>
    <p>
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ): 
        echo $_SESSION['message'];    
    else:
        header( 'location: http://cse.stereoserver.com/SAD/reg_off.php' );
    endif;
    ?>
    </p>     
    <a href="http://cse.stereoserver.com/SAD/index.php"><button class="button button-primary"/>Home</button></a>
</div>

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
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>
<?php
session_write_close();
?>