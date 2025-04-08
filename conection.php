<?php
//LOCAL

$hostname = "localhost";
$username = "root";
$password = "";
$database = "moderador";

//SERVIDOR

//  $hostname = "localhost";
//  $username = "lietzdev_lietzdev";
//  $password = "kavTg.Q#E^Hw";
//  $database = "lietzdev_twitter";

 try {
    $pdo = new PDO("mysql:host=$hostname;dbname=$database;charset=utf8", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Erro de conexão: " . $e->getMessage());
}


