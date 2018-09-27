<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Hire Batman</title>
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
<!--//fonts-->
<!-- Icons -->
<link rel="shortcut icon" href="images/icon.png">
<!-- //Icons -->
<style>
.user-row {
    margin-bottom: 14px;
}

.user-row:last-child {
    margin-bottom: 0;
}

.dropdown-user {
    margin: 13px 0;
    padding: 5px;
    height: 100%;
}

.dropdown-user:hover {
    cursor: pointer;
}

.table-user-information > tbody > tr {
    border-top: 1px solid rgb(221, 221, 221);
}

.table-user-information > tbody > tr:first-child {
    border-top: 0;
}

.st_width{
    width: 100px;
}

.table-user-information > tbody > tr > td {
    border-top: 0;
}
.toppad
{margin-top:20px;
}
}
</style>
</head>
<body >
    
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




$sql = "SELECT `Bat_ID`, `Bat_name`, `Bat_parentname`, `Bat_address`, `Bat_dob`, `Age`, `Gender`, `Contact`, `Rating`, `week`, `Mark`, `availability`, `Hiredate`, `image` FROM `Batman` WHERE `availability`='Yes'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $array[] = $row;
        $id= $row["Bat_ID"];
      $name= $row["Bat_name"];
      $p_name=  $row["Bat_parentname"];
      $image= $row["image"];
      //  echo $row["Bat_address"];
      //  echo $row["Age"];
       // echo $row["Gender"];
      //  echo $row["Rating"];
      //  echo $row["Contact"];
      //  echo $row["Mark"];
        }}

if(empty($image))
{
    $url="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg";
}
else
{
    $path='/SAD/uploads/images/';
    $url=$path.$image;
}



?>

<!-- header -->
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
					<h1><a class="navbar-brand" href="profile_off.php">Officer Profile</a></h1>
					
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item"><a href="profile_off.php" class="menu__link">Profile</a></li>
							<li class="menu__item"><a href="batmanreg_off.php" class="menu__link">Batman Registration</a></li>
							<li class="menu__item"><a href="hirebatman.php" class="menu__link">Hire Batman</a></li>
							
								<li class="menu__item"><a href="logout_off.php" class="menu__link">Logout</a></li>
						</ul>
						
					</nav>
				</div>
			</nav>
		</div>
	</div>
<!-- header -->	
	
		<br>
	<h1 align="center">Available Batman</h1>
	<br>


<?php 
for ($x = 0; $x < sizeof($array); $x++) {
    //echo sizeof($array);
   // echo $x;
?>

<div class="container">
	<div class="row">

		<section class="content">
		
			<div class="col-md-8 col-md-offset-2">
				<div class="panel panel-default">
					<div class="panel-body">
						
						<div class="table-container">
							<table class="table table-filter">
								<tbody>
								    <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
									
									<tr>
									            
										
										<td>
										
													<img src="https://s3.amazonaws.com/uifaces/faces/twitter/fffabs/128.jpg" class="media-photo">
												</a>
												<div class="media-body">
													 <?php 
													echo  $array[$x]["Bat_name"];
													 echo "<br>";
													
											  $cfg_min_stars =1; //min star
                                              $cfg_max_stars = 5; //max star
                                            // $temp_stars = 2; //average rating
                                            
                                            if( $array[$x]["Mark"]>=0 &&  $array[$x]["Mark"]<20){
                                             $temp_stars = 1;   
                                            }
                                            else if($array[$x]["Mark"]>=20 && $array[$x]["Mark"]<40){
                                             $temp_stars = 2;   
                                            }
                                            else if($array[$x]["Mark"]>=40 && $array[$x]["Mark"]<60){
                                             $temp_stars = 3;   
                                            }
                                            else if($array[$x]["Mark"]>=60 && $array[$x]["Mark"]<80){
                                             $temp_stars = 4;   
                                            }
                                            else{
                                                $temp_stars = 5;
                                            }
                                            
                                              for($i=$cfg_min_stars; $i<=$cfg_max_stars; $i++) { // simple for loop
                                               
                                                if ($temp_stars >= 1) { // it going to check if your average rating is greater than equal to 1 or not if it is then it give you full star.
                                                  echo '<img src="Star (Full).png" width="20"/>';
                                                  $temp_stars--; //after getting full star it decremnt the value and contiune the loop.
                                                }else {
                                                  if ($temp_stars >= 0.5) { // if user select 3.5 rating, so in above condition at last it remain 0.5 rating will get left. then it came to this condition and give you the half star.
                                                   echo '<img src="Star (Half Full).png" width="20"/>';
                                                    $temp_stars -= 0.5;
                                                  }else { // at last but not the least when value gets zero then it return empty star.
                                                    echo '<img src="Star (Empty).png" width="20"/>';
                                                  }
                                                }
                                              }
													 ?>
												
													
												</div>
												
										</td>
																
										
									</tr>
									      <tr>
                        <td><font color="black"> Parent Name:</font></td>
                        <td><font color="black"><?php echo $array[$x]["Bat_parentname"];?></font></td>
                      </tr>
                      <tr>
                        <td><font color="black">Age:</font></td>
                        <td><font color="black"><?php echo  $array[$x]["Age"]; ?></font></td>
                      </tr>
                      <tr>
                        <td><font color="black">Address</font></td>
                        <td><font color="black"><?php echo  $array[$x]["Bat_address"];?></font></td>
                      </tr>
                   
                       
                        <tr>
                        <td><font color="black">Gender:</font></td>
                        <td><font color="black"><?php echo  $array[$x]["Gender"]; ?></font></td>
                      </tr>
                      
                      
                        <td><font color="black">Phone Number</font></td>
                        <td><font color="black"><?php echo $array[$x]["Contact"];?></font></td>
                           
                      </tr>
                      <tr><div class="pull-right" >
											
								<button style="width:180px" type="button" class="btn btn-danger btn-filter" onclick="location.href = 'http://cse.stereoserver.com/SAD/hire_action.php?id=<?php echo $array[$x]["Bat_ID"]?>&name=<?php echo $array[$x]["Bat_name"]?>'">want to hire?click here</button>
								
							</div>	</tr>
                     	 
                    </tbody>
                  </table>
                  
                  
                </div>
              </div>
             
              
            </div>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			
			</div>
		</section>
		
	</div>
</div>



<!-- //Modal1 -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
		<!-- Modal1 --> 
	  <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Quiz:Week01</h4>
            </div>
            <div class="modal-body">
                <p>Request Is sent..thank You</p>
                
            </div>
            <div class="modal-footer">
               <form action="index.php">
                <input type="submit" value="Go to Home" />
                </form>
            </div>
        </div>
      </div>
  </div>
  
    
        
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
       
	</div>
<!-- //Modal1 -->
 	
<?php
}
?>	
	<!-- js -->
	<script>
	function myFunction(){
	    swal("", "Your request has been sent to Barak NCO!", "success")
                .then((value) => {
                window.location.href = "http://cse.stereoserver.com/SAD/hire_action.php?id=<?php echo $array[$x]["Bat_ID"]?>&name=<?php echo $array[$x]["Bat_name"]?>";
});
	}
	</script>
	
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