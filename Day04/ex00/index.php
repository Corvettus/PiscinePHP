<?php
  session_start();
  if ($_GET['login'] && $_GET['passwd'] && $_GET['submit'] === "OK") {
    $_SESSION['login'] = $_GET['login'];
    $_SESSION['passwd'] = $_GET['passwd'];
    $_SESSION['submit'] = $_GET['submit'];
  }
?>
<html><body>
<form action="index.php" method="GET">
  Username: <input type="text" name="login" value="<?=$_SESSION['login']?>" />
  <br />
  Password: <input type="password" name="passwd" value="<?=$_SESSION['passwd'];?>" />
  <input type="submit" name="submit" value="OK"/>
</form>
</body></html>
