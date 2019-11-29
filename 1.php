<?php
  echo "<h1>captainweb assignment Q. 1</h1>";

  /*
  1. Check if two arrays contain the same elements.
  */

  $a= [4,5,6,2,8,2];
  $b= [5,4,3,2,1,9,8];

  //finding unique numbers in same array
  $a= array_unique($a);
  $b= array_unique($b);

  echo "finding common elements within array a and b<br>";


  foreach ($a as $value) {
    foreach ($b as $to_compare) {
      if ($value==$to_compare) {
        echo "$value<br>";
      }
    }
  }
?>
