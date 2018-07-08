<?php
include_once 'db.php';
session_start();

$x=$_SESSION['name'];
$id=$_POST['i'];
$age=$_POST['a'];
$sex=$_POST['s'];
$marital_status=$_POST['m'];
$blood_group=$_POST['b'];
$dob=$_POST['do'];
$occupation=$_POST['o'];
$address=$_POST['ad'];
$mobile=$_POST['mo'];
$email=$_POST['e'];
$referred_by=$_POST['rb'];

$a=$_POST['i'];
$b=$_POST['n'];
$d=$_POST['a'];
$e=$_POST['s'];
$f=$_POST['m'];
$g=$_POST['b'];
$h=$_POST['do'];
$i=$_POST['o'];
$j=$_POST['ad'];
$k=$_POST['mo'];
$l=$_POST['e'];
$m=$_POST['rb'];


$p=mysqli_query($conn,"SELECT * FROM patient WHERE id='$a'");


  if(mysqli_num_rows($p)!=0)
    {
      echo "<script type='text/javascript'>alert('Id already Exists..!!');</script>";
      include "upatient.php";
    }
else
  {

    if($a!='')
    {
      mysqli_query($conn,"UPDATE patient set id='$a' where id='$x'");
      mysqli_query($conn,"UPDATE chief_complaint set id='$a' where id='$x'");
      mysqli_query($conn,"UPDATE investigation set id='$a' where id='$x'");
      mysqli_query($conn,"UPDATE medical_history set id='$a' where id='$x'");
      mysqli_query($conn,"UPDATE medication set id='$a' where id='$x'");
      mysqli_query($conn,"UPDATE oral_health_examination set id='$a' where id='$x'");
      mysqli_query($conn,"UPDATE past_dental_history set id='$a' where id='$x'");
      mysqli_query($conn,"UPDATE payment set id='$a' where id='$x'");
      mysqli_query($conn,"UPDATE total set id='$a' where id='$x'");
    }
    if($b!='')
    {
      mysqli_query($conn,"UPDATE patient set name='$b' where id='$x'");
    }
    if($d!='')
    {
      mysqli_query($conn,"UPDATE patient set age='$d' where id='$x'");
    }
    if($e!='')
    {
      mysqli_query($conn,"UPDATE patient set sex='$e' where id='$x'");
    }
    if($f!='')
    {
      mysqli_query($conn,"UPDATE patient set marital_status='$f' where id='$x'");
    }
    if($g!='')
    {
      mysqli_query($conn,"UPDATE patient set blood_group='$g' where id='$x'");
    }
    if($h!='')
    {
      mysqli_query($conn,"UPDATE patient set dob='$h' where id='$x'");
    }
    if($i!='')
    {
      mysqli_query($conn,"UPDATE patient set occupation='$i' where id='$x'");
    }
    if($j!='')
    {
      mysqli_query($conn,"UPDATE patient set address='$j' where id='$x'");
    }
    if($k!='')
    {
      mysqli_query($conn,"UPDATE patient set mobile='$k' where id='$x'");
    }
    if($l!='')
    {
      mysqli_query($conn,"UPDATE patient set email='$l' where id='$x'");
    }
    if($m!='')
    {
      mysqli_query($conn,"UPDATE patient set referred_by='$m' where id='$x'");
    }


    echo "<script type='text/javascript'>alert('Patient Updated..!!');</script>";
    include "upatient.php";
  }



?>
