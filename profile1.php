<?php
error_reporting(0); 
session_start();


?>
<!DOCTYPE html>
<html>
<head>
	<title>profile</title>
</head>
<body>

<table>

<th>Profile</th>
<tr>
	<td>Name</td>
	<td>phone</td>
	<td>Email</td>

</tr>

<?php
$e=$_SESSION['email'];

include 'database.php';
$query="select * from registration where email='$e'";
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);

if ($total != 0) {
	
	while($result= mysqli_fetch_assoc($data))
	{

		echo "
		<tr>
		
		<td>".$result[username]."</td>
		<td>".$result[phone]."</td>
		<td>".$result[email]."</td>
		</tr>


		";
	}
}










?>
<div><button><a href="home.php">Home</a></button></div>
	
	<button ><a href="logout.php">logout</a></button>
</table>
</body>
</html>