<?php session_start(); ?>
<?php
 include 'db.php';
$id =$_REQUEST['id'];
$result = mysql_query("SELECT * FROM bill WHERE id  = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id=$test['id'] ;
?>
<form action="delbillexec.php" method="post" align="center">
<h4>Are you sure you want to Delete this Record?</h4>
<input type="hidden" name="id" value="<?php echo $id; ?>" />
<input type="submit" nsme="ok" value="Delete">
</form>