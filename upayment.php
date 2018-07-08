<?php
include_once 'db.php';

$a=$_POST['i'];
$b=$_POST['t'];
$c=$_POST['atp'];
$d=$_POST['ap'];
$e=$_POST['b'];

$f=mysqli_query($conn,"SELECT * FROM amount WHERE treatment='$b'");

if(mysqli_num_rows($f)!=0)
{
if($c!='')
{
mysqli_query($conn,"UPDATE amount set amount_to_be_paid='$c' WHERE id='$a' && treatment='$b'");
}
if($d!='')
{
mysqli_query($conn,"UPDATE amount set amount_paid='$d' WHERE id='$a' && treatment='$b'");
}
if($e!='')
{
mysqli_query($conn,"UPDATE amount set balance='$e' WHERE id='$a' && treatment='$b'");
}
echo "<script type='text/javascript'>alert('Amount Updated..!!');</script>";
include "updatepayment.php";
}
else {
  echo "<script type='text/javascript'>alert('No Such Treatment..!!');</script>";
  include "updatepayment.php";
}
 ?>
