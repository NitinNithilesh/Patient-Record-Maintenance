<?php
session_start();
$_SESSION['treat'] = $_GET['treat'];
 ?>
<link rel="stylesheet" type="text/css" href="style.css">
<div class="login">
  <h2 class="login-header">Payment</h2><br>
  <form action="payy.php" type="text" method="post">
<input type="text" name="ap" placeholder="Amount Paid"><br>
  <input type="submit" name="submit" value="Submit">
</form>
