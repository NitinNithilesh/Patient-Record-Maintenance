<?php
include_once 'db.php';
?>
<html>
<head>
  <title>Home</title>
</head>
<body>
  <link rel="stylesheet" type="text/css" href="style.css">
<nav>
  <ul>
    <li>
      <a href="home.php">Home</a>
    </li>


    <li>
    <a href="backup.php">Backup</a>
  </li>
  <li>
  <a href="logout.php">Log Out</a>
</li>
  </ul>
</nav>
<div class="login">
  <div class="login-triangle"></div>


  <p><form action="patient.php" method="post">
    <input type="submit" value="New Patient"><tr>
  </form></p>
  <p><form action="viewpatients.php" method="post">
    <input type="submit" value="Old Patients"><tr><br>
  </form>

</div>

</body>
</html>
<?php

 ?>
