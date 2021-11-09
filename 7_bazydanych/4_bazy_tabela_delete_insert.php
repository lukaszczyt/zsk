<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Używkonicy do wysrania</title>
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
      input, select {
        width: 200px;
      }
    </style>
  </head>
  <body>
    <h4>Użytkownicy</h4>
    <?php
      require_once('scripts/connect.php');
      $sql = "SELECT * FROM `users`";
      $result = $connect->query($sql);

      echo <<<STOL
        <table>
          <tr>
            <th>id              </th>
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
            <td><a href="./scripts/delete.php?id=$row[idUser]">Usuń</a></td>
          </tr>
        MAJSKIUL;
      }
      echo "</table>";
      if(isset($_GET['del'])) {
        echo "<hr>";
        echo "Usunięto użytkownika o id $_GET[del]";
        echo "<hr>";
      }
      if(isset($_GET['error'])) {
        echo "<hr>";
        echo "$_GET[error]";
        echo "<hr>";
      }
      if (isset($_GET['addUser'])) {
        echo <<<FORMADDUSER
          <br>
          <form action="./scripts/insert.php" method="post">
            <input type="text" name="name" placeholder="Podaj Imie"><br>
            <input type="text" name="surname" placeholder="Podaj Nazwisko"><br>
            <input type="date" name="birthday">Data Urodzenia<br>
            <select name="idCity">
        FORMADDUSER;
        $sql="SELECT * FROM cities ORDER BY name";
        $result=$connect->query($sql);
        while($city=$result->fetch_assoc()) {
          echo "<option value='$city[idCity]'>$city[name]</option>";
        }
        echo <<<FORMADDUSER
            </select><br>
            <input type="submit" value="Dodaj Użytkownika">
          </form>
        FORMADDUSER;
      }else {
        echo '<br><a href="./4_bazy_tabela_delete_insert.php?addUser=">Dodaj użytkownika</a>';
      }
      $connect->close();
    ?>
  </body>
</html>
