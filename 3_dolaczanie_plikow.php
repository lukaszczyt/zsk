<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>Początek pliku</h3>
    <?php
    //include
    include './3_1.php';

    //require
    require './3_1.php'
    //przy błędzie załączanym pliku reszta pliku się nie wykona - nie będzie "Koniec pliku"

    //dla obu once nie powtarza ponownego załączenia pliku
    // require_once
    ?>
    <h3>Koniec pliku</h3>
  </body>
</html>
