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
    if(!empty($_POST['nome']) and !empty($_POST['email']) and !empty($_POST['usuario']) and !empty($_POST['senha'])){

        $dados['nome'] = $_POST['nome'];
        $dados['email'] = $_POST['email'];
        $dados['usuario'] = $_POST['usuario'];
        $dados['senha'] = $_POST['senha'];

        $users->updateUsuario($dados, $_GET['id']);
        header('Location:index.php?pages=usuario');
    }
}

if(!empty($_GET['id'])){

    $usuarios = $users->readUsuario(null, $_GET['id']);
}
?>