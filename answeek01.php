<?php
session_name('my_app');
session_start();
?>


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
<div id="modal" class="modal fade" role='dialog'>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Quiz:Week01</h4>
            </div>
            <div class="modal-body">
                <p>পরীক্ষা দেওয়ার জন্য ধন্যবাদ</p>
                
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
           
                swal("", "পরীক্ষার জন্য ধন্যবাদ", "success")
                .then((value) => {
                window.location.href = "http://cse.stereoserver.com/SAD/profile_off.php";
});
        </script>
        
   
<!--Modal ends here--->


</div>
<script type="text/javascript">
    $(window).load(function(){
        $('#modal').modal('show');
    });
</script>
</body>
</html>
<?php
if ( $_SESSION['logged_in'] != 1 ) {
  header('Location: /SAD/popup_video.php?message=You must log-in first');
            exit;
}
else {
 
    // Makes it easier to read
   
    $ba_no = $_SESSION['ba_no'];
     $off_id = $_SESSION['Officer_id'];
    
 
}


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
$sql = "SELECT correct_ans FROM Week1";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $array[] = $row;
        }}
        
        
        


if(isset($_POST['ok']))

 {   
     $Q1 =$_POST['Q1i1'];
     $Q2 =$_POST['Q2i1'];
     $Q3 =$_POST['Q3i1'];
     $Q4 =$_POST['Q4i1'];
     $Q5 =$_POST['Q5i1'];
    
     
     $count=10;
     
    if(empty($Q1) || empty( $Q2) || empty($Q3 ) || empty( $Q4) || empty($Q5) ){
       header('Location: examweek1.php?info=সবগুলো প্রশ্নের উওর দিন');
    }else{
        
             if ($Q1 == $array[0]["correct_ans"]) {
                 $count=$count+10;
             } 
              if ($Q2 == $array[1]["correct_ans"]) {
                $count=$count+10;
             }
              if ($Q3 == $array[2]["correct_ans"]) {
                 $count=$count+10;
             }
              if ($Q4 == $array[3]["correct_ans"]) {
                 $count=$count+10;
             }
              if ($Q5 == $array[4]["correct_ans"]) {
                $count=$count+10;
             }
        
      
    
}}
echo $count;

echo $ba_no;


$sql1 = "SELECT `Bat_id` FROM `Off_Bat` WHERE `ba_no`='$ba_no'";
$result1 = $conn->query($sql1);

  
   
    while($row = $result1->fetch_assoc()) {
        
        
        $batid=$row["Bat_id"];
       
        
    
        }
$week=1;
if($count>=50)
{
    $week = 2;
}
        
        
$sql2 = "UPDATE `Batman` SET `week`=$week, `Mark`= $count WHERE `Bat_id`=$batid";
$result2 = $conn->query($sql2);

//$stmt= $mysqli -> prepare('UPDATE Batman SET Mark=? WHERE Bat_id=?');
//$stmt->bind_param( $count, $batid);
//$stmt->execute();
//$stmt->close();
$mysqli->close();


$conn->close();

session_write_close();
?>

