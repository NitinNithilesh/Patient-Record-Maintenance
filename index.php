
<?php
include_once 'db.php';
?>
<html>
<head>
  <title>Sign In</title>
</head>
<body>
  <link rel="stylesheet" type="text/css" href="style.css">
<nav>
  <ul>

  </ul>
</nav>
<div class="login">
  <div class="login-triangle"></div>

  <h2 class="login-header">Login</h2>

  <form action="signin_check.php" method="post" class="login-container">
    <p><input type="text" name="u" placeholder="Username"></p>
    <p><input type="password" name="p" placeholder="Password"></p>
    <p><input type="submit" name="signin" value="Sign In"></p>
  </form>
</div>

</body>
</html>
