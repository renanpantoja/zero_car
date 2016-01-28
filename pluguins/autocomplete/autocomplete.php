<?php

// We will use PDO to execute database stuff. 
// This will return the connection to the database and set the parameter
// to tell PDO to raise errors when something bad happens
/*
function getDbConnection() {
  $db = new PDO(DB_DRIVER . ":dbname=" . DB_DATABASE . ";host=" . DB_SERVER, DB_USER, DB_PASSWORD);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
  return $db;
}*/

include '../../config/Config.php';
//include 'src/Pages.php';
include '../../src/Cars.php';
//include 'src/Users.php';

//$pages = new Pages(new Config());
$cars  = new  Cars(new Config());
//$users = new Users(new Config());
//$users->protege();

if (isset($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
    $data = $cars->searchMarca($keyword);
    echo json_encode($data);
} else if (isset($_GET['modelo'])) {
    $nome = $_GET['modelo'];
    $modelo = $cars->readMarcas($nome);
    $data = $cars->searchModelo($modelo['marcaId']);
    echo json_encode($data);
} else {
    die();
}


?>