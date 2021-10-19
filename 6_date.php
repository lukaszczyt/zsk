<?php
  setlocale(LC_TIME, 'pl_PL', 'pl', 'Polish_Poland.28592'); //tylko do strftime

  echo date('d-m-y')."<br>";
  echo date('d-m-Y')."<br>";
  echo date('d M Y')."<br>";
  echo date('D d F Y')."<br>";
  echo "<hr>";
  echo strftime('%T %A %d %B %Y')."<br>";
  echo strftime('%c')."<br>";
  echo strftime('%s'),"<br>"; //nie wiem, nie działa
  echo time()."<br>";
  echo strftime('%x')."<br>";
  echo "<hr>";
  echo date('G:i:s')."<br>";
  echo date('H:i:s')."<br>";
  echo date('H:i:sa')."<br>";
  echo "<hr>";
  $date = getdate();
  echo "<pre>";
  print_r($date);
  echo "</pre>";
  echo "<hr>";
  echo date('L');
  echo "<hr>";
  echo "July 1, 2000 is on a ".date("l", mktime(0, 0, 0, 7, 1, 2000))."<br>";
  $tday = mktime(0, 0, 0, date('m'), date('d'), date('Y'));
  echo $tday."<br>";
  $year = $tday/(60*60*24*365);
  echo (int)$year."<br>";
  $lastYeah = mktime(0, 0, 0, date('m'), date('d'), date('Y')-1); //Yeah...
  echo $lastYeah."<br>";
  $year = $lastYeah/(60*60*24*365);
  echo (int)$year."<br>";
?>

<script>
  setTimeout(() => {
    window.location.reload();
  }, 1000);
</script>
