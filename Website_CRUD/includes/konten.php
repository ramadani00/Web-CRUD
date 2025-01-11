<?php
if (isset($_GET['page'])) {
    $page = $_GET['page'];

    switch ($page) {
        case 'nh':
            include "views/nh.php";
            break;
        case 'home':
            include "views/home.php";
            break;
        case 'menu':
            include "views/menu.php";
            break;
        case 'about':
            include "views/about.php";
            break;
        case 'contact':
            include "views/contact.php";
            break;
        case 'makanan':
            include "views/makananView.php";
            break;
        case 'reservasi':
            include "views/reservasiView.php";
            break;
        case 'makananAdd':
            include "modul/makananAdd.php";
            break;
        case 'makananDelete':
            include "modul/makananDelete.php";
            break;
        case 'makananUpdate':
            include "modul/makananUpdate.php";
            break;
        case 'minuman':
            include "views/minumanView.php";
            break;
        case 'minumanAdd':
            include "modul/minumanAdd.php";
            break;
        case 'minumanDelete':
            include "modul/minumanDelete.php";
            break;
        case 'minumanUpdate':
            include "modul/minumanUpdate.php";
            break;
        case 'reservasiAdd':
            include "modul/reservasiAdd.php";
            break;
        case 'reservasiUpdate':
            include "modul/reservasiUpdate.php";
            break;
        case 'reservasiDelete':
            include "modul/reservasiDelete.php";
            break;
        default:
            include "views/404.php";
        
    }
} else {
    include "views/home.php";
}
?>