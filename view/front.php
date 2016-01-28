<?php
/**
 * Created by PhpStorm.
 * User: renan
 * Date: 07/09/15
 * Time: 19:17
 */
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>R - Assistente pessoal</title>
    <!-- vireport -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <meta charset="utf-8" >
    <!-- add bootstrap.css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- add css renan -->
    <link href="css/estilo.css" rel="stylesheet" media="screen">
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menuCollapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a href="index.php" class="navbar-brand">R - Assistente pessoal</a>

        </div>

        <div class="collapse navbar-collapse" id="menuCollapse">

            <ul class="nav navbar-nav">
                <li class="alert-success pull-right"><a href="admin/">Logar</a></li>
                <?php foreach($paginas as $menu): ?>
                    <li><a href="index.php?page=<?php echo $menu['slug']; ?>"><?php echo $menu['title']; ?></a></li>
                <?php endforeach; ?>
            </ul>

        </div>

    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <?php echo $pagina['body']; ?>
        </div>
    </div>
</div>


<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>