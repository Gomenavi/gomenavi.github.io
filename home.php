
<?php
session_start();

//connect to database
$db=mysqli_connect("localhost","root","","waterbilling");


?>
<!DOCTYPE html>
<html>
<head>
	<style>
		body {
			background: url(/waterbillingsystem/img/background.jpg) no-repeat center center fixed; ;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
		img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  
}
hr.new5 {
  border: 3px solid black;
  
  
}
h1.text1 {
 
  font-stretch: expanded;
  font-size: 40px;
}

	</style>
<title>Calao Water Billing System</title>
<link href="css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="js/jquery1.js" type="text/javascript"></script>
<script src="css/facebox.js" type="text/javascript"></script>
  <script type="text/javascript">
	jQuery(document).ready(function($) {
	  $('a[rel*=facebox]').facebox({
		loadingImage : 'src/loading.gif',
		closeImage   : 'src/closelabel.png'
	  })
	})
  </script>
<script src="js/application.js" type="text/javascript" charset="utf-8"></script>	
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Calao Water Billing System</title>
</head>
<body>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="https://www.sourcecodester.com">Calao</a>
		</div>
		<ul id="mynav" class="nav navbar-nav">
		<li class="nav active"><a href="home.php">Home</a></li>
		<li class="nav"><a href="bill.php">Manage Bills</a></li>
    <li class="nav"><a href="history.php">Log In History</a></li>
		
		<li class="nav"><a href="viewuser.php">Pending Accounts</a></li>
		<li><a id="logout" name="logout" href="logout.php">Logout</a></li>
		</ul>
	</div>
</nav>

<img src="/waterbillingsystem/img/logo.png" alt="logo" width="240" height="230">
 
<h2 align="center" style = "font-family:courier"><b>Republic of the Philippines</b></h2>
<h2 align="center"  style = "font-family:courier"><b>Municipality of Prieto Diaz</b></h2>
<h2 align="center" style = "font-family:courier"><b>Barangay Calao</b></h2>
<hr size="50" width="50%"  class="new5"> 
<div class="text2">
<h1 align="center" style = "font-family:courier" class="text1"><b>WATER CONSUMPTION BILLING SYSTEM</b></h1>
</div>
</body>
<script>
// Add active class to the current button (highlight it)
var header = document.getElementById("mynav");
var btns = header.getElementsByClassName("nav");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  current[0].className = current[0].className.replace(" active", "");
  this.className += " active";
  });
}
</script>
</html>