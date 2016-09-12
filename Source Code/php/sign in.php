<?php
session_start();


$error_message=""; 

$connection=mysql_connect("localhost","root","");
if (!$connection) {
 	die("database connection failed".mysql_error());
 } 
 $db_selection=mysql_select_db("user",$connection);
 if (!$db_selection) {
 	 	die("database selection failed".mysql_error());

 }

if (isset($_POST['submit'])) {
   $username = mysql_real_escape_string($_POST['username']);
   $password = mysql_real_escape_string($_POST['pass']);
 
if (empty($username)||empty($password)) {
	$error_message="<h5 style=\"color:red; font-weight:lighter\">one or more required fields are blank!! enter all the fields<h5>"; 
}
else{


 $query="SELECT * FROM users WHERE username='{$username}' AND password='{$password}'";
 $result_set=mysql_query($query);
 if (mysql_num_rows($result_set)==1) {
 	$_SESSION['username']=$username;
	 $_SESSION['pass']=$password;
 
  echo "<script>window.open('../index.html','_self')</script>";
	

 }
 else{

$error_message="<h5 style=\"color:red; font-weight:lighter\">Invalid combination of username and password</h5>";

 }
 mysql_close($connection);
}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../css/login.css">
<title>Log In</title>
</head>

<body>
	<div id="wrap">
	<div id="headldiv">
 		 <h1 id="loghead">SignIn Here</h1>
    </div>
    <div id="gettitle">
        <div class="sign1">
            <h3 class="logheadline">Sign In Form</h3>
        </div>
        <div class="sign1">
             <h4 class="logheadline">Go Back <a href="../index.html">HOME</a> </h4>
        </div>
	</div><!--div id gettitle ends here-->
    
    <div id="form">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
      <label> User Name :</label>
      <br/>
      <input type='text'name='username' placeholder='username'>
      <br/>
      <label>Password :</label>
      <br/>
      <input type='password' name='pass' placeholder="**********" > <br/>
     
      <input type='submit' name='submit' value='Sign in'/>

    </form>
    </div><!--form ends here-->
    
    <center>
    <h3> <?php echo "".$error_message; ?> </h3>
    <p> <font color='#00008B' size='5'>Not registered yet?</font> <a href="sign up.php">Sign up here</a> </p>
  </center>
    
    </div><!--wrap ends here-->
</body>
</html>
