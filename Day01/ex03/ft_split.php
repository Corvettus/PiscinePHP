<?php
  function ft_split($str) {
    if (!is_string($str))
      return array();
    $ret = array_filter(explode(' ', trim($str)));
    sort($ret);
    return $ret;
  }
?>