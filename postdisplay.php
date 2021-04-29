<!DOCTYPE html>
<html>
<head>
	<title>post display</title>
	<style >
		img{
			height: 400px;
			width: 400px;
		}
	</style>
</head>
<body>
<?php

include 'database.php';
error_reporting(0);
$query="select * from post";
$data =mysqli_query($con,$query);
$total=mysqli_num_rows($data);
if ($total!=0) {
	while ($result = mysqli_fetch_assoc($data)) 
	{
		echo "
		<img src='".$result['picture']."' heght'400' width'400'>
		";
	}
}
else
{
	echo"no record";
}




?>
</body>
</html>