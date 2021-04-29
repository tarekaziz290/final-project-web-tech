<?php
session_start();

?>
<!DOCTYPE html>
<html>
<head>
	<title>welcome page</title>
</head>
<body>
	<table bgcolor="green" width="100%" height="15%">
		<tr>
			<td align="right" ><h1> welcome <?php echo $_SESSION['username'];?></h1></td>
		</tr>

	</table>

<br><br><br>
<table width="100%" border="0" height="200" cellspacing="15">
	<tr>
		<td width="20%" bgcolor="yellow" rowspan="2" align="center"><p>To view profile : <button><a href="profile1.php">Show Profile</a></button></p></td>
		<td width="20%" bgcolor="yellow" rowspan="2" align="center"><a href="updateprofile.php">Update Profile</a> </td>
		<td width="20%" bgcolor="yellow" rowspan="2" align="center"><a href="postdisplay.php">view post</a> 
			<br>
			<a href="newsfeed.php">newsfeed</a>
			<br>
			<a href="postsearch.php">Search Post</a>

		</td>
		<td width="20%" bgcolor="yellow" rowspan="2" align="center"><a href="offer.php">Add Offer</a> 
			<br>
			<a href="productsearch.php">Search Offer</a>
		</td>
		<td width="20%" bgcolor="red" align="center"><a href="changepassword.php">Change Password</a></td>  
	</tr>
	<tr>
		<td bgcolor="orange" align="center"><button ><a href="logout.php">logout</a></button></td>
	</tr>



</table>



<br>
<br>




</body>
</html>