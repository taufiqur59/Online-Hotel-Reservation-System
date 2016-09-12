 
<?php 
 $var="";
 $error_message=""; 
 if (isset($_POST['submit'])){
   
   if(isset($_SESSION['username'])){
   	  echo "<script>window.open('book.php','_self')</script>";

   }
   else{

   $error_message="Invalid combination of username and password";

   }

 }
 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
<link rel="stylesheet" href="../css/check.css">
	 <title>Book check</title>
     
     
  

</head>

<body>
  
 
 <div id="logincontent">
 <div id="headldiv">
     <h1 id="loghead">Check-Point</h1>
     </div>
 
 
 <div id="logdiv">
   <div id="logformhead">
        <h3 id="logheadline">Sign In Checking</h3>
   </div>
   
   <div id="logrest">
   
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
	<table width='auto'>

		<tr>
            <td>Already Signed In? </td>
         </tr>
         <tr>   
                        <td><input type='submit' 
            	name='submit'
            	       value='Click here'></td>
		</tr>

		<tr>
            <td>Not Signed In? </td>
         </tr>
         <tr>   
           <td><a href="sign in.php" ><div class="click"> Click here</div></a></td>
		</tr>
        
  		<tr>
            <td>Want to Go Back Home? </td>
         </tr>
		<tr>
           <td><a href="../index.html"><div class="click">Click here</div></a></td>
		</tr>
	</table>
</form>


   </div>
 </div>
 <center>
  <h3> <?php echo "".$error_message; ?> </h3>
	<p>
		<font color='#00008B' size='5'>Not registered yet?</font>
 <a href="sign up.php">Sign up here</a>
</p>
</center>
 
 </div>

  
 
 
 
 
  
         
         </div>  <!-- wrap ends here -->   
     
     
</body>
</html>
