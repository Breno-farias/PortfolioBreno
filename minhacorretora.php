<?php

//header
include_once "paginas/corretoradevalores/paginas/includes/header.php";





$paginas = isset($_GET['pg']);

if ($paginas) {

    switch ($_GET['pg']) {
        case 'inicial':
            include_once "paginas/corretoradevalores/paginas/inicial.php";
            break;

        case 'sobre':
            include_once "paginas/corretoradevalores/paginas/sobre.php";
            break;

        case 'produtos':
            include_once "paginas/corretoradevalores/paginas/produtos.php";
            break;

        case 'contato':
            include_once "paginas/corretoradevalores/paginas/contato.php";
            break;

        case 'finalizar':
            include_once "paginas/corretoradevalores/paginas/finalizar.php";
            break;


        default:
            #code...
            break;
    }
} else {
    // echo "Página não definida";
    include_once "paginas/inicial.php";
}




//footer
include_once "paginas/corretoradevalores/paginas/includes/footer.php";
