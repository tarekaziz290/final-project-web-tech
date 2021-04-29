<?php

session_start();


?>


<!DOCTYPE html>
<html>
<head>
	<title>change password</title>
</head>
<body>
	<?php
	include 'database.php';

if (isset($_POST['submit']))
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		$npassword = $_POST['npassword'];
		$cpassword = $_POST['cpassword'];
		$e=$_SESSION['email'];
		
		$email_search= "SELECT email,password from registration where email='$e'";
		$query = mysqli_query($con,$email_search);
		$email_count = mysqli_num_rows($query);
	    if ($email_count>0)
		 {
				$update= "UPDATE registration SET password='$npassword',cpassword='$cpassword' where email='$e'";
			    $uquery=mysqli_query($con,$update);
			    echo "password change";
			    header('location:logout.php');
		 }
			else{echo "password not  change";}



		}

	




	?>

	<form   action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"method="POST" onsubmit="return vaildation()">
		<br><br><br><br>
		<table bgcolor="green" align="center" width="200"  cellspacing="15">
			<th align="center">Change password</th>
			<tr>
				<td>Email :</td>
				<td><input type="email" name="email" id="email"></td>
				<td><span id="emailerror"></span></td>
			</tr>
			<tr>
				<td>old password :</td>
				<td><input type="password" name="password" id="pass"></td>
				<td><span id="passerror"></span></td>
			</tr>
			<tr>
				<td>new password :</td>
				<td><input type="password" name="npassword" id="npass"></td>
				<td><span id="npasserror"></span></td>
			</tr>
			<tr>
				<td>confirm password :</td>
				<td><input type="password" name="cpassword" id="conpass"></td>
				<td><span id="conpasserror"></span></td>
			</tr>
			<tr>
				<td align="center"><input type="submit" name="submit" value="Change Password"></td>
			</tr>




		</table>
		




	</form>

	<script type="text/javascript">
		function vaildation(){


		var email= document.getElementById('email').value;
		var pass= document.getElementById('pass').value;

	
	
		var npass= document.getElementById('npass').value;
		var conpass= document.getElementById('conpass').value;


		if (email =="") {

			document.getElementById('emailerror').innerHTML="please fill the email";
			return false;
		}
		if (pass =="") {

			document.getElementById('passerror').innerHTML="please fill the old password";
			return false;
		}
		if (npass =="") {

			document.getElementById('npasserror').innerHTML="please fill the new password";
			return false;
		}
		
		
		if (conpass =="") {

			document.getElementById('conpasserror').innerHTML="please fill the confirm password";
			return false;
		}
		if (npass.length<3) {

			document.getElementById('passerror').innerHTML="please use 3 digit or letter for  password";
			return false;
		}
		if (npass!=conpass) {

			document.getElementById('npasserror').innerHTML="  password are not matcpassword";
			return false;
		}

		

	}
		
	</script>

</body>
</html>