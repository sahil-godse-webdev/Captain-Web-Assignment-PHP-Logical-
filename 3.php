<?php
  echo "<h1>captainweb assignment Q. 3</h1>";

  /*
  Program for triangular patterns of alphabets
  A
  B A
  C B A
  D C B A
  E D C B A
  */

  for ($i=0; $i < 5 ; $i++) {
    for ($j=$i; $j >=0 ; $j--) {
      //chr function converts number to ascii character
      echo chr($j+65);
    }
    echo "<br>";
  }
?>
