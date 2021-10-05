<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Średni wiek</title>
  </head>
  <body>
    <h3>Ilość osób w rodzinie</h3>
    <?php
    if (empty($_POST['person']) && empty($_POST['age1'])) {
      echo <<<FORM
      <form method="post">
        <input type="number" name="person" placeholder="Podaj ilość osób"> <br><br>
        <input type="submit" value="Zatwierdź">
      </form>
      FORM;
    }else if (empty($_POST['age1'])) {
      echo "<form method='post'>";
      for ($i=1; $i <= $_POST['person']; $i++) {
        echo "<input type='number' name='age$i' placeholder='Podaj wiek osoby nr $i'> <br><br>";
      }
      echo "<input type='submit' value='Zatwierdź'></form>";
    }else {
      $sum = 0;
      foreach ($_POST as $val) {
        $sum += $val;
      }
      echo "Średni wiek rodziny to ",number_format($sum/count($_POST), 2);
      echo "<hr><a href='./zad_sredni_wiek.php'>Powrót</a>";
    }
     ?>
  </body>
</html>
