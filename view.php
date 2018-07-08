<title>General Information</title>
<body>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>

</style>
  <nav>

  <ul>

    <li><a href="home.php">Home</a></li>
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
<div class="table-title">
<center><h1>General Inforation</h1></center>
</div>
<table class="table-fill">
<thead>
<tr>
<th class="text-center">ID</th>
<th class="text-center">Name</th>
<th class="text-center">Date</th>
<th class="text-center">Age</th>
<th class="text-center">Sex</th>
<th class="text-center">Marital Status</th>
<th class="text-center">Blood Group</th>
<th class="text-center">Date of Birth</th>
<th class="text-center">Balance</th>

</tr>
</thead>
<div class="link">
<?php
include_once 'db.php';
$x=$_SESSION['name'];
$z=mysqli_query($conn,"SELECT SUM(balance) FROM amount");
$res=mysqli_query($conn,"SELECT * from patient where id='$x'") or die('error');

	while($r=mysqli_fetch_array($res))
	{
		$a=$r['id'];
		$b=$r['name'];
		$c=$r['date'];
		$d=$r['age'];
    $e=$r['sex'];
		$f=$r['marital_status'];
		$g=$r['blood_group'];
    $h=$r['dob'];
    $n=$r['balance'];

		echo '<tr>
				<td>'.$a.'</td>
				<td>'.$b.'</td>
				<td>'.$c.'</td>
				<td>'.$d.'</td>
        <td>'.$e.'</td>
				<td>'.$f.'</td>
				<td>'.$g.'</td>
        <td>'.$h.'</td>
        <td>'.$n.'</td>
				</tr>';
  }
?>
</form>
</table>
<div class="table-title">
</div>
<table class="table-fill">
<thead>
<tr>

<th class="text-center">Occupation</th>
<th class="text-center">Address</th>
<th class="text-center">Mobile</th>
<th class="text-center">Email</th>
<th class="text-center">Reffered By</th>

</tr>
</thead>
<?php
include_once 'db.php';
$x=$_SESSION['name'];
$res=mysqli_query($conn,"SELECT * from patient where id='$x'") or die('error');

	while($r=mysqli_fetch_array($res))
	{

    $i=$r['occupation'];
    $j=$r['address'];
    $k=$r['mobile'];
    $l=$r['email'];
    $m=$r['referred_by'];

		echo '<tr>


        <td>'.$i.'</td>
        <td>'.$j.'</td>
        <td>'.$k.'</td>
        <td>'.$l.'</td>
        <td>'.$m.'</td>

				</tr>';
  }
?>
</div>
</form>
</table>
