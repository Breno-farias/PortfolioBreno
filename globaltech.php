<?php


include_once "paginas/prointegrador/paginas/includes/header.php";




$paginas = isset($_GET['pg']);

if ($paginas) {

    switch ($_GET['pg']) {

        case 'inicial':
            include_once "paginas/prointegrador/paginas/inicial.php";
            include_once "paginas/prointegrador/paginas/sobre.php";
            break;


        case 'termosdeuso':
            include_once "paginas/prointegrador/paginas/termosdeuso.php";
            break;

        case 'politica':
            include_once "paginas/prointegrador/paginas/politica.php";
            break;



        default:
            #code...
            break;
    }
}




include_once "paginas/prointegrador/paginas/includes/foother.php";
