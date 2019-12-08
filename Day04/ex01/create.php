<?php
  $error = false;
  if (!$_POST["login"] || !$_POST["passwd"] || $_POST["submit"] !== "OK")
    $error = true;
  if (!file_exists("../private")) {
    mkdir("../private");
  }
  if (!file_exists("../private/passwd")) {
    file_put_contents("../private/passwd", NULL);
  }
  $users = unserialize(file_get_contents("../private/passwd"));
  if ($users) {
    foreach ($users as $value) {
      if ($value["login"] === $_POST["login"])
        $error = true;
    }
  }
  if ($error)
    echo "ERROR" . PHP_EOL;
  else {
    $set["login"] = $_POST["login"];
    $set["passwd"] = hash("sha512", $_POST["passwd"]);
    $users[] = $set;
    file_put_contents("../private/passwd", serialize($users));
    echo "OK" . PHP_EOL;
  }
?>