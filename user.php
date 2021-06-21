
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
<title>user</title>
</head>

<body>
<div>
<nav class="navbar navbar-default">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="https://www.sourcecodester.com">Calao</a>
		</div>
		<ul class="nav navbar-nav">
    <li class="active"><a href="home.php">Home</a></li>
		<li><a href="bill.php">Manage Bills</a></li>
    <li><a href="history.php">Log In History</a></li>
		
		<li><a href="viewuser.php">View Consumers</a></li>
		<li><a href="logout.php">Logout</a></li>
		</ul>
	</div>
</nav>
<div class="container">
<h2 align="center">Users Account</h2><hr>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Cashier Name</th>
        <th>Function</th>
      </tr>
    </thead>
    <tbody>

	</tbody>
  </table>
</div>
<div align="center">
<button><a rel="facebox" href="adduser.php">Add User</a></button>
</div>
</body>
</html>
<script src="js/jquery.js"></script>
<script type="text/javascript">
$(function() {


$(".delbutton").click(function(){
var element = $(this);
var del_id = element.attr("id");
var info = 'id=' + del_id;
 if(confirm("Sure you want to delete this update? There is NO undo!"))
		  {
 $.ajax({
   type: "GET",
   url: "delete.php",
   data: info,
   success: function(){
   }
 });
         $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
		.animate({ opacity: "hide" }, "slow");
 }
return false;
});
});
</script>