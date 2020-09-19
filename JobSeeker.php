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

<body >
<div style="background-image: url('design/blend.jpg'); background-repeat: no-repeat;
  background-position: top;
  margin-right: 0px;">
  
<div id="main" class="box">

<img src="design/imgh.jpeg" alt="" width="770" height="180" />

<?php 
include "menu.php"
?>   


            <!-- Article -->
            <div class="article">
                <h1><span><a href="#"><i>Job Seeker</i></a></span></h1>
               <div class="login">
                <form name="form1" method="post" action="sender.php">
                  <table width="100%" >
                    <tr>
                      <td><strong>Name</strong></td>
                    </tr>
                    <tr>
        <td><span id="sprytextfield1">
                        <label>
                        <input type="varchar" name="varname" id="varname">
                        </label>
                      <span class="textfieldRequiredMsg">*</span></span>
          <label></label></td>
                    </tr>
                    <tr>
                      <td><strong>Aadhar</strong></td>
                    </tr>
                    <tr>
                <td><span id="sprytextfield2">
                        <label>
                        <input type="varchar" name="varaadhar" id="varaadhar">
                        </label>
                      <span class="textfieldRequiredMsg">*</span></span></td>
                    </tr>
                    
                    <tr>
                      <td><strong>location</strong></td>
                    </tr>
                    <tr>
                     <td><span id="sprytextfield3">
                        <label>
                        <input type="varchar" name="varlocation" id="varlocation">
                        </label>
                      <span class="textfieldRequiredMsg">*</span></span></td>
                    </tr>
  <td><strong>Phone Number</strong></td>
                    <tr>
                     <td><span id="sprytextfield4">
                        <label>
                        <input type="varchar" name="varphone" id="varphone">
                        </label>
                      <span class="textfieldRequiredMsg">*</span></span></td>
                    </tr>
                      <td><strong>Start Date</strong></td>
                    
                    <tr>
                     <td><span id="sprytextfield5">
                        <label>
                        <input type="date" name="varsdate" id="varsdate">
                        </label>
                      <span class="textfieldRequiredMsg">*</span></span></td>
                    </tr>
  <td><strong>End Date</strong></td>
                
                    <tr>
                     <td><span id="sprytextfield6">
                        <label>
                        <input type="date" name="varedate" id="varedate">
                        </label>
                      <span class="textfieldRequiredMsg">*</span></span></td>
                    </tr>
  <td><strong>Skills</strong></td>
                                    <tr>
                     <td><span id="sprytextfield7">
                        <label>
                        <input type="varchar" name="varskills" id="varskills">
                        </label>
                      <span class="textfieldRequiredMsg">*</span></span></td>
                    </tr>
  <td align="center"><strong>Pay</strong></td>
                                    <tr>
                     <td><span id="sprytextfield8">
                        <label>
                        <input type="int" name="varmoney" id="varmoney">
                        </label>
                      <span class="textfieldRequiredMsg">*</span></span></td>
                    </tr>
                    <tr>
                      <td><label>
                        <div align="center">
                          <input type="submit" name="button" id="button" value="Store">
                          </div>
                      </label></td>
                    </tr>
                  </table>
      </form>
              </div>
                                 </div>
                <p class="btn-more box noprint">&nbsp;</p>
          </div> <!-- /article -->

            <hr class="noscreen" />
            
        </div> <!-- /content -->



    </div> <!-- /page-in -->
    </div> <!-- /page -->

 

</div> <!-- /main -->

</body>
</html>
