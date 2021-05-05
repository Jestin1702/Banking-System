<?php
    include "header.php";
    include "navbar.php";
	?>
<?php
session_start();
include("connect.php");
$q= mysqli_query($success,"SELECT * from details");
$rowcount=mysqli_num_rows($q);
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BASIC BANKING SYSTEM</title>
	<?php require 'styles.php'; ?>
        <?php require 'scripts.php'; ?>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="home_style.css">
	<link rel="stylesheet" href="footer.css">
	<link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/roundstyle" type="text/css"/>
	<link rel="stylesheet" media="screen" href="https://fontlibrary.org//face/de-puntillas-e-tiptoes-squid" type="text/css"/>
</head>
<style>
  .modal-header, h4,.close{
    background-color: #5cb85c;
    color:white !important;
    font-size: 40px;
  }
  h3 {
   font-family: 'dpuntillasEtiptoessquidRegular';
   font-weight: normal;
   font-style: normal;
}
  </style>
<body style="background-image:url('images/bg1.jpg'); 
background-repeat: no-repeat ; 
background-size:cover;">
    <!-- service_area  -->
    <div class="service_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section_title text-center mb-70">
                       <marquee><h1>
				 <span style="font-family: 'RoundStyleBookOblique';font-weight: normal;font-style: italic; color:#ff0035">YOUR BANK AT YOUR FINGERTIPS</span></h1></marquee>

                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-4">
                        <div class="single_service text-center wow fadeInLeft" data-wow-duration="1.2s"
                            data-wow-delay=".4s">
                            <!-- <a href="add.php"> -->
                            <button type="button" data-toggle="modal" data-target="#myModal">
                                <div class="icon">
                                    <img src="images/user.ico" alt="" height="70px" width="70px">
                                </div>
                                <h3 style="color:#000000;"><b>ADD CUSTOMER</b></h3>
								<p>Add Customers here </p><br><br>
                            </button>
                        </div>
                    </div>
                    <div class="modal fade" id="myModal" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
							<div class="modal-header" style="padding:35px 50px;">
							<button style="margin-right: -400px; margin-top: -40px" class="close" data-dismiss="modal">&times;</button>
							<h4 style="margin-left: -10px;"><span class="glyphicon glyphicon-user"></span> ADD CUSTOMER</h4>
                                </div>
                                <div class="modal-body">
                                    <form class="login100-form validate-form" action="insert.php" method="post">
                                        <br>

                                        <div class="wrap-input100 validate-input m-b-26"
                                            data-validate="Username is required">
                                            <br>
                                            <br>
                                            <input class="input100" type="text" name="cname"
                                                placeholder="Enter Customer Name">
                                            <span class="focus-input100"></span>
                                        </div>

                                        <div class="wrap-input100 validate-input m-b-18"
                                            data-validate="Password is required">

                                            <input class="input100" type="number" name="mobile"
                                                placeholder="Enter Customer Mobile-no">
                                            <span class="focus-input100"></span>
                                        </div>
                                        <div class="wrap-input100 validate-input m-b-18"
                                            data-validate="Password is required">

                                            <input class="input100" type="email" name="email"
                                                placeholder="Enter Customer Email-id">
                                            <span class="focus-input100"></span>
                                        </div>
                                        <div class="wrap-input100 validate-input m-b-18"
                                            data-validate="Password is required">

                                            <input class="input100" type="number" name="amount"
                                                placeholder="Enter Depositing Amount">
                                            <span class="focus-input100"></span>
                                        </div>
                                        <div class="wrap-input100 validate-input m-b-18"
                                            data-validate="Password is required">

                                            <input class="input100" type="number" name="accno"
                                                placeholder="Enter Unique customer ID">
                                            <span class="focus-input100"></span>
                                        </div>

                                        <br>
                                        <br>
										<div class="modal-footer">
										<br><br>
										   <input style="margin-left: 100px; margin-top:40px;" type="submit"
                                                value="Save" name="sub" class="login100-form-btn" >
                                        </div>
                                    </form>
									
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="col-xl-4 col-md-4">
                        <div class="single_service text-center wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".3s">
                            <button type="button" onclick="window.location.href='transact.php'">
                                <div class="icon">
                                    <img src="images/money.png" alt="" height="74px" width="74px">
                                </div>
                                <h3 style="color:#000000;"><b>TRANSFER MONEY</b></h3>
                                <p>Transfer money between multiple accounts </p>
                                <br>
                            </button>
                        </div>

                    </div>
					
                    <div class="col-xl-4 col-md-4" >
                        <div class="single_service text-center wow fadeInUp" data-wow-duration="1s"
                            data-wow-delay=".3s">
                            <button type="button" onclick="window.location.href='view.php'">
                                <div class="icon">
                                    <img src="images/happy.jpg" alt="" height="74px" width="74px">
                                </div>
                                <h3 style="color:#000000;"><b>VIEW CUSTOMERS</b></h3>
                                <p>View all the customers having accounts in our bank</p>
                                <br>
                    </button>
                        </div>

                    </div>


                </div>
            </div>
        </div>
    </div>
</body>
<br><br><br><br>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<?php include "footer.php"; ?>
<?php include "easter_egg.php"; ?>