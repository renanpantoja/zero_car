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

$users->login($_POST);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>ZERO - Acesso ao Painel</title>
    <link rel="shortcut icon" href="images/icon.ico">
    <!-- vireport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <meta charset="utf-8" >
    <!-- add bootstrap.css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- add login.css - css personalizado -->
    <link href="css/login.css" rel="stylesheet" media="screen">
</head>
<body id="back" cellpading="0" cellspacing="0" class="bglogin" onload="muda()">

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-xs-12">
            <form action="login.php" method="POST">

                <div class="col-xs-8 col-xs-offset-2 col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0">
                    <img src="images/logo.svg" class="img img-responsive" />
                </div>

                <div class="panel loginContainer col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 col-md-12 col-md-offset-0">
                    <div class="">
                        <input class="form-control" type="text" name="usuario" placeholder="Login" id="username">
                    </div>
                    <div class="">
                        <input class="form-control" type="password" name="senha" placeholder="Senha">
                    </div>

                    <div class="input-group">
                        <input class="btn" type="submit" name="" value="Logar">
                        <a class="btn btn-danger" href="../">Voltar</a>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>

<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script src="js/mudabg.js"></script>
<script>/*da foco no campo login*/ document.getElementById("username").focus();</script>
</body>
</html>