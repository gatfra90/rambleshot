<?php

/***************************************/
/* CONNESSIONE AL DATABASE             */
/***************************************/
$conn = new mysqli('host', 'my_user', 'my_password', 'my_db');
if (!$conn) {
    echo "Error: Unable to connect to MySQL." . PHP_EOL;
    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
    exit();
}

?>