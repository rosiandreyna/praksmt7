<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "fanclub_regristration";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$server;dbname=$nama_database", $user, $password);
} catch(PDOException $e) {
    //show error
    die("Terjadi masalah: " . $e->getMessage());
}