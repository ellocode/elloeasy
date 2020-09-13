<?php
namespace App\Controllers;
interface IBaseController{
    public function setDir($Dir);
    public function setTitle($Title);
    public function setDescription($Description);
    public function setKeywords($Keywords);
    public function addBreadcrumb();
    public function renderLayout();
}
?>