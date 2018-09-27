<?php
session_name('my_app');
session_start();

if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in !";
  header('location: error_off.php');    
  exit;
}
else {
 
    // Makes it easier to read
    
    $ba_no = $_SESSION['ba_no'];
 
}

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
   
$sql1 = "SELECT `Bat_id` FROM `Off_bat` WHERE `ba_no`='$ba_no' ";

$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
    // output data of each row
    while($row = $result1->fetch_assoc()) {
        $id=$row["Bat_id"];
       
     
        }}







$sql = "SELECT `Bat_ID`, `Bat_name`, `Bat_parentname`, `Bat_address`, `Bat_dob`, `Age`, `Gender`, `Contact`,  `week`, `Mark`, `Hiredate`, `image` FROM `Batman` WHERE `Bat_ID`=$id ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $array[] = $row;
        $id= $row["Bat_ID"];
      $name1= $row["Bat_name"];
      $p_name=  $row["Bat_parentname"];
       // echo $row["Bat_address"];
     //  echo $row["Age"];
      // echo $row["Gender"];
     //  echo $row["Rating"];
      //  echo $row["Contact"];
        $Mark= $row["Mark"];
        $image=$row["image"];
        }}


if(empty($image))
{
    $url="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg";
}
else
{
    $path='/SAD/uploads/images/';
    $url=$path.$image;
}




?>



<!DOCTYPE html>
<html>
    <head>
        
        
<title>Batman Details</title>
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
    .quote-container blockquote {
                display: none;
                font-size: 24px;
                font-style: italic;
            }
                  input.hidden {
    position: absolute;
    left: -9999px;
}

#profile-image1 {
    cursor: pointer;
  
     width: 100px;
    height: 100px;
	border:2px solid #03b1ce ;}
	.tital{ font-size:16px; font-weight:500;}
	 .bot-border{ border-bottom:1px #f8f8f8 solid;  margin:5px 0  5px 0}	
  
  </style>
  
 	<div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="profile_off.php">Military Officer</a></h1>
					
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item"><a href="profile_off.php" class="menu__link">Profile</a></li>
							<li class="menu__item"><a href="batmanreg_off.php" class="menu__link">Batman Registration</a></li>
						<li class="menu__item"><a href="#" class="menu__link" data-toggle="modal" data-target="#myModal11">Leave</a></li>
						
								<li class="menu__item"><a href="hire.php" class="menu__link">Hire Batman</a></li>
								<li class="menu__item"><a href="#about" class="menu__link quote-button">My Batman</a></li>
								<li class="menu__item"><a href="logout_off.php" class="menu__link">Logout</a></li>
						</ul>
						
					</nav>
				</div>
			</nav>
		</div>
	</div>
	
 <div class="quote-container">
              
                <blockquote>
<style>
    .pad{
        padding-left: 40px;
    }
</style>

           <div class="pad"></div>
          
         <a href="video_show.php">
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                 <i class="fa fa-list-ol" style="font-size:40px;padding:10px;color:#E378E8;text-shadow:2px 2px 4px #000000;"></i>
                                <div class="media-body">
                                    <h4 class="card-title" style="padding:10px;">Task</h4>
                                    <p class="card-text" style="padding:10px;">Let your batman learn in an amazing way! </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </a>
        
        <a href="examweek1.php">       
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <i class="fa fa-clipboard" style="font-size:40px;padding:10px;color:#E378E8;text-shadow:2px 2px 4px #000000;"></i>
                                <div class="media-body">
                                    <h4 class="card-title" style="padding:10px;">Test</h4>
                                    <p class="card-text" style="padding:10px;">Want to learn more? Give tests first.. </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </a>
        
        <a href="batdetails.php">
                <div class="col-12 col-lg-4">
                    <div class="card features">
                        <div class="card-body">
                            <div class="media">
                                <i class="fa fa-search" style="font-size:40px;padding:10px;color:#E378E8;text-shadow:2px 2px 4px #000000;"></i>
                                <div class="media-body">
                                    <h4 class="card-title" style="padding:10px;">Details</h4>
                                    <p href="batdetails.php" class="card-text" style="padding:10px;">See Your Batman's Details!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    	<div class="clearfix"> </div>
                </div>
        </a>
          
          <h1 style="padding-bottom:30px;"></h1>
          </blockquote>
            </div> 
            
             <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script type="text/javascript">
            
            (function(){
                
                var quoteButton = $('.quote-button'),
                    blockquote = $('blockquote');
                
                quoteButton.on('click', function(e) {
                    e.preventDefault();
                    var quoteButtonText = quoteButton.text();
                    
                    blockquote.slideToggle(200, function(){
                        
                    });
    
                });
                
            })();
            
        </script>

          

<div class="container">
	<div class="row">
	
        
        
       <div class="col-md-7 ">

<div class="panel panel-default">
  <div class="panel-heading">  <h4 >Batman Profile</h4></div>
   <div class="panel-body">
       
    <div class="box box-info">
        
            <div class="box-body">
                     <div class="col-sm-6">
                     <div  align="center"> <img alt="User Pic" src="<?=$url?>" id="profile-image1" class="img-circle img-responsive"> 
                
                <input id="profile-image-upload" class="hidden" type="file">

               
           
             
                     
                     
                     </div>
              
              <br>
              
              
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



  
  
   
$sql1 = "SELECT `Bat_id` FROM `Off_Bat` WHERE `ba_no`='$ba_no'";

$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
    // output data of each row
    while($row = $result1->fetch_assoc()) {
        
        $id=$row["Bat_id"];
      
     
        }}







