<?php
error_reporting(0); 
session_start();


?>
<!DOCTYPE html>
<html>
<head>
	<title>deletepost</title>
</head>
<body>

<table>


<tr>
	<td>picture name</td>
	

</tr>

<?php

include 'database.php';
$query="select * from post";
$data=mysqli_query($con,$query);
$total=mysqli_num_rows($data);

if ($total != 0) {
	
	while($result= mysqli_fetch_assoc($data))
	{

		echo "
		<tr>
		
		<td>".$result[picture]."</td>
		<td> <a href='delete.php?rn=$result[picture]' onclick ='return deletepost()'> Delete </a> </td>
		
		
		</tr>


		";
	}
}
else
{
	echo "no record found";
}










?>

</table>
<script >
	function deletepost()
	{
		return confirm('Are you want to delete the post');



	}
</script>


</body>
</html>