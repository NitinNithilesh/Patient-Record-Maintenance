<?php

session_start();
$x=$_SESSION['name'];
$a=$_POST['tooth'];
$b=$_POST['desc'];
$c=$_POST['t'];
$d=$_POST['atp'];
 ?>
<?php
include_once 'db.php';

if(isset($_POST['oral']))
{

mysqli_query($conn,"INSERT INTO oral_health_examination values ('$x','$a','$b',NOW())");
mysqli_query($conn,"DELETE FROM oral_health_examination WHERE tooth='' AND description=''");
echo "<SCRIPT type='text/javascript'>alert('Oral Health Added..!!');window.location.replace(\"oralhealthh.php\");</SCRIPT>";

}
if(isset($_POST['submit']))
{
  $a=$_POST['tooth'];
  $b=$_POST['desc'];
  $c=$_POST['t'];
  $d=$_POST['atp'];
  $e=$d-0;

$r=mysqli_query($conn,"SELECT * FROM oral_health_examination WHERE tooth='$a' AND description='$b' AND id='$x'");
  if(mysqli_num_rows($r)==0)
  {
    mysqli_query($conn,"INSERT INTO oral_health_examination values ('$x','$a','$b',NOW())");
  }
  $res=mysqli_query($conn,"SELECT * FROM amount WHERE treatment='$c' AND id='$x'");
  if(mysqli_num_rows($res)==0)
  {
  mysqli_query($conn,"INSERT INTO amount values ('$x','$c','$d','0','$e','0',NOW())");
  mysqli_query($conn,"DELETE FROM oral_health_examination WHERE tooth='' AND description=''");
  mysqli_query($conn,"DELETE FROM amount WHERE treatment='' AND amount_to_be_paid=''");

  $resu=mysqli_query($conn,"SELECT SUM(amount_to_be_paid) AS amount_to_be_paid FROM amount where id='$x'");
  $rowww=mysqli_fetch_array($resu);
  $totalll =+ $rowww['amount_to_be_paid'];

  $result=mysqli_query($conn,"SELECT SUM(balance) AS balance FROM amount where id='$x'");
  $row=mysqli_fetch_array($result);
  $total =+ $row['balance'];

  mysqli_query($conn,"UPDATE total set total_amount_to_be_paid='$totalll',total_balance='$total' where id='$x'");
  }
  else
  {
    $aa=mysqli_query($conn,"SELECT amount_to_be_paid FROM amount WHERE treatment='$c' AND id='$x'");
    $rs=mysqli_fetch_array($aa);
    $re=$rs['amount_to_be_paid'];
    $dd=$re+$d;
    mysqli_query($conn,"UPDATE amount SET amount_to_be_paid='$dd' WHERE treatment='$c' AND id='$x'");
    mysqli_query($conn,"DELETE FROM oral_health_examination WHERE tooth='' AND description=''");
    mysqli_query($conn,"DELETE FROM amount WHERE treatment='' AND amount_to_be_paid=''");

    $resu=mysqli_query($conn,"SELECT SUM(amount_to_be_paid) AS amount_to_be_paid FROM amount where id='$x'");
    $rowww=mysqli_fetch_array($resu);
    $totalll =+ $rowww['amount_to_be_paid'];

    $result=mysqli_query($conn,"SELECT SUM(balance) AS balance FROM amount where id='$x'");
    $row=mysqli_fetch_array($result);
    $total =+ $row['balance'];

    mysqli_query($conn,"UPDATE total set total_amount_to_be_paid='$totalll',total_balance='$total' where id='$x'");
  }



echo "<SCRIPT type='text/javascript'>alert('Estimation Added..!!');window.location.replace(\"passoral.php\");</SCRIPT>";
}

?>
