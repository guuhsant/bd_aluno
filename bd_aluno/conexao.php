<?php

$db_name = "aula";
$bd_host = "localhost";
$db_user = "root";
$db_password = "";

$dns = "mysql:host = $db_host; db_name = $db_name";
$pdo = new PDO ($dns, $db_user, $db_password);

?>