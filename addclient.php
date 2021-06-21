

<!DOCTYPE html>
<html>
<head>
<title>Calao Water Billing System</title>
<link href="css/bootstrap.min.css" media="screen" rel="stylesheet" type="text/css" />
<link href="css/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="js/jquery1.js" type="text/javascript"></script>
<script src="js/facebox.js" type="text/javascript"></script>
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
<title>Billing System</title>
</head>
<body>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="https://www.sourcecodester.com">Calao</a>
		</div>
		<ul class="nav navbar-nav">
    <li class="active"><a href="home.php">Home</a></li>
		<li><a href="bill.php">Manage Bills</a></li>
    <li><a href="history.php">Transaction History</a></li>
		<li><a href="user.php">Users</a></li>
		<li><a href="addclient.php">Add Consumers</a></li>
		<li><a href="viewuser.php">View Consumers</a></li>
		<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
</nav>
<div class="container">
<h2 align="center">Add Consumers</h2>
<form method="post">
    <div class="form-group">
      <label for="fname">First Name:</label>
      <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name">
    </div>
	<div class="form-group">
      <label for="lname">Last Name:</label>
      <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name">
    </div>
	<div class="form-group">
      <label for="mi">M.I.:</label>
      <input type="text" name="mi" class="form-control" id="mi" placeholder="M.I.">
    </div>
	<div class="form-group">
      <label for="address">Address:</label>
      <input type="text" name="address" class="form-control" id="address" placeholder="Address">
    </div>
    <div class="form-group">
      <label for="contact">Contact No.#:</label>
      <input type="text" name="contact" class="form-control" id="contact" placeholder="Contact No.#">
    </div>
    <button type="submit" name="add" class="btn btn-default">ADD</button>
    <button type="reset" class="btn btn-default">CANCEL</button>
  </form>
</div>