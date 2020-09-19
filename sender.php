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
<div style="background-image: url('design/blend.jpg'); background-repeat: no-repeat;
  background-position: top;
  margin-right: 0px;>"margine-up: 0px;>"<!-- Main -->
<div id="main" class="box">

<?php
$varname=$_POST['varname'];
$varaadhar=$_POST['varaadhar'];
$varlocation=$_POST['varlocation'];
$varphone=$_POST['varphone'];
$varsdate=$_POST['varsdate'];
$varedate=$_POST['varedate'];
$varskills=$_POST['varskills'];
$varmoney=$_POST['varmoney'];


session_start();
$otp=mt_rand(10000,99999);
$_SESSION['otp']=$otp;

$_SESSION['varname']=$varname;
$_SESSION['varaadhar']=$varaadhar;
$_SESSION['varlocation']=$varlocation;
$_SESSION['varphone']=$varphone;
$_SESSION['varsdate']=$varsdate;
$_SESSION['varedate']=$varedate;
$_SESSION['varskills']=$varskills;
$_SESSION['varmoney']=$varmoney;


$field = array(
    "sender_id" => "FSTSMS",
    "language" => "english",
    "route" => "qt",
    "numbers" => "$varphone",
    "message" => "36159",
    "variables" => "{#AA#}",
    "variables_values" => "$otp"
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

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}
?>

<?php 
include "otpget.php"
?>

</div>
</body>