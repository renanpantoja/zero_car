<?php
/**
 * Created by PhpStorm.
 * User: renan
 * Date: 07/09/15
 * Time: 19:17
 */

    if(!isset($include) or !is_string($include)){
        header("HTTP/1.0 500 Internal Server Error");
        echo '<h1>Variável $include não encontrada!</h1>';
        exit;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>ZERO - Painel</title>
    <link rel="shortcut icon" href="images/icon.ico">
    <!-- vireport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <meta charset="utf-8" >
    <!-- add bootstrap.css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- add css renan -->
    <link href="css/estilo.css" rel="stylesheet" media="screen">
    <!-- ajax para autocomplete -->
    <link href="pluguins/autocomplete/autocomplete.css" rel="stylesheet" media="screen">
    <!-- css para pluguin cropped -->
    <link rel="stylesheet" href="pluguins/cropper/dist/cropper.min.css">
    <link rel="stylesheet" href="pluguins/cropper/examples/crop-avatar/css/main.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>


    <?php include 'view/admin/menu.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <?php
                include 'view'.DS.'admin'.DS.$include;
                ?>
            </div>
        </div>
    </div>
    
    <!-- JAVASCRIPT -->
    
    <script src="js/jquery-1.11.3.min.js"></script>
    <!-- tive que comentar para o cropped funfar -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <script src="js/main.js"></script>
    <!-- ajax para autocomplete -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="pluguins/autocomplete/autocomplete.js"></script>
    <!-- Scripts para Cropped -->
    <script src="pluguins/cropper/assets/js/jquery.min.js"></script>
    <script src="pluguins/cropper/assets/js/bootstrap.min.js"></script>
    <script src="pluguins/cropper/dist/cropper.min.js"></script>
    <script src="pluguins/cropper/examples/crop-avatar/js/main.js"></script>
</body>
</html>