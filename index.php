<?php

// header
include_once "paginas/includes/header.php";



$paginas = isset($_GET['pg']);

if ($paginas) {

    switch ($_GET['pg']) {
        case 'pagina':
            include_once "paginas/pagina.php";
            break;

        case 'tecnologia':
            include_once "paginas/tecnologia.php";
            break;

        case 'projetos':
            include_once "paginas/projetos.php";
            break;

        case 'outros':
            include_once "paginas/outros.php";
            break;



        default;
            # code...
    }
} else {
    // echo "Página não definida";
    include_once "paginas/pagina.php";
}

//footer
include_once "paginas/includes/footer.php";
