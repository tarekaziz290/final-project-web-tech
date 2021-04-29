<?php

session_start();


?>




<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body style="background: url(https://image.shutterstock.com/image-photo/agriculture-plant-seeding-growing-step-260nw-712080757.jpg ); background-size: 100%" >


<?php

include 'database.php';

if (isset($_POST['submit']))
{
	$username= mysqli_real_escape_string($con,$_POST['username']);
	$email= mysqli_real_escape_string($con,$_POST['email']);
	$phone= mysqli_real_escape_string($con,$_POST['phone']);
	$password= mysqli_real_escape_string($con,$_POST['password']);
	$cpassword= mysqli_real_escape_string($con,$_POST['cpassword']);

	if($password==""){
    		?>
				<script>
					alert("fii the pass");
				</script>



				<?php
    	}


    $email_search= "select * from registration where email='$email'";
	$query = mysqli_query($con,$email_search);
	$email_count = mysqli_num_rows($query);
	if ($email_count>0)
    {
    	echo "email is already use";

    }
    else
    {
    	
    	 if($password===$cpassword) 
    	 {
    		
    	$insertquery = "insert into registration (username,email,phone,password,cpassword) values('$username','$email','$phone','$password','$cpassword') ";
    		$iquery = mysqli_query($con,$insertquery);
			   if($iquery){
				?>
				<script>
					alert("insert successful");
				</script>



				<?php
			}else{
				?>
				<script>
					alert("insert is not successful");
				</script>



				<?php
			}

    	}
    	else
    	{
    		?>
				<script>
					alert("password is not matching");
				</script>



				<?php
    	}
    }


}



?>
<br><br>
<h3 align="center">Registration From</h3>
<table align="center" width="200" bgcolor="green" cellspacing="15">
	<form   action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"method="POST" onsubmit="return vaildation()">

	
		<tr>
			<td><label for="fullname">Full Name:</label></td>
		<td><input type="text" name="username" placeholder="enter the fullname" id="user"></td>
		<td><span id="usererror"></span></td>
	</tr>
	
		
		<tr><td><label for="email">Email:</label></td>
		<td><input type="email" name="email"  placeholder="enter your email" id="email"></td>
		<td><span id="emailerror"></span></td></tr>
	
		<tr><td><label for="phone">Enter your phone number:</label></td>
        <td><input type="tel" id="phone" name="phone"  pattern="[0-9]{11}" placeholder="01***********" id="phone" ></td>
        <td><span id="phoneerror"></span></td></tr>
	
		<tr><td><label for="password">Password:</label></td>
		<td><input type="password" name="password" placeholder="enter the password" id="pass"></td>
		<td><span id="passerror"></span></td></tr>
		
		<tr><td><label for="cpassword">Confirm Password:</label></td>
		<td><input type="password" name="cpassword" placeholder="Confirm password" id="conpass"></td>
		<td><span id="conpasserror"></span></td></tr>
		
		<tr><td ><button type="submit" name="submit" >Create account </button></td></tr>
		<tr><td colspan="2">Already a member ? <a href="login.php">Log in</a></td></tr>
		
	</form>
	</table>

<script type="text/javascript">
	function vaildation(){


		var user= document.getElementById('user').value;
		var email= document.getElementById('email').value;
		var phone= document.getElementById('phone').value;
		var pass= document.getElementById('pass').value;
		var conpass= document.getElementById('conpass').value;

		if (user =="") {

			document.getElementById('usererror').innerHTML="please fill the user name";
			return false;
		}
		if (!isNaN(user)) {

			document.getElementById('usererror').innerHTML=" user name is must charecter";
			return false;
		}

		if (email =="") {

			document.getElementById('emailerror').innerHTML="please fill the email";
			return false;
		}
		if (phone =="") {

			document.getElementById('phoneerror').innerHTML="please fill the phone";
			return false;
		}
		if (isNaN(phone)) {

			document.getElementById('phoneerror').innerHTML=" phone must be number";
			return false;
		}
		if (conpass =="") {

			document.getElementById('conpasserror').innerHTML="please fill the confirm password";
			return false;
		}
		if (pass.length<3) {

			document.getElementById('passerror').innerHTML="please use 3 digit or letter for  password";
			return false;
		}
		if (pass!=conpass) {

			document.getElementById('passerror').innerHTML="  password are not matcpassword";
			return false;
		}

		

	}



</script>

</body>
</html>