<?php 
$approved_id="";
 
mysql_connect("localhost","root","");
mysql_select_db("user");


$approved_id=$_GET['app'];
if(isset($approved_id)){
 $query="INSERT INTO approved select * from accept where id='$approved_id'";
  $que="delete from accept where id='$approved_id'";
if(mysql_query($query))
	echo "<script>window.open('admin accepted.php?deleted=request been approved!!!','_self')</script>";
if(mysql_query($que))
	echo "<script>window.open('admin accepted.php?deleted=request been approved!!!','_self')</script>";	
	
}
 ?>