<?php
/**
 * Created by PhpStorm.
 * User: renan
 * Date: 07/09/15
 * Time: 19:17
*/

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if(!empty($_POST['nome']) and !empty($_POST['email']) and !empty($_POST['usuario']) and !empty($_POST['senha'])){

        $users->cadastrar($_POST);
        header('Location:index.php?pages=usuario');
    }
}
?>