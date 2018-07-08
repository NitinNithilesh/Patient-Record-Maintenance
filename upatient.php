<title>Update Patients</title>
<?php
include_once 'db.php';

?>
<html>
<head>
  <title>Update Patients</title>
</head>
<body>
<link rel="stylesheet" type="text/css" href="style.css">

<script>
function myFunction() {
    var x = document.getElementById("date").value;
    document.getElementById("demo").innerHTML = x;
}

</script>
<style>
select#soflow{
  box-sizing: border-box;
  display: block;
  width: 100%;
  border-width: 1px;
  border-style: solid;
  padding: 16px;
  outline: 0;
  font-family: inherit;
  font-size: 0.95em;
  color:rgba(10, 10, 10, 0.5) ;
  border-radius: 5px;
  background: rgba(, 500, 0, 0.6);
  opacity: 0.3;
    color:black ;
  border-color: transparent;
}

textarea {
  margin-top: 5px;
  margin-bottom: 5px;
  width: 100%;
  height: 10%;
  border: transparent;
  border-radius: 5px;
  padding: 15px;
  font-weight: 100;
  background: rgba(, 500, 0, 0.6);
  opacity: 0.3;
  border-color: transparent;
  font-family: inherit;
  font-size: 0.95em;
  color:black ;
}
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

<div class="login">
  <div class="login-triangle"></div>

  <h2 class="login-header">Edit Patients</h2><br>


  <form action="updatepatient.php" method="post">
    <p><input type="text" name="i" placeholder="ID"></p>
    <p><input type="text" name="n" placeholder="Name"></p>
    <p><input type="text" name="a" placeholder="Age" ></p>
    <p><select name="s" id="soflow">
          <option value="" selected>Sex</option>
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Other">Other</option>
        </select></p>
    <p><select name="m" id="soflow">
          <option value="" selected>Marital Status</option>
          <option value="Married">Married</option>
          <option value="Not Married">Not Married</option>
        </select></p>
    <p><select name="b" id="soflow">
          <option value="" selected>Blood Group</option>
          <option value="O-">O-</option>
          <option value="O+">O+</option>
          <option value="A-">A-</option>
          <option value="A+">A+</option>
          <option value="B-">B-</option>
          <option value="B+">B+</option>
          <option value="AB-">AB-</option>
          <option value="AB+">AB+</option>
        </select></p>
		<p><input type="text" name="do" placeholder="Date Of Birth" onfocus="(this.type='date')" onblur="(this.type='text')" id="date" id="demo"></p>
		<p><input type="text" name="o" placeholder="Occupation"></p>
    <p><textarea name="ad" placeholder="Address"></textarea></p>
		<p><input type="text" name="mo" placeholder="Mobile"></p>
		<p><input type="email" name="e" placeholder="Email"></p>
		<p><input type="text" name="rb" placeholder="Referred By"></p>
    <p><input type="submit" name="update" value="Update" ></p>
	</form>
