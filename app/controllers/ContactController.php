<?php
namespace App\Controllers;

use Setup\Classes\Render;
use App\Controllers\IBaseController;

class ContactController extends Render implements IBaseController{

    public function __construct(){
        $this->setTitle("Contato - Ello cod");
        $this->setDescription("Página de contato");
        $this->setKeywords("criação de site, ello code");
        $this->setDir("contato");
        $this->renderLayout("site");
      }
}
?>