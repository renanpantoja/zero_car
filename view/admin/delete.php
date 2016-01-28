
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4 col-xs-12">
            <form action="index.php?pages=delete&id=<?php echo $_GET['id']; ?>" method="post">

                <h2>Remover o Registro #<?php echo $_GET['id']; ?></h2>

                <hr/>

                <div class="input-group">
                    <input class="btn btn-primary" type="submit" value="Sim">
                    <a class="btn btn-danger" href="index.php?pages=listar">Não</a>
                </div>

            </form>

        </div>
    </div>
</div>