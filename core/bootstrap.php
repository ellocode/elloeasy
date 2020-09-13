<?php
require_once __DIR__.'/../setup/config.php';
require_once __DIR__.'/../vendor/autoload.php';

use Setup\Classes\Dispatch;

$standardsRoutes=require_once __DIR__.'/../app/routelist.php';
$dispatch = new Dispatch($standardsRoutes);
?>