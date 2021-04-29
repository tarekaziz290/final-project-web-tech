<!DOCTYPE html>
<html>
<head>
<body>
<table>
<tr>
<th>Product Id</th>
<th>Product Name</th>
<th>Product Range</th>
<th>Price</th>

</tr>
<?php

 

$server = "localhost";
$user = "root";
$password = "";
$db = "project";


$con = mysqli_connect($server,$user,$password,$db);


 

if($_SERVER["REQUEST_METHOD"] == "GET") {

 

$searchKey = $_GET['searchKey'];
$sql = "SELECT * FROM product WHERE pid = " . $searchKey;

 

 if(empty($searchKey)) {
$sql = "SELECT * FROM product";
}
$conn = mysqli_connect($server,$user,$password,$db);

 

if($conn -> connect_error) {
echo "Failed to connect database!";
}
else {
$result = $conn -> query($sql);

 

 if($result -> num_rows > 0) {
while ($row = $result-> fetch_assoc()) {
echo "<tr><td>" . $row["pid"] ."<td>" . $row["pname"] ."<td>" . $row["pricerange"] ."<td>". $row["offerprice"] ."<td>";
}
echo "<br>";

 

 }
else {
echo "Data Record can not be found";
}
}
$conn -> close();
}

 

?>
</table>

 

</body>
</head>
</html>