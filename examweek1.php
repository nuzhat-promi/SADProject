<?php
session_name('my_app');
session_start();

if ( $_SESSION['logged_in'] != 1 ) {
  $_SESSION['message'] = "You must log in !";
  header('location: error_off.php');    
  exit;
}
else {
 
    // Makes it easier to read
    
    $ba_no = $_SESSION['ba_no'];
 
}

if(isset($_GET['info'])) {echo $_GET['info'];
    echo '<!DOCTYPE html>
<html>
<head>
<style>
.cd-popup {
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.3s 0s, visibility 0s 0.3s;
}

.cd-popup.is-visible {
  opacity: 1;
  visibility: visible;
  transition: opacity 0.3s 0s, visibility 0s 0s;
}

.cd-popup-container {
  transform: translateY(-40px);
  transition-property: transform;
  transition-duration: 0.3s;
}

.is-visible .cd-popup-container {
  transform: translateY(0);
}
</style>
</head>
<body>

<div class="cd-popup" role="alert">
   <div class="cd-popup-container">
      <p>Are you sure you want to delete this element?</p>
      <ul class="cd-buttons">
         <li><a href="#0">Yes</a></li>
         <li><a href="#0">No</a></li>
      </ul>
      <a href="#0" class="cd-popup-close img-replace">Close</a>
   </div> <!-- cd-popup-container -->
</div> <!-- cd-popup -->

</body>
</html>';
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

$sql1 = "SELECT `week` FROM `Batman` WHERE `Bat_ID`=(SELECT `Bat_id` FROM `Off_Bat` WHERE `ba_no`='$ba_no')";

$result1 = $conn->query($sql1);

if ($result1->num_rows > 0) {
    // output data of each row
    while($row = $result1->fetch_assoc()) {
       
        $week= $row["week"];
        }}
       // echo $week;

$sql = "SELECT ID,Qtext,Imag1,Imag2 FROM Week1 WHERE week_no=$week ";

$result = $conn->query($sql);

   if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $array[] = $row;
        //$id= $row["ID"];
       // $ques=$row["Qtext"];
       // echo '<img src=uploads/images/'.$array[1]["Imag2"].' height="200" width="200" />';
       // $img1= $row["Imag1"];
       // $img2=$row["Imag2"];
        }}
        
        
        $conn->close();
        //$path='/uploads/images/a.png';
       // echo  $array[3]["ID"];
        echo $ques;
        //$showimage= $path.$img1;
        
       // echo '<img  src='.$path.' height="100" width="100" />';

?>


<!DOCTYPE html>
<html lang="en">
<head>
      <style>
    .background-image {
 

  background-color: #99A9D1;
 
}


button {
   
    height: 50px;
   
   
    width: 400px;
    vertical-align: center;
    background-color: #5F032A;
}

#close-image img {
    
    display: block;
    height: 150px;  
    width: 150px;
}

#close-CSS {
    
    background-size: 100px 130px;
    height: 134px;  
    width: 104px;
}

.cc-selector input{
    margin:10px;padding:10px;
    -webkit-appearance:none;
       -moz-appearance:none;
            appearance:none;
}
.visa{background-image:url(uploads/images/<?php echo $array[0]["Imag1"] ?> );}
.mastercard{background-image:url(uploads/images/<?php echo $array[0]["Imag2"] ?> );}
.Q21{background-image:url(uploads/images/<?php echo $array[1]["Imag1"] ?> );}
.Q22{background-image:url(uploads/images/<?php echo $array[1]["Imag2"] ?> );}
.Q31{background-image:url(uploads/images/<?php echo $array[2]["Imag1"] ?> );}
.Q32{background-image:url(uploads/images/<?php echo $array[2]["Imag2"] ?> );}
.Q41{background-image:url(uploads/images/<?php echo $array[3]["Imag1"] ?> );}
.Q42{background-image:url(uploads/images/<?php echo $array[3]["Imag2"] ?> );}
.Q51{background-image:url(uploads/images/<?php echo $array[4]["Imag1"] ?> );}
.Q52{background-image:url(uploads/images/<?php echo $array[4]["Imag2"] ?> );}


