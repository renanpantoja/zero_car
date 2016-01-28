<div class="container">
    <div class="row">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Usuários </h3>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered table-condensed">
                    <thead>
                    <tr>
                        <th>#id</th>
                        <th>Nome</th>
                        <th>E-mail</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($usuarios as $usuario): ?>
                        <tr>
                            <td><?php echo $usuario['id']; ?></td>
                            <td><?php echo $usuario['nome']; ?></td>
                            <td><?php echo $usuario['email']; ?></td>
                            <td>
                                <a class="btn btn-primary" href="index.php?pages=atualizauser&id=<?php echo $usuario['id']; ?>">Editar</a>
                                <a class="btn btn-danger" href="index.php?pages=deleteuser&id=<?php echo $usuario['id']; ?>">Remover</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
