 

<?php 
$delete_id="";
 
mysql_connect("localhost","root","");
mysql_select_db("user");


$delete_id=$_GET['del'];
if(isset($delete_id)){
 
$query="delete from book where id='$delete_id'";
if(mysql_query($query))
	echo "<script>window.open('admin pending.php?deleted=user has been deleted!!!','_self')</script>";

}
 
 ?>