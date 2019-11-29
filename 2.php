<?php
  echo "<h1>captainweb assignment Q. 2</h1>";

  /*
  2. Count the number of occurrences of a character in a string.
  */

  $str = "captainweb llp";
  /*here character is being used hard coded value but we can use UI to pass value to backend
  as input given by user*/

  $character = "L";
  $count=0;

  for ($i=0; $i < strlen($str) ; $i++) {
    if($str[$i]== strtolower($character)){
      $count++;
    }
  }
  echo "'$character' occurs $count times in $str";

?>
