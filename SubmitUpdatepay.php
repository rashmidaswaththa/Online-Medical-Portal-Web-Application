<?php
    include_once 'config.php';
?>

<?php
	
 $c_no = $_POST['card_number'];
 $c_name = $_POST['card_holder'];   
 $c_edate = $_POST['expiry_date'];
 $c_cvv = $_POST['cvc_num'];
 $c_id = $_POST['id'];


	
	//echo $_GET['id'];
	// Attempt update query execution
	 
	$sql = "UPDATE Payment SET card_no='$c_no',own_name='$c_name',ex_date='$c_edate',cvv_no='$c_cvv' WHERE bill_id='$c_id'";

	
	if($conn -> query($sql)){
		//echo "<script> alert('Records added successfully!!!!')</script>";
		header("Location:indexpay.php");
	} 
	else{
		echo "<script> alert('ERROR: Could not able to execute $sql. ')</script>" ;
	}
	 
	// Close connection
	mysqli_close($conn);

?>