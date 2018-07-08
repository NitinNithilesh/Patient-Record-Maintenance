<?php
include_once 'db.php';
session_start();
$x=$_SESSION['name'];
$a=$_SESSION['treat'];
$c=$_POST['ap'];
$res=mysqli_query($conn,"SELECT amount_to_be_paid FROM amount WHERE treatment='$a'");
$r=mysqli_fetch_array($res);
$d=$r['amount_to_be_paid'];
$re=mysqli_query($conn,"SELECT amount_paid FROM amount WHERE treatment='$a'");
$n=mysqli_fetch_array($re);
$m=$n['amount_paid'];
$z=$m+$c;
$e=$d-$z;


mysqli_query($conn,"INSERT INTO payment values('$x','$a','$d','$z','$e','0',NOW())");
mysqli_query($conn,"UPDATE amount SET amount_paid='$z',balance='$e',time=NOW() WHERE treatment='$a' AND id='$x'");
$zz=mysqli_query($conn,"SELECT * FROM total where id='$x'");
if(mysqli_num_rows($zz)==0)
{
  mysqli_query($conn,"INSERT INTO total values('$x','0','0','0','0')");
}

$result=mysqli_query($conn,"SELECT SUM(balance) AS balance FROM amount where id='$x'");
$row=mysqli_fetch_array($result);
$total =+ $row['balance'];

$resul=mysqli_query($conn,"SELECT SUM(amount_paid) AS amount_paid FROM amount where id='$x'");
$roww=mysqli_fetch_array($resul);
$totall =+ $roww['amount_paid'];

$resu=mysqli_query($conn,"SELECT SUM(amount_to_be_paid) AS amount_to_be_paid FROM amount where id='$x'");
$rowww=mysqli_fetch_array($resu);
$totalll =+ $rowww['amount_to_be_paid'];

mysqli_query($conn,"UPDATE total set total_amount_to_be_paid='$totalll',total_amount_paid='$totall',total_balance='$total',time=NOW() where id='$x'");
mysqli_query($conn,"UPDATE payment set total_balance='$total' where id='$x'");
mysqli_query($conn,"UPDATE amount set total_balance='$total' where id='$x'");
mysqli_query($conn,"UPDATE patient set balance='$total' where id='$x'");
$ff=mysqli_query($conn,"SELECT balance FROM amount WHERE id='$x'");
if(mysqli_num_rows($ff)!=0)
{
  mysqli_query($conn,"DELETE FROM amount WHERE balance<='0' AND id='$x'");
}
echo "<SCRIPT type='text/javascript'>alert('Payment Sucessfull..!!');window.location.replace(\"passpayment.php\");</SCRIPT>";
?>
