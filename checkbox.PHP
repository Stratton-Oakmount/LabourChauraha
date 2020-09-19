<?xml version="1.0"?>
<html >
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta http-equiv="content-language" content="cs" />
    <meta name="robots" content="all,follow" />
 <title>LabourChauraha</title>
    <meta name="description" content="..." />
    <meta name="keywords" content="..." />
    
    <link rel="index" href="./" title="Home" />
    <link rel="stylesheet" media="screen,projection" type="text/css" href="./css/main.css" />
    <link rel="stylesheet" media="print" type="text/css" href="./css/print.css" />
    <link rel="stylesheet" media="aural" type="text/css" href="./css/aural.css" />
    <style type="text/css">

    </style>
</head>
<body>


<body >
<div style="background-image: url('design/blend.jpg'); background-repeat: no-repeat;
  background-position: top;
  margin-right: 0px;>"margine-up: 0px;>"<!-- Main -->
<div id="main" class="box">
<div class="login">
<form action="" method="post">  
<?php
   /* Attempt MySQL server connection. Assuming you are running MySQL
   server with default setting (user 'root' with no password) */
   $link = mysqli_connect("localhost", "root", "", "LabourChauraha");
   
   // Check connection
   if($link === false){
       die("ERROR: Could not connect. " . mysqli_connect_error());
   }
   session_start();
   
   
   $varlocation=$_SESSION['varlocation'];
   
   // Attempt select query execution
   $sql = "SELECT * FROM labourers where location ='$varlocation' ";
   if($result = mysqli_query($link, $sql)){
       if(mysqli_num_rows($result) > 0){
           echo "<table>";
               echo "<tr>";
                   echo "<th>Select</th>";
                   echo "<th>Name</th>";
                   echo "<th>Aadhar</th>";
                   echo "<th>Location</th>";
                   echo "<th>Phone</th>";
                   echo "<th>Start Date</th>";
                   echo "<th>End Date</th>";
                   echo "<th>Skills</th>";
                   echo "<th>Pay</th>";
               echo "</tr>";
           while($row = mysqli_fetch_array($result)){
               echo "<tr>";
			   $temp= $row['phone']; 
   ?>
<td> 
<form action="" method="post">   
			  <?php echo"<br>" ?>  <input type="checkbox" name="checkArr[]" value="<?php echo $temp; ?>">
</td>
<?php 
			   
               echo "<td>" . $row['name'] . "</td>";
               echo "<td>" . $row['aadhar'] . "</td>";
               echo "<td>" . $row['location'] . "</td>"; 
               echo "<td>" . $row['phone'] ."</td>";
               echo "<td>" . $row['sdate'] . "</td>";
               echo "<td>" . $row['edate'] . "</td>";
               echo "<td>" . $row['skills'] . "</td>";
               echo "<td>" . $row['money'] . "</td>";
           echo "</tr>";
       }
	   
	   
       echo "</table>";
       // Free result set
       mysqli_free_result($result);
   } else{
       echo "No records matching your query were found.";
   }
   } else{
   echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
   }
   
   // Close connection
   mysqli_close($link);
   
   

   
?>


  <input type="submit" name="submit" value="Choose options" />
</form>

<?php

  $_SESSION['nphn']='';
  if(isset($_POST['submit'])){
      if(!empty($_POST['checkArr'])){
      foreach($_POST['checkArr'] as $checked){
        
		
    $_SESSION['nphn'].=$checked.',';
   
	  
	  }
    }
  }
 $_SESSION['nphn']  = substr( $_SESSION['nphn'], 0, -1);
  
  echo $_SESSION['nphn'];

	

?>

<?php
include "selectionsms.php"
?>