<?php
session_name('my_admin');
session_start();
if (!isset($_SESSION['s_auth_var'])){header('Location: /SAD/admin.php?message=You must log in before viewing your profile page.');}

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

    $_SESSION['week'] = $_POST['week'];
    $_SESSION['title'] = $_POST['title'];
    
    $week = $conn->escape_string($_POST['week']);
    $title = $conn->escape_string($_POST['title']);

    $currentDir = getcwd();
    $name= $_FILES['file1']['name'];
    $tmp_name= $_FILES['file1']['tmp_name'];
    echo $tmp_name;
    $position= strpos($name, ".");
    $fileextension= substr($name, $position + 1);
    $fileextension= strtolower($fileextension);

if (isset($name)) {
    $path= '/uploads/video/';
    if (empty($name))
    {
        echo "Please choose a file";
    }
    else if (!empty($name)){
        if (($fileextension !== "mp4") && ($fileextension !== "ogg") && ($fileextension !== "webm"))
        {
            echo "The file extension must be .mp4, .ogg, or .webm in order to be uploaded";
        }
        else if (($fileextension == "mp4") || ($fileextension == "ogg") || ($fileextension == "webm"))
        {
            if (move_uploaded_file($tmp_name, $currentDir.$path.$name)) 
            {
                $_SESSION['path'] = $path;
                $_SESSION['name'] = $name;
                $_SESSION['ext'] = $fileextension;
                echo 'Uploaded!';
            }
            else
            {
                echo 'not uploaded';
            }
        }
    }
}
$sql = "INSERT INTO Task (week_no, video_url, title)
    VALUES ('$week', '$name', '$title')";
$fire=mysqli_query($conn,$sql) or die("cannot insert");
if(!fire)
{
    echo "cant in";
}

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
                <li><a href="admin_index.php" >Welcome to SmartBatman Admin Panel</a></li>
                
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
                        <h4 class="page-title">Video Upload</h4> </div>
                    
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <!-- ============================================================== -->
                <!-- Different data widgets -->
                <!-- ============================================================== -->
                 <!--row -->
                   <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="white-box">
                            <h3 class="box-title">Upload A Video according to the Week</h3>
                            
                            <form action="insert_video.php" id="upload_form" enctype="multipart/form-data" method="post">
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
            <label for="upload"><b>Upload Video: </b></label><br>			       
            <input type="file" name="file1" id="file1"><br>
            
            <label for="title"><b>Title of Video: </b></label><br>
            <input type="text" name="title" id="title"><br><br>
            
            <label for="submit"><b>Click "Upload" to submit the video</b></label><br>
            <input type="submit" class="btn btn-info" value="Upload File" onclick="uploadFile()">
            <br><br>
            
            <progress id="progressBar" value="0" max="100" style="width:300px;"></progress>
             <h3 id="status"></h3>
             <p id="loaded_n_total"></p>
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
    <script>
/* Script written by Adam Khoury @ DevelopPHP.com */
/* Video Tutorial: http://www.youtube.com/watch?v=EraNFJiY0Eg */
function _(el){
	return document.getElementById(el);
}
function uploadFile(){
    	window.location.href = "http://cse.stereoserver.com/SAD/insert_video.php";
	var file = _("file1").files[0];
	// alert(file.name+" | "+file.size+" | "+file.type);
	var formdata = new FormData();
	formdata.append("file1", file);
	var ajax = new XMLHttpRequest();
	ajax.upload.addEventListener("progress", progressHandler, false);
	ajax.addEventListener("load", completeHandler, false);
	ajax.addEventListener("error", errorHandler, false);
	ajax.addEventListener("abort", abortHandler, false);
	ajax.open("POST", "file_upload_parser.php");
	ajax.send(formdata);
	window.location.href = "http://cse.stereoserver.com/SAD/insert_video.php";
}
function progressHandler(event){
	_("loaded_n_total").innerHTML = "Uploaded "+event.loaded+" bytes of "+event.total;
	var percent = (event.loaded / event.total) * 100;
	_("progressBar").value = Math.round(percent);
	_("status").innerHTML = Math.round(percent)+"% uploaded... please wait";
}
function completeHandler(event){
	_("status").innerHTML = event.target.responseText;
	_("progressBar").value = 0;
}
function errorHandler(event){
	_("status").innerHTML = "Upload Failed";
}
function abortHandler(event){
	_("status").innerHTML = "Upload Aborted";
}
</script>
</body>
</html>

<?php
session_write_close();
?>
