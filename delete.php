<?php include("includes/connection.php"); ?>
<?php include("includes/functions.php"); ?>

<?php  

if(isset($_GET['id'])) {

	$id = $_GET['id'];

	$sql    = "DELETE FROM person WHERE id='$id' LIMIT 1";
	$result = mysqli_query($connection, $sql);

	confirm_query($result);

	$sql1 = "DELETE FROM person_details WHERE person_id='$id' LIMIT 1";
	$result1 = mysqli_query($connection, $sql1);

	confirm_query($result1);

	redirect_to("index.php");
	
}


?>