<?php
require_once 'libs/Router.php';
require_once 'app/controllers/auth.controller.php';
require_once 'app/controllers/main.controller.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

$router = new Router();

$router->addRoute('loginPage', 'GET', 'AuthController', 'showLogin');
$router->addRoute('login', 'POST', 'AuthController', 'loginUser');
$router->setDefaultRoute('AuthController', 'showLogin');
$router->addRoute('admin', 'GET', 'AuthController', 'adminPage');
$router->addRoute('logout', 'GET', 'AuthController', 'logout');
$router->addRoute('logout', 'GET', 'AuthController', 'logout');
$router->addRoute('show-parking', 'GET', 'MainController', 'showParking');
$router->addRoute('add-truck', 'GET', 'MainController', 'addTruckForm');
$router->addRoute('newTruck', 'POST', 'MainController', 'addTruck');
$router->addRoute('verfila/:ROW', 'GET', 'MainController', 'showRow');
$router->addRoute('eliminar/:ROW', 'GET', 'MainController', 'deletePatent');
$router->addRoute('showedit/patent/:ID', 'GET', 'MainController', 'showEdit');
$router->addRoute('editar/patente', 'POST', 'MainController', 'editPatent');
$router->addRoute('searchlist', 'GET', 'MainController', 'searchlist');
$router->addRoute('searchbyproduct', 'POST', 'MainController', 'searchByProduct');
$router->addRoute('searchbypatent', 'POST', 'MainController', 'searchByPatent');


$router->route($_GET['resource'], $_SERVER['REQUEST_METHOD']);
