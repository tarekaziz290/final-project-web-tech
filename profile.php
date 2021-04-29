<?php

session_start();

?>


<!DOCTYPE html>
<html>
<head>
	<title>profile</title>
</head>
<body>
	<fieldset>
		<legend><b>Profile Information:</b></legend>
		
	
         <h5> Name:  
      	<?php 
         $e= $_SESSION['username'];
         echo $e;
         ?>
         	
         </h5>

         <br>
         <h5>Email :
         <?php
	     echo $_SESSION['email'];
	     ?>	
	     </h5>
	     <br>


	     <h5>Phone :
	     <?php
	     echo $_SESSION['phone'];
	     ?>
	     </h5>
	     </fieldset>


	
	<br>
	
	<div><button><a href="home.php">Home</a></button></div>
	
	<button ><a href="logout.php">logout</a></button>


</body>
</html>