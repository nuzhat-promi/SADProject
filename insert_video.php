<?php
$name= $_FILES['file1']['name'];

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

$sql = "INSERT INTO Task (week_no, video_url, title)
    VALUES ('{$_POST['week']}', '$name', '{$_POST['title']}')";
$fire=mysqli_query($conn,$sql) or die("cannot insert");
if(!fire)
{
    //echo "cant in";
}
else
{
   // echo "inserted";
}
    header('location: http://cse.stereoserver.com/SAD/admin_index.php');

?>