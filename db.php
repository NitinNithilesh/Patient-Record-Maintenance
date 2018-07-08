<?php

//$con = new mysqli('localhost','root','','login') or die("Could not connect to mysql".mysqli_error($con));

$servername ="localhost";
$username = "root";
$password = "";
$db="clinic";
//Create connection
$conn = new mysqli($servername, $username, $password,$db);
// Check connection
if ($conn->connect_error)
{
	echo "<script type='text/javascript'>alert('Connection Error. Please Contact Admin');window.location.href = 'index.php';</script>";
}
?>
