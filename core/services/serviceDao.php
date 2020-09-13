<?php

namespace Setup\Services;

use Setup\DB\DBConnect;

class ServiceDAO
{
    private $Db;
    
    public function __construct()
    {
        //$this->Db=$this->getConnection();
    }

    public function addObject($obj)
    {
        echo "Meu nome é " ,$obj::getClassName(), "\n";
        # code...
    }
    public function getObject(Type $var = null)
    {
        # code...
    }
    public function getAllObjects()
    {
       $stmt=DBConnect::getConnection()->prepare("SELECT * FROM users");
       $stmt->execute();
       $stmt=$stmt->fetch(\PDO::FETCH_ASSOC);
       var_dump($stmt);
        # code...
    }
    public function updateObject(Type $var = null)
    {
        # code...
    }
    public function deleteObject(Type $var = null)
    {
        # code...
    }
}
