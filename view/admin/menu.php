<nav class="zero navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">

            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menuCollapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

            <a href="index.php?pages=home" class="navbar-brand"><img src="images/logomini.svg" /> </a>

        </div>

        <div class="collapse navbar-collapse" id="menuCollapse">

            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" >Usuário<span class="caret"></span> </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="index.php?pages=usuario">Consultar</a> </li>
                        <li class="divider"><a href="#"></a> </li>
                        <li><a href="index.php?pages=insertuser">Inserir</a> </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown" >Carros<span class="caret"></span> </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="index.php?pages=carro">Consultar</a> </li>
                        <li class="divider"><a href="#"></a> </li>
                        <li><a href="index.php?pages=insertcar">Inserir</a> </li>
                    </ul>
                </li>
            </ul>

            <a href="logout.php" type="button" class="btn btn-danger navbar-btn navbar-right" style="margin-right: 1em;">Sair</a>

        </div>

    </div>
</nav>