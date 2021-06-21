<?php session_start(); ?>
<?php
 include 'db.php';
$owner_id =$_REQUEST['id'];
$result = mysql_query("SELECT * FROM owners WHERE id  = '$owner_id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id=$test['id'] ;
				$lname= $test['lname'] ;					
				$fname=$test['fname'] ;
				$mi=$test['mi'] ;
				$address=$test['address'] ;
				$contact=$test['contact'] ;
?>
<form action="delecex.php" method="post">
<h4>Are you sure you want to Delete this Record?</h4>
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="submit" nsme="ok" value="Delete">
</form>