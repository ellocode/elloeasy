<?php
namespace App\Controllers;

use Setup\Classes\Render;
use App\Controllers\IBaseController;

class HomeController extends Render implements IBaseController{

  public function __construct(){
    $this->setTitle("Home - Ello code");
    $this->setDescription("Esta é nossa página inicial");
    $this->setKeywords("criação de site, ello code");
    $this->setDir("home");
    $this->setLayout("site");
    $this->renderLayout();
  }
  public function index(Type $var = null)
  {
    $this->renderLayout();
    # code...
  }
}
?>