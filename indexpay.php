<?php
    include_once 'config.php';
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
     <link rel="stylesheet" type="text/css" href="styles/dis.css"> 
  <title>display data</title>
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
        <li><a href="#">Feedback</a></li>
        <li><a href="#">Contact Us</a></li>
        <li><button id="sign-in">Sign In</button></li>
        <li><button id="sign-up">Sign Up</button></li>
      </ul>
    </nav>

		  <br><br>

     <center>
     <div >
       <table class="ccdata_tbl" width="100%">
       	   <tr>
       	   	<th>Bill ID</th>
       	   	 <th>Card Number</th>
             <th>Card Holder's Name</th>
             <th>Expiry Date</th>
             <th>CVC Number</th>
             <th>Amount</th>
             <th>Date</th>  
         </tr>

         <?php
          
          $sql = "SELECT * FROM Payment 
					ORDER BY Payment.bill_id DESC
					LIMIT 1";
          $result = $conn -> query($sql);
      
          if($result->num_rows>0){

           
            while($row = $result->fetch_assoc()){
            	$id = $row["bill_id"];

               echo"<tr><td>".$id."</td><td>".$row["card_no"]."</td><td>".$row["own_name"]."</td><td>".$row["ex_date"]."</td><td>".$row["cvv_no"]."</td><td>".$row["amount"]."</td><td>".$row["pdate"]."</td></tr>";

              
        

            }

          }
          else {

          	echo "0 results";
          }


          echo "</table>";

          echo "<br><br>";
        
       
        echo "<p class='para1'>Do you want to update your credit card details?, <button class='button1' type='submit'><a href='Editpay.php?id=$id'>Edit</a></button></p>";
     
        echo "<br><br>";

       echo"<p class='para1'>Do you want to delete your credit card details? <button class='button' type='submit'><a href='deleterecordpay.php?id=$id'>Delete</a></button></p>";
      


     

       

        echo "<br><br>";


        $conn->close();

       ?>
	   </div>
       </center>  	   
   	 <hr height = "1px"; color = "black">   
   
    



    

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