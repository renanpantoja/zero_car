<?php
/**
 * Created by PhpStorm.
 * User: renan
 * Date: 08/01/16
 * Time: 00:51
 */

header('Content-Type: text/html; charset=utf8');

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__DIR__));

$include = (empty($_GET['pages'])) ? 'home' : $_GET['pages'] ;

switch($include){
    case 'insert':
        $include = 'insert.php';
        break;
    case 'atualiza':
        $include = 'atualiza.php';
        break;
    case 'delete':
        $include = 'delete.php';
        break;
    case 'listar':
        $include = 'listar.php';
        break;
    case 'usuario':
        $include = 'users.php';
        break;
    case 'insertuser':
        $include = 'insertUser.php';
        break;
    case 'atualizauser':
        $include = 'atualizaUser.php';
        break;
    case 'deleteuser':
        $include = 'deleteUser.php';
        break;
    case 'carro':
        $include = 'cars.php';
        break;
    case 'insertcar':
        $include = 'insertCar.php';
        break;
    case 'atualizacar':
        $include = '404.php';
        break;
    case 'deletecar':
        $include = 'deleteCar.php';
        break;
    case 'home':
        $include = 'home.php';
        break;
    default:
        $include = '404.php';
        break;
}

include 'config/Config.php';
include 'src/Pages.php';
include 'src/Cars.php';
include 'src/Users.php';

$pages = new Pages(new Config());
$cars  = new  Cars(new Config());
$users = new Users(new Config());
$users->protege();

include 'src'.DS.'Pages'.DS.$include;
include 'view'.DS.'admin.php';