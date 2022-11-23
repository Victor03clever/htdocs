<?php 

$host="localhost";
$port=3306;
$db="base";
$user="root";
$pass="";

try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=".$db, $user, $pass);
} catch (PDOException $error) {
    return $error->getMessage();
}