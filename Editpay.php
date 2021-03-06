<?php

include 'config.php';

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap"
      rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">                           
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="styles/pay.css"> 
  <title>Payment</title>
  </head>
  <body>
    <nav>
      <div class="logo">
        <img src="images/medi.png">
      </div>
      <ul class="nav-links">
        <li><a href="#" id="Home">Home</a></li>
        <li><a href="#">Profile</a></li>
        <li><a href="#">Appointment</a></li>
        <li><a href="#">Laboratory</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><button id="sign-in">Sign In</button></li>
        <li><button id="sign-up">Sign Up</button></li>
      </ul>
    </nav>



<?php
$recordId = $_GET['id'];

$sql = "SELECT * FROM Payment where bill_id = '$recordId'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {

		$id = $row["bill_id"];
		$number = $row["card_no"];
		$name = $row["own_name"];
		$edate = $row["ex_date"];
		$cvv = $row["cvv_no"];
		
        }
}

?>



<div class="payment_form">

		       	  <form method="POST" action="SubmitUpdatepay.php">
			       	  <div class="card_group">

			       	     <label class="lable"> Bill Id:</label>
			              <input type="text" class="input" name="id"  value= <?php echo $id; ?>  readonly>
			            <div class="card icon-rel">
			              <label class="lable">Card Number:</label>
			              <input type="text" class="input" name="card_number" value= <?php echo $number; ?> >
			              <i class='fas fa-credit-card'></i>
			             </div> 

			             <div class="card icon-rel">
			       		  <label class="lable">Card Holder's Name:</label>	
			               <input type="text" class="input" name="card_holder" value= <?php echo $name; ?> >
			              <i class="fas fa-user"></i>
			            </div>    
	   
	            
			           <div class="c_grp">
				        <div class="card_item icon-rel">
				            <label class="lable">Expiry Date:</label>
				            <input type="text" class="input" name="expiry_date" value= <?php echo $edate; ?> > 
				            <i class="fas fa-calendar"></i>
				        </div>   
			     
				        <div class="card_item icon-rel">
				        	<label class="lable">CVC:</label>
				            <input type="text" class="input" name="cvc_num"  value= <?php echo $cvv; ?> >
				            <i class='fas fa-lock'></i>
				        </div> 
	                  </div>
	                 </div>

                     <button class="button" type="submit" name="Update">Update</button>

                       </form> 
	           </div>
       <br><br>

<div class="footer">
      <div class="set1">
        <ul class="set1-links">
          <li><a href="#">About Us</a></li>
          <li><a href="#">Feedback</a></li>
          <li><a href="#">Career</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
      <div class="set2">
        <ul class="set2-links">
          <li style="font-style: oblique;">Services</li>
          <li>Arrange your doctor appointments</li>
          <li>View your lab reports</li>
          <li>order pharmacy items</li>
          <li>Copyright &#169 team162020 &#174</li>
        </ul>
      </div>
      <div class="set3">
        <p>Follow Us On</p>
        <div class="icons">
          <i class="fab fa-whatsapp"></i>
          <i class="fab fa-twitter"></i>
          <i class="fab fa-instagram"></i>
          <i class="fab fa-youtube"></i>
          <i class="fab fa-linkedin-in"></i>
        </div>
      </div>
    </div>



</body>
</html>