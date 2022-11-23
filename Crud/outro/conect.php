<?php
$host="localhost";
$port=3306;
$db="test";
$user="root";
$pass="";

try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=".$db, $user, $pass);
    //echo "ok";
} catch (PDOException $Error) {
    
   echo"Conexao nao realizada com banco de dados =><br>". $Error->getMessage();
   return $Error->getMessage();
}

?>