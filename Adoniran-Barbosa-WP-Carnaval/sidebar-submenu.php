<?php
include ('sidebar-idspaginas.php');
//----------- Determinando os titulos das paginas
$title_calendario = 'Calend&aacute;rio';
$title_carnavalDeRua = 'Carnaval nos Bairros';
$title_censoDoSamba = 'Censo';
$title_corteDoCarnaval = 'Corte';
$title_historia = 'Hist&oacute;ria';
//$title_roteirosTuristicos = 'Roteiros';
$title_sambodromo = 'Samb&oacute;dromo';
$title_servicos = 'Servi&ccedil;os';
$title_informacoes = 'Informa&ccedil;&otilde;es';
$title_releases = 'Releases';
$title_imprensa = 'Imprensa';

//--------- Montando o HTML do submenu CARNAVAL 
$abremenuCarnaval = '<div id="noticias_section_head_submenu">';
$abrelista = '<ul>';
$abreitemOFF = '<li class="noticias_section_head_submenu_itemOFF">';
$abreitemON = '<li class="noticias_section_head_submenu_itemON">';
$abrelink_submenu_A = '<a class="noticias_section_head_submenu_item_link" href="';
$abrelink_submenu_B = '">';
$fechalink_submenu = '</a>';
$fechaitem = '</li>';
$fechalista = '</ul>';
$fechamenu = '</div>';

