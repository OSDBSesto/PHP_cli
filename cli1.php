<!-- print console arguments -->

<?php

var_dump($argv);

echo "n argomenti: " . $argc . "\n";
foreach($argv as $arg){
    echo "\t- " . $arg . "\n";
}