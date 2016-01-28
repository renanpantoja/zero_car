<div class="container zero-form">
    <div class="row">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><span class="glyphicon glyphicon-edit"></span> Atualizando Registro <?php echo $paginas['title']; ?> </h3>
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
                    <form action="index.php?pages=atualiza&id=<?php echo $paginas['id']; ?>" method="post">

                        <div class="input-group">
                            <span class="input-group-addon zero-addon">Title:</span>
                            <input class="form-control" type="text" name="title" value="<?php echo $paginas['title']; ?>">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon zero-addon">Slug:</span>
                            <input class="form-control" type="text" name="slug" value="<?php echo $paginas['slug']; ?>">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon zero-addon">Hora:</span>
                            <input class="form-control" type="text" name="time" value="<?php echo substr($paginas['time'], 0, 2); ?>" maxlength="2">
                        </div>
                </div>
                <div class="col-md-4 col-xs-12">

                    <div class="input-group">
                        <span class="input-group-addon zero-addon">Body:</span>
                        <textarea class="form-control" name="body" id="" cols="30" rows="10"><?php echo $paginas['body']; ?></textarea>
                    </div>

                    <hr/>

                    <div class="input-group">
                        <input class="btn btn-primary" type="submit" value="Enviar">
                        <a class="btn btn-danger" href="index.php?pages=listar">Voltar</a>
                    </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
