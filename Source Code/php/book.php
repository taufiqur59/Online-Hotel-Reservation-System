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
   $country = mysql_real_escape_string($_POST['country']);
   $contact = mysql_real_escape_string($_POST['contact']);
   $email = mysql_real_escape_string( $_POST['email']);
   $checkin = mysql_real_escape_string($_POST['checkin']);
   $checkout = mysql_real_escape_string($_POST['checkout']);
   $hotelname = mysql_real_escape_string($_POST['hotelname']);
   $roomtype = mysql_real_escape_string($_POST['roomtype']);
   $price = mysql_real_escape_string($_POST['price']);
   $troom = mysql_real_escape_string($_POST['troom']);
   $tprice = mysql_real_escape_string($_POST['tprice']);
   $bank = mysql_real_escape_string($_POST['bank']);

if (empty($name)|| empty($country) || empty($contact) || empty($email) || empty($checkin)
    ||empty($checkout)|| empty($hotelname) || empty($roomtype) || empty($price) || empty($troom)
	||empty($tprice)||empty($bank)) {
    $error_message="<h5 style=\"color:red; font-weight:lighter\">one or more required fields are blank!!!</h5>";
     }

else{

$query="INSERT INTO book(name,country,contact,email,checkin,checkout,hotelname,roomtype,price,troom,tprice,bank)
 VALUES('{$name}','{$country}','{$contact}','{$email}','{$checkin}',
      '{$checkout}','{$hotelname}','{$roomtype}','{$price}','{$troom}','{$tprice}','{$bank}')";
if(mysql_query($query)){
  /*echo "Registration is successful!"; */
  echo"<script>alert('Booking is successful')</script>";
  echo "<script>window.open('../index.html','_self')</script>";

}
}


 mysql_close($connection);
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="../css/book form.css">
<title>Book here</title>
</head>

<body>
<div id="wrap">
  <div id="headldiv">
    <h1 id="loghead">Book Here</h1>
  </div>
  <div id="logdiv">
        <div id="logformhead" style="float:left;padding:0;height:50px;">
          <h3 id="logheadline">Booking Form</h3>
        </div>
    <div style="float:right;width:40%;">
      <h3 id="goback">Go Back Home?<a href="../index.html">Click here</a></h3>
    </div>
  </div>
  <div id="logrest">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?> ">
      <table style="auto">
        <tr>
          <td>Name:</td>
          <td><input type="text" name="name" placeholder="name"></td>
          <td>Country:</td>
          <td><input type='text'name='country' placeholder='eg:  Bangladesh'></td>
        </tr>
        <tr>
          <td>Contact No:</td>
          <td><input type="text" name='contact' placeholder='eg: +8801738214430'></td>
          <td>Email:</td>
          <td><input type='email' name='email' placeholder="Enter the email used for signed up" ></td>
        </tr>
        <tr>
          <td>Check In:</td>
          <td><input type='date'name='checkin' placeholder='DD/MM/YYYY'></td>
          <td>Check Out:</td>
          <td><input type='date'name='checkout' placeholder='DD/MM/YYYY'></td>
        </tr>
        <tr>
          <td>Hotel Name:</td>
          <td><input type='text'name='hotelname' placeholder='eg: Grand Orient'></td>
          <td>Room Type:</td>
          <td><input type='text'name='roomtype' placeholder='eg: Delux'></td>
        <tr>
          <td>Price Per Room:</td>
          <td><input type='text'name='price' placeholder='eg: $250'></td>
          <td>Total Room:</td>
          <td><input type='text'name='troom' placeholder='eg: 3'></td>
        <tr>
          <td>Total Price:</td>
          <td><input type='text'name='tprice' placeholder='eg: $750'></td>
          <td>Bank AccNo:</td>
          <td><input type='text'name='bank' placeholder='eg: DBBL mobile banking'></td>
        </tr>
        <tr>
          <td colspan='5' align='center'><input type='submit' 
              name='submit'
                     value='Book'></td>
        </tr>
      </table>
    </form>
  </div>
  <center>
    <h3> <?php echo "".$error_message; ?> </h3>
  </center>
</div>
<!-- wrap ends here -->

</body>
</html>
