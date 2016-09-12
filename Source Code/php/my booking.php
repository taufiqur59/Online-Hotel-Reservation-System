<?php 
session_start();
?>
<?php 
 $var="";
 $error_message=""; 
 if (isset($_POST['submit'])){
   
   if(isset($_SESSION['username'])==true){
   	  echo "<script>window.open('user panel.php','_self')</script>";

   }
   else{

   $error_message="<h5 style=\"color:red; font-weight:lighter\">You're not signed in!!!please sign in first.</h5>";

   }

 }
 ?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
<link rel="stylesheet" href="../css/check.css">
	 <title>My Booking check</title>
     
     
  

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
	<ul>

		<li>
            <label for ="check">Already Signed In? </label>
        </li>
        <li>
            <input type='submit' name='submit' value='Click here'>
         </li>
         <li>
         <label for ="check">Not Signed In? </label>
         </li>
         <li>   
           <a href="sign in.php" >
           <div class="click"> Click here</div>
           </a>
           </li>
        
  		<li>
            <label for ="check">Want to Go Back Home? </label>
         </li>
		<li>
           <a href="../index.html"><div class="click">Click here</div>
           </a>
		</li>
	</ul>
</form>


   </div>
 </div>
 <center>
  <h3> <?php echo "".$error_message; ?> </h3>
 
</center>
 
 </div>

  
 
 
 
 
  
         
         </div>  <!-- wrap ends here -->   
     
     
</body>
</html>
