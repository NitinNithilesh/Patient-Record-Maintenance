<title>Old Patients</title>
<body>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
a{
  color: SlateBlue;
  text-decoration: none;
}

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

    <li><a href="indexx.php">About Us</a></li>
    <li>
    <a href="logout.php">Log Out</a>
  </li>
  </ul>
</nav>

<div class="table-title">
<center><h1>PATIENTS</h1></center>
</div>
<table class="table-fill">
<thead>
<tr>
<th class="text-center">ID</th>
<th class="text-center">Name</th>
<th class="text-center">Age</th>
<th class="text-center">Sex</th>
<th class="text-center">Occupation</th>
<th class="text-center">Address</th>
<th class="text-center">Mobile</th>
<th class="text-center">Email</th>
<th class="text-center">Action</th>
</tr>
</thead>
<?php
include_once 'db.php';
if(isset($_POST['i']))
{
$a=$_POST['i'];
$res=mysqli_query($conn,"SELECT * from patient WHERE id='$a'") or die('error');
	while($r=mysqli_fetch_array($res))
	{
		$a=$r['id'];
		$b=$r['name'];
		$c=$r['age'];
		$d=$r['sex'];
		$e=$r['occupation'];
    $f=$r['address'];
		$g=$r['mobile'];
		$h=$r['email'];
    $i='Delete';
		echo '<tr>
				<td>'.$a.'</td>
				<td><a href="pass.php?name='.$b.'">'.$b.'</a></td>
				<td>'.$c.'</td>
				<td>'.$d.'</td>
				<td>'.$e.'</td>
        <td>'.$f.'</td>
				<td>'.$g.'</td>
				<td>'.$h.'</td>
        <td><a href="passdelete.php?name='.$b.'">'.$i.'</a></td>
				</tr>';
  }
}
?>
<?php
if(isset($_POST['m']))
{
  $v=$_POST['m'];
  $rr=mysqli_query($conn,"SELECT * from patient WHERE mobile='$v'") or die('error');
  	while($r=mysqli_fetch_array($rr))
  	{
  		$a=$r['id'];
  		$b=$r['name'];
  		$c=$r['age'];
  		$d=$r['sex'];
  		$e=$r['occupation'];
      $f=$r['address'];
  		$g=$r['mobile'];
  		$h=$r['email'];
      $i='Delete';
  		echo '<tr>
  				<td>'.$a.'</td>
  				<td><a href="pass.php?name='.$b.'">'.$b.'</a></td>
  				<td>'.$c.'</td>
  				<td>'.$d.'</td>
  				<td>'.$e.'</td>
          <td>'.$f.'</td>
  				<td>'.$g.'</td>
  				<td>'.$h.'</td>
          <td><a href="passdelete.php?name='.$b.'">'.$i.'</a></td>
  				</tr>';
    }
}
?>
</table>
</body>
