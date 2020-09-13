<?php
namespace Setup\DB;

class DBConnect{
  
  private static $instance;

 public static function getConnection(){

     if(!self::$instance)
        self::$instance=new \PDO("mysql:host=".HOST.";dbname=".DB."","".USER."","".PASS."");
        self::$instance->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        return self::$instance;
  }  
}
?>