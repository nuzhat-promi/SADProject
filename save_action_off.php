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

$_SESSION['name'] = $_POST['name'];
$_SESSION['rank'] = $_POST['rank'];
$_SESSION['address'] = $_POST['address'];
$_SESSION['contact'] = $_POST['contact'];
$_SESSION['email'] = $_POST['email'];

$name = $_POST['name'];
$rank = $_POST['rank'];
$address = $_POST['address'];
$contact = $_POST['contact'];
$email = $_POST['email'];

  
$stmt= $conn->prepare('UPDATE Officer SET Officer_name=?, Rank=?, Officer_add=?, Officer_contact=?, Officer_email=? WHERE Officer_no=?');
$stmt->bind_param('ssssss', $name, $rank, $address, $contact, $email, $_SESSION['ba_no']);
$stmt->execute();
header('Location: http://cse.stereoserver.com/SAD/profile_off.php');
$stmt->close();
    
session_write_close();
?>