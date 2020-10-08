<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbBase = "creative";

$db = new mysqli($dbHost, $dbUser, $dbPass, $dbBase);

if ($db->connect_error) {
    die("Error en la conexión... : " . $conn->connect_error);
}
$db->set_charset("utf8");


?>
