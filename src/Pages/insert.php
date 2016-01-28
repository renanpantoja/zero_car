<?php
/**
 * Created by PhpStorm.
 * User: renan
 * Date: 07/09/15
 * Time: 19:17
 */

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!empty($_POST['title']) and !empty($_POST['body']) and !empty($_POST['time'])){

            $dados['title'] = $_POST['title'];
            $dados['time'] = $_POST['time'];
            $dados['body'] = $_POST['body'];

            $pages->create($dados);
            header('Location:index.php?pages=listar');
        }
    }
