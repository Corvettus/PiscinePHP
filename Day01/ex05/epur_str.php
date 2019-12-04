#!/usr/bin/php
<?php
  if ($argc == 2) {
    $array = array_filter(explode(' ', $argv[1]));
    $res = "";
    foreach ($array as $value)
        $res .= $value . " ";
    echo trim($res) . PHP_EOL;
}
?>