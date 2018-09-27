<?php
session_name('my_admin');
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


function generate_random_string() {
	$alpha_numeric = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+';
	return substr(str_shuffle($alpha_numeric), 0, 25);
}

if (isset($_SESSION['s_auth_var']))header('Location: /SAD/admin_index.php');
else{
	if(isset($_POST['user']) && !empty($_POST['user']) && isset($_POST['password']) && !empty($_POST['password'])){
	    
	    // Escape email to protect against SQL injections
        $username = $conn->escape_string($_POST['user']);
        $result = $conn->query("SELECT * FROM Admin_Panel WHERE username='$username'");

        if ( $result->num_rows == 0 ){ // User doesn't exist
            header('Location: /SAD/admin.php?message=You have entered incorrect username.');
        }
        else { // User exists
            $user = $result->fetch_assoc();
            $password = $conn->escape_string($_POST['password']);
            
            if ( $password == $user['password']) {
                $_SESSION['user'] = $user['username'];
                $_SESSION['password'] = $user['Password'];
        
                // This is how we'll know the user is logged in
                $_SESSION['logged_in'] = true;
                
                $_SESSION['s_auth_var'] = generate_random_string();
			    $_SESSION['c_ip'] = $_SERVER['REMOTE_ADDR'];
			    $_SESSION['last_activity'] = time();
			    session_regenerate_id();

                header('location: /SAD/admin_index.php');
            }
            else {
                $_SESSION['msg'] = "Password doesnot match!";
                header('Location: /SAD/admin.php?message=You have entered wrong password.');
                exit;
            }
        } 
	}
	else header('Location: admin.php?message=Invalid username and password.');
}

session_write_close();
?>
