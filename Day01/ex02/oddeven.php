#!/usr/bin/php
<?php
  while (true) {
    echo "Enter a number: ";
    $value = rtrim(fgets(STDIN), "\n");
    if (is_numeric($value))
      $mode = $value % 2;
    elseif (feof(STDIN))
      $mode = -2;
    else
      $mode = -1;
    switch ($mode) {
      case 1: {
        echo "The number $value is odd" . PHP_EOL;
        break;
      }
      case 0: {
        echo "The number $value is even" . PHP_EOL;
        break;
      }
      case -1:{
        echo "'$value' is not a number" . PHP_EOL;
        break;
      }
      default: {
        exit;
      }
    }
  }
?>