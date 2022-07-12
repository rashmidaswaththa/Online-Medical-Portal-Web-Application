<?php
    include_once 'config.php';
?>

<?php

   $cc_no   = $_POST["card_number"];
   $cc_name = $_POST["card_holder"];
   $cc_date = $_POST["expiry_date"];
   $cc_cvv  = $_POST["cvc_num"];
  


   $sql = "INSERT INTO payment(bill_id,card_no,own_name,ex_date,cvv_no)VALUES('' ,'$cc_no' , '$cc_name' , '$cc_date' , '$cc_cvv')";

   if(mysqli_query($conn, $sql)){

   	    //echo "<script> alert ('completed')</script>"; 
   	    header("Location:indexpay.php");
   }else
      {
      	echo "<script> alert('Error is displayed')</script>";

      }
 
   mysqli_close($conn);







 ?> 