<?php
$host_name = 'localhost';
$database = 'stellium_bdd';
$user_name = 'root';
$password = 'root';

$bdd = null;
try {
    $bdd = new PDO("mysql:host=$host_name; dbname=$database;", $user_name, $password);
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur!: " . $e->getMessage() . "<br/>";
    die();
}
?>