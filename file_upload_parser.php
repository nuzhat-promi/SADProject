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

$path= '/uploads/video/';
$name= $_FILES['file1']['name'];
$tmp_name= $_FILES['file1']['tmp_name'];
$currentDir = getcwd();
$fileType = $_FILES["file1"]["type"]; // The type of file it is
$fileSize = $_FILES["file1"]["size"]; // File size in bytes
$fileErrorMsg = $_FILES["file1"]["error"]; // 0 for false... and 1 for true
$position= strpos($name, ".");
$fileextension= substr($name, $position + 1);
$fileextension= strtolower($fileextension);

if (!$tmp_name) { // if file not chosen
    echo "ERROR: Please browse for a file before clicking the upload button.";
    exit();
}
if(move_uploaded_file($tmp_name, $currentDir.$path.$name)){
    echo "Video upload is complete";
    
   /* $sql = "INSERT INTO Task (week_no, video_url)
    VALUES ('".$week."', '$name')";
$fire=mysqli_query($conn,$sql) or die("cannot insert");*/

    
} else {
    echo "Failed to upoad video";
}
?>