<?php
session_name('my_app');
session_start();
?>





<!DOCTYPE html>
<html>
<head>

<title>Batman Registration</title>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

 <link rel="shortcut icon" href="images/icon.png">
<link rel="icon" href="images/icon.png">

  <link rel="stylesheet" href="https://apps.mist.ac.bd/pgp/admin/css/bootstrap-datepicker.css">
<script src="https://apps.mist.ac.bd/pgp/admin/js/jquery.min.js"></script>
<script src="https://apps.mist.ac.bd/pgp/admin/js/bootstrap-datepicker.js"></script>

               <script>
  					$(function() {
  					  $( "#birthDate" ).datepicker({"format": "dd/mm/yyyy","autoclose": true});
  					  $( "#hireDate" ).datepicker({"format": "dd/mm/yyyy","autoclose": true});
  					});
  				</script>


</head>
<body>
<style>
    body {
    background-color: #eee;
}

*[role="form"] {
    max-width: 530px;
    padding: 15px;
    margin: 0 auto;
    background-color: #fff;
    border-radius: 0.3em;
}

*[role="form"] h2 {
    margin-left: 5em;
    margin-bottom: 1em;
}


img{
  max-width:100px;
  height:100px;
  margin-top:20px;
}
input{
    margin-top:20px;
}

.topright {
    position: absolute;
    top: 50px;
    left: 450px;
    font-size: 12px;
}
.topleft {
    position: absolute;
    top: 8px;
    left: 16px;
    font-size: 18px;
}

</style>




<div style="width:100%">


<div class="container">
            <form class="form-horizontal" role="form" action="batregsub.php" method="post" enctype="multipart/form-data">
              
                <h2>Registration Form</h2>
                <br>
                 <div class="form-group">
                    <label for="upload" class="col-sm-3 control-label">Upload Image:</label>
                    
                    <div class="col-sm-9">
		                  <input type="file" name="file"/>
                    </div> 
                </div>
                <div class="form-group">
                    <label for="id" class="col-sm-3 control-label">ID</label>
                    <div class="col-sm-9">
                        <input type="text" id="id" name="id" placeholder="Enter Your ID" class="form-control" autofocus>
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="firstName" class="col-sm-3 control-label">Full Name</label>
                    <div class="col-sm-9">
                        <input type="text" id="firstName" name="firstName" placeholder="Full Name" class="form-control" autofocus>
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="Parentname" class="col-sm-3 control-label">Father/ Mother Name</label>
                    <div class="col-sm-9">
                        <input type="text" name="pname" id="pname" placeholder="Parent Name" class="form-control" autofocus>
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="padd" class="col-sm-3 control-label">Parmanent Address</label>
                    <div class="col-sm-9">
                        <input type="text" name="padd" id="padd" placeholder="Parmanent Address" class="form-control" autofocus>
                    </div>
                    
                </div>
                
                <div class="form-group">
                    <label for="birthDate" class="col-sm-3 control-label">Date of Birth</label>
                    <div class="col-sm-9">
                        <input type="text" name="birthDate" id="birthDate" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="age" class="col-sm-3 control-label">Age</label>
                    <div class="col-sm-9">
                        <input id="age" name="age"  class="form-control" type="number" min="1" >
						<span id="error_age" class="text-danger"></span>
                    </div>
                </div>
                
                
                <div class="form-group">
                    <label class="control-label col-sm-3">Gender</label>
                    <div class="col-sm-6">
                        <div class="row">
                            
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="gender" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
                                </label>
                            </div>
                            <div class="col-sm-4">
                                <label class="radio-inline">
                                    <input type="radio" id="gender" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
                                </label>
                            </div>
                            
                        </div>
                    </div>
                </div> <!-- /.form-group -->
                
                <div class="form-group">
                    <label for="contact" class="col-sm-3 control-label">Phone Number</label>
                    <div class="col-sm-9">
                        <input type="text" id="cont" name="cont" placeholder="Enter Phone Number Here.." class="form-control">
                    </div>
                </div>
                
               <div class="form-group">
                    <label for="hireDate" class="col-sm-3 control-label">Hire Date </label>
                    <div class="col-sm-9">
                        <input type="text" name="hireDate" id="hireDate" class="form-control">
                    </div>
                </div>
               
                <div class="form-group">
                    <div class="col-sm-9 col-sm-offset-3">
                        <button type="submit"  name="ok" class="btn btn-primary btn-block">Register</button>
                    </div>
                </div>
            </form> <!-- /form -->
        </div> <!-- ./container -->
        </div>
       
        
</body>

</html>
<?php
session_write_close();
?>

