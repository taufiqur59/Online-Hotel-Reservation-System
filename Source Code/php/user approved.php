<?php
session_start();
if(isset($_SESSION['username'])==false){
   	  header("Location:sign in.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link rel="stylesheet" href="../css/admin panel.css">
<title>User approved</title>
</head>

<body>
<div id="nav">
   <div id="wrap">
   <ul>
      <li><a href="user pending.php">Pending</a></li><li>
       <a href="user accepted.php">Accepted</a></li><li>
        <a href="user approved.php">Approved</a></li><li>
         <a href="../index.html">Home</a></li>
    </ul>
   </div>
</div>

<h1 align='center'>All the Approved Requests</h1>
<p align='center'>.<?php echo @$_GET['deleted']; ?> </p>

<table width='1140' align='center' border='5'>
	<tr bgcolor= '#DCDCDC'>
		<th>Name</th>
		<th>Country</th>
		<th>Contact NO</th>
		<th>Email</th>
        <th>Check In</th>
        <th>Check Out</th>
        <th>Hotel Name</th>
        <th>Room Type</th>
        <th>Price</th>
        <th>Total Room</th>
        <th>Total Price</th>
        <th>Bank Acc</th>
         
        
    </tr>

    <tr>

    	<?php 

           mysql_connect("localhost","root","");
           mysql_select_db("user");

           $query="select * from approved";
           $run=mysql_query($query);

           while($row=mysql_fetch_array($run)){
           	   $id=$row[0];
			  $name=$row[1];
           	  $country=$row[2];
			  $contact=$row[3];
			  $email=$row[4];
			  $checkin=$row[5];
			  $checkout=$row[6];
              $hotelname=$row[7];
              $roomtype=$row[8];
              $price=$row[9];
			  $troom=$row[10];
			  $tprice=$row[11];
			  $bank=$row[12];
             
             

         ?>
          <tr align='center'>
         <td> <?php  echo $name ?> </td>	
         <td> <?php  echo $country ?> </td>	
         <td> <?php  echo $contact ?> </td>	
         <td> <?php  echo $email ?> </td>
         <td> <?php  echo $checkin ?> </td>
         <td> <?php  echo $checkout ?> </td>
         <td> <?php  echo $hotelname ?> </td>
         <td> <?php  echo $roomtype ?> </td>
         <td> <?php  echo $price ?> </td>
         <td> <?php  echo $troom ?> </td>
         <td> <?php  echo $tprice ?> </td>
         <td> <?php  echo $bank ?> </td>	
         
 
    </tr>

    <?php } ?>
</table>

</body>
</html>
