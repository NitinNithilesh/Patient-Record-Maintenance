<title>Medical Information</title>
<body>
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

<?php
$x = $_SESSION['name'];
?>
<div class="table-title">
<center><h1>Chief Complaint</h1></center>
</div>
<table class="table-fill">
<thead>
<tr>
<th class="text-center">Date</th>
<th class="text-center">Complaint</th>
</tr>
</thead>
<?php
include_once 'db.php';
$x=$_SESSION['name'];
$res=mysqli_query($conn,"SELECT * from chief_complaint WHERE id='$x'") or die('error');
	while($r=mysqli_fetch_array($res))
	{
		$b=$r['complaint'];
    $a=$r['time'];

		echo '<tr>
        <td>'.$a.'</td>
        <td>'.$b.'</td>
        </tr>';
  }
?>
</table>
</body>

<div class="table-title">
<center><h1>Medical History</h1></center>
</div>
<table class="table-fill">
<thead>
<tr>
<th class="text-center">Date</th>
<th class="text-center">Disease</th>
<th class="text-center">Blood Pressure</th>
<th class="text-center">Diabetes</th>
<th class="text-center">Pregnant</th>
<th class="text-center">Nursing</th>
<th class="text-center">Habits</th>
</tr>
</thead>
<?php
include_once 'db.php';
$res=mysqli_query($conn,"SELECT * from medical_history where id='$x'") or die('error');
	while($r=mysqli_fetch_array($res))
	{
		$a=$r['disease'];
    $b=$r['pressure'];
    $c=$r['diabetes'];
		$d=$r['pregnant'];
		$e=$r['nursing'];
		$f=$r['habits'];
    $g=$r['time'];

		echo '<tr>
        <td>'.$g.'</td>
				<td>'.$a.'</td>
				<td>'.$b.'</td>
				<td>'.$c.'</td>
				<td>'.$d.'</td>
        <td>'.$e.'</td>
        <td>'.$f.'</td>
				</tr>';
  }
?>
</table>
</body>

<div class="table-title">
<center><h1>Medication</h1></center>
</div>
<table class="table-fill">
<thead>
<tr>
<th class="text-center">Date</th>
<th class="text-center">Drug History</th>
<th class="text-center">History of Previous Surgery</th>
<th class="text-center">Drug Allergy</th>

</tr>
</thead>
<?php
include_once 'db.php';
$res=mysqli_query($conn,"SELECT * from medication where id='$x'") or die('error');
	while($r=mysqli_fetch_array($res))
	{
		$a=$r['drug_history'];
		$b=$r['previous_surgery'];
		$c=$r['drug_allergy'];
		$d=$r['time'];

		echo '<tr>
        <td>'.$d.'</td>
				<td>'.$a.'</td>
				<td>'.$b.'</td>
				<td>'.$c.'</td>
				</tr>';
  }
?>
</table>
</body>

<div class="table-title">
<center><h1>Past Dental History</h1></center>
</div>
<table class="table-fill">
<thead>
<tr>
<th class="text-center">Date</th>
<th class="text-center">History</th>


</tr>
</thead>
<?php
include_once 'db.php';
$res=mysqli_query($conn,"SELECT * from past_dental_history where id='$x'") or die('error');
	while($r=mysqli_fetch_array($res))
	{
		$a=$r['history'];
		$b=$r['time'];

		echo '<tr>
        <td>'.$b.'</td>
				<td>'.$a.'</td>
				</tr>';
  }
?>
</table>
</body>

<div class="table-title">
<center><h1>Investigation</h1></center>
</div>
<table class="table-fill">
<thead>
<tr>
<th class="text-center">Date</th>
<th class="text-center">X Ray and Others</th>


</tr>
</thead>
<?php
include_once 'db.php';
$res=mysqli_query($conn,"SELECT * from investigation where id='$x'") or die('error');
	while($r=mysqli_fetch_array($res))
	{
		$a=$r['xray_and_others'];
		$b=$r['time'];

		echo '<tr>
        <td>'.$b.'</td>
				<td>'.$a.'</td>
				</tr>';
  }
?>
</table>
</body>
