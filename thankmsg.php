<?php
    include_once 'configeration.php';
?>


     

<!DOCTYPE html>

<head>

</head>

<body>
  
<?php

	$sql = "SELECT fname ,lname,email FROM user
					ORDER BY user.user_ID DESC
					LIMIT 1";
          $result = $conn -> query($sql);
      
          if($result->num_rows>0){
           
            while($row = $result->fetch_assoc()){
            	$id = $row["user_ID"];
            	$fname = $row["fname"];
            	$lname = $row["lname"];
            	$mail = $row["email"];

                echo"<p>Dear".$fname.",";
                echo"<p>Thank you for your payment</p>";
                echo"We will send you email to".$mail.".";
              
        

            }
      }
          else {

          	echo "0 results";
          }






?>





</body>


</html>