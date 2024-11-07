<?php
$host = getenv('HOST');
$dbName = getenv('MYSQL_DATABASE');
$dbUser = getenv('MYSQL_USER');
$dbPassword = getenv('MYSQL_PASSWORD');
$dbRootPassword = getenv('MYSQL_ROOT_PASSWORD');
$dbPort = getenv('MYSQL_PORT');
$pdo=new PDO("mysql:host=$host;port=$dbPort;dbname=$dbName",$dbUser, $dbPassword);
if(!$pdo) die("La connexion à la base de données n'est pas initialisée");
?>