$sql = "SELECT `Bat_ID`, `Bat_name`, `Bat_parentname`, `Bat_address`, `Bat_dob`, `Age`, `Gender`, `Contact`,  `week`, `Mark`, `Hiredate` FROM `Batman` WHERE `Bat_ID`=$id ";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $array[] = $row;
        $id= $row["Bat_ID"];
      $name1= $row["Bat_name"];
      $p_name=  $row["Bat_parentname"];
       $add= $row["Bat_address"];
       $bdate=  $row["Bat_dob"];
       $hdate= $row["Hiredate"];
      $week= $row["week"];
        $Mark= $row["Mark"];
         $con= $row["Contact"];
        }}







?>

  	

   
              <!-- /input-group -->
            </div>
            <div class="col-sm-6">
            <h4 style="color:#00b1b1;"><?php echo $name1 ?> </h4></span>
                         
            </div>
            <div class="clearfix"></div>
            <hr style="margin:5px 0 5px 0;">
    
              

<div class="col-sm-5 col-xs-6 tital " >Parent Name:</div><div class="col-sm-7"> <?php echo  $p_name ?></div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Address:</div><div class="col-sm-7"> <?php echo  $add ?></div>
  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Date Of Birth:</div><div class="col-sm-7"> <?php echo $bdate ?></div>

  <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Date Of Hire:</div><div class="col-sm-7"> <?php echo  $hdate ?></div>

  <div class="clearfix"></div>
<div class="bot-border"></div>


<div class="col-sm-5 col-xs-6 tital " >Parent's Contact Info:</div><div class="col-sm-7"> <?php echo  $con  ?></div>

 <div class="clearfix"></div>
<div class="bot-border"></div>

 <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Week:</div><div class="col-sm-7"> <?php echo  $week  ?></div>

 <div class="clearfix"></div>
<div class="bot-border"></div>

<div class="col-sm-5 col-xs-6 tital " >Marks:</div><div class="col-sm-7"> <?php echo  $Mark ?></div>


            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </div>
       
            
    </div> 
    </div>
</div>  
    <script>
              $(function() {
    $('#profile-image1').on('click', function() {
        $('#profile-image-upload').click();
    });
});       
              </script> 
       
       
       
       
       
       
       
       
       
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