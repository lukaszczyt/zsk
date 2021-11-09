<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Używkonicy do usunięcia</title>
    <style media="screen">
      body {
        background-color: #303030;
        color: #aaa
      }
      table, tr, td, th {
        padding: 4px;
        border: 1px solid aquamarine;
        border-collapse: collapse;
      }
      a {
        color: cyan;
      }
    </style>
  </head>
  <body>
    <h4>Użytkownicy</h4>
    <?php
      require_once('scripts/connect.php');
      $sql = "SELECT * FROM `users`";
      $result = $connect->query($sql);
      $connect->close();

      echo <<<STOL
        <table>
          <tr>
            <th>Id              </th>
            <th>Imię            </th>
            <th>Nazwisko        </th>
            <th>Data urodzenia  </th>
          </tr>
      STOL;

      while ($row = $result->fetch_assoc()) {
        echo <<<MAJSKIUL
          <tr>
            <td>$row[idUser]    </td>
            <td>$row[name]      </td>
            <td>$row[surname]   </td>
            <td>$row[birthday]  </td>
            <td><a href="scripts/delete.php?id=$row[idUser]">Usuń</a></td>
          </tr>
        MAJSKIUL;
      }
      echo "</table>";
      if($_GET['del']) {
        echo "<hr>";
        echo "Usunięto użytkownika o id $_GET[del]";
      }
    ?>
  </body>
</html>
