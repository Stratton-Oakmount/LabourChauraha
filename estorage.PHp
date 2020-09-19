
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php

session_start();
$varname=$_SESSION['varname'];
$varaadhar=$_SESSION['varaadhar'];
$varlocation=$_SESSION['varlocation'];
$varphone=$_SESSION['varphone'];

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost", "root", "", "LabourChauraha");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO employer (name, aadhar , location,phone) VALUES ('$varname', '$varaadhar' , '$varlocation','$varphone')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

 
 
 
// Close connection
mysqli_close($link);
}


	header("Location: checkbox.php");

?>

</body>
</html>
