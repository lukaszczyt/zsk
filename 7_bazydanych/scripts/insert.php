<?php
  foreach ($_POST as $key => $value) {
    if (empty($value)) {
      header("location: ../4_bazy_tabela_delete_insert.php?error=Uzupełnij cały formularz");
      exit();
    }
  }
  require_once('connect.php');
  $sql="INSERT INTO `users` (`idUser`, `idCity`, `name`, `surname`, `birthday`)
  VALUES (NULL, $_POST[idCity], '$_POST[name]', '$_POST[surname]', '$_POST[birthday]')";
  $connect->query($sql);
  if($connect->affected_rows+1) {
    header("location: ../4_bazy_tabela_delete_insert.php?error=Dodano użytkownika");
  }else {
    header("location: ../4_bazy_tabela_delete_insert.php?error=Nie dodano rekordu!&addUser=1");
  }


  $connect->close();
?>
