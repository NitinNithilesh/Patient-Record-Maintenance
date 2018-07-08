<title>Add Patients</title>
<?php
include_once 'db.php';

?>
<html>
<head>
  <title>Add Patients</title>
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

    <li><a href="home.php">Home</a></li>

        <li><a href="viewpatients.php">Old Patients</a></li>
    <li><a href="index.php">About Us</a></li>
    <li>
    <a href="logout.php">Log Out</a>
  </li>
  </ul>
</nav>
<div class="login">
  <div class="login-triangle"></div>

  <h2 class="login-header">Add Patients</h2><br>


  <form action="add_patients.php" method="post">
    <p><input type="text" name="n" placeholder="Name *" required></p>
    <p><input type="text" name="a" placeholder="Age *" required></p>
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
    <p><input type="submit" name="add" value="Add" ></p>
	</form>
