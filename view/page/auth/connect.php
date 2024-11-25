<?php //connect.php

$dsn = "mysql:dbname=3c;host=localhost";
$user = "root";
$pass = "";

try {
    $db = new PDO($dsn, $user, $pass);
} catch (PDOException $e)
{
    echo "Gagal ".$e->getMessage();
}

?>