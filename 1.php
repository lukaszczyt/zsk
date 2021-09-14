<?php
  echo "ZSŁ<br>";
  echo "ZSK";

  $name="Anna";
  echo "Imię : $name";
  echo 'Imię : $name';
  $surname="Nowak";

  //typy danych
  $całkowita=10; //mogą być po polsku
  echo $całkowita;

  $bin=0b1011;//11
  $oct=010;   //8
  $hex=0x10;  //16

  echo $bin,$oct,$hex;

  $x=10.5;

// konkatanacja -> .
// interpolacja -> , (szybsza)
echo "text1"."text2","text3";

  $prawda=true; //echo wyświetli 1
  $fałsz=false; // tu nic nie wyświetli

  //heredoc
  echo <<< ETYKIETA
    <hr>
    Imię i nazwisko: $name $surname <br>
    Poznań <br>
  ETYKIETA;

  $text = <<< ETYKIETA
    <hr>
    Imię i nazwisko: $name $surname <br>
    Poznań <br>
  ETYKIETA;
  echo $text,$text;

  //nowdoc
  echo <<< 'ETYKIETA'
    <hr>
    Imię i nazwisko: $name $surname <br>
    Poznań <br>
  ETYKIETA; //nowdoc nie uzupoełnia zmiennych

  // znaki zastrzeżony -> \
  echo "Imię użytkownika: $name, nazwa zmiennej: \$name. Po prostu \\ to znak zastrzeżony. \"";
?>
