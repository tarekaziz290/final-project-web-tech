<?php
error_reporting(0);

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data" onsubmit="return vaildation()">
	<input type="file" name="uploadfile" id="file">
	<span id="fileerror"></span>
	<input type="submit" name="submit">
	

</form>


<script type="text/javascript">
	function vaildation(){


		
		var file= document.getElementById('file').value;
	
	
		

		

		if (file =="") {

			document.getElementById('fileerror').innerHTML="please fill the file";
			return false;
		}
		
		
		

	}

</script>
</body>
</html>
<?php
include 'database.php';
if ($_POST['submit']) {
	# code...

$filename= $_FILES["uploadfile"]["name"];
$temp= $_FILES["uploadfile"]["tmp_name"];
$folder ="post/".$filename;
move_uploaded_file($temp, $folder);
if ($filename!="") {

	$query = "insert into post values('$folder')";
	$data =mysqli_query($con,$query);
	if ($data) {
		echo "inserted";
		# code...
	}
	else{
		echo "failed";
	}
}
}



?>