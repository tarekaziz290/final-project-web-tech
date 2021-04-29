<?php
include 'database.php';
error_reporting(0);
$pic=$_GET['rn'];
$query="DELETE from post where picture ='$pic'";
$data=mysqli_query($con,$query);
if ($data) {
	echo "post delete from database";
}
else
{
	echo "post is not delete from database";
}


?>