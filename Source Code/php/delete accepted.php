 

<?php 
$delete_id="";
 
mysql_connect("localhost","root","");
mysql_select_db("user");


$delete_id=$_GET['delacc'];
if(isset($delete_id)){
 
$query="delete from accept where id='$delete_id'";
if(mysql_query($query))
	echo "<script>window.open('admin accepted.php?deleted=user has been deleted!!!','_self')</script>";

}
 
 ?>