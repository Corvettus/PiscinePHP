<?php
  $error = false;
  if (!$_POST["login"] || !$_POST["oldpw"] || !$_POST["newpw"] || $_POST["submit"] !== "OK")
    $error = true;
  $users = unserialize(file_get_contents("../private/passwd"));
  $error = true;
  if ($users)
    foreach ($users as $key => $value)
      if ($value["login"] === $_POST["login"] && $value["passwd"] === hash("sha512", $_POST["oldpw"])) {
        $error = false;
        $users[$key]["passwd"] = hash("sha512", $_POST["newpw"]);
      }
  if ($error)
    echo "ERROR" . PHP_EOL;
  else {
    file_put_contents("../private/passwd", serialize($users));
    echo "OK" . PHP_EOL;
  }
?>
