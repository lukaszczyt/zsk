<?php
  require_once "../functions/function.php";
  if (!empty($_POST['imie'])) {
    show_name($_POST['imie']);
    echo "<br>Walidacja danych: ";
    $str = stringValidate($_POST['imie'], strlen($_POST['imie']));
    echo $str."<br>Długość: ".strlen($str);
  }
?>
