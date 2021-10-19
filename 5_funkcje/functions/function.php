<?php
  function show() {
    echo "Show must go on";
  }

  function show_name($name) {
    echo $name;
  }

  function stringValidate($str, $len) {
    return substr(ucfirst(strtolower(trim($str))), 0, $len);
  }
?>
