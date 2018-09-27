<?php
session_name('my_admin');
session_start();
if (!isset($_SESSION['s_auth_var'])){header('Location: /SAD/admin.php?message=You must log in before viewing your profile page!');}

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

$user_name = $_SESSION['user'];
$find = $conn->query("SELECT * FROM Admin_Panel WHERE username='$user_name'");
$user = $find->fetch_assoc();
$url = '/SAD/images/'.$user['image_url'];

if(isset($_POST['upload'])){ //check isset upload button
$_SESSION['week_no'] = $_POST['week'];
$_SESSION['qno'] = $_POST['qno'];
$_SESSION['qtext'] = $_POST['qtext'];
$_SESSION['opno1'] = $_POST['opno1'];
$_SESSION['opno2'] = $_POST['opno2'];
$_SESSION['ans'] = $_POST['ans'];

$week_no = $conn->escape_string($_POST['week']);
$qno = $conn->escape_string($_POST['qno']);
$qtext = $conn->escape_string($_POST['qtext']);
$opno1 = $conn->escape_string($_POST['opno1']);
$opno2 = $conn->escape_string($_POST['opno2']);
$ans = $conn->escape_string($_POST['ans']);

$currentDir = getcwd();
$name1= $_FILES['file1']['name'];
$tmp_name1= $_FILES['file1']['tmp_name'];
$position1= strpos($name1, ".");
$fileextension1= substr($name1, $position1 + 1);
$fileextension1= strtolower($fileextension1);

$name2= $_FILES['file2']['name'];
$tmp_name2= $_FILES['file2']['tmp_name'];
$position2= strpos($name2, ".");
$fileextension2= substr($name2, $position2 + 1);
$fileextension2= strtolower($fileextension2);


if (isset($name1) && isset($name2)) {
    $path= '/uploads/images/';
    if (empty($name1) && empty($name2))
    {
        echo "Please choose a file";
    }
    else if (!empty($name1) && !empty($name2)){
        if (($fileextension1 !== "png") && ($fileextension1 !== "jpg") && ($fileextension1 !== "jpeg") && ($fileextension1 !== "gif") && ($fileextension1 !== "tif") && ($fileextension2 !== "png") && ($fileextension2 !== "jpg") && ($fileextension2 !== "jpeg") && ($fileextension2 !== "gif") && ($fileextension2 !== "tif"))
        {
            echo "The file extension must be .png, .jpg, .jpeg, .gif or .tif in order to be uploaded";
        }
        else if (($fileextension1 == "png") || ($fileextension1 == "jpg") || ($fileextension1 == "jpeg") || ($fileextension1 == "gif") || ($fileextension1 == "tif") || ($fileextension2 == "png") || ($fileextension2 == "jpg") || ($fileextension2 == "jpeg") || ($fileextension2 == "gif") || ($fileextension2 == "tif"))
        {
            if (move_uploaded_file($tmp_name1, $currentDir.$path.$name1) && move_uploaded_file($tmp_name2, $currentDir.$path.$name2)) 
            {
                $_SESSION['img1'] = $name1;
                $_SESSION['ext1'] = $fileextension1;
                $_SESSION['img2'] = $name2;
                $_SESSION['ext2'] = $fileextension2;
                echo 'Uploaded!';
            }
            else
            {
                echo 'not uploaded';
            }
        }
    }
}
$sql = "INSERT INTO Week1 (ID, week_no, Qtext, Imag1, value1, Imag2, value2, correct_ans)
    VALUES ('$qno', '$week_no', '$qtext', '$name1', '$opno1', '$name2', '$opno2', '$ans')";
$fire=mysqli_query($conn,$sql) or die("cannot insert");

}//check isset upload button
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="images/icon.png">
    <title>Admin Panel</title>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min2.css" rel="stylesheet">
    <!-- Font Awesome Icon -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="css/sidebar-nav.min.css" rel="stylesheet">
    <!-- toast CSS -->
    <link href="css/jquery.toast.css" rel="stylesheet">
    <!-- morris CSS -->
    <link href="css/morris.css" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="css/chartist.min.css" rel="stylesheet">
    <link href="css/chartist-plugin-tooltip.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style_admin.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
</head>
<style>
.hidden-xs .tooltiptext {
    visibility: hidden;
    width: 100px;
    background-color: grey;
    color: #fff;
    text-align: center;
    border-radius: 5px;
    padding: 2px 0;
    
    /* Position the tooltip */
    position: absolute;
    z-index: 1;
    top: 100%;
    left: 50%;
    margin-left: -60px;
}

