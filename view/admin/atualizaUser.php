<div class="container zero-form">
    <div class="row">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><span class="glyphicon glyphicon-edit"></span> Atualizar Usuário <?php echo $usuarios['nome']; ?> </h3>
            </div>
            <div class="panel-body">

                <div class="col-xs-12 col-sm-4">
                    <div class="thumbnail">
                        <img src="images/logo.svg" alt="Logo Zero" />
                        <div class="caption">
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-xs-12">
                    <form action="index.php?pages=atualizauser&id=<?php echo $usuarios['id']; ?>" method="post">

                        <div class="input-group">
                            <span class="input-group-addon zero-addon">Nome:</span>
                            <input class="form-control" type="text" name="nome" value="<?php echo $usuarios['nome']; ?>">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon zero-addon">E-mail:</span>
                            <input class="form-control" type="email" name="email" value="<?php echo $usuarios['email']; ?>">
                        </div>


                </div>
                <div class="col-md-4 col-xs-12">

                        <div class="input-group">
                            <span class="input-group-addon zero-addon">Login:</span>
                            <input class="form-control" type="text" name="usuario" value="<?php echo $usuarios['usuario']; ?>">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon zero-addon">Senha:</span>
                            <input class="form-control" type="password" name="senha" value="">
                        </div>

                        <hr/>

                        <div class="input-group">
                            <input class="btn btn-primary" type="submit" value="Enviar">
                            <a class="btn btn-danger" href="index.php?pages=usuario">Voltar</a>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
