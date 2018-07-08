<?php
if(isset($_POST['add']))
{
session_start();
include_once "db.php";


$name=$_POST['n'];
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

$n=strlen((string)$k);
$o=mysqli_query($conn,"SELECT * FROM patient WHERE id='$b'");

$res=mysqli_query($conn,"SELECT id FROM patient WHERE id=(SELECT MAX(id) FROM patient)");
$r=mysqli_fetch_array($res);
$d=$r['id'];
$v=$d+1;
$p=mysqli_query($conn,"SELECT * FROM patient WHERE id='$v'");


if(mysqli_num_rows($o)!=0)
  {
    echo "<script type='text/javascript'>alert('Name already Exists..!!');</script>";
    include "patient.php";
  }
  elseif(mysqli_num_rows($p)!=0)
    {
      echo "<script type='text/javascript'>alert('Id already Exists..!!');</script>";
      include "patient.php";
    }
else
  {
    mysqli_query($conn,"INSERT INTO patient(id,name,age,sex,marital_status,blood_group,dob,occupation,address,mobile,email,referred_by,balance) VALUES('$v','$name','$age','$sex','$marital_status','$blood_group','$dob','$occupation','$address','$mobile','$email','$referred_by','0')");
    echo "<script type='text/javascript'>alert('Patient added..!!');</script>";
    include "viewpatients.php";
  }
}


?>
