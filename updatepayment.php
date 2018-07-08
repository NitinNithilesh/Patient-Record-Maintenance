<title>Change Payment</title>
<body>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>

</style>
  <nav>

  <ul>

    <li><a href="pass1.php">Home</a></li>
    <li><a href="#">Patients</a>
      <ul>
        <li><a href="viewpatients.php">Old Patients</a></li>
        <li><a href="patient.php">New Patients</a></li>
      </ul>
    </li>
    <li><a href="#">Information</a>
      <ul>
        <li><a href="passmedical.php">Medical Info</a></li>
        <li><a href="passoral.php">Oral Health Info</a></li>
      </ul>
    </li>
    <li><a href="#">Case Sheet</a>
      <ul>
        <li><a href="passpatient.php">General Info</a></li>
        <li><a href="case_sheet.php">Case Sheet</a></li>
        <li><a href="oralhealthh.php">Oral Health</a></li>
      </ul>
    </li>
    <li><a href="passpayment.php">Payment</a></li>
  </ul>
</nav>
<div class="login">

  <form action="upayment.php" method="post">
    <p><input type="text" name="i" placeholder="ID" required></p>
    <p><input type="text" name="t" placeholder="Treatment" required></p>
    <p><input type="text" name="atp" placeholder="Amount To Be Paid"></p>
    <p><input type="text" name="ap" placeholder="Amount Paid"></p>
    <p><input type="text" name="b" placeholder="Balance"></p>
    <p><input type="submit" name="submit" value="Update" ></p>
  </form></div>
