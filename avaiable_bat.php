<?php
$servername = "localhost";
$username = "cse_admin";
$password = "y{SoYZD2IAS@";
$dbname = "cse_SAD_grp3";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ( $_SESSION['logged_in'] = 1 ) {

    // Makes it easier to read
   // $id = $_SESSION['Officer_id'];
    $name = $_SESSION['name'];
    $username = $_SESSION['user'];
    $ba_no = $_SESSION['ba_no'];
   $rank = $_SESSION['rank'];
   $address = $_SESSION['address'];
   $unit = $_SESSION['unit'];
   $contact = $_SESSION['contact'];
   $email = $_SESSION['email'];
}




   $sql = "SELECT  `Bat_name`, `week`,`Mark`, `availability`, `Hiredate` FROM `Batman`";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $array[] = $row;
        }}






?>



<!DOCTYPE html>
<html>
    <head>
        
        
<title>Available Batman</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Batman, Training Website for Batman, Military Officer, Barak NCO" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>
<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">

<link rel="shortcut icon" href="images/icon.png">
<link rel="icon" href="images/icon.png">

<link href="css/style_tab.css" rel="stylesheet">
 <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Owl carousel -->
    
   
<!--//fonts-->
<!-- Icons -->
<link rel="shortcut icon" href="images/icon.png">
<!-- //Icons -->   
       
        <body>
            
            <style>
                .custab{
    border: 1px solid #ccc;
    padding: 5px;
    margin: 5% 0;
    box-shadow: 3px 3px 2px #ccc;
    transition: 0.5s;
    }
.custab:hover{
    box-shadow: 3px 3px 0px transparent;
    transition: 0.5s;
    }
    
    
  
  </style>
  
  <div class="w3_navigation" id="badge">
		
			<nav class="navbar navbar-default">
			    
			    <!-- Collapse nav button -->
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="http://cse.stereoserver.com/SAD/new/index2.php">Barak NCO</a></h1>
				</div>
				
				<!-- Collapse nav button -->
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item menu__item--current"><a href="http://cse.stereoserver.com/SAD/new/index2.php" class="menu__link">Profile</a></li>
							<li class="menu__item"><a href="http://cse.stereoserver.com/SAD/batmanreg_off.php" class="menu__link">Batman Registration</a></li>
								<li class="menu__item"><a href="#" class="menu__link quote-button">Batman List</a></li>
						
						
						
					
						</a> </li>
							<li class="menu__item"><a href="http://cse.stereoserver.com/SAD/logout_nco.php" class="menu__link">Logout</a></li>
						</ul>
					</nav>
				</div>
			</nav>
		</div>

<?php

for ($x = 0; $x < sizeof($array); $x++) {
 ?>     
             
            <div class="container">
    <div class="row col-md-6 col-md-offset-2 custyle">
    <table class="table table-striped custab">
    <thead>
   
        <tr>
            <th><font color="green">Name</font></th>
            <th><font color="green">date of Hired</font></th>
            <th><font color="green">Week</font></th>
             <th><font color="green">Marks</font></th>
             <th><font color="green">Availability</font></th>
            
            
        </tr>
    </thead>
            <tr>
                <td><font color="black"><?php echo $array[$x]["Bat_name"];?></font></td>
                <td><font color="black"><?php echo $array[$x]["Hiredate"];?></font></td>
                <td><font color="black"><?php echo $array[$x]["week"];?></font></td>
                <td><font color="black"><?php echo $array[$x]["Mark"];?></font></td>
                <td><font color="black"><?php echo $array[$x]["availability"];?></font></td>
                
                <?php 
                   }
                ?> 
            </tr>

    </table>
    </div>
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
    </head>
</html>