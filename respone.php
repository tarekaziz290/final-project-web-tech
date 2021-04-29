<?php

$data=$_GET['datavalue'];
$high = array('1000','900','800','700','600' );
$mid = array('500','400','300' );
$low = array('200','100' );



if ($data=="high") 
{
	foreach ($high as $h1) {
		echo "<option>$h1</option>";
	}
	


	}
	if ($data=="mid") 
{
	foreach ($mid as $h1) {
		echo "<option>$h1</option>";
	}
	


	}
	if ($data=="low") 
{
	foreach ($low as $h1) {
		echo "<option>$h1</option>";
	}
	


	}


?>