 
 <?php
$connection=mysql_connect("localhost","root","");
if (!$connection) {
  die("database connection failed".mysql_error());
 } 
 $db_selection=mysql_select_db("user",$connection);
 if (!$db_selection) {
    die("database selection failed".mysql_error());

 }

?>

<?php


$error_message="";

if (isset($_POST['submit'])) {  

   $name = mysql_real_escape_string($_POST['name']);
   $username = mysql_real_escape_string($_POST['username']);
   $password = mysql_real_escape_string($_POST['password']);
   $confirmpassword = mysql_real_escape_string( $_POST['confirmpassword']);
   $email = mysql_real_escape_string( $_POST['email']);

if (empty($name)|| empty($username) || empty($password) || empty($confirmpassword) || empty($email)) {
    $error_message="<h5 style=\"color:red; font-weight:lighter\">one or more required fields are blank!!!</h5>";
     }
  
 else if ($password==$confirmpassword) {
  

  

$check_email="select * from users where email='{$email}'";
$run=mysql_query($check_email);
if (mysql_num_rows($run)>0) {
 $error_message="<h5 style=\"color:red; font-weight:lighter\">Email already exists!!!please try another one</h5>";

  }

else{

$query="INSERT INTO users(name,username,password,con_pass,email) VALUES('{$name}','{$username}','{$password}','{$confirmpassword}','{$email}')";
if(mysql_query($query)){
  echo"<script>alert('Registration is successful')</script>";
  echo "<script>window.open('sign in.php','_self')</script>";

}
}
}
else{

  $error_message="<h5 style=\"color:red; font-weight:lighter\">Password not matched!!!</h5>";
  
}


 mysql_close($connection);
}

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 
<link rel="stylesheet" href="../css/sign up.css">
   <title>sign up</title>
     
     
  

</head>

<body>
     
<div id="wrap">
     
	<div id="headldiv">
 		 <h1 id="loghead">SignUp Here</h1>
    </div>
    <div id="gettitle">
        <div class="sign1">
            <h3 class="logheadline">Sign Up Form</h3>
        </div>
        <div class="sign1">
             <h4 class="logheadline">Go Back <a href="../index.html">HOME</a> </h4>
        </div>
	</div><!--div id gettitle ends here-->
    
    <div id="form">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
 

         
            <label>Name:</label><br/>
          
            <input type="text" name="name" placeholder="name"><br/>
        
    
            <label>User Name:</label><br/>
          
            <input type="text" name='username' placeholder='username'><br/>
   
        
        
          	<label>Password:</label><br/>
          
            <input type='password'name='password' placeholder='**********'><br/>
   
        
        
            <label>Confirm Password:</label><br/>
          
            <input type='password'name='confirmpassword' placeholder='**********'><br/>
    	 
            <label>Email Address:</label><br/>
           
            <input type='email' name='email' placeholder="myacc@example.com" ><br/>

            <input type='submit' name='submit' value='Sign up'>
    	</form>
        
    </div><!--form ends here-->
  
 
  <center>
  <h3> <?php echo "".$error_message; ?> </h3>
  <p>
    
    <font color='#00008B' size='5'>Already registered?</font>
 <a href="sign in.php">Sign in here</a>
</p>
</center>

 </div>  <!-- wrap ends here -->   
     
     
</body>
</html>


 
 
 
