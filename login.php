<style>
 <div class="article">
                <h1 style="margin-top:10px; margin-left:328px;"><span><a 
<div class="login">
  </style>
<?php
  include "config.php";
  
   if($conn === false){
       die("ERROR: Could not connect. " . mysqli_connect_error());
   }
   
  if($_POST)
	{
		$email = $_POST['email'];
		$password = $_POST['password'];
		
		$sql = "SELECT * FROM labourers where phone = '$password' ";
		$query =  mysqli_query($conn, $sql);
		$sqr = "SELECT * FROM employer where phone = '$password' ";
		$query2 =  mysqli_query($conn, $sqr);

$aa=mysqli_num_rows($query);
$bb=mysqli_num_rows($query2);


		if($aa>0 || $bb >0 )
		{
			$row = mysqli_fetch_assoc($query);
			echo $row;
			session_start();
			$_SESSION['name'] = $email;
			header('Location: chatpage.php');
		}
		else
		{
			echo "<script> alert('Invalid Email or Password.'); </script>";
			
		}
	}
?>

<div class="container">
  <center><h2>Login form</h2></center></br>
  <form class="form-horizontal" method="post" action=""style="margin-top:10px; margin-left:300px;"> <div style= "margin-right: 100px;>">
  <table style="margin-top:10px; margin-left:300px;"> <div style= "margin-right: 100px;>">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Name:</label>
	  
      <div class="col-sm-10">
        <input type="varchar" class="form-control"   name="email">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Phone:</label>
      <div class="col-sm-10">          
        <input type="varchar" class="form-control"  name="password">
      </div>
    </div>
	</table>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </div>
	
				 <tr>
					 </tr>
					</div>
                  </table>
				   <tr>
					  <br>
					 </tr>  <tr>
					  <br>
					 </tr>  <tr>
					  <br>
					 </tr>  <tr>
					 <br>
					 </tr> <tr>
					 <br><tr>
					 <br>
					 </tr> 
					 </tr> <tr>
					 <br>
					 </tr> 
					 			 <tr>
					 </tr>
					</div>
                  </table>
				   <tr>
					  <br>
					 </tr>  <tr>
					  <br>
					 </tr>  <tr>
					  <br>
					 </tr>  <tr>
					 <br>
					 </tr> <tr>
					 <br><tr>
					 <br>
					 </tr> 
					 </tr> <tr>
					 <br>
					 </tr> 
					 			 <tr>
					 </tr>
					</div>
                  </table>
				   <tr>
					  <br>
					 </tr>  <tr>
					  <br>
					 </tr>  <tr>
					  <br>
					 </tr>  <tr>
					 <br>
					 </tr> <tr>
					
  </form>
</div>

</body>
</html>
