<?php
session_start();

error_reporting(0);




?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1 align="center"></h1>
	<?php
	include 'database.php';

if (isset($_POST['update-submit']))
	{
		$email = $_POST['email'];
		$username = $_POST['username'];
		$phone = $_POST['phone'];
		$e=$_SESSION['email'];
		$email_search= "select * from registration where email='$e'";
		$query = mysqli_query($con,$email_search);
		$email_count = mysqli_num_rows($query);
	    if ($email_count)
		 {
				$update= "UPDATE registration SET username='$username',phone='$phone' where email='$e'";
			    $uquery=mysqli_query($con,$update);
			    echo "record change";
			    
		 }
			else{echo "record not  change";}



		}

	




	?>

	<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
		<table border="0" bgcolor="blue" align="center" cellspacing="15">
			<tr>
				<td>Full Name</td>
				<td><input type="text" name="username" value="<?php echo $_SESSION['username'];    ?>" ></td>

			</tr>
			<tr>
				<td>Mobile Number</td>
				<td><input type="tel" id="phone" name="phone" value="<?php echo $_SESSION['phone'];   ?>" pattern="[0-9]{11}" ></td>
			</tr>
			<tr>
				<td><input type="submit" name="update-submit" value="update"> </td>
			</tr>
			
		</form>
		<script >
			document.querySelector('h1').innerHTML="update profile";
		</script>

</body>
</html>
