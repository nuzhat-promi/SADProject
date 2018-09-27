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

if(isset($_POST['ok']))

 {    $b_id               =$_POST['id'];
     $b_name             =$_POST['firstName'];
     $b_P_name           =$_POST['pname'];
     $b_add              = $_POST['padd'];
     $b_date             = $_POST['birthDate'];
     $b_age              = $_POST['age'];
     $b_gender           =$_POST['gender'];
     $b_contact          =$_POST['cont'];
     $hire_date         = $_POST['hireDate'];
     
$currentDir = getcwd();
$name1= $_FILES['file']['name'];
$tmp_name1= $_FILES['file']['tmp_name'];
$position1= strpos($name1, ".");
$fileextension1= substr($name1, $position1 + 1);
$fileextension1= strtolower($fileextension1);
echo $name1;

    
 if (isset($name1)) {
     echo 'aste';
    $path= '/SAD/uploads/images/';
    if (empty($name1) )
    {
        echo "Please choose a file";
    }
    else if (!empty($name1)){
        if (($fileextension1 !== "png") && ($fileextension1 !== "jpg") && ($fileextension1 !== "jpeg") && ($fileextension1 !== "gif") && ($fileextension1 !== "tif") && ($fileextension2 !== "png") && ($fileextension2 !== "jpg") && ($fileextension2 !== "jpeg") && ($fileextension2 !== "gif") && ($fileextension2 !== "tif"))
        {
            echo "The file extension must be .png, .jpg, .jpeg, .gif or .tif in order to be uploaded";
        }
        else if (($fileextension1 == "png") || ($fileextension1 == "jpg") || ($fileextension1 == "jpeg") || ($fileextension1 == "gif") || ($fileextension1 == "tif") || ($fileextension2 == "png") || ($fileextension2 == "jpg") || ($fileextension2 == "jpeg") || ($fileextension2 == "gif") || ($fileextension2 == "tif"))
        {
            if (move_uploaded_file($tmp_name1, $path.$name1)) 
            {
                $_SESSION['img1'] = $name1;
                $_SESSION['ext1'] = $fileextension1;
                echo 'Uploaded!';
            }
            else
            {
                echo 'not uploaded';
            }
        }
    }
}

     
     
    /* echo  $b_id ;
      echo  $b_name ;
       echo  $b_P_name ;
        echo  $b_add ;
         echo  $b_date ;
          echo  $b_age ;
           echo  $b_gender ;
            echo  $b_contact ;
           echo  $hire_date;*/
     
     if (empty($b_id) || empty( $b_name) || empty($b_P_name ) || empty( $b_add) || empty($b_date) || empty($b_age) || empty($b_gender) || empty( $b_contact)  )
    {
        
     
        echo '
      <!DOCTYPE html>
<html lang="en">
<head>



  <title>Batman Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="shortcut icon" href="images/icon.png">
<link rel="icon" href="images/icon.png">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Modal Example</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Error</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Please register properly.</p>
        </div>
        <div class="modal-footer">
          <button type="button" <a href="batregsub.php" class="btn btn-default" data-dismiss="modal">Close</a></button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>
'; 
  
        
    }else{
       
       $sql="INSERT INTO Batman (Bat_ID, Bat_name, Bat_parentname,Bat_address, Bat_dob, Age, Gender,Contact,Hiredate,image) VALUES ('$b_id','$b_name','$b_P_name','$b_add','$b_date','$b_age','$b_gender','$b_contact','$hire_date','$name1')";
       
    $yes=mysqli_query($conn,$sql) or die("cannot insert") ;
    if($yes)
    {
        echo '
<html>
<head>
<title>Smart Batman</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

</head>
<body>
<div class="container" style="padding:150px;">
    

   <!----modal starts here--->
<div id="modal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Quiz:Week01</h4>
            </div>
            <div class="modal-body">
                <p>ধন্যবাদ</p>
                
            </div>
            <div class="modal-footer">
               <form action="index.php">
                <input type="submit" value="Go to Home" />
                </form>
            </div>
        </div>
      </div>
  </div>
  
    
        
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        
        <script>
           
                swal("", " ধন্যবাদ", "success")
                .then((value) => {
                window.location.href = "http://cse.stereoserver.com/SAD/new/index2.php";
});
        </script>
        
   
<!--Modal ends here--->


</div>
<script type="text/javascript">
    $(window).load(function(){
        $("#modal").modal("show");
    });
</script>
</body>
</html>';
    }
        
    }
}

$conn->close();
session_write_close();
?>

