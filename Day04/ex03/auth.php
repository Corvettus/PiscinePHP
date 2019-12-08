<?php
  function auth($login, $passwd) {
    if (!$login || !$passwd)
      return false;
    $users = unserialize(file_get_contents("../private/passwd"));
    if ($users)
      foreach ($users as $value)
        if ($value["login"] === $login && $value["passwd"] === hash("sha512", $passwd))
          return true;
    return false;
  }
?>