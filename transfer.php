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
   $nums=$_SESSION['nphn'];
   
   // Attempt select query execution
   $sql = "SELECT * FROM labourers WHERE location ='$varlocation' ";
   if($result = mysqli_query($link, $sql)){
       if(mysqli_num_rows($result) > 0){
		    while($row = mysqli_fetch_array($result)){
				 $tmp=$row['phone'];
				if(strpos($tmp,$nums) >= 0){
					
					$a=$row['name'];
					$b=$row['aadhar'];
					$c=$row['location'];
					$d=$row['phone']; 
					$e=$row['sdate'];
					$f=$row['edate'];
					$g=$row['skills'];
					$h=$row['money'];
					$i=$_SESSION['varaadhar'];
					$j=$_SESSION['varphone'];
				
					$sql = "INSERT INTO selected (name, aadhar , location,phone,sdate,edate,skills,money,eaadhar,ephone) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j')";
					mysqli_query($link, $sql);
					$sqrrr = " DELETE FROM labourers WHERE phone='$tmp' ";
					mysqli_query($link, $sqrrr);
				}
					
			}
	    }
    }



?>
<?php include "index.php" ?>

