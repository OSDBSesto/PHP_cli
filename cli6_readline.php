<!-- insert a user (reading from standard input) record in DB  (username, password, nome, cognome)-->

<?php

$connection = mysqli_connect($hostname, $user, $password);

if ($connection == true) {
    echo "connesso";
    $nome = readline("nome: ");
    $cognome = readline("cognome: ");
    $user = readline("user: ");
    $password = readline("password: ");
    $result = mysqli_query($connection, "insert into esercizi.utente (nome, cognome, user, password)
    VALUES ('$nome', '$cognome', '$user', '$password');", MYSQLI_STORE_RESULT);
    var_dump($result);
    mysqli_close($connection);
} else {
    echo "non connesso";
}
