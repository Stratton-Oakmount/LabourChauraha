
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<div style="background-image: url('design/blend.jpg'); background-repeat: no-repeat;
  background-position: top;
  margin-right: 0px;>"margine-up: 0px;>"<!-- Main -->
<div id="main" class="box">
<?php

session_start();
$varname=$_SESSION['varname'];
$varaadhar=$_SESSION['varaadhar'];
$varlocation=$_SESSION['varlocation'];
$varphone=$_SESSION['varphone'];
$varsdate=$_SESSION['varsdate'];
$varedate=$_SESSION['varedate'];
$varskills=$_SESSION['varskills'];
$varmoney=$_SESSION['varmoney'];

/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "LabourChauraha");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Attempt insert query execution
$sql = "INSERT INTO labourers (name, aadhar , location,phone,sdate,edate,skills,money) VALUES ('$varname', '$varaadhar' , '$varlocation','$varphone','$varsdate','$varedate','$varskills','$varmoney')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

 
 
 
 
// Close connection
mysqli_close($link);
}

header("Location: index.php");


?>



</div>
</body>
</html>
