<?php
    include_once 'config.php';
?>

<?php
	$recordId = $_GET['id'];
	
	$sql = "DELETE FROM Payment WHERE bill_id = '$recordId'";
	
	if($conn -> query($sql)){
		echo "<script> alert('Records deleted successfully!!!!')</script>";
		//header("Location:index.php");
	} 
	else{
		echo "<script> alert('ERROR: Could not able to execute $sql. ')</script>";
		//header("Location:index.php");
	}
	 
	//Close connection
	mysqli_close($conn);

?>






