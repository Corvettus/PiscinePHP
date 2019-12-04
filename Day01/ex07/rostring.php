#!/usr/bin/php
<?php
  if ($argc < 2)
    exit ;
  unset($argv[0]);
  $array = array_filter(explode(' ', $argv[1]));
  $k = 0;
  foreach ($array as $value)
    $res[$k++] = trim($value) . " ";
  array_push($res, trim(array_shift($res)));
  foreach ($res as $value)
    echo $value;
  echo PHP_EOL;
?>