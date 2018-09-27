<?php
session_name('my_app');
session_start();
// for NCO
/* User login process, checks if user exists and password is correct */

function generate_random_string() {
	$alpha_numeric = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+';
	return substr(str_shuffle($alpha_numeric), 0, 25);
}

if (isset($_SESSION['s_auth_var']))header('Location: /SAD/new/index2.php');
else
{
	if(isset($_POST['sol_nco']) && !empty($_POST['sol_nco']) && isset($_POST['psw_nco']) && !empty($_POST['psw_nco'])){
	    // Escape email to protect against SQL injections
        $sol_nco = $conn->escape_string($_POST['sol_nco']);
        $result = $conn->query("SELECT * FROM Barak_NCO WHERE Soldier_no='$sol_nco'");

        if ( $result->num_rows == 0 ){ // User doesn't exist
            header('Location: /SAD/index.php?message=User with that Soldier Number does not exist!');
            exit;
        }
        else { // User exists
            $user = $result->fetch_assoc();

            if ( password_verify($_POST['psw_nco'], $user['Password']) ) {
        
                $_SESSION['name'] = $user['Name'];
                $_SESSION['user'] = $user['User_name'];
                $_SESSION['psw'] = $user['Password'];
                $_SESSION['sol_no'] = $user['Soldier_no'];
                $_SESSION['rank'] = $user['Rank'];
                $_SESSION['address'] = $user['Address'];
                $_SESSION['unit'] = $user['Unit_name'];
                $_SESSION['contact'] = $user['Contact'];
                $_SESSION['email'] = $user['Email'];
        
                // This is how we'll know the user is logged in
                $_SESSION['logged_in'] = true;
                
                $_SESSION['s_auth_var'] = generate_random_string();
			    $_SESSION['c_ip'] = $_SERVER['REMOTE_ADDR'];
			    $_SESSION['last_activity'] = time();
			    session_regenerate_id();
			
                header('location: http://cse.stereoserver.com/SAD/new/index2.php');
                exit;
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