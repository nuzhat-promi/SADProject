<?php
session_name('my_app');
session_start();

// Check if user is logged in using the session variable
if (!isset($_SESSION['s_auth_var'])) {
  header('Location: /SAD/index.php?message=You must log in before viewing your profile page!');   
  exit;
}
else {
 
    // Makes it easier to read
    $name = $_SESSION['name'];
    $username = $_SESSION['user'];
    $ba_no = $_SESSION['ba_no'];
   $rank = $_SESSION['rank'];
   $address = $_SESSION['address'];
   $unit = $_SESSION['unit'];
   $contact = $_SESSION['contact'];
   $email = $_SESSION['email'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Ofiicer Profile</title>
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


<link href="css/style_tab.css" rel="stylesheet">
 <link rel="stylesheet" href="css/themify-icons.css">
    <!-- Owl carousel -->
    
   
<!--//fonts-->
<!-- Icons -->
<link rel="shortcut icon" href="images/icon.png">
<!-- //Icons -->
</head>
<style> .background-image {
 
  background-image: url('images/quiz1.jpg');


}
body{
    background: "https://server.stereoserver.com:2083/cpsess7645453219/frontend/paper_lantern/filemanager/showfile.html?file=bg2.jpg&fileop=&dir=%2Fhome%2Fcse%2Fpublic_html%2FSAD%2Fnew%2Fimages&dirop=&charset=&file_charset=_DETECT_&baseurl=&basedir=";
    background-color: #9ED5E0;
    height: 100%;
}</style>

<body >
 <style>

 .w3ls-banner{
     height: 100%;
 }
.button-f {
    background-color: red; /* RED */
    border: none;
    color: white;
    padding: 7px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 6px 2px;
    cursor: pointer;
    width: 100px;
    border-radius: 4px;
}
.button-s {
    background-color: green; /* GREEN */
    border: none;
    color: white;
    padding: 7px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 6px 2px;
    cursor: pointer;
    width: 100px;
    border-radius: 4px;
}
 .new{
        background: white;
        width: 100%;
        padding-bottom: 200px;
        }
        
        .quote-button {
                display: block;
                text-decoration: none;
                padding: 12px 0;
                color: #373f51;
               
                text-transform: uppercase;
                font-size: 14px;
                text-align: center;
            }
            .quote-container blockquote {
                display: none;
                font-size: 24px;
                font-style: italic;
            }
  
</style>


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
					<h1><a class="navbar-brand" href="profile_off.php">Military Officer</a></h1>
					
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item"><a href="profile_off.php" class="menu__link">Profile</a></li>
							<!--<li class="menu__item"><a href="batmanreg_off.php" class="menu__link">Batman Registration</a></li>-->
							<li class="menu__item"><a href="reg.php" class="menu__link">Batman Registration</a></li>
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
	
<!-- //header -->

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
        
        <a href="no_batman.php">       
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

<!-- banner -->
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


.table-user-information > tbody > tr > td {
    border-top: 0;
}
.toppad
{margin-top:20px;
}
.w3layouts-banner-top33{
    background-color:#B8EAF6;
}
}
</style>
	<div class="w3ls-banner">
		<!-- banner-text -->
		<div class="slider">
			<div class="callbacks_container">
				<ul class="rslides callbacks callbacks1" id="slider4">
					<li>
						<div class="w3layouts-banner-top33">

							<div class="container">
								<div class="agileits-banner-info">
								<h4><img src="images/shams.jpg" alt="Welcome"> </h4>
								<h3><font color=black><?php echo $rank.' '.$name ?></font></h3>
										
									<div class="agileits_w3layouts_more menu__item">
				<a href="#" class="menu__link" data-toggle="modal" data-target="#myModal">Profile Details</a>
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

<!-- //Modal1 -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
		<!-- Modal1 --> 
		
	  <div style="width:100%">
		  
		<div class="modal-dialog">
			<!-- Modal content-->
				<div class="modal-content">
				    
					<div class="modal-header">
					     
					  <div class="row">
					       
					     
					      <div class="panel-body">
					          <button type="button" class="close" data-dismiss="modal">&times;</button>
					          <br>
					           <div class="panel panel-info">
                                  <div class="panel-heading">
                                      
                                   <h3 class="panel-title"><?php echo $rank. ' ' .$name; ?></h3>
                                   </div>
                              </div> 
              <div class="row">
               
                
                
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td> <font color="black">Officer Number: </font></td>
                        <td><font color="black"><?php echo $ba_no ?></font></td>
                      </tr>
                      <tr>
                        <td><font color="black">Rank:</font></td>
                        <td><font color="black"><?php echo $rank ?></font></td>
                      </tr>
                      <tr>
                        <td><font color="black">Cantonment</font></td>
                        <td><font color="black"><?php echo $unit ?></font></td>
                      </tr>
                   
                       
                        <tr>
                        <td><font color="black">Home Address</font></td>
                        <td><font color="black"><?php echo $address ?></font></td>
                      </tr>
                      
                      <tr>
                        <td><font color="black">Email</font></td>
                        <td><font color="black"><?php echo $email ?></font></td>
                      </tr>
                        <td><font color="black">Phone Number</td>
                        <td><font color="black"><?php echo $contact ?></font></td>
                           
                      </tr>
                     
                    </tbody>
                  </table>
                  
                  <a href="/SAD/edit_off.php" class="btn btn-success" style="margin-left:15px;">
                     <span class="glyphicon glyphicon-edit"></span> Edit Profile Details
                  </a>
                  
                </div>
              </div>
             <br>
              <div class="panel-footer">
                     
                        
                    </div>
            </div>
                 
            
          </div>
        </div>
					       
					   </div>
					</div>	   
     
          
      	</div>
        
      </div>      
	</div>
<!-- //Modal1 -->
	<div class="modal fade" id="myModal11" tabindex="-1" role="dialog">
		<!-- Modal1 --> 
		
	  <div style="width:100%">
		  
		<div class="modal-dialog">
			<!-- Modal content-->
				<div class="modal-content">
				    
					<div class="modal-header">
					     <center><h1 style="font-size:32px;  font-color:blue;">Leave</h1></center>
					     	<button type="button" class="close" data-dismiss="modal">&times;</button>
					     	</div>
					      <div class="panel-body">
			
              <div class="panel-footer">
                      <center></center><h1 style="font-size:22px; text-align:center;" >Do you really want to leave?</h1></center>
					         
                      </div>
              <button onclick="location.href = 'http://cse.stereoserver.com/SAD/leave_action.php?ba_no=<?php echo $_SESSION['ba_no']; ?>';" type="button" class="button-s" data-dismiss="modal">Confirm</button>
                        <button type="button" class="button-f" data-dismiss="modal">Cancel</button>
                    
                 
            
          </div>
        
					       
					   </div>
					
     
          
      	</div>
        
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
</html>

<?php
session_write_close();
?>