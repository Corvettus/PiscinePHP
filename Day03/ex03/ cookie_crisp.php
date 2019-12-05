<?php
  switch ($_GET["action"]){
    case "set":
      setcookie($_GET["name"], $_GET["value"]);
      break;
    case "get":
      if ($_COOKIE["name"])
        echo $_COOKIE["name"]["value"] . PHP_EOL;
      break;
    case "del":

      break;
    default:
      break;
  }
?>