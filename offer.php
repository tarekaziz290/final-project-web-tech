<!DOCTYPE html>
<html>
<head>
	<title>offer</title>

</head>
<body>

<?php

include 'database.php';

if (isset($_POST['submit']))
{
	$pid= mysqli_real_escape_string($con,$_POST['pid']);
	$pname= mysqli_real_escape_string($con,$_POST['pname']);
	$pricerange= mysqli_real_escape_string($con,$_POST['pricerange']);
	$offerprice= mysqli_real_escape_string($con,$_POST['offerprice']);
	
	

    $email_search= "select * from product where pid='$pid'";
	$query = mysqli_query($con,$email_search);
	$email_count = mysqli_num_rows($query);
	if ($email_count>0)
    {
    	echo "product is already use";

    }
    else
    {
    	
    	 
    		
    	$insertquery = "insert into product (pid,pname,pricerange,offerprice) values('$pid','$pname','$pricerange','$offerprice') ";
    		$iquery = mysqli_query($con,$insertquery);
			   if($iquery){
				?>
				<script>
					alert("insert successful");
				</script>



				<?php
			}else{
				?>
				<script>
					alert("insert is not successful");
				</script>



				<?php
			}

    	}
    }
    	



?>
	<h3 align="center">Offer</h3>
<table align="center" width="200" bgcolor="green" cellspacing="15">
	<form   action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"method="POST" onsubmit="return vaildation()">

	
		<tr>
			<td><label for="pid">Product id:</label></td>
		<td><input type="text" name="pid" placeholder="enter the prodct id" id="pid"></td>
		<td><span id="piderror"></span></td>
	</tr>
	
		
		<tr><td><label for="pname">product name:</label></td>
		<td><input type="text" name="pname"  placeholder="enter your product name" id="pname"></td>
		<td><span id="pnameerror"></span></td></tr>
		
	
		<tr><td><label for="prange">choose range:</label></td>
        <td>
        	<select name="pricerange" id="pricerange" onchange="myfun(this.value)">
        		<option>Select pirce range</option>
        		<option>high</option>
        	<option>mid</option>
        	<option>low</option></select>
        </td>
        <td><span id="prangeerror"></span></td>
    </tr>
        <tr><td><label for="prange">Price:</label></td>
        <td>
        	<select name="offerprice" id="price"><option>Select price</option>
        	</select>
        </td>
        <td><span id="pirceerror"></span></td>
    </tr>
        
	
		
		
		
		<tr><td ><button type="submit" name="submit" >Create offer </button></td></tr>
		
		
	</form>
	</table>



	<script type="text/javascript">
		function myfun(data)

		{
		alert(data);


		var req= new XMLHttpRequest();
		req.open("GET","http://localhost/final-project/respone.php?datavalue="+data,true);
		req.send();


		req.onreadystatechange = function()
		{

			if(req.readyState == 4 && req.status == 200) {
             document.getElementById("price").innerHTML = req.responseText;
		}


	    }
}

function vaildation(){


		var pid= document.getElementById('pid').value;
		var pname= document.getElementById('pname').value;
		var pricerange= document.getElementById('pricerange').value;
		var price= document.getElementById('price').value;
	

		if (pid =="") {

			document.getElementById('piderror').innerHTML="please fill the product id";
			return false;
		}
		if (pname =="") {

			document.getElementById('pnameerror').innerHTML="please fill the product name";
			return false;
		}
		if (pricerange ==="Select pirce range") {

			document.getElementById('prangeerror').innerHTML="please fill the product pricerange";
			return false;
		}
		if (price ==="Select price") {

			document.getElementById('pirceerror').innerHTML="please fill the product price";
			return false;
		}
		

		

	}


	</script>

</body>
</html>