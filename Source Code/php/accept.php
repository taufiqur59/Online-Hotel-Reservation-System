<?php 
$accept_id="";
 
mysql_connect("localhost","root","");
mysql_select_db("user");


$accept_id=$_GET['acc'];
if(isset($accept_id)){
 $que="delete from book where id='$accept_id'";
 $query="INSERT INTO accept select * from book where id='$accept_id'";

if(mysql_query($query))
	echo "<script>window.open('admin pending.php?deleted=request been accepted!!!','_self')</script>";
if(mysql_query($que))
	echo "<script>window.open('admin pending.php?deleted=request been accepted!!!','_self')</script>";	
	
}
 ?>