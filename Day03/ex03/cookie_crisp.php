<?php
  switch ($_GET["action"]){
    case "set":
      if ($_GET["name"] & $_GET["value"]) {
        setcookie($_GET["name"], $_GET["value"]);
        echo 1;
      }print_r($_COOKIE);
      break;
    case "get":
      
      if ($_GET["name"] && $_COOKIE[$_GET["name"]] && !$_GET["value"])
        echo $_COOKIE[$_GET["name"]] . PHP_EOL;
      break;
    case "del":
      if ($_GET["name"] && !$_GET["value"])
        setcookie($_GET["name"], NULL);
      break;
    default:
      break;
  }
?>