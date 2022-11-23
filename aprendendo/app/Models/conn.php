<?php
namespace App\Models;

use Exception;
use PDO;
Class conn {
private string $db="mysql";
private string $host="localhost";
private string $user="root";
private string $pass="";
private string $dbname="venda";
public int $port=3306;
public object $connect;

public function connection(){
    try {
        $this->connect = new PDO($this->db.':host='.$this->host.';port='.$this->port.';dbname='.$this->dbname,$this->user,$this->pass);
        $this->connect->setAttribute(PDO::ATTR_PERSISTENT,true);
        $this->connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $this->connect->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
        return $this->connect; 
    } catch (Exception $th) {
        return $th->getMessage();    
        }
}


}