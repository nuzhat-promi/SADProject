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
$sol_no = $_SESSION['sol_no'];

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


 //$sql = "UPDATE Officer SET Officer_name=$name, Rank=$rank, Officer_add=$address, Officer_unit=$unit, Officer_email=$email, Officer_contact=$contact WHERE Officer_no='{$_SESSION['ba_no']}'";
//$sql = "UPDATE Officer SET Officer_name={$_SESSION['name']},Rank={$_SESSION['rank']},Officer_add={$_SESSION['address']},Officer_unit={$_SESSION['unit']},Officer_contact={$_SESSION['contact']},Officer_email={$_SESSION['email']} WHERE Officer_no='2345'"; 
  //header('Location: http://cse.stereoserver.com/SAD/profile_off.php');
  
$stmt= $conn->prepare('UPDATE Barak_NCO SET Name=?, Rank=?, Address=?, Contact=?, Email=?  WHERE Soldier_no=?');
$stmt->bind_param('ssssss', $name, $rank, $address, $contact, $email, $_SESSION['sol_no']);
$stmt->execute();
header('Location: http://cse.stereoserver.com/SAD/new/index2.php');
$stmt->close();
   /*$fire=mysqli_query($conn,$sql) or die("cannot insert");
    if($fire)
    {
        echo "data updated";
        //header('Location: http://cse.stereoserver.com/SAD/profile_off.php');
        exit;
    }
    else
    {
        die("failed: ");
    }*/
    
    session_write_close();
    ?>