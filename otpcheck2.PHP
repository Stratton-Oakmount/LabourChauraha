<?php
	
session_start();
$REC=$_POST['REC'];		
	
if($REC==$_SESSION['otp'])
{
	echo("sucess");

header("Location: estorage.php");
 
	
}
else{
	echo("incorrect otp");
	header("Location: index.php");
}
?>

