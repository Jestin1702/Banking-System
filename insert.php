<?php
session_start();
include("connect.php");
if(isset($_POST['sub']))
{
    $n = $_POST['cname'];
    $m = $_POST['mobile'];
    $e = $_POST['email'];
    $a = $_POST['amount'];
    $no = $_POST['accno'];
    $qe="INSERT INTO details (cname,contact,email,balance,cid) VALUES ('$n','$m','$e','$a','$no')";
    if(mysqli_query($success,$qe))
    {
    	header('location:index.php');
    }
}
?>