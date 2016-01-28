<div class="container">
    <div class="row">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><span class="glyphicon glyphicon-th-list"></span> Registros </h3>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered table-condensed">
                    <thead>
                    <tr>
                        <th>#id</th>
                        <th>Title</th>
                        <th>Hora</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($paginas as $pagina): ?>
                        <tr>
                            <td><?php echo $pagina['id']; ?></td>
                            <td><?php echo $pagina['title']; ?></td>
                            <td><?php echo $pagina['time']; ?></td>
                            <td>
                                <a class="btn btn-primary" href="index.php?pages=atualiza&id=<?php echo $pagina['id']; ?>">Editar</a>
                                <a class="btn btn-danger" href="index.php?pages=delete&id=<?php echo $pagina['id']; ?>">Remover</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
