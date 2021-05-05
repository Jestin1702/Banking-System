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
		<link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/manic-monday" type="text/css"/>
</head>
<style>
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

<marquee><h1 style="font-family: 'ManicMondayRegular';font-weight: normal; 
font-style: normal; font-size:70px; color:#ff2c5b"> Send and Receive Money anywhere in the world. </h1></marquee>
<div class="container">
<h3>What is Money Transfer Online?</h3>
<p style="margin-left:40px; font-size:15px" >Online money transfers have now become a medium to save oneself from any cash shortage related problems. A long list of requirements and legal formalities is no longer needed since the money can be transferred online without any hassle. Hence, transferring money online has become easier than before. And the amount will reflect in the bank accounts instantly.
</p>
<h3>How to transfer money to any accounts in three simple steps.</h3>
<p>
1. Select the Receiver or beneficiary.<br>
2. Select the Debtor.<br>
3. Enter the amount to be sent and press TRANSFER.<br>
Note: The amount transferred will reflect in the bank account instantly.</p>
</div>
    <button style="margin-left:683px; margin-top:20px; " type="button" data-toggle="modal" data-target="#myModal"
        class="login100-form-btn" data-dismiss="modal">TRANSFER</button>
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
			<button style="margin-right:-350px;" class="close" data-dismiss="modal">&times;</button>
                <div class="modal-header">
                    
                    <h4 style="margin-left: 20px; color: #F1C40F"><span class="glyphicon glyphicon-send"><b>	TRANSACT</b></span></h4>
                </div>
                <div class="modal-body">
                    <form class="login100-form validate-form" action="" method="post">
                        <br>

                        <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">

                            <input class="input100" type="text" name="st" list="deveename" placeholder="Send To">
                            <span class="focus-input100"></span>

                            <datalist id="deveename">
                                <?php
                        for($i=1;$i<=$rowcount;$i++)
                        {
                            $row=mysqli_fetch_array($q);
                            
                    ?>
                                <option value="<?php echo ' '.$row['cname'].' ('. $row['cid'].')' ?>">
                                    <?php
                     }
                     ?>

                            </datalist>
                        </div>

                        <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">

                            <input class="input100" type="text" name="df" list="deveename" placeholder="Debit From">
                            <span class="focus-input100"></span>

                            <datalist id="deveename">
                                <?php
                        for($i=1;$i<=$rowcount;$i++)
                        {
                            $row=mysqli_fetch_array($q);
                            
                    ?>
                                <option value="<?php echo ' '.$row['cname'].' ('. $row['cid'].')' ?>">
                                    <?php
                     }
                     ?>

                            </datalist>
                        </div>

                        <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">

                            <input class="input100" type="number" name="amt" placeholder="Enter amount">
                            <span class="focus-input100"></span>
                        </div>
                        <div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">

                            <input class="input100" type="password" name="sid" placeholder="Enter ID">
                            <span class="focus-input100"></span>
                        </div>




                        <div class="modal-footer">

                            <input style="margin-left:65px;" type="submit" value="TRANSFER" name="sub1"
                                class="login100-form-btn">
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>
    <br><br>
	
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
        echo '<script>window.location.href = "history1.php"</script>'; 

    }
    else{
        echo '<script>alert("Incorrect Employee Secure ID")</script>'; 
        echo '<script>window.location.href = "transact.php"</script>';
    }
}
?>
<br><br>
<?php require 'footer.php'; ?>