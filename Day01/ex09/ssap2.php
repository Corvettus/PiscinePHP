#!/usr/bin/php
<?php
  function abc_pos($c) {
    if (('A' <= $c && $c <= 'Z') || ('a' <= $c && $c <= 'z'))
      return 0;
    elseif ('0' <= $c && $c <= '9')
      return 1;
    return 2;
  }
  function ft_sort($a, $b) {
    $pos_a = abc_pos($a);
    $pos_b = abc_pos($b);
    $tmpa = $a;
    $tmpb = $b;
    if ($a == $b)
      return 0;
    elseif ($pos_a < $pos_b)
      return -1;
    elseif ($pos_a > $pos_b)
      return 1;
    if ('A' <= $a && $a <= 'Z')
      $tmpa += 'a' - 'A';
    if ('A' <= $b && $b <= 'Z')
      $tmpb += 'a' - 'A';
    if ($tmpa < $tmpb)
      return -1;
    elseif ($tmpa > $tmpb)
      return 1;
    return 0;
  }
  unset($argv[0]);
  $res = array();
  $k = 0;
  for ($i = 0; $i < $argc; $i++) {
    $array = array_filter(explode(' ', $argv[$i]));
    foreach ($array as $value)
      $res[$k++] = trim($value) . PHP_EOL;
  }
  usort($res, "ft_sort");
  foreach ($res as $value)
    echo $value;
?>