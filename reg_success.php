<?php
session_name('my_app');
session_start();
?>
<html lang="en">
    <head>
     <meta charset="UTF-8">
     <title>Barak NCO</title>
    </head>
    
    <body>
        
    
        
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        
        <script>
           
                swal("Good job!", "You have registered successfully!", "success")
                .then((value) => {
                window.location.href = "http://cse.stereoserver.com/SAD/new/index2.php";
});
        </script>
        
       
    </body>
</html>

<?php
session_write_close();
?>