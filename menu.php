<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style >
		table
		{
			color: grey;
		}
		.colorchange:hover
		{ 
			color: white;

		}
		a
		{
			text-decoration: none;
			color: black;
		}
		a:hover
		{
			color: white;
		}
	</style>
</head>
<body bgcolor="blue">
	<br><br>
	<table border="0" width="100%" cellspacing="15">
		<tr>
			<td class="colorchange"><a href="home.php" target="home">Dashboard</a> </td>
		</tr>
		<tr>
			<td bgcolor="red"> <font color="black">Post</font></td>
		</tr>
		<tr>
			<td class="colorchange"><a href="addpost.php" target="home">Add</a> </td>
		</tr>
		
		<tr>
			<td class="colorchange"><a href="deletepost.php" target="home">Delete</a> </td>
		</tr>
		
	</table>

</body>
</html>