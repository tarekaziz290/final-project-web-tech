<!DOCTYPE html>
<html>
<head>
</head>
<body>

 

 <h1>Post Search </h1>

 

 <label for="searchKey">Picture Name</label>
<input type="text" name="searchKey" id="searchKey" >

 

 <button id="search" onclick="search()">Search</button>

 

 <p id="p2"></p>

 

<script>

 

 function search() {
var searchKey = document.getElementById("searchKey").value;

 

 var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if(this.readyState == 4 && this.status == 200) {
document.getElementById("p2").innerHTML = xhttp.responseText;
}
}

 

xhttp.open("GET", "searchpost.php?searchKey=" + searchKey, true);
xhttp.send();
}

 

 </script>

 

</body>
</html>