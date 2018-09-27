<?php
session_name('my_app');
session_start();


 
    // Makes it easier to read
    $ba_no = $_GET['ba_no'];
  // echo $_SESSION['ba_no'];

  $dbhost = 'localhost';
   $dbuser = "cse_admin";
    $dbpass = "y{SoYZD2IAS@";
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
  // echo $ba_no;
   $query="SELECT Officer_id, Notf_id FROM Relation WHERE Officer_id='{$_SESSION['ba_no']}' AND Notf_id=1";
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
     header('Location: http://cse.stereoserver.com/SAD/new/leave_success.php');
  }


  else {
   $sql ="SELECT Officer_name FROM Officer where Officer_no='{$_SESSION['ba_no']}'";  //thik korte hobe db **
   mysql_select_db('cse_SAD_grp3');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
       $off_name=$row['Officer_name'];
   }
   
   $f='Mr. ';
   $l=' is going to leave';      //thik korte hobe db **
   $sql2 = "INSERT INTO Relation ". "(NCO_id,Officer_id,Notf_id,Statement,Time) ". "VALUES((SELECT Soldier_no FROM Barak_NCO,Officer WHERE Officer.Officer_unit=Barak_NCO.Unit_name AND Officer.Officer_no='{$_SESSION['ba_no']}'),'{$_SESSION['ba_no']}',1,'".$f.$off_name.$l."',NOW())";
               
            mysql_select_db('cse_SAD_grp3');
            $retval = mysql_query( $sql2, $conn );
             header('Location: http://cse.stereoserver.com/SAD/new/leave_success.php');
            
            if(! $retval ) {
               die('Could not enter data: ' . mysql_error());
            }
            
            echo "Entered data successfully\n";
             header('Location: http://cse.stereoserver.com/SAD/new/leave_success.php');
   }
   
   mysql_close($conn);
session_write_close();
?>