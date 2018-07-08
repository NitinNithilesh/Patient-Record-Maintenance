
<html>
<head>
  <title>Oral Health Information</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="style.css">
</head>
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
      <li><a href="pass1.php">General Info</a></li>
      <li><a href="passmedical.php">Medical Info</a></li>
      <li><a href="passoral.php">Oral Health</a></li>
    </ul>
  </li>
  <li><a href="#">Case Sheet</a>
    <ul>
      <li><a href="passpatient.php">General Info</a></li>
      <li><a href="case_sheet.php">Case Sheet</a></li>

    </ul>
  </li>


  <li><a href="passpayment.php">Payment</a></li>
</ul>
</nav>
<div class="login">
<h2 class="login-header">Oral Health Examination</h2><br>
  <form action="oral.php" method="post">
  <img src="t1.jpg" style="width:100%; opacity:0.6; border-radius:6px;"><br><br>
  <input type="text" name="tooth" placeholder="Number of the tooth"><br>
  <input type="text" name="desc" placeholder="Complaint"><br>
<input type="submit" name="oral" value="Submit"><br>
<h2 class="login-header">Estimation</h2><br>
  <input type="text" name="t" placeholder="Treatment"><br>
  <input type="text" name="atp" placeholder="Estimate"><br>

<input type="submit" name="submit" value="Submit">
</form>
