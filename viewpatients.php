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


        <li><a href="patient.php">New Patients</a></li>

    <li><a href="indexx.php">About Us</a></li>
    <li>
    <a href="logout.php">Log Out</a>
  </li>
  </ul>
</nav>
<div class="login">

  <form action="search.php" method="post">
    <p><input type="text" name="i" placeholder="Search By Id"></p>
    <p><input type="text" name="m" placeholder="Search By Mobile"></p>
    <p><input type="submit" name="search" value="Search" ></p>
  </form></div>
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
$res=mysqli_query($conn,"SELECT * from patient where id>98 ORDER BY id ASC") or die('error');
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
				<td><a href="pass.php?name='.$a.'">'.$b.'</a></td>
        <td>'.$c.'</td>
				<td>'.$d.'</td>
				<td>'.$e.'</td>
        <td>'.$f.'</td>
				<td>'.$g.'</td>
				<td>'.$h.'</td>
        <td><a href="passdelete.php?name='.$a.'">'.$i.'</a></td>
				</tr>';
  }
?>
</table>
</body>
