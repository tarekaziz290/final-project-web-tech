<?php

session_start();


?>

<!DOCTYPE html>
<html>
<head>
	<title>log in</title>
</head>
<body style="background: url(https://arabacademy-u8hapu3mdn.netdna-ssl.com/wp-content/uploads/2015/04/loginImage-400x300.jpg ); background-size: 100%" >


	<h3 align="center">log in</h3>
	<?php
	include 'database.php';



	if (isset($_POST['submit']))
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		$email_search= "select * from registration where email='$email'";
		$query = mysqli_query($con,$email_search);
		$email_count = mysqli_num_rows($query);
		if ($email_count) {
			$email_pass = mysqli_fetch_assoc($query);
			$dbpass = $email_pass['password'];


			$_SESSION['username'] = $email_pass['username'];
			$_SESSION['email'] = $email_pass['email'];
			$_SESSION['phone'] = $email_pass['phone'];
			$_SESSION['password'] = $email_pass['password'];
		


			if ($password==$dbpass) {
				# code...
				echo "log in succesful";
				header('location:dashboard.php');
			}else
			{
				echo "password in correct";
			}
		}
		else{
			echo "invaild email";
		}
	
    }



	?>
<form   action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"method="POST" onsubmit="return vaildation()">
	<table bgcolor="green" align="center" width="200" cellspacing="15">
	<tr><td><label for="email">Email:</label></td>
	<td><input type="email" name="email"  placeholder="enter your email" id="email" ></td>
	<td><span id="emailerror"></span></td>
</tr>

	<tr><td><label for="password">Password:</label></td>
	<td><input type="password" name="password" placeholder="enter the password" id="pass" ></td>
	<td><span id="passerror"></span></td>
	</tr>
	<tr><td><button type="submit" name="submit">log in</button></td></tr>
	<br>
    <tr><td colspan="2">Create a account <a href="registration.php">Signup</a></td></tr>
</table>
</form>

<script type="text/javascript">
	function vaildation(){


		
		var email= document.getElementById('email').value;
	
		var pass= document.getElementById('pass').value;
		

		

		if (email =="") {

			document.getElementById('emailerror').innerHTML="please fill the email";
			return false;
		}
		
		if (pass =="") {

			document.getElementById('passerror').innerHTML="please fill the pass";
			return false;
		}
		

	}

</script>


</body>
</html>