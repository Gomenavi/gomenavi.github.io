<?php
include 'db.php';
$owner_id =$_REQUEST['id'];
	$id = $_POST['id'];
	$lname = $_POST['lname'];
	$fname = $_POST['fname'];
	$mi = $_POST['mi'];
	$address=$_POST['address'] ;
	$contact=$_POST['contact'] ;
	mysql_query("UPDATE owners SET id ='$id', lname ='$lname',
		 fname ='$fname',mi ='$mi', address='$address', contact='$contact' WHERE id = '$owner_id'");
		 echo "<script>windows: location='home.php'</script>";
?>		 