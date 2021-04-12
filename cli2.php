<!-- open text file  -->

<?php

$myFile = "ciao.txt";

if (!file_exists($myFile)) {

  echo "File non trovato\n\n";
} else if (!$file = fopen($myFile, 'r')) {

  echo "Non riesco ad aprire il file\n\n";
} else {

  echo "Ho aperto il file\n\n";
  while (!feof($file)) {
    echo "\t" . fgets($file) . "";
  }
}