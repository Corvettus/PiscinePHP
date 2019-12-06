<?php
  switch ($_GET["action"]){
    case "set":
      if ($_GET["name"])
        setcookie($_GET["name"], $_GET["value"], time());
      break;
    case "get":
      if ($_GET["name"] && $_COOKIE["name"])
        echo $_COOKIE["name"] . PHP_EOL;
      break;
    case "del":
      setcookie($_GET["name"], NULL, time());
      break;
    default:
      break;
  }
?>