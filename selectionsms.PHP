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
  margin-right: 0px;>margine-up: 0px;>"<!-- Main -->

<?php




$varphone=$_SESSION['nphn'];
$evarphone=$_SESSION['varphone'];
$evarlocation=$_SESSION['varlocation'];


$field = array(
    "sender_id" => "FSTSMS",
    "language" => "english",
    "route" => "qt",
    "numbers" => "$varphone",
    "message" => "36174",
    "variables" => "{#BB#}|{#FF#}",
    "variables_values" => "$evarphone|$evarlocation"
);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://www.fast2sms.com/dev/bulk",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_SSL_VERIFYHOST => 0,
  CURLOPT_SSL_VERIFYPEER => 0,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => json_encode($field),
  CURLOPT_HTTPHEADER => array(
    "authorization: EatvuzsT8R5GwQlSFo7x92hcnNkWZUJ6DpjL1MiqydfrAbHgCBk5BrehRJUvbDG316pCQ204fuyaZN8m",
    "cache-control: no-cache",
    "accept: */*",
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);


?>

<form action="transfer.php">
<input type="submit" name ="submit" value = "home">
</form>
</div>
                <br/>
     
          </div> 
		  <tr>
					 
					  <br>
				
					  <br>
			
					 <br>
				
					 <br>
					 </br>
				
					 <br>
				
					  </br>
					
					  <br>
					  
					  </br>
				
					 <br>		  <br>
				
					  <br>
			
					 <br>
				
					 <br>
					 </br>
				
					 <br>
				
					  </br>
					
					  <br>
					  
					  </br>
				
					 <br>		  <br>
				
					  <br>
			
					 <br>
				
					 <br>
					 </br>
				
					 <br>
				
					  </br>
					
		
					  </br>
					
					  <br>
					  
					  </br>
				
					 <br>
					
					
</div>

</body>