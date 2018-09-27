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



if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login_off_btn'])) { //officer logging in
    
        require 'login_off.php';
        
    }
    
    elseif (isset($_POST['login_nco_btn'])) { //barak nco logging in
        require 'login_nco.php';
    }
}

session_write_close();
?>