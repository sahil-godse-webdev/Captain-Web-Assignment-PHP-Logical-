<?php
  echo "<h1>captainweb assignment Q. 2</h1>";

  /*
    Generate a random name and store it in a text file.
  */
  $file = fopen("newfile.txt", "w") or die("Unable to open file!");
  $txt= rand();
  fwrite($file, $txt);
  fclose($file);

?>