.hidden-xs:hover .tooltiptext {
    visibility: visible;
}
</style>
<body class="fix-header">
    <!-- ============================================================== -->
    <!-- Preloader -->
    <!-- ============================================================== -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <!-- ============================================================== -->
    <!-- Wrapper -->
    <!-- ============================================================== -->
    <div id="wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
             <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    
                    <!-- Logo icon image, you can use font-icon also -->
                     
                     <h1>Admin Panel</h1> 
                    
                    <!--<a href="admin_index.php"><span>Admin Panel</span></a>-->
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                <li><a href="adminQupload.php">Welcome to SmartBatman Admin Panel</a></li>
                
                <li><a href="#" style="visibility:hidden">Video Upload</a></li>
                <li><a href="#" style="visibility:hidden">Video Upload</a></li>
                <li><a href="#" style="visibility:hidden">Video Upload</a></li>
                <li><a href="#" style="visibility:hidden">Video Upload</a></li>
                <li><a href="#" style="visibility:hidden">Video Upload</a></li>
                    <li>
                        <a class="profile-pic" href="popup.php"> <img src="<?=$url?>" alt="user-img" width="36" class="img-circle"><b class="hidden-xs"><?=$user_name?>   
                        <span class="tooltiptext">Logout</span></b></a>
                    </li>
                    <li><a href="#" style="visibility:hidden">Video</a></li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="admin_index.php" class="waves-effect"><i class="fa fa-video-camera fa-fw" aria-hidden="true"></i>Video Upload</a>
                    </li>
                    <li>
                        <a href="adminQupload.php" class="waves-effect"><i class="fa fa-table fa-fw" aria-hidden="true"></i>Question Upload</a>
                    </li>
                    <li>
                        <a href="admin_profile.php" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Profile</a>
                    </li>
                </ul>
            </div>
            
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Question Upload</h4> </div>
                    
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
                 <!--row -->
                   <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Upload A Question for Exam</h3>
                            
                          	<form action="" method="post" enctype="multipart/form-data">
                          	
                          	    <label for="week"><b>Week: </b></label><br>
            			        <div class="custom-select">
                		        <select id="week" name="week" required>
                    			    <option >Select Week Number: </option>
                    			    <option value="1">Week 1</option>
                    			    <option value="2">Week 2</option>
                    			    <option value="3">Week 3</option>
                    			    <option value="4">Week 4</option>
                		        </select>
            			        </div><br><br>
            			        
            			        <label for="qno"><b>Question Number: </b></label>
                                <input type="text" placeholder="Enter Question Number" name="qno" required><br><br><br>
                                
                                <label for="qtext"><b>Question: </b></label>
                                <input type="text" placeholder="Enter your question" name="qtext" style=" height: 200px; width:300px; " required><br><br><br>
				                
				                <label for="opno1"><b>Option Number: </b></label>
                                <input type="text" placeholder="Enter Option Number" name="opno1" required><br><br>
                                
                                <label for="upload1"><b>Upload Image for 1st option: </b></label>
            			        <input type="file" name="file1"/><br><br>
            			        
            			        <label for="opno2"><b>Option Number: </b></label>
                                <input type="text" placeholder="Enter Option Number" name="opno2" required><br><br>
                                
            			        <label for="upload2"><b>Upload Image for 2nd option: </b></label>
            			        <input type="file" name="file2"/><br><br>
            			        
            			        <label for="ans"><b>Correct Answer: </b></label>
                                <input type="text" placeholder="Enter Correct Answer" name="ans" required><br><br>
	        		            
	        		            <label for="submit"><b>Click "Upload" to submit the question</b></label><br>
	        		            <input type="submit" class="btn btn-info" name="upload" value="Upload"/>
        			        </form>
        			        
                        </div>
                    </div>
		    <!-- /.row -->		
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2018 &copy; Grp3 SAD Lab </footer>
        </div>
        <!-- ============================================================== -->
        <!-- End Page Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="js/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!--Counter js -->
    <script src="js/jquery.waypoints.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <!-- chartist chart -->
    <script src="js/chartist.min.js"></script>
    <script src="js/chartist-plugin-tooltip.min.js"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="js/jquery.sparkline.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <script src="js/dashboard1.js"></script>
    <script src="js/jquery.toast.js"></script>
</body>
</html>

<?php
session_write_close();
?>