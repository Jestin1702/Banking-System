<?php
    include "header.php";
    ?>
<?php
session_start();
include("connect.php");
$ssq=mysqli_query($success,"SELECT * from details");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>BASIC BANKING SYSTEM</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php require 'styles.php'; ?>
        <?php require 'scripts.php'; ?>
		<link rel="stylesheet" href="footer.css">
		<link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/manic-monday" type="text/css"/>
</head>
<style>
footer { 
	position: fixed;
	left:0;
	bottom:0;
	width:100%;
    font-family: 'Montserrat', sans-serif;
    color: #E0E0E0;
    line-height: 2;
    background-color: #001825;
    padding-top: 20px;
}
</style>
<script>
function goBack() {
  window.history.back()
}
</script>
<body style="background: url(images/bg1.jpg);background-repeat: no-repeat ;background-size:cover;">
		<button onclick="goBack()" style="margin-top:5px" class="btn btn-default pull-left"><span class="glyphicon glyphicon-arrow-left"> Go Back</span></button>

<div>
<h1 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s"
        style="color: #57b846; margin-left: 580px; margin-top:17px; font-family: 'ManicMondayRegular';
   font-weight: bolder;font-style: normal;">
       CUSTOMER DETAILS
    </h1>
</div>
  

  
    <div class="container">

  <div>
    
    <?php
if (mysqli_num_rows($ssq) > 0) {
?>
  <table class="table">
  <thead>
  <tr style="color: #4B0082;">
    <th><b>Serial No.</b></th>
    <th><b>Name</b></th>
    <th><b>Email-Id</b></th>
    <th><b>Balance</b></th>
    <th><b>Contact</b></th>
    <th><b>Customer Account-ID</b></th>
  </tr>
</thead>
<?php
$i=0;
while($row1 = mysqli_fetch_array($ssq)) {
?>
<tbody>
<tr>
    <td><?php echo $i+1; ?></td>
    <td><?php echo $row1["cname"]; ?></td>
    <td><?php echo $row1["email"]; ?></td>
    <td><?php echo $row1["balance"]; ?></td>
    <td><?php echo $row1["contact"]; ?></td>
    <td><?php echo $row1["cid"]; ?></td>
</tr>
</tbody>
<?php
$i++;
}
?>
</table>
 <?php
}
else{
    echo "No result found";
}
?>
</div>
</div>
 
<?php require 'footer.php'; ?>
</body>

</html>
