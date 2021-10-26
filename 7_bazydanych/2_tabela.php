<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Używkonicy</title>
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
    </style>
  </head>
  <body>
    <h4>Użytkownicy</h4>
    <?php
      $connect = new mysqli("localhost", "root", "", "zsk_4c_gr2_1");

      $sql = "SELECT * FROM `users`";
      $result = $connect->query($sql);

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
            <td>$row[id]        <br></td>
            <td>$row[name]      <br></td>
            <td>$row[surname]   <br></td>
            <td>$row[birthday]  <br></td>
          </tr>
        MAJSKIUL;
      }
      echo "</table>";

    ?>
  </body>
</html>
