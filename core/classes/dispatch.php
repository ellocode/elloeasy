<?php

namespace Setup\classes;

use Setup\classes\Route;

class Dispatch extends Route
{
  private $method;
  private $param = [];
  private $object;


  protected function getMethod()
  {
    return $this->method;
  }
  public function setMethod($method)
  {
    $this->method = $method;
  }

  protected function getParam()
  {
    return $this->param;
  }
  public function setParam($param)
  {
    $this->param = $param;
  }

  public function __construct(array $standardsRoutes = [])
  {
    $controllerName = $this->getStandardsRoutes($standardsRoutes);
    $this->addController($controllerName);
  }

  private function addController($controllerName)
  {
    $controller = "App\\Controllers\\{$controllerName}";
    $this->object = new $controller;
    if (isset($this->parseUrl()[1])) {
      $this->addMethod();
    }
  }

  private function addMethod()
  {
    if (method_exists($this->object, $this->parseUrl()[1])) {
      $this->setMethod("{$this->parseUrl()[1]}");
      $this->addParam();
      call_user_func_array([$this->object, $this->getMethod()], $this->getParam());
    }
  }
  private function addParam()
  {
    $contArray = count($this->parseUrl());
    if ($contArray > 2) {
      foreach ($this->parseUrl() as $value) {
        if ($value > 1) {
          $this->setParam($this->param += [$value]);
        }
      }
    }
  }
}
