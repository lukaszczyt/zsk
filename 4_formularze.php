<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formularz</title>
  </head>
  <body>
    <h3>Figury geometryczne</h3>
    <form action="./scripts/4_script.php" method="post">
      <input type="text" name="name" placeholder="Podaj imię"><br><br>
      <input type="radio" name="geometricFigure" value="kwadrat">Kwadrat<br><br>
      <input type="radio" name="geometricFigure" value="prostokat">Prostokąt<br><br>
      <input type="submit" value="Zatwierdź figurę">
    </form>
  </body>
</html>
