<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Używkonicy</title>
  </head>
  <body>
    <h4>użytkownicy</h4>
    <?php
      $connect = new mysqli("localhost", "root", "", "zsk_4c_gr2_1");

      $sql = "SELECT * FROM `users`";

      $result = $connect->query($sql);

      echo "<hr><pre>";
      print_r($result);
      echo "</pre><hr>";

      while ($row = $result->fetch_assoc()) {
        echo <<<MAJSKIUL
          Id: $row[id] <br>
          Imię: $row[name] <br>
          Nazwisko: $row[surname] <br>
          Data urodzenia: $row[birthday] <br>
          <hr>
        MAJSKIUL;
      }
    ?>
  </body>
</html>
