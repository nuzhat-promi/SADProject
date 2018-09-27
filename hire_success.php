<?php
session_name('my_app');
session_start();
?>
<html lang="en">
    <head>
     <meta charset="UTF-8">
     <title>Leave</title>
    </head>
    
    <body>
        
    
        
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        
        <script>
           
                swal("", "Hire request sent!", "success")
                .then((value) => {
                window.location.href = "http://cse.stereoserver.com/SAD/profile_off.php";
});
        </script>
        
       
    </body>
</html>

<?php
session_write_close();
?>