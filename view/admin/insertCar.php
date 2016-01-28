<div class="container zero-form" id="crop-avatar">
    <div class="row">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><span class="glyphicon glyphicon-user"></span> Novo Carro </h3>
            </div>
            <div class="panel-body">

                <div class="col-xs-12 col-sm-4">
                    <div class="thumbnail avatar-view">
                        <img src="images/logo.svg" alt="Avatar">
                        <div class="caption">
                        </div>
                    </div>

            </div>
                <div class="col-md-4 col-xs-12">
                    <form action="index.php?pages=insertcar" method="POST">

                        <div class="input-group">
                            <span class="input-group-addon zero-addon">Título:</span>
                            <input class="form-control" type="text" name="titulo">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon zero-addon">Valor:</span>
                            <input class="form-control" type="text" name="valor">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon zero-addon">Marca:</span>
                            <input class="form-control" type="text" id="keyword" autocomplete="off">
                        </div>
                        <div id="results"></div>
                        <div class="input-group">
                            <span class="input-group-addon zero-addon">Carro:</span>
                            <select class="form-control select" name="carro" id="model">
                            </select>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon zero-addon">Ano:</span>
                            <input class="form-control" type="text" name="ano" maxlength="4" min="4">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon zero-addon">Quilometragem:</span>
                            <input class="form-control" type="number" name="rodado">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon zero-addon">Combustível:</span>
                            <select class="form-control select" name="combustivel">
                                <option>Gasolina</option>
                                <option>Gasolina + GNV</option>
                                <option>Alcool</option>
                                <option>Alcool + GNV</option>
                                <option>Flex</option>
                                <option>Flex + GNV</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon zero-addon">Placa:</span>
                            <input class="form-control" type="text" name="placa">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon zero-addon">Câmbio:</span>
                            <select class="form-control select" name="cambio">
                                <option>Manual</option>
                                <option>Automático</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon zero-addon">Cor:</span>
                            <input class="form-control" type="text" name="cor">
                        </div>

                </div>
                <div class="col-md-4 col-xs-12">

                        <div class="input-group">
                            <span class="input-group-addon zero-addon">Portas:</span>
                            <input class="form-control" type="text" name="portas" maxlength="1">
                        </div>

                        <div class="input-group">
                            <span class="input-group-addon zero-addon">Descrição:</span>
                            <textarea class="form-control" name="descricao" id="" cols="30" rows="10"></textarea>
                        </div>

                        <hr/>

                        <div class="input-group">
                            <input class="btn btn-primary" type="submit" name="" value="Enviar">
                            <a class="btn btn-danger" href="index.php?pages=usuario">Voltar</a>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>
    
    <div class="row">

        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><span class="glyphicon glyphicon-picture"></span> Fotos carregadas </h3>
            </div>
            <div class="panel-body">
                
                <div id="uploads">o resultado é: </div>
                
                <button id="mininu" onClick="refleshIMG()">Aqui</button>
                  
            </div>
        </div>
    </div>

    <!-- Cropping modal -->
    <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form class="avatar-form" action="crop.php" enctype="multipart/form-data" method="post">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" id="avatar-modal-label">Edição de imagem</h4>
                    </div>
                    <div class="modal-body">
                        <div class="avatar-body">

                            <!-- Upload image and data -->
                            <div class="avatar-upload">
                                <input type="hidden" class="avatar-src" name="avatar_src">
                                <input type="hidden" class="avatar-data" name="avatar_data">
                                <label for="avatarInput"></label>
                                <input type="file" class="avatar-input" id="avatarInput" name="avatar_file">
                            </div>

                            <!-- Crop and preview -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="avatar-wrapper"></div>
                                </div>
                            </div>

                            <div class="row avatar-btns">
                                <!--
                                <div class="col-md-9">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary" data-method="rotate" data-option="-90" title="Rotate -90 degrees">Rotate Left</button>
                                        <button type="button" class="btn btn-primary" data-method="rotate" data-option="-15">-15deg</button>
                                        <button type="button" class="btn btn-primary" data-method="rotate" data-option="-30">-30deg</button>
                                        <button type="button" class="btn btn-primary" data-method="rotate" data-option="-45">-45deg</button>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary" data-method="rotate" data-option="90" title="Rotate 90 degrees">Rotate Right</button>
                                        <button type="button" class="btn btn-primary" data-method="rotate" data-option="15">15deg</button>
                                        <button type="button" class="btn btn-primary" data-method="rotate" data-option="30">30deg</button>
                                        <button type="button" class="btn btn-primary" data-method="rotate" data-option="45">45deg</button>
                                    </div>
                                </div>
                                -->
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary btn-block avatar-save" >Subir imagem</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div> -->
                </form>
            </div>
        </div>
    </div><!-- /.modal -->

    <!-- Loading state -->
    <div class="loading" aria-label="Loading" role="img" tabindex="-1"></div>

</div>