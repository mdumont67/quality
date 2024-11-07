<?php
$pdo=new PDO('mysql:host=localhost;port=3306;dbname=bookstore','root', '');
if(!$pdo) die("La connexion à la base de données n'est pas initialisée");
?>