<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="paginas/corretoradevalores/public/css/bootstrap/css/bootstrap.min.css">

    <!-- Icoomon -->
    <link rel="stylesheet" href="paginas/corretoradevalores/public/fonts/Icomoon/Icomoon.css">

    <!-- Meu css -->
    <link rel="stylesheet" href="paginas/corretoradevalores/public/css/corretoracss.css">

    <title>Exercício - Aula 9</title>
</head>

<body>

    <header class="container">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="paginas/corretoradevalores/public/img/graficos.jpg" alt="Primeiro Slide"
                        class="rounded img-fluid">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="paginas/corretoradevalores/public/img/bitcoinsmoedagrande.jpg" alt="Segundo Slide"
                        class="rounded img-fluid">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="paginas/corretoradevalores/public/img/finance-1140x300.jpg" alt="Terceiro Slide"
                        class="rounded img-fluid">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>


        <!-- Começo da Nav bar -->

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado"
                aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse table-dark" id="conteudoNavbarSuportado">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="minhacorretora.php?pg=inicial"><span class="Bre-home1"></span>Inicial</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="minhacorretora.php?pg=sobre"><span class="Bre-question"></span>Sobre</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="minhacorretora.php?pg=servicos"><span
                                class="Bre-miscellaneous_services"></span>Serviços</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="minhacorretora.php?pg=produtos"><span class="Bre-gift"></span>Produtos</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link text-white" href="minhacorretora.php?pg=contato"><span class="Bre-email"></span>Contato</a>
                    </li>


                </ul>

                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>

                <li class="nav-item dropdown list-unstyled">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="Bre-user text-danger"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#"><span class="Bre-cog1"></span> Meu perfil</a>
                        <a class="dropdown-item" href="#"><span class="Bre-key"></span> Mudar senha</a>
                        <a class="dropdown-item" href="#"><span class="Bre-cart"></span> Meus pedidos</a>
                        <a class="dropdown-item" href="#"><span class="Bre-exit"></span> Sair</a>
                    </div>

                </li>

            </div>
        </nav>

        <!-- Fim Nav Bar -->





        <!-- Nav Bar antigo -->
        <!-- <ul class="nav">
            <li class="nav-item"><a class="nav-link active" href="cadastrousuario.html">Inicial</a></li>
            <li class="nav-item"><a class="nav-link" href="">Sobre</a></li>
            <li class="nav-item"><a class="nav-link" href="">Serviços</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Produtos</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Contatos</a></li>
        </ul> -->

        <!-- Fim da Nav bar -->

    </header>