<?php
  if($_GET['id']) {
    require_once('connect.php');
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE idUser = $_GET[id]";
    $connect->query($sql);
    if($connect->affected_rows) {
      echo "Usunięto rekord";
    }else {
      echo "Nie usunięto rekordu!";
    }
  }
  $connect->close();
  header("location: ../4_bazy_tabela_delete_insert.php?del=$id");
?>
