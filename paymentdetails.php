<link rel="stylesheet" href="style.css">
<title>Payment Details</title>
<nav>
  <ul>

  <li>
  <a href="logout.php">Log Out</a>
</li>
</nav>
<div class="login">

  <form action="searchpay.php" method="post">
    <p><input type="text" name="i" placeholder="Search By ID"></p>
    <p><input type="submit" name="search" value="Search" ></p>
  </form></div>
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
<p id="demo"></p>
<?php
include_once 'db.php';
$res=mysqli_query($conn,"SELECT * from payment") or die('error');
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

?>
