<?php
/**
 * Created by PhpStorm.
 * User: renan
 * Date: 07/09/15
 * Time: 19:17
 */

header('Content-Type: text/html; charset=utf8');

define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(__DIR__));

include 'config/Config.php';
include 'src/Users.php';

$users = new Users(new Config());

$users->logout();