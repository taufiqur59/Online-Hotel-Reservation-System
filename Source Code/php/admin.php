<?php
session_start();
?>
<?php
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
	$error_message="<h5 style=\"color:red; font-weight:lighter\">one or more required fields are blank!! enter all the fields</h5>"; 
}
else{


 $query="SELECT * FROM admin WHERE username='{$username}' AND password='{$password}'";
 $result_set=mysql_query($query);
 if (mysql_num_rows($result_set)==1) {
	 
 
  echo "<script>window.open('admin panel.php','_self')</script>";
  $_SESSION['username']=$username;
	

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
  
 
 <div id="logincontent">
 <div id="headldiv">
     <h1 id="loghead">Admin SignIn Here</h1>
     </div>
 
 
 <div id="logdiv">
   <div id="logformhead">
        <h3 id="logheadline">Sign In Form</h3>
   </div>
   
   <div id="logrest">
   
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
	<table width='auto'>

		<tr>
            <td>User Name :</td>
         </tr>
         <tr>   
            <td><input type='text'name='username' placeholder='username'></td>
		</tr>

		<tr>
            <td>Password :</td>
         </tr>
         <tr>   
            <td><input type='password' name='pass' placeholder="**********" ></td>
		</tr>

		<tr>
            <td><input type='submit' 
            	name='submit'
            	       value='Sign In'></td>
		</tr>
	</table>
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
