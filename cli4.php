<!-- query select student's name in DB -->

<?php

$connection = mysqli_connect("localhost", "root", "root");

if ($connection == true) {
    echo "connesso\n";

    //var_dump($argv);
    $resultSet = mysqli_query(
        $connection,
        "select * from es1.studenti where cognome =\"" . $argv[1] . "\";",
        MYSQLI_STORE_RESULT
    );

    // query con array associativo
    $arrayAssoc = mysqli_fetch_all($resultSet, MYSQLI_ASSOC);
    var_dump($arrayAssoc);
    echo "Lo studente è nato il: " . $arrayAssoc[0]["dataNascita"] . "\n";

    // query con array numerico
    // $arrayAssoc = mysqli_fetch_all($resultSet, MYSQLI_NUM);
    // var_dump($arrayAssoc);
    // echo "Lo studente è nato il: " . $arrayAssoc[0][3] . "\n";

    if (count($arrayAssoc) > 0) {
        echo "Studente \"" . $argv[1] . "\" presente nel DB";
    } else {
        echo "Studente \"" . $argv[1] . "\" NON presente nel DB";
    }

    //mysqli_free_result($resultSet); -> solo se uso MYSQLI_USE_RESULT
    mysqli_close($connection);
} else {
    echo "non connesso";
}