//--------- Montando o HTML do submenu IMPRENSA
$abremenuImprensa = '<div id="noticias_section_head_submenuImp">';
$abrelista = '<ul>';
$abreitemOFF_imp = '<li class="noticias_section_head_submenu_itemOFF_imp">';
$abreitemON_imp = '<li class="noticias_section_head_submenu_itemON_imp">';
$abrelink_submenu_A = '<a class="noticias_section_head_submenu_item_link" href="';
$abrelink_submenu_B = '">';
$fechalink_submenu = '</a>';
$fechaitem = '</li>';
$fechalista = '</ul>';
?>
<?php
//---------------------------------------
// Monta o Sub Menu
//---------------------------------------
if ($tipo == 1) {
// --------------------------------------
// Menu Carnaval de São Paulo
// --------------------------------------
    echo $abremenuCarnaval;
    echo $abrelista;
// Item - Pre Carnaval
//    if (is_page($preCarnaval)) {
//        echo $abreitemON;
//    } else {
//        echo $abreitemOFF;
//    }
//    echo $abrelink_submenu_A;
//    echo get_permalink($preCarnaval);
//    echo $abrelink_submenu_B;
//    echo $title_preCarnaval;
//    echo $fechalink_submenu;
//    echo $fechaitem;
    // Item - Calendario
    if (is_page($calendario)) {
        echo $abreitemON;
    } else {
        echo $abreitemOFF;
    }
    echo $abrelink_submenu_A;
    echo get_permalink($calendario);
    echo $abrelink_submenu_B;
    echo $title_calendario;
    echo $fechalink_submenu;
    echo $fechaitem;
    // Item - Historia
    if (is_page($historia)) {
        echo $abreitemON;
    } else {
        echo $abreitemOFF;
    }
    echo $abrelink_submenu_A;
    echo get_permalink($historia);
    echo $abrelink_submenu_B;
    echo $title_historia;
    echo $fechalink_submenu;
    echo $fechaitem;
    // Item - Censo do Samba
    if (is_page($censoDoSamba)) {
        echo $abreitemON;
    } else {
        echo $abreitemOFF;
    }
    echo $abrelink_submenu_A;
    echo get_permalink($censoDoSamba);
    echo $abrelink_submenu_B;
    echo $title_censoDoSamba;
    echo $fechalink_submenu;
    echo $fechaitem;
    // Item - Serviços
    if (is_page($servicos)) {
        echo $abreitemON;
    } else {
        echo $abreitemOFF;
    }
    echo $abrelink_submenu_A;
    echo get_permalink($servicos);
    echo $abrelink_submenu_B;
    echo $title_servicos;
    echo $fechalink_submenu;
    echo $fechaitem;
    // Item - Corte do Carnaval Paulistano
    if (is_page($corteDoCarnaval)) {
        echo $abreitemON;
    } else {
        echo $abreitemOFF;
    }
    echo $abrelink_submenu_A;
    echo get_permalink($corteDoCarnaval);
    echo $abrelink_submenu_B;
    echo $title_corteDoCarnaval;
    echo $fechalink_submenu;
    echo $fechaitem;
    // Item - Carnaval de Rua
    if (is_page($carnavalDeRua)) {
        echo $abreitemON;
    } else {
        echo $abreitemOFF;
    }
    echo $abrelink_submenu_A;
    echo get_permalink($carnavalDeRua);
    echo $abrelink_submenu_B;
    echo $title_carnavalDeRua;
    echo $fechalink_submenu;
    echo $fechaitem;
    // Item - Roteiros Turisticos
//            if (is_page($roteirosTuristicos)) {
//                echo $abreitemON;
//            } else {
//                echo $abreitemOFF;
//            }
//            echo $abrelink_submenu_A;
//            echo get_permalink($roteirosTuristicos);
//            echo $abrelink_submenu_B;
//            echo $title_roteirosTuristicos;
//            echo $fechalink_submenu;
//            echo $fechaitem;
    // Item - Sambodromo
    if (is_page($sambodromo)) {
        echo $abreitemON;
    } else {
        echo $abreitemOFF;
    }
    echo $abrelink_submenu_A;
    echo get_permalink($sambodromo);
    echo $abrelink_submenu_B;
    echo $title_sambodromo;
    echo $fechalink_submenu;
    echo $fechaitem;
    echo $fechalista;
    echo $fechamenu;
} elseif ($tipo == 2) {
// --------------------------------------
// Menu Imprensa
// --------------------------------------
    echo $abremenuImprensa;
    echo $abrelista;
    // Item - Informações
    if (is_page($imprensa)) {
        echo $abreitemON_imp;
    } else {
        echo $abreitemOFF_imp;
    }
    echo $abrelink_submenu_A;
    echo get_permalink($imprensa);
    echo $abrelink_submenu_B;
    echo $title_imprensa;
    echo $fechalink_submenu;
    echo $fechaitem;
    // Item - Informações
    if (is_page($informacoes)) {
        echo $abreitemON_imp;
    } else {
        echo $abreitemOFF_imp;
    }
    echo $abrelink_submenu_A;
    echo get_permalink($informacoes);
    echo $abrelink_submenu_B;
    echo $title_informacoes;
    echo $fechalink_submenu;
    echo $fechaitem;
    // Item - Releases
    if (is_page($releases)) {
        echo $abreitemON_imp;
    } else {
        echo $abreitemOFF_imp;
    }
    echo $abrelink_submenu_A;
    echo get_permalink($releases);
    echo $abrelink_submenu_B;
    echo $title_releases;
    echo $fechalink_submenu;
    echo $fechaitem;
    echo $fechalista;
    echo $fechamenu;
}
?>

<!--    <ul>
        <li class="noticias_section_head_submenu_itemOFF">
            Samb&oacute;dromo
        </li>
        <li class="noticias_section_head_submenu_itemON">
            Pr&eacute; Carnaval
        </li>
        <li class="noticias_section_head_submenu_itemOFF">
            Calendario
        </li>
        <li class="noticias_section_head_submenu_itemOFF">
            Historia
        </li>
        <li class="noticias_section_head_submenu_itemOFF">
            Carnaval de Rua
        </li>
        <li class="noticias_section_head_submenu_itemOFF">
            Corte do Carnaval
        </li>
        <li class="noticias_section_head_submenu_itemOFF">
            Roteiros Turisticos
        </li>
        <li class="noticias_section_head_submenu_itemOFF">
            Historia
        </li>
    </ul>-->

