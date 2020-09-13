<?php
////--VARIÁVEIS DE CONFIGURAÇÃO--/// 
$wwwroot = "elloeasy/";
$dataroot = "elloeasy/";
//define se é http ou https
$httptype = "http";

//CONFIGURAÇÕES DO BANCO DE DADOS 
define('HOST', "127.0.0.1");
define('DB', "db_elloeasy");
define('USER', "usr_ellocode");
define('PASS', "Padrao@10");
////

define("WWWROOT", "{$httptype}://{$_SERVER['HTTP_HOST']}/{$wwwroot}");

if (substr($_SERVER['DOCUMENT_ROOT'], -1) == '/') {
  define("DIRROOT", "{$_SERVER['DOCUMENT_ROOT']}{$dataroot}");
} else {
  define("DIRROOT", "{$_SERVER['DOCUMENT_ROOT']}/{$dataroot}");
}
define("DIRIMG", "{$httptype}://{$_SERVER['HTTP_HOST']}/{$dataroot}public/build/img/");
define("DIRCSS", "{$httptype}://{$_SERVER['HTTP_HOST']}/{$dataroot}public/build/css/");
define("DIRJS", "{$httptype}://{$_SERVER['HTTP_HOST']}/{$dataroot}public/build/js/");
define("DIRMODULES", "{$httptype}://{$_SERVER['HTTP_HOST']}/{$dataroot}public/node_modules/");
