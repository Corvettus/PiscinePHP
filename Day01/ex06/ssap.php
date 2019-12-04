#!/usr/bin/php
<?php
  unset($argv[0]);
  $res = array();
  $k = 0;
  for ($i = 0; $i < $argc; $i++) {
    $array = array_filter(explode(' ', $argv[$i]));
    foreach ($array as $value)
      $res[$k++] = trim($value) . PHP_EOL;
  }
  sort($res);
  foreach ($res as $value)
    echo $value;
?>