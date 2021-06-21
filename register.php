<style>
details {
	position: relative;
	width: 200px;
	margin-right: 1rem;
}
details[open] {
	z-index: 1;
}

summary {
	padding: 1rem;
	cursor: pointer;
	border-radius: 5px;
	background-color: #ffffff;
    border: solid 1px;
	list-style: none;
}

summary::-webkit-details-marker {
	display: none;
}

details[open] summary:before {
	content: '';
	display: block;
	width: 90vw;
	height: 100vh;
	background: transparent;
	position: fixed;
	top: 0;
	left: 0;
}

summary:after {
	content: '';
	display: inline-block;
	float: right;
	width: .5rem;
	height: .5rem;
	border-bottom: 1px solid currentColor;
	border-left: 1px solid currentColor;
	border-bottom-left-radius: 2px;
	transform: rotate(45deg) translate(50%, 0%);
	transform-origin: center center;
	transition: transform ease-in-out 100ms
}

summary:focus {
	outline: none;
}

details[open] summary:after {
	transform: rotate(-45deg) translate(0%, 0%);
}

ul {
	width: 100%;
	background: #ddd;
	position: absolute;
	top: calc(100% + .5rem);
	left: 0;
	padding: 1rem;
	margin: 0;
	box-sizing: border-box;
	border-radius: 5px;
	max-height: 200px;
	overflow-y: auto;
}

li {
	margin: 0;
	padding: 1rem 0;
	border-bottom: 1px solid #ccc;
}

li:first-child {
	padding-top: 0;
}

li:last-child {
	padding-bottom: 0;
	border-bottom: none;
}

/* FAKE SELECT */

summary.radios {
	counter-reset: radios;
}

input[type=radio] {
	counter-increment: radios;
	appearance: none;
	display: none;
}

input[type=radio]:checked {
	display: inline;
}

input[type=radio]:after {
	content: attr(title);
	display: inline;
	font-size: 1.5rem;
}

select.list {
	counter-reset: labels;
    height: 3.5vh;
    border-radius: 4px;
}

label {
	width: 100%;
	display: block;
	cursor: pointer;
}
body {
			background: url(/waterbillingsystem/img/back3.png) no-repeat center center fixed; ;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
		}
</style>
<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","","waterbilling");
if(isset($_POST['register']))
{
    $username=mysqli_real_escape_string($db,$_POST['username']);
    $fullname=mysqli_real_escape_string($db,$_POST['fullname']);
    $password=mysqli_real_escape_string($db,$_POST['password']);
    $password2=mysqli_real_escape_string($db,$_POST['password2']);  
    $role=mysqli_real_escape_string($db,$_POST['role']); 
    $query = "SELECT * FROM users WHERE username = '$username'";
    $result=mysqli_query($db,$query);
      if($result)
      {
     
        if( mysqli_num_rows($result) > 0)
        {
                
                echo '<script language="javascript">';
                echo 'alert("Username already exists")';
                echo '</script>';
        }
        
          else
          {
            
            if($password==$password2)
            {           //Create User
                 //hash password before storing for security purposes
                $sql="INSERT INTO users(username, fullname, password, role ) VALUES('$username','$fullname','$password', '$role')"; 
                mysqli_query($db,$sql);  
                echo '<script language="javascript">';
                echo 'alert("You are now logged in.")';
                echo '</script>';
                $_SESSION['username']=$username;
                header("location:home.php");  //redirect home page
            }
            else
            {
                $_SESSION['message']="The two password do not match";   
            }
          }
      }
}
?>



<!DOCTYPE html>
<html>
	
<head>
	<title>Calao Water Billing System</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div id="frm" class="container" style="width: 500px;
    border: solid 1px;
    border-radius: 4px;
	width:30%;  
	height: 550px;
    margin-top: 65px;
    background: url(/waterbillingsystem/img/background.jpg) no-repeat center center fixed; ;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
}">

<?php
    if(isset($_SESSION['message']))
    {
         echo "<div id='error_msg'>".$_SESSION['message']."</div>";
         unset($_SESSION['message']);
    }
?>
<h2 align="center">Register</h2><hr>
	<form name = "f1" onsubmit ="return validation()" method="post" action="register.php">
		
        <div class="form-group">
			<label for="pwd">Full Name:</label>
			<input type="text" name="fullname" class="form-control" id="name" placeholder="Enter Full Name">
		</div>
        <div class="form-group">
			<label for="user">Username:</label>
			<input type="text" name="username" class="form-control" id="usern" placeholder="Enter username">
		</div>
		<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" name="password" class="form-control" id="pass" placeholder="Enter password">
		</div>
        <div class="form-group">
			<label for="pwd">Confirm Password:</label>
			<input type="password" name="password2" class="form-control" id="pass2" placeholder="Confirm password">
		</div>
        <div class="form-group">
        <label for="pwd">Role:</label>
        <select class="list" name="role">
 <option value="">---Select Role--</option>
 <option value="Cashier">Cashier</option>
 <option value="Admin">Admin</option>

 
 </select>
      
      
       <!-- <details class="custom-select">
	<summary  name="role" id="role" class="radios">
		<input type="radio" name="item" id="default" title="Select Role.." checked>
		<input type="radio" name="item1" id="item1" title="Cashier">
		<input type="radio" name="item2" id="item2" title="Admin">
	
	</summary>
	<ul class="list">
		<li>
			<label for="item1">Cashier</label>
		</li>
		<li>
			<label for="item2">Admin</label>
		</li>
	</ul>
</details> -->
 </div>
 

		<div class="checkbox">
			<label><input type="checkbox"> Remember me</label>
		</div>
		<div align="center">
		<button type="submit" id="btn" name="register" class="btn btn-default">Submit</button>
		</div>
        <div><a href="index.php">Log In</a></div>
	</form>
<script>
 function validation()  
            {  
                var id=document.f1.usern.value;  
                var ps=document.f1.name.value; 
                var id2=document.f1.pass.value;  
                var id3=document.f1.pass2.value;   
                var id4=document.f1.role.value;   
                if(id.length=="" && ps.length==""&& id2.length==""&& id3.length==""&& id4.length=="") {  
                    alert("Fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("Username is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Name is empty");  
                    return false;  
                    }  
                    if (id2.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                    if (id3.length=="") {  
                    alert("Confirm Password");  
                    return false;  
                    }  
                    if (id4 == "") {  
                    alert("Select role");  
                    return false;  
                    }  
                }                             
            }  



 </script>
</div>
</body>
</html>
