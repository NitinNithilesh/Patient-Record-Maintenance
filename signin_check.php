<?php
session_start();
?>
<html>
<head>
</head>
<?php
if(isset($_POST['signin']))
{
include_once "db.php";

$a=trim($_POST["u"]);
$b=trim($_POST["p"]);
$c="select * from signup where username='$a' and BINARY password='$b'";
$g=mysqli_query($conn,"SELECT password FROM signup WHERE user='admin'");
$r=mysqli_fetch_array($g);
$m=$r['password'];

$res=mysqli_query($conn,"SELECT password FROM signup WHERE user='user'");
$row=mysqli_fetch_array($res);
$mm=$row['password'];

$d=$conn->query($c);
if($d->num_rows>0)
{

	$row = $d->fetch_assoc();
	$_SESSION["u"] = $row["username"];
	$_SESSION["p"]=$row["password"];


	if($b==$m)
	{
	include "home.php";
	}
	elseif($b==$mm)
	{
	include "paymentdetails.php";
	}
}
elseif(empty($a&&$b))
{
	if(empty($a) AND !empty($b))
	{
		echo "<script type='text/javascript'>alert('Enter the Username..!!');</script>";
		include "signin.php";
	}
	elseif(empty($b) AND !empty($a))
	{
		echo "<script type='text/javascript'>alert('Enter the Password..!!');</script>";
		include "signin.php";
	}
	else
	{
		echo "<script type='text/javascript'>alert('Enter the Username and Password..!!');</script>";
		include "signin.php";
	}
}
else
{
	$e=mysqli_query($conn,"SELECT * FROM signup WHERE username='$a'");
	$f=mysqli_query($conn,"SELECT * FROM signup WHERE password='$b'");

	if(mysqli_num_rows($e)==0 AND mysqli_num_rows($f)!=0)
	{
		echo "<script type='text/javascript'>alert('Check your Username..!!');</script>";
		include "signin.php";
	}
	elseif(mysqli_num_rows($f)==0 AND mysqli_num_rows($e)!=0)
	{
		echo "<script type='text/javascript'>alert('Check your Password..!!');</script>";
		include "signin.php";
	}
	else
	{
		echo "<script type='text/javascript'>alert('Wrong Username and Password..!!');</script>";
		include "signin.php";
	}
}

}
?>
<body>
</body>
</html>
