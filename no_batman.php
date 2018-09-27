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
// echo $ba_no;

$sql = "SELECT ba_no, Bat_id FROM Off_Bat WHERE ba_no='$ba_no'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
header('Location: http://cse.stereoserver.com/SAD/examweek1.php');
}
else
{
    echo '<html lang="en">';
    echo '<head>';
    echo '<meta charset="UTF-8">';
   echo '<title>Officer</title>';
   
     echo '</head>';
    
   echo '<body>';
        
    
        
       echo '<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>';
       echo '<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>';
        
       echo '<script>';
           
              echo  'swal("You did not hire any batman yet!", "Hire First.", "error").then((value) => {window.location.href = "http://cse.stereoserver.com/SAD/profile_off.php";});';
       echo '</script>';
        
       
  echo  '</body>';
echo '</html>';
}
?>
