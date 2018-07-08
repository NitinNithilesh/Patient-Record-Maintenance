<?php

include_once 'db.php';
session_start();

$x=$_SESSION['name'];
$a=$_POST['complaint'];
$b=implode(',', $_POST['disease']);
$c=$_POST['pregnant'];
$d=$_POST['nursing'];
$e=implode(',', $_POST['habit']);
$f=$_POST['drug'];
$g=$_POST['surgery'];
$h=implode(',', $_POST['allergy']);
$i=$_POST['history'];
$l=$_POST['investigation'];
$z=$_POST['blood'];
$u=$_POST['diabetes'];



$q=mysqli_query($conn,"SELECT complaint FROM chief_complaint WHERE complaint='$a' AND id='$x'");
if(mysqli_num_rows($q)==0)
{
mysqli_query($conn,"INSERT INTO chief_complaint VALUES('$x','$a',NOW())");
}
mysqli_query($conn,"DELETE FROM chief_complaint WHERE complaint=''");

$r=mysqli_query($conn,"SELECT * FROM medical_history WHERE disease='$b' AND pregnant='$c' AND nursing='$d' AND habits='$e' AND id='$x' AND pressure='$z' AND diabetes='$u'");
if(mysqli_num_rows($r)==0)
{
mysqli_query($conn,"INSERT INTO medical_history values('$x','$b','$z','$u','$c','$d','$e',NOW())");
}
mysqli_query($conn,"DELETE FROM medical_history WHERE disease='' AND pregnant='' AND nursing='' AND habits='' AND pressure='' AND diabetes=''");

$s=mysqli_query($conn,"SELECT * FROM medication WHERE drug_history='$f' AND previous_surgery='$g' AND drug_allergy='$h' AND id='$x'");
if(mysqli_num_rows($s)==0)
{
mysqli_query($conn,"INSERT INTO medication values('$x','$f','$g','$h',NOW())");
}
mysqli_query($conn,"DELETE FROM medication WHERE drug_history='' AND previous_surgery='' AND drug_allergy=''");

$t=mysqli_query($conn,"SELECT * FROM past_dental_history WHERE history='$i' AND id='$x'");
if(mysqli_num_rows($t)==0)
{
mysqli_query($conn,"INSERT INTO past_dental_history values('$x','$i',NOW())");
}
mysqli_query($conn,"DELETE FROM past_dental_history WHERE history=''");

$v=mysqli_query($conn,"SELECT * FROM investigation WHERE xray_and_others='$l' AND id='$x'");
if(mysqli_num_rows($v)==0)
{
mysqli_query($conn,"INSERT INTO investigation values('$x','$l',NOW())");
}
mysqli_query($conn,"DELETE FROM investigation WHERE xray_and_others=''");




echo "<script type='text/javascript'>alert('Case Sheet Added..!!');</script>";
include 'oralhealthh.php';
?>
