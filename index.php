<?php
session_start();
if(  isset($_SESSION['username']) )
{
  header("location:index.php");
  die();
}
//connect to database
$db=mysqli_connect("localhost","root","","waterbilling");
if($db)
{
  if(isset($_POST['login']))
  {
      $username=mysqli_real_escape_string($db,$_POST['username']);
      $password=mysqli_real_escape_string($db,$_POST['password']);
      //Remember we hashed password before storing last time
      $sql="SELECT * FROM users WHERE  username='$username' AND password='$password'";
      $result=mysqli_query($db,$sql);
      $num=mysqli_fetch_array($result);
      if($result)
      {
     
        if( mysqli_num_rows($result)>=1)
        {
          $_SESSION['login']=$username; // hold the user name in session
          $_SESSION['id']=$num['id']; // hold the user id in session
   
// query for inser user log in to data base
mysqli_query($db,"insert into userlog(userId,username) values('".$_SESSION['id']."','".$_SESSION['login']."')");
            $_SESSION['message']="You are now Loggged In";
            $_SESSION['username']=$username;
            header("location:home.php");
        }
       else
       {
              $_SESSION['message']="Username and Password combination incorrect";
       }
      }
  }
}
?>
<style>body {
			background: url(/waterbillingsystem/img/back2.png) no-repeat center center fixed; ;
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
  font-size: 50px;
}
</style>
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
	height: 370px;
    margin-top: 65px;
    background: url(/waterbillingsystem/img/background.jpg) no-repeat center center fixed; ;
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
}">
<h2 align="center">Login</h2><hr>
	<form name = "f1" onsubmit ="return validation()" method="post" action="index.php">
		<div class="form-group">
			<label for="user">Username:</label>
			<input type="text" name="username" class="form-control" id="user" placeholder="Enter username">
		</div>
		<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" name="password" class="form-control" id="pass" placeholder="Enter password">
		</div>
		<div class="checkbox">
			<label><input type="checkbox"> Remember me</label>
		</div>
		<div align="center">
		<button type="submit" id="btn" name="login" class="btn btn-default">Submit</button>
		</div>
		<div><a href="register.php">Register</a></div>
	</form>
<script>
 function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  



 </script>
</div>




</body>
</html>
