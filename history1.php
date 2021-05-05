<?php
    include "header.php";
	include "navbar.php";
    	?>
<?php
session_start();
include("connect.php");
$q= mysqli_query($success,"SELECT * from details");
$rowcount=mysqli_num_rows($q);
$ssq=mysqli_query($success,"SELECT * from history");
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
		<link rel="stylesheet" type = "text/css" href="transact.css">
		<link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/roundstyle" type="text/css"/>
</head>
<style>
h2{
font-family: 'BedsteadRegular';
   font-weight: normal;
font-style: italic;}
footer { 
	position: fixed;
	left:0;
	bottom:0;
}
footer { 
	position: relative;
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
<body style="background-image:url('images/bg1.jpg'); 
background-repeat: no-repeat ; 
background-size:cover;">
		<button onclick="goBack()" style="margin-top:5px" class="btn btn-default pull-left"><span class="glyphicon glyphicon-arrow-left"> Go Back</span></button>

<div class="container">
    <div class="icon" style="color: #6410C8; margin-left: px; margin-top:75px;">
                                    <img src="images/history.png" alt="" height="38px" width="38px">
                                </div>
  <div>
    <h2 class="wow fadeInLeft" data-wow-duration="1s" data-wow-delay=".1s"
        style="color: #6410C8; margin-left: 50px; margin-top:-35px;">
        Transaction History
    </h2>
    <br><br><br>
    <?php
if (mysqli_num_rows($ssq) > 0) {
?>
  <table class="table">
  <thead>
  <tr style="color: #EB3CF5;">
    <th><b>Serial No.</b></th>
    <th><b>Sender Name</b></th>
    <th><b>Reciever Name</b></th>
    <th><b>Amount</b></th>
    <th><b>Date</b></th>
  </tr>
</thead>
<?php
$i=0;
while($row1 = mysqli_fetch_array($ssq)) {
?>
<tbody>
<tr>
    <td><?php echo $i+1; ?></td>
    <td><?php echo $row1["sender"]; ?></td>
    <td><?php echo $row1["reciever"]; ?></td>
    <td><?php echo $row1["amount"]; ?></td>
    <td><?php echo $row1["date"]; ?></td>
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
<br><br><br><br><br><br>
  <?php require 'footer.php'; ?>
</body>

</html>
<?php

include("connect.php");
if(isset($_POST['sub1']))
{
    $es=$_POST['st'];
    $er=$_POST['df'];
    $n = preg_replace('/\D/', '',$_POST['st']);  //This is to retrieve only the integer part in the given string
    $m = preg_replace('/\D/', '',$_POST['df']);
    $e = $_POST['amt'];
    $sq= mysqli_query($success,"SELECT * from details where cid=$n or cid=$m");
    $rowcount=mysqli_num_rows($sq);
    for($i=1;$i<=$rowcount;$i++)
    {
        $row=mysqli_fetch_array($sq);
        if($row['cid'] == $n)
        {
            
            $abt=$row['balance']+$e;
        }
        else{
            if($row['balance']<$e)
            {
                echo '<script>alert("Insufficient Balance")</script>'; 
                echo '<script>window.location.href = "transact.php"</script>'; 
                exit;
            }
            $abu=$row['balance']-$e;
        }
    }
    $a = $_POST['sid'];
    if($a == 1234)
    {
        $queryy= mysqli_query($success,"UPDATE details SET balance='$abt' WHERE cid=$n;");
        $qr= mysqli_query($success,"UPDATE details SET balance='$abu' WHERE cid=$m;");
        $qe= mysqli_query($success,"INSERT INTO history (sender,reciever,amount) VALUES ('$er','$es','$e')");
        echo '<script>alert("Payment Successful !")</script>'; 
        echo '<script>window.location.href = "transact.php"</script>'; 

    }
    else{
        echo '<script>alert("Incorrect Employee Secure ID")</script>'; 
        echo '<script>window.location.href = "transact.php"</script>';
    }
}
?>