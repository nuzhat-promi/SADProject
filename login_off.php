<?php
session_name('my_app');
session_start();
// for Officer
/* User login process, checks if user exists and password is correct */

function generate_random_string() {
	$alpha_numeric = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+';
	return substr(str_shuffle($alpha_numeric), 0, 25);
}

if (isset($_SESSION['s_auth_var']))header('Location: /SAD/profile_off.php');
else
{
	if(isset($_POST['ba_off']) && !empty($_POST['ba_off']) && isset($_POST['psw_off']) && !empty($_POST['psw_off'])){
	    // Escape email to protect against SQL injections
        $ba_off = $conn->escape_string($_POST['ba_off']);
        $result = $conn->query("SELECT * FROM Officer WHERE Officer_no='$ba_off'");

        if ( $result->num_rows == 0 ){ // User doesn't exist
            header('Location: /SAD/index.php?message=User with that B/A Number does not exist!');
            exit;
        }
        else { // User exists
            $user = $result->fetch_assoc();

            if ( password_verify($_POST['psw_off'], $user['Officer_password']) ) {
        
                $_SESSION['name'] = $user['Officer_name'];
                $_SESSION['user'] = $user['Officer_username'];
                $_SESSION['psw'] = $user['Officer_password'];
                $_SESSION['ba_no'] = $user['Officer_no'];
                $_SESSION['rank'] = $user['Rank'];
                $_SESSION['address'] = $user['Officer_add'];
                $_SESSION['unit'] = $user['Officer_unit'];
                $_SESSION['contact'] = $user['Officer_contact'];
                $_SESSION['email'] = $user['Officer_email'];
        
                // This is how we'll know the user is logged in
                $_SESSION['logged_in'] = true;
                
                $_SESSION['s_auth_var'] = generate_random_string();
			    $_SESSION['c_ip'] = $_SERVER['REMOTE_ADDR'];
			    $_SESSION['last_activity'] = time();
			    session_regenerate_id();
                
                header("location: profile_off.php");
            }
            else {
                header('Location: /SAD/index.php?message=You have entered wrong password.');
                exit;
            }
        }
	}
}

session_write_close();
?>