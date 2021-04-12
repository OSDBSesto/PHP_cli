<!-- script login with username and password -->

<?php

// php -f "C:\.......\cli6insert.php\" mattia pogliani mpog pwd11

$connection = mysqli_connect("localhost", "root", "root");
$user = $argv[1];

if ($connection == true) {
    echo "connesso\n";
    
    //var_dump($argv);
    $resultSet = mysqli_query(
        $connection,
        "select count(username) as utenti from mydb.login where username =\"" . $user . "\";",
        MYSQLI_USE_RESULT
    );

    $arrayAssoc = mysqli_fetch_all($resultSet, MYSQLI_ASSOC);
    var_dump($arrayAssoc);
    echo $arrayAssoc[0]["utenti"] . " user(s) in DB.\n";

    if ($arrayAssoc[0]["utenti"] = 1) {
        echo "User \"" . $user . "\" found.";
    } else {
        echo "User \"" . $user . "\" NOT found.";
    }
    mysqli_free_result($resultSet);
    mysqli_close($connection);
} else {
    echo "non connesso";
}