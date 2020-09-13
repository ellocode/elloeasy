<?php
namespace App\Controllers;

use App\Models\User;
use App\DAO\UserDAO;

class DashboardController{

    public function __construct(){
       
      }
    public function index(){
      echo "Index da página de gerenciamento do site";
      echo "<br />";
      $user=new User();
      UserDAO::add($user);

    }
}
?>