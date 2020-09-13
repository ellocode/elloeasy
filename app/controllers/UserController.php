<?php
namespace App\Controllers;

use App\Models\User;
use App\DAO\UserDAO;

class UserController{

    public function __construct(){}

    public function create(){
        $user=new User();
        $user->setName("João do Pulo");
        $user->setEmail("joao@gmail.com");
        $user->setUsername("joao@gmail.com");
        $user->setPassword("123456");
        $user->setActive(1);
        $user->setCreationDate("2019-11-20");
        UserDAO::add($user);
    }
    public function all(){
        UserDAO::getAll();
    }
    public function update(){
        $user=new User();
        $user->setId("2");
        $user->setName("João do Pulo 2");
        $user->setEmail("joao@gmail.com");
        $user->setUsername("joao@gmail.com");
        $user->setPassword("123456");
        $user->setActive(1);
        UserDAO::update($user);
    }
    public function getById(){
        UserDAO::getById(2);
    }

}
?>