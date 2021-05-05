<?php
session_start();
include("connect.php");
if(isset($_POST['sub1']))
{
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
            }
            $abu=$row['balance']-$e;
        }
    }
    $a = $_POST['sid'];
    if($a == 1234)
    {
        $queryy= mysqli_query($success,"UPDATE details SET balance='$abt' WHERE cid=$n;");
        $qr= mysqli_query($success,"UPDATE details SET balance='$abu' WHERE cid=$m;");
        $qe= mysqli_query($success,"INSERT INTO history (sender,reciever,amount) VALUES ('$n','$m','$e')");
        

    }
    else{
        echo '<script>alert("Incorrect Employee Secure ID")</script>'; 
        echo '<script>window.location.href = "transact.php"</script>';
    }
}
?>