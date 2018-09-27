<?php
session_name('my_app');
session_start();

 $ba_no = $_SESSION['ba_no'];

//echo 'Ekhane hire er kaj';
 $dbhost = 'localhost';
   $dbuser = "cse_admin";
$dbpass = "y{SoYZD2IAS@";
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
} 



$id = $_GET['id'];
$name = $_GET['name'];
//echo $name;

 $query="SELECT Officer_id, Notf_id FROM Relation WHERE Officer_id='BA022' AND Notf_id=3 AND Bat_id='$id'";
    mysql_select_db('cse_SAD_grp3');
    $retval = mysql_query( $query, $conn );
    if(! $retval ) {
        die('Could not get data: ' . mysql_error());
    }
   $num=0;
    while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
             $num++;
    }
  if($num>0)
  {
     header('Location: http://cse.stereoserver.com/SAD/hire_success.php');
  }


else
{
 $sql = "SELECT Officer_name FROM Officer where Officer_no='{$_SESSION['ba_no']}'";  //thik korte hobe db **
   mysql_select_db('cse_SAD_grp3');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
       $off_name=$row['Officer_name'];
       //$id=$row['Officer_id'];
       //echo "<br>";
       //echo $id;
   }
   
    $f='Mr. ';
   $l=' wants to hire ';      //thik korte hobe db **
   $sql2 = "INSERT INTO Relation ". "(NCO_id,Officer_id,Notf_id,Statement,Bat_id,Time) ". "VALUES((SELECT Soldier_no FROM Barak_NCO,Officer WHERE Officer.Officer_unit=Barak_NCO.Unit_name AND Officer.Officer_no='{$_SESSION['ba_no']}'),'{$_SESSION['ba_no']}',3,'".$f.$off_name.$l.$name."','".$id."',NOW())";
   
    mysql_select_db('cse_SAD_grp3');
            $retval = mysql_query( $sql2, $conn );
            header('Location: http://cse.stereoserver.com/SAD/hire_success.php');
            
            echo "<br>";
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
          //  else echo "inserted";
            
          //  echo "Entered data successfully\n";
             header('Location: http://cse.stereoserver.com/SAD/hire_success.php');
}
   
   mysql_close($conn);
   
session_write_close();
?>