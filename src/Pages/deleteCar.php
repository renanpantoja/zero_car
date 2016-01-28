<?php
/**
 * Created by PhpStorm.
 * User: renan
 * Date: 07/09/15
 * Time: 19:17
 */

if(empty($_GET['id'])) {
    echo "<h1>Não é possível fazer isso!</h1>";
    exit;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $cars->deleteCar($_GET['id']);
    header('Location:index.php?pages=carro');
}
?>