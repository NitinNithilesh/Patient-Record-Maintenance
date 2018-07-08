
<html>
<head>
  <title>Oral Health Information</title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
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

  <div class="table-title">
  <center><h1>Oral Health Examination</h1></center>
  </div>
  <table class="table-fill">
  <thead>
  <tr>
    <th class="text-center">Date</th>
  <th class="text-center">Teeth</th>
  <th class="text-center">Complaint</th>


  </tr>
  </thead>
  <?php
  include_once 'db.php';
  $x=$_SESSION['name'];
  $res=mysqli_query($conn,"SELECT * from oral_health_examination where id='$x'") or die('error');
  	while($r=mysqli_fetch_array($res))
  	{
  		$a=$r['tooth'];
      $c=$r['description'];
  		$d=$r['time'];

  		echo '<tr>
          <td>'.$d.'</td>
          <td>'.$a.'</td>
          <td>'.$c.'</td>

  				</tr>';
    }
  ?>
  </table>
  </body>




  <div class="table-title">
  <center><h1>Estimation</h1></center>
  </div>
  <table class="table-fill">
  <thead>
  <tr>
  <th class="text-center">Date</th>
  <th class="text-center">Treatment</th>
  <th class="text-center">Estimate</th>

  </tr>
  </thead>
  <?php
  include_once 'db.php';
  $x=$_SESSION['name'];
  $res=mysqli_query($conn,"SELECT * from amount where id='$x'") or die('error');
  	while($r=mysqli_fetch_array($res))
  	{
      $a=$r['treatment'];
  		$b=$r['amount_to_be_paid'];
  		$e=$r['time'];

  		echo '<tr>
          <td>'.$e.'</td>
          <td>'.$a.'</td>
  				<td>'.$b.'</td>

  				</tr>';
    }
  ?>
  </table>
  </body>
