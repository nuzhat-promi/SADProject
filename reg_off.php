<?php
session_name('my_app');
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    
<title>Military Officer Registration</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Smart Batman, Training Website for Batman, Military Officer, Barak NCO" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!-- Bootstrap -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />

<!-- Font Awesome Icon -->
<link href="css/font-awesome.css" rel="stylesheet"> 

<!-- Flex Slider -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />

<!-- Custom stlylesheet -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

<!-- JavaScript -->
<script type="text/javascript" src="js/modernizr-2.6.2.min.js"></script>

<!--fonts-->
<link href="//fonts.googleapis.com/css?family=Oswald:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Federo" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
<!--//fonts-->

<!-- Icons -->
<link rel="shortcut icon" href="images/icon.png">

<!-- Sweet Alert -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
<?php
if(isset($_GET['message']))
echo '
<script>
    swal("'.$_GET['message'].'!", "", "warning")
    .then((value) => {
                window.location.href = "http://cse.stereoserver.com/SAD/reg_off.php";
});
</script>'; 

?>
<style>
body {font-family: Arial, Helvetica, sans-serif;}


/* Add padding to containers */
.container {
    padding: 16px;
}



/* Full-width input fields */
input[type=text], input[type=password], input[type=email], input[type=tel], input[list] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}


input[type=text]:focus, input[type=password]:focus, input[type=email]:focus, input[type=tel]:focus, input[list]:focus {
    background-color: #ddd;
    outline: none;
}

/* Styling Select option */
.custom-select {
  position: relative;
  font-family: Arial;
  margin-top: 5px;
}
.custom-select select {
  display: none; /*hide original SELECT element:*/
}
.select-selected {
  background-color: DodgerBlue;
}
/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}
/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}
/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
}
/*style items (options):*/
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}
/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}
.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for all buttons */
.registerbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity:1;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
}
</style>
<!-- header -->
  <div class="w3_navigation">
		<div class="container">
			<nav class="navbar navbar-default">
			    
			    <!-- Collapse nav button -->
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<h1><a class="navbar-brand" href="index.php">Smart Batman</a></h1>
				</div>
				<!-- Collapse nav button -->
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item menu__item--current"><a href="http://cse.stereoserver.com/SAD/index.php" class="menu__link">Home</a></li>
							<li class="menu__item"><a href="contact.php" class="menu__link">Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>
<!-- //header -->

<form action="action_reg_off.php" method="post">
  <div class="container">
    <h1>Military Officer Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <!--
    <label for="id"><b>Id no</b></label>
    <input type="text" placeholder="Enter Unique Id" name="id" required>
-->
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter your Name" name="name" required>
    
    <label for="rank"><b>Rank</b></label><br>
   <!--<input list="rank" placeholder="Select your Rank" name="rank">-->
  <div class="custom-select">
   <select id="rank" name="rank" required>
        <option value="Not Selected">Select Rank: </option>
        <option value="Second Lieutenant">Second Lieutenant</option>
        <option value="Lieutenant">Lieutenant</option>
        <option value="Captain">Captain</option>
        <option value="Major">Major</option>
        <option value="Lieutenant Colonel">Lieutenant Colonel</option>
        <option value="Colonel">Colonel</option>
        <option value="Brigadier General">Brigadier General</option>
        <option value="Major General">Major General</option>
        <option value="Lieutenant General">Lieutenant General</option>
        <option value="General">General</option>
  </select>
    </div><br><br>
  
  <label for="ba_no"><b>B/A No</b></label>
    <input type="text" placeholder="Enter your B/A No" name="ba_no" required>
    
    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter your Address" name="address" required>
    
    <label for="unit"><b>Cantonment Name</b></label>
    <!--<input list="unit" placeholder="Select your Cantonment Name" name="unit">-->
  <div class="custom-select">
    <select id="unit" name="unit" required>
        <option value="Not Selected">Select Cantonment:</option>
        <option value="Dhaka Cantonment">Dhaka Cantonment</option>
        <option value="Mirpur Cantonment">Mirpur Cantonment</option>
        <option value="Savar Cantonment">Savar Cantonment</option>
        <option value="Ghatail Cantonment">Ghatail Cantonment</option>
        <option value="Jessore Cantonment">Jessore Cantonment</option>
        <option value="Chittagong Cantonment">Chittagong Cantonment</option>
        <option value="Comilla Cantonment">Comilla Cantonment</option>
        <option value="Sylhet Cantonment">Sylhet Cantonment</option>
        <option value="Ramu, Cox's Bazar">Ramu, Cox's Bazar Cantonment</option>
        <option value="Lebukhali, Barisal">Lebukhali, Barisal Cantonment</option>
        <option value="Bogra">Bogra Cantonment</option>
        <option value="Rangpur">Rangpur Cantonment</option>
    </select>
    </div><br><br>
    
    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter your Email" name="email" required>
    
     <label for="contact"><b>Contact</b></label>
    <input type="tel" placeholder="Enter your Contact no" name="contact" required>

    <!--<label for="user"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="user" required>-->

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter your Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button  id="submit" type="submit" class="registerbtn" value="submit" onclick="myFunction()">Submit</button>
   
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="http://cse.stereoserver.com/SAD/index.php#officer">Log in</a>.</p>
  </div>
</form>

<script>
function myFunction() {
    var str1 = document.getElementById("email").value;
    var nn1 = str1.endsWith("@gmail.com");
    var nn2 = str1.endsWith("@yahoo.com");
    var str = document.getElementById("contact").value;
    var n1 = str.startsWith("015");
    var n2 = str.startsWith("017");
    var n3 = str.startsWith("016");
    var n4 = str.startsWith("018");
    if((n1||n2||n3||n4) && (nn1||nn2)) window.location.href = "http://cse.stereoserver.com/SAD/action_reg_off.php";
    if(!(n1||n2||n3||n4) && (nn1||nn2)) alert ("You have given invalid contact no!");
    if((n1||n2||n3||n4) && !(nn1||nn2)) alert ("You have given invalid email!");
    else if(!(n1||n2||n3||n4) && !(nn1||nn2)) alert ("You have given invalid input!");
    
   
   
    
}
</script>
<script>
document.getElementById("contact").innerHTML = "Invalid";
</script>

<!--for styling select option -->
<script type="text/javascript">
    var x, i, j, selElmnt, a, b, c;
/*look for any elements with the class "custom-select":*/
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /*for each element, create a new DIV that will act as the selected item:*/
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /*for each element, create a new DIV that will contain the option list:*/
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < selElmnt.length; j++) {
    /*for each option in the original select element,
    create a new DIV that will act as an option item:*/
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /*when an item is clicked, update the original select box,
        and the selected item:*/
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
      /*when the select box is clicked, close any other select boxes,
      and open/close the current select box:*/
      e.stopPropagation();
      closeAllSelect(this);
      this.nextSibling.classList.toggle("select-hide");
      this.classList.toggle("select-arrow-active");
  });
}
function closeAllSelect(elmnt) {
  /*a function that will close all select boxes in the document,
  except the current select box:*/
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}
/*if the user clicks anywhere outside the select box,
then close all select boxes:*/
document.addEventListener("click", closeAllSelect); 
</script>

</body>
</html>

<?php
session_write_close();
?>