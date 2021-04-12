<!-- insert a user record in DB  (username, password, nome, cognome)-->

<?php

// php -f "C:\.....\cli6insert.php\" mattia pogliani mpog pwd11

$connection = mysqli_connect("localhost", "root", "root");
$user = $argv[1];

if ($connection == true) {
    if (isset($argv[1]) && isset($argv[2]) && isset($argv[3]) && isset($argv[4])) {
        $resultSet = mysqli_query(
            $connection,
            "insert into esercizi.utente (username, password, nome, cognome) VALUES (\"$argv[1]\", \"$argv[2]\", \"$argv[3]\", \"$argv[4]\");",
            MYSQLI_USE_RESULT
        );

        if ($resultSet) {
            echo "User " . $username . "inserito con successo\n";
        } else {
            echo "Errore in fase di inserimento.\n";
        }
    }else{
        echo "dati inseriti non corretti.\n";
    }
}