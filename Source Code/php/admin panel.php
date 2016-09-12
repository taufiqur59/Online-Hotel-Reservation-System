<?php
session_start();
if(isset($_SESSION['username'])==false){
   	  header("Location:admin.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link rel="stylesheet" href="../css/admin panel.css">
<title>Admin panel</title>
</head>

<body>
<div id="nav">
   <div id="wrap">
   <ul>
      <li><a href="admin pending.php">Pending</a></li><li>
       <a href="admin accepted.php">Accepted</a></li><li>
        <a href="admin approved.php">Approved</a></li><li>
         <a href="ad_signout.php">Sign Out</a></li>
    </ul>
   </div>
</div>
 
</body>
</html>
