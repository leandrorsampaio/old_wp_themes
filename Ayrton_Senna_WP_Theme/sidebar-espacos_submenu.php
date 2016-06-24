<div id="theContent_espacos_areaSubmenu">
    <?php
    include ('sidebar-programador.php');
//--------------------------------------------------
// Determinando os titulos das paginas
//--------------------------------------------------
//Arquibancadas
    $title_arqui_A = 'A';
    $title_arqui_B = 'B';
    $title_arqui_C = 'C';
    $title_arqui_M = 'M';
//
//Pistas
    $title_retao = 'Ret&atilde;o';
    $title_ferradura = 'Ferradura';
    $title_completa = 'Completa';
//
////Estacionamentos
//    $title_portao7 = 'Port&atilde;o 7';
//    $title_arena = 'Arena';
//    $title_mecanica = 'Mec&acirc;nica';
////
//----------------------------------------------
// Montando o HTML do submenu ARQUIBANCADAS
//----------------------------------------------
    $abremenuArqui = '<div id="theContent_espacos_submenu">';
    $abrelista = '<ul>';
    $abreitemOFF = '<li class="theContent_espacos_submenu_itemOFF">';
    $abreitemON = '<li class="theContent_espacos_submenu_itemON">';
    $abrelink_submenu_A = '<a class="theContent_espacos_submenu_item_link " href="';
    $abrelink_submenu_B = '">';
    $fechalink_submenu = '</a>';
    $fechaitem = '</li>';
    $fechalista = '</ul>';
    $fechamenu = '</div>';
//----------------------------------------------
// Montando o HTML do submenu PISTAS
//----------------------------------------------
    $abremenuPistas = '<div id="theContent_espacos_submenu">';
    $abrelista = '<ul>';
    $abreitemOFF_p = '<li class="theContent_espacos_submenu_itemOFF_pistas">';
    $abreitemON_p = '<li class="theContent_espacos_submenu_itemON_pistas">';
    $abrelink_submenu_A = '<a class="theContent_espacos_submenu_item_link " href="';
    $abrelink_submenu_B = '">';
    $fechalink_submenu = '</a>';
    $fechaitem = '</li>';
    $fechalista = '</ul>';
    $fechamenu = '</div>';
//----------------------------------------------
// Montando o HTML do submenu ESTACIONAMENTOS
//----------------------------------------------
//    $abremenuEstac = '<div id="theContent_espacos_submenu">';
//    $abrelista = '<ul>';
//    $abreitemOFF_es = '<li class="theContent_espacos_submenu_itemOFF_estac">';
//    $abreitemON_es = '<li class="theContent_espacos_submenu_itemON_estac">';
//    $abrelink_submenu_A = '<a class="theContent_espacos_submenu_item_link " href="';
//    $abrelink_submenu_B = '">';
//    $fechalink_submenu = '</a>';
//    $fechaitem = '</li>';
//    $fechalista = '</ul>';
//    $fechamenu = '</div>';
    ?>
    <?php
//---------------------------------------
// Monta a programação do Sub Menu
//---------------------------------------
    if ($tipo == 1) {
// --------------------------------------
// Menu Arquibancadas
// --------------------------------------
        echo $abremenuArqui;
        echo $abrelista;
        // Item - Arquibancada A
        if (is_single($arqui_A)) {
            echo $abreitemON;
        } else {
            echo $abreitemOFF;
        }
        echo $abrelink_submenu_A;
        echo get_permalink($arqui_A);
        echo $abrelink_submenu_B;
        echo $title_arqui_A;
        echo $fechalink_submenu;
        echo $fechaitem;
        // Item - Arquibancada B
        if (is_single($arqui_B)) {
            echo $abreitemON;
        } else {
            echo $abreitemOFF;
        }
        echo $abrelink_submenu_A;
        echo get_permalink($arqui_B);
        echo $abrelink_submenu_B;
        echo $title_arqui_B;
        echo $fechalink_submenu;
        echo $fechaitem;
        // Item - Arquibancada C
        if (is_single($arqui_C)) {
            echo $abreitemON;
        } else {
            echo $abreitemOFF;
        }
        echo $abrelink_submenu_A;
        echo get_permalink($arqui_C);
        echo $abrelink_submenu_B;
        echo $title_arqui_C;
        echo $fechalink_submenu;
        echo $fechaitem;
        // Item - Arquibancada M
        if (is_single($arqui_M)) {
            echo $abreitemON;
        } else {
            echo $abreitemOFF;
        }
        echo $abrelink_submenu_A;
        echo get_permalink($arqui_M);
        echo $abrelink_submenu_B;
        echo $title_arqui_M;
        echo $fechalink_submenu;

        echo $fechalista;
        echo $fechamenu;
    } elseif ($tipo == 2) {
// --------------------------------------
// Menu Pistas
// --------------------------------------
        echo $abremenuPistas;
        echo $abrelista;
        // Item - Retão
        if (is_single($retao)) {
            echo $abreitemON_p;
        } else {
            echo $abreitemOFF_p;
        }
        echo $abrelink_submenu_A;
        echo get_permalink($retao);
        echo $abrelink_submenu_B;
        echo $title_retao;
        echo $fechalink_submenu;
        echo $fechaitem;
        // Item - Ferradura
        if (is_single($ferradura)) {
            echo $abreitemON_p;
        } else {
            echo $abreitemOFF_p;
        }
        echo $abrelink_submenu_A;
        echo get_permalink($ferradura);
        echo $abrelink_submenu_B;
        echo $title_ferradura;
        echo $fechalink_submenu;
        echo $fechaitem;
        // Item - Completa
        if (is_single($completa)) {
            echo $abreitemON_p;
        } else {
            echo $abreitemOFF_p;
        }
        echo $abrelink_submenu_A;
        echo get_permalink($completa);
        echo $abrelink_submenu_B;
        echo $title_completa;
        echo $fechalink_submenu;
        echo $fechaitem;

        echo $fechalista;
        echo $fechamenu;
//    } elseif ($tipo == 3) {
//// --------------------------------------
//// Menu Estacionamentos
//// --------------------------------------
//        echo $abremenuEstac;
//        echo $abrelista;
//        // Item - Portão 7
//        if (is_single($portao7)) {
//            echo $abreitemON_es;
//        } else {
//            echo $abreitemOFF_es;
//        }
//        echo $abrelink_submenu_A;
//        echo get_permalink($portao7);
//        echo $abrelink_submenu_B;
//        echo $title_portao7;
//        echo $fechalink_submenu;
//        echo $fechaitem;
//        // Item - Arena
//        if (is_single($arena)) {
//            echo $abreitemON_es;
//        } else {
//            echo $abreitemOFF_es;
//        }
//        echo $abrelink_submenu_A;
//        echo get_permalink($arena);
//        echo $abrelink_submenu_B;
//        echo $title_arena;
//        echo $fechalink_submenu;
//        echo $fechaitem;
//        // Item - Mecânica
//        if (is_single($mecanica)) {
//            echo $abreitemON_es;
//        } else {
//            echo $abreitemOFF_es;
//        }
//        echo $abrelink_submenu_A;
//        echo get_permalink($mecanica);
//        echo $abrelink_submenu_B;
//        echo $title_mecanica;
//        echo $fechalink_submenu;
//        echo $fechaitem;
//
//        echo $fechalista;
//        echo $fechamenu;
    }
    ?>
</div>
