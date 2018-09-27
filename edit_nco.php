<?php
session_name('my_app');
session_start();
// Check if user is logged in using the session variable
if (!isset($_SESSION['s_auth_var'])) {
  header('Location: /SAD/index.php?message=You must log in before viewing your profile page!');   
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    
<title>Barak NCO Profile Edit</title>
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
</head>
<script>
function getOption1() {
    var obj = document.getElementById("unit");
    document.getElementById("demo1").innerHTML = 
    obj.options[obj.selectedIndex].text;
}
</script>

<script>
function getOption2() {
    var obj = document.getElementById("rank");
    document.getElementById("demo2").innerHTML = 
    obj.options[obj.selectedIndex].text;
}
</script>

<body>

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
  color: black;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
}
/*style items (options):*/
.select-items {
  position: absolute;
  background-color: #f1f1f1;
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
                    <h1><a class="navbar-brand" href="http://cse.stereoserver.com/SAD/new/index2.php">Barak NCO</a></h1>
				</div>
				<!-- Collapse nav button -->
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item menu__item--current"><a href="http://cse.stereoserver.com/SAD/new/index2.php" class="menu__link">Profile</a></li>
							<li class="menu__item"><a href="../batmanreg.php" class="menu__link">Batman Registration</a></li>
							<li class="menu__item"><a href="http://cse.stereoserver.com/SAD/logout_nco.php" class="menu__link">Logout</a></li>
						</ul>
					</nav>
				</div>
			</nav>
		</div>
	</div>
<!-- //header -->

<?php
// Check if user is logged in using the session variable

 
    // Makes it easier to read
    $name = $_SESSION['name'];
    $sol_no = $_SESSION['sol_no'];
   $rank = $_SESSION['rank'];
   $address = $_SESSION['address'];
   $unit = $_SESSION['unit'];
   $contact = $_SESSION['contact'];
   $email = $_SESSION['email'];
   $password=$_SESSION['psw'];

?>

<form action="save_action_nco.php" method="post">
  <div class="container">
    <h1>Barak NCO Profile Edit</h1>
    <p>Please fill in this form to edit your profile details.</p>
    <hr>
    
    <label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter your Name" value=<?php echo $name; ?> name="name" required>
    
    <label for="rank"><b>Rank</b></label><br>
    <div class="custom-select">
    <select id="rank" name="rank" required>
        <option value="<?=$rank?>"><?=$rank?></option>
        <option value="Sainik">Sainik</option>
        <option value="Lance Corporal">Lance Corporal</option>
        <option value="Corporal">Corporal</option>
        <option value="Sergeant">Sergeant</option>
    </select>
    </div><br><br>
  
    
    <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter your present Address" value=<?php echo $address; ?> name="address" required>
    
    <label for="email"><b>Email</b></label>
    <input type="email" placeholder="Enter Email" value=<?php echo $email; ?> name="email" required>
    
     <label for="contact"><b>Contact</b></label>
    <input type="tel" placeholder="Enter Contact no" value=<?php echo $contact; ?> name="contact" required>

    <button type="submit" class="registerbtn" value="submit">SAVE CHANGES</button>
   
  </div>
  
  
</form>


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