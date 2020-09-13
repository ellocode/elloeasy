<?php
namespace App\Controllers;

use Setup\Classes\Render;

class AuthController extends Render{
    public function __construct(){
        $this->setTitle("Autenticação - Ello code");
        $this->setDescription("Esta é nossa página inicial");
        $this->setKeywords("criação de site, ello code");
        $this->setDir("login");
        $this->setFileName("index");
        $this->setLayout();
        $this->renderLayout();
    }
    public function forgotPassword()
    {
        $this->setFileName("forgotPassword");
        $this->renderLayout();
        # code...
    }
}
?>