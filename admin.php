<?php
session_name('my_admin');
session_start();
if (isset($_SESSION['s_auth_var']))header('Location: /transportmgmtt/ena/admin.php');
?>

<!DOCTYPE html> 
<html>
<head>
<title>Admin Panel Login</title>

<!-- Custom stlylesheet -->
<link href="styles/admin_login_style.css" rel="stylesheet" type="text/css" media="all" />

<!-- Icons -->
<link rel="shortcut icon" href="images/logo.jpg">

<!-- Sweet Alert -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body> 
<?php
if(isset($_GET['message']))
echo '
<script>
    swal("'.$_GET['message'].'!", "Please Try Again", "warning")
    .then((value) => {
                window.location.href = "http://cse.stereoserver.com/transportmgmtt/ena/admin.php";
});
</script>'; 

?>

<h1><a href="/transportmgmtt/ena/admin.php" style="color:#fef2bf">Ena Paribohon Admin Panel Login</a></h1>


<div class="login">
  <div class="login-triangle"></div>
  
  <h2 class="login-header">Log in</h2>

  <form class="login-container" action="/transportmgmtt/ena/action_admin.php" method="post">
        <label for="user"><b>Username or Email</b></label>
        <p><input type="text" placeholder="Enter username or email" name="user" required></p>
        
        <label for="password"><b>Password</b></label>
        <p><input type="password" placeholder="Enter password" name="password" required></p>
    
        <p><input type="submit" value="Log in" name="admin_btn"></p>
  </form>
</div>

</body>
</html>

<?php
session_write_close();
?>
