<!-- connect to localhost DB -->

<?php
// php -f "C:\.....\cli3connectDB.php"
//  mysqli_connect -> host, user, pwd

$hostname = "localhost";
$user = "root";
$password = "root";

$connection = mysqli_connect($hostname, $user, $password);

if ($connection == true) {
    echo "connesso\n";
    // MYSQLI_USE_RESULT -> default
    // MYSQLI_STORE_RESULT
    $resultSet = mysqli_query($connection, "select * from es1.studenti where matricola = 1;", MYSQLI_STORE_RESULT);
    $arrayAssoc = mysqli_fetch_all($resultSet, MYSQLI_ASSOC);
    var_dump($arrayAssoc);
    mysqli_free_result($resultSet);
    mysqli_close($connection);
} else {
    echo "non connesso";
}
