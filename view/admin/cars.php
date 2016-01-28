<div class="container">
    <div class="row">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Carros </h3>
            </div>
        </div>

        <div class="col-xs-12">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered table-condensed">
                    <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Título</th>
                        <th>Valor</th>
                        <th>carro</th>
                        <th>Ano</th>
                        <th>Km</th>
                        <th>Combustível</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach($carros as $carro): ?>
                    <?php $foto = $cars->searchFoto($carro['id']);
                    $foto_princ = 'img/default.png';
                    foreach($foto as $fotos){ $foto_princ = $fotos['local']; break; } ?>
                        <tr>
                            <td class="zero-img-td"><img class="img zero-img-td" src="<?php echo $foto_princ; ?>" /></td>
                            <td><?php echo $carro['titulo']; ?></td>
                            <td><?php echo $carro['valor']; ?></td>
                            <td><?php echo $carro['modelo']; ?></td>
                            <td><?php echo $carro['ano']; ?></td>
                            <td><?php echo $carro['rodado']; ?></td>
                            <td><?php echo $carro['combustivel']; ?></td>
                            <td>
                                <a class="btn btn-primary" href="index.php?pages=atualizacar&id=<?php echo $carro['id']; ?>">Editar</a>
                                <a class="btn btn-danger" href="index.php?pages=deletecar&id=<?php echo $carro['id']; ?>">Remover</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
