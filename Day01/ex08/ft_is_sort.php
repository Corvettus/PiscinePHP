<?php
  function ft_is_sort($tab) {
    $tmp = $tab;
    sort($tmp);
    return (array_diff_assoc($tab, $tmp) == NULL ? true : false);
  }
?>