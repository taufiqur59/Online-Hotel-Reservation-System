<?php 
session_start();
session_destroy();
/* echo "<script>window.open('../index.html','_self')</script>";*/
 header("Location:../index.html");

 ?>