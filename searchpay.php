<link rel="stylesheet" href="style.css">
<title>Payment Details</title>
<nav>
  <ul>
    <li>
    <a href="paymentdetails.php">Payment Details</a>
  </li>
  <li>
  <a href="logout.php">Log Out</a>
</li>
  </ul>
</nav>
<div class="table-title">
<center><h1>Payment Details</h1></center>
</div>
<table class="table-fill">
<thead>
<tr>
  <th class="text-center">Treatment</th>
  <th class="text-center">Estimate</th>
  <th class="text-center">Amount Paid</th>
  <th class="text-center">Balance</th>
  <th class="text-center">Total Balance</th>
  <th class="text-center">Time</th>
</tr>
</thead>
<?php
include_once 'db.php';
if(isset($_POST['i']))
{
$a=$_POST['i'];
$res=mysqli_query($conn,"SELECT * from payment WHERE id='$a'") or die('error');
  while($r=mysqli_fetch_array($res))
  {
    $a=$r['treatment'];
    $b=$r['amount_to_be_paid'];
    $c=$r['amount_paid'];
    $d=$r['balance'];
    $e=$r['total_balance'];
    $f=$r['time'];

    echo '<tr>
        <td>'.$a.'</td>
        <td>'.$b.'</td>
        <td>'.$c.'</td>
        <td>'.$d.'</td>
        <td>'.$e.'</td>
        <td>'.$f.'</td>
        </tr>';
  }
}
?>
