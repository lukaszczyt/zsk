<?php
  echo PHP_VERSION,"<br>"; //8.0.10
  echo 2**10; //1024

  $x=1;
  $y=7;
  echo $x<=>$y; //x<y -> -1, x=y -> 0, x>y -> 1

  //równe
  $x=1;
  $y=1.0;

  //gettype
  echo gettype($x); //integer
  echo gettype($y); //double

  if ($x==$y) {
    echo "Równe";
  } else {
    echo "Różne";
  };


  //identyczne
  if ($x===$y) {
    echo "Identyczne";
  } else {
    echo "Nieidentyczne";
  };

  //postinkrementacja $x++
  //preinkrementacja ++$x
  //postdekrementacja $x--
  //predekrementacja --$x

  $x=10;
  $x=$x++;
  echo $x; //10
  $x=++$x;
  echo $x; //11
  $y=$x++;
  echo $x; //12
  echo $y; //11

  echo "<br>";

  $x=1;
  $x=$x++;
  echo $x;
?>