.cc-selector input:active +.drinkcard-cc{opacity: .9;}
.cc-selector input:checked +.drinkcard-cc{
    -webkit-filter: none;
       -moz-filter: none;
            filter: none;
}
.drinkcard-cc{
    cursor:pointer;
    background-size:contain;
    background-repeat:no-repeat;
    display:inline-block;
    width:200px;height:200px;
    -webkit-transition: all 100ms ease-in;
       -moz-transition: all 100ms ease-in;
            transition: all 100ms ease-in;
    -webkit-filter: brightness(1.5) grayscale(0.4) opacity(1);
       -moz-filter: brightness(1.5) grayscale(0.4)  opacity(1);
            filter: brightness(1.5)  grayscale(0.4) opacity(1);
}
.drinkcard-cc:hover{
    -webkit-filter: brightness(1.2)  opacity(.9);
       -moz-filter: brightness(1.2)  opacity(.9);
            filter: brightness(1.2)  opacity(.9);
}

/* Extras */
a:visited{color:#888}
a{color:#444;text-decoration:none;}
p{margin-bottom:.3em;}

</style>
  <title>Smart Batman Test</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
  <link rel="shortcut icon" href="images/icon.png">
<link rel="icon" href="images/icon.png">
  
  <div align="center"><h2><font color=#173B42 size=100px>Quiz:Week-<?php echo $week?></font></h2>
                <br></div>
</head>
<body class="background-image">


 <audio id="myAudio1">
  <source src="horse.ogg" type="audio/ogg">
  <source src="Audio/q1.m4a" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="myAudio2">
  <source src="horse.ogg" type="audio/ogg">
  <source src="Audio/q2.m4a" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="myAudio3">
  <source src="horse.ogg" type="audio/ogg">
  <source src="Audio/q3.m4a" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="myAudio4">
  <source src="horse.ogg" type="audio/ogg">
  <source src="Audio/q4.m4a" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
<audio id="myAudio5">
  <source src="horse.ogg" type="audio/ogg">
  <source src="Audio/q5.m4a" type="audio/mpeg">
  Your browser does not support the audio element.
</audio>
 
  
  
<div class="container">
  <div class="row">
      <form class="form-horizontal" role="form" action="answeek01.php" method="post"  align="center">
                <br>
<div class="container" align="center">
	<div class="row">
        <div class="table-responsive col-md-12">
        <table id="sort2" class="table-bordered table-sortable">
           
            <tbody align="center">
        
              <tr>
                   <td style="font-size: 2em;  width: 100px" valign="center"><br><font color="white"><?php echo $array[0]["ID"] ?></font></td>
                     <div class="cc-selector">
                    
                    <td style="font-weight: 900;">
                        <br><font color=#173B42><?php echo $array[0]["Qtext"] ?></font>
                        <br><button style="width:160px; height:30px; color:white; background-color:blue;" onclick="playAudio1()" type="button">প্রশ্নটা শুনো</button>
                    </td>
                   <td><input id="Q1i1" type="radio" name="Q1i1" value="A1" /></td> 
                    <td><label class="drinkcard-cc visa" for="Q1i1"></label></td>
                    <td><input id="Q1i2" type="radio" name="Q1i1" value="B1" /></td>
                  <td><label class="drinkcard-cc mastercard" for="Q1i2"></label></td>
                </div>
                </tr>
                
                <tr>
                   <td style="font-size: 2em;  width: 100px" valign="center"><br><font color="white"><?php echo $array[1]["ID"] ?></font></td>
                     <div class="cc-selector">
                    
                    <td style="font-weight: 900;">
                        <br><font color=#173B42><?php echo $array[1]["Qtext"] ?></font>
           <br><button style="width:160px; height:30px; color:white; background-color:blue;" onclick="playAudio2()" type="button">প্রশ্নটা শুনো</button>
           
                    </td>
                   <td><input id="Q2i1" type="radio" name="Q2i1" value="A2" /></td> 
                    <td><label class="drinkcard-cc Q21" for="Q2i1"></label></td>
                    <td><input id="Q2i2" type="radio" name="Q2i1" value="B2" /></td>
                  <td><label class="drinkcard-cc Q22" for="Q2i2"></label></td>
                </div>
                </tr>
                
                                <tr>
                   <td style="font-size: 2em;  width: 100px" valign="center"><br><font color="white"><?php echo $array[2]["ID"] ?></font></td>
                     <div class="cc-selector">
                    
                    <td style="font-weight: 900;">
                        <br><font color=#173B42><?php echo $array[2]["Qtext"] ?></font>
                        <br><button style="width:160px; height:30px; color:white; background-color:blue;" onclick="playAudio3()" type="button">প্রশ্নটা শুনো</button>
                        </td>
                   <td><input id="Q3i1" type="radio" name="Q3i1" value="A3" /></td> 
                    <td><label class="drinkcard-cc Q31" for="Q3i1"></label></td>
                    <td><input id="Q3i2" type="radio" name="Q3i1" value="B3" /></td>
                  <td><label class="drinkcard-cc Q32" for="Q3i2"></label></td>
                </div>
                </tr>
                
                
                  <tr>
                   <td style="font-size: 2em;  width: 100px" valign="center"><br><font color="white"><?php echo $array[3]["ID"] ?></font></td>
                     <div class="cc-selector">
                    
                    <td style="font-weight: 900;">
                        <br><font color=#173B42><?php echo $array[3]["Qtext"] ?></font>
                        <br><button style="width:160px; height:30px; color:white; background-color:blue;" onclick="playAudio4()" type="button">প্রশ্নটা শুনো</button>
                        </td>
                   <td><input id="Q4i1" type="radio" name="Q4i1" value="A4" /></td> 
                    <td><label class="drinkcard-cc Q41" for="Q4i1"></label></td>
                    <td><input id="Q4i2" type="radio" name="Q4i1" value="B4" /></td>
                  <td><label class="drinkcard-cc Q42" for="Q4i2"></label></td>
                </div>
                </tr>
                
                
                     <tr>
                   <td style="font-size: 2em;  width: 100px" valign="center"><br><font color="white"><?php echo $array[4]["ID"] ?></font></td>
                     <div class="cc-selector">
                    
                    <td style="font-weight: 900;">
                        <br><font color=#173B42><?php echo $array[4]["Qtext"] ?></font>
                        <br><button style="width:160px; height:30px; color:white; background-color:blue;" onclick="playAudio5()" type="button">প্রশ্নটা শুনো</button>
                        </td>
                   <td><input id="Q5i1" type="radio" name="Q5i1" value="A5" /></td> 
                    <td><label class="drinkcard-cc Q51" for="Q5i1"></label></td>
                    <td><input id="Q5i2" type="radio" name="Q5i1" value="B5" /></td>
                  <td><label class="drinkcard-cc Q52" for="Q5i2"></label></td>
                </div>
                </tr>
                
                
 
            </tbody> 
            
        </table>
        </div>
    </div><div >
        <br>
                        <button type="submit"  name="ok" ><font color=white>জমা দিন</font></button>
                        <br><br>
                        
                    </div>
</div>
      </form> <!-- /form -->
  
</div>

<script>
var x1 = document.getElementById("myAudio1"); 

function playAudio1() { 
    x1.play();
}
    
    var x2 = document.getElementById("myAudio2"); 

function playAudio2() { 
    x2.play();
}
    
    var x3 = document.getElementById("myAudio3"); 

function playAudio3() {
    x3.play();
}
    
    var x4 = document.getElementById("myAudio4"); 

function playAudio4() { 
    x4.play();
} 

 var x5 = document.getElementById("myAudio5"); 

function playAudio5() { 
    x5.play();
} 

</script>


</body>
</html>

<?php
session_write_close();
?>