<?php
  echo "<h1>captainweb assignment Q. 4</h1>";

  /*
   Write a PHP script, which changes the color of the first character of an alphabet.
  */

  $txt = 'captainweb';
  for ($i=0; $i<strlen($txt) ; $i++) {
    if($i==0){
      echo "<span style='color: red;'>$txt[$i]</span>";
    }
    else {
      echo $txt[$i];
    }
  }
?>
