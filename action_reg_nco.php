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

// Set session variables to be used on profile.php page
$_SESSION['name'] = $_POST['name'];
$_SESSION['user'] = $_POST['user'];
$_SESSION['psw'] = $_POST['psw'];
$_SESSION['sol_no'] = $_POST['sol_no'];
$_SESSION['rank'] = $_POST['rank'];
$_SESSION['address'] = $_POST['address'];
$_SESSION['unit'] = $_POST['unit'];
$_SESSION['contact'] = $_POST['contact'];
$_SESSION['email'] = $_POST['email'];


// Escape all $_POST variables to protect against SQL injections
$name = $conn->escape_string($_POST['name']);
$username = $conn->escape_string($_POST['user']);
$password = $conn->escape_string(password_hash($_POST['psw'], PASSWORD_BCRYPT));
$sol_no = $conn->escape_string($_POST['sol_no']);
$rank = $conn->escape_string($_POST['rank']);
$address = $conn->escape_string($_POST['address']);
$unit = $conn->escape_string($_POST['unit']);
$contact = $conn->escape_string($_POST['contact']);
$email = $conn->escape_string($_POST['email']);

function generate_random_string() {
	$alpha_numeric = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+';
	return substr(str_shuffle($alpha_numeric), 0, 25);
} 
      
// Check if user with that username already exists
$result = $conn->query("SELECT * FROM Barak_NCO WHERE Soldier_no='$sol_no'") or die($conn->error());

// We know username exists if the rows returned are more than 0
//if ( $result->num_rows > 0 ) {
    
    //header('Location: /SAD/reg_nco.php?message=User with this Soldier Number already exists!');
//}
//else { // Username doesn't already exist in a database, proceed...

    $sql = "INSERT INTO Barak_NCO (Name, User_name, Password, Soldier_no, Rank, Address, Unit_name, Contact, Email)
    VALUES ('$name','$sol_no','$password','$sol_no','$rank','$address','$unit','$contact','$email')";
    
    // This is how we'll know the user is logged in
        $_SESSION['logged_in'] = true;
        $_SESSION['s_auth_var'] = generate_random_string();
	    $_SESSION['c_ip'] = $_SERVER['REMOTE_ADDR'];
		$_SESSION['last_activity'] = time();
	    session_regenerate_id();
    
    header('location: http://cse.stereoserver.com/SAD/reg_success.php');

    $fire=mysqli_query($conn,$sql) or die("cannot insert");
    if($fire)
    {
        echo "data inserted";
        header('Location: http://cse.stereoserver.com/SAD/reg_seccess.php');
        exit;
    }

//}

session_write_close();
?>
     