<?php
session_name('my_admin');
session_start();
?>
<html lang="en">
    <head>
     <meta charset="UTF-8">
     <title>Alert</title>
    </head>
    
    <body>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        
        <script>
        swal({
  title: "Confirm",
  text: "Do you really want to log-out?",
  icon: "warning",
  buttons: true,
  dangerMode: true,
})
.then((willDelete) => {
  if (willDelete) {
    window.location.href = "http://cse.stereoserver.com/SAD/logout_admin.php";
  } else {
    window.location.href = "http://cse.stereoserver.com/SAD/admin_index.php";
  }
});

        </script>
        
    </body>
</html>

<?php
session_write_close();
?>