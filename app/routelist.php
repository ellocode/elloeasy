<?php
//configure aqui as rotas da aplicação
$routes=array(""=>'HomeController',
              "home"=>'HomeController',
             "contato"=>'ContactController',
             "login"=>'AuthController',
             "dashboard"=>'DashboardController',
             "user"=>'UserController'
             );
return $routes;
?>