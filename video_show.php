<?php
session_name('my_app');
session_start();

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

$ba_no = $_SESSION['ba_no'];
$query = $conn->query("SELECT Bat_id FROM Off_Bat WHERE ba_no='$ba_no'");
$id = $query->fetch_assoc();
$bat_id = $id['Bat_id'];

if ($query->num_rows == 0 ){ // User doesn't exist
            header('Location: /SAD/popup_video.php?message=There is no registered Batman under you. Please Register First.');
            exit;
    }
        else { // User exists
            $find = $conn->query("SELECT Mark, Bat_name FROM Batman WHERE BAT_ID='$bat_id'");
            $user = $find->fetch_assoc();
            $name = $user['Bat_name'];
            if($user['Mark'] >= 0 && $user['Mark'] <= 49)
            {
                $week = '1';
            }
            else if($user['Mark'] >= 50 && $user['Mark'] <= 99)
            {
                $week = '2';
            }
            else if($user['Mark'] >= 100 && $user['Mark'] <= 149)
            {
                $week = '3';
            }
            else if($user['Mark'] >= 150 && $user['Mark'] <= 199)
            {
                $week = '4';
            }
            
        }

$video = array();
$title = array();
$result = $conn->query("SELECT * FROM Task WHERE week_no='$week'");

while($row = $result->fetch_assoc())
{
    $video[] = $row['video_url'];
    $title[] = $row['title'];
}
/*foreach($title as $value)
{
   echo "<li>" . $value . "</li>";
}
foreach($video as $value)
{
   echo "<li>" . $value . "</li>";
}*/

$show = '/SAD/uploads/video/'.$video[0].'';
$show2 = '/SAD/uploads/video/'.$video[1].'';
//echo $show;

?>


<!DOCTYPE html>
<html lang="en">
<head>
<title>Task</title>
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
                window.location.href = "http://cse.stereoserver.com/SAD/profile_off.php";
});
</script>'; 

?>

    <!-- background-image: url('/SAD/images/try4.jpg'); background-color: #fce0e0;-->
 <style>

body {
    background-color: #fce0e0;
}
h1{
    text-align: center;
}
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

.video_show{
    align-content: center;
}

.video_show p {
    /*margin:5px 50px 5px 50px;  top-roght-bottom-left*/
    margin: auto;
    width: 50%;
    border: 3px solid green;
    padding: 10px;
    font-size:30px;
}

.video_show a {
    color: #b20202;
}

.video_show a {
    
}

.video_show video {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
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
					<h1><a class="navbar-brand" href="profile_off.php">Military Officer Profile</a></h1>
					
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item"><a href="video_show.php" class="menu__link">Task</a></li>
							<li class="menu__item"><a href="examweek1.php" class="menu__link">Test</a></li>
							<li class="menu__item"><a href="logout_off.php" class="menu__link">Logout</a></li>
						</ul>
						
					</nav>
				</div>
			</nav>
		</div>
	</div>
<!--<div class="section">
<div id="background">
    <img src="guitar1.png">
 </div>-->

<!-- /header -->
<h3></h3>
<h1><a href="#" style="color:#800000">Hello <?=$name?>! This is Week- <?=$week?></a></h1>

<!-- show video -->
<div class="video_show">
<p>
<a><?=$title[0]?></a>
</p>
<video width="600" height="600" controls>
  <source src="<?=$show?>" type="video/mp4">
  Your browser does not support HTML5 video.
</video><br><br><br>

<p>
<a><?=$title[1]?></a>
</p>
<video width="600" height="600" controls>
  <source src="<?=$show2?>" type="video/mp4">
  Your browser does not support HTML5 video.
</video>

</div>

</div>
<!-- /show video -->



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