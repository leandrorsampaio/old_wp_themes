<div id="theContent_espacos_areaSubmenu">
    <?php
    include ('sidebar-programador.php');
//--------------------------------------------------
// Determinando os titulos das paginas
//--------------------------------------------------
    $title_conheca = 'Conhe&ccedil;a';
    $title_historia = 'Hist&oacute;ria';
    $title_circuito = 'Circuito';
    $title_kartodromo = 'Kart&oacute;dromo';
    $title_parque = 'Parque';
    $title_galeria = 'Imagens';
//
//----------------------------------------------
// Montando o HTML do submenu 
//----------------------------------------------
    $abremenu = '<div id="theContent_espacos_submenu">';
    $abrelista = '<ul>';
    $abreitemOFF = '<li class="theContent_espacos_submenu_itemOFF">';
    $abreitemON = '<li class="theContent_espacos_submenu_itemON">';
    $abrelink_submenu_A = '<a class="theContent_espacos_submenu_item_link " href="';
    $abrelink_submenu_B = '">';
    $fechalink_submenu = '</a>';
    $fechaitem = '</li>';
    $fechalista = '</ul>';
    $fechamenu = '</div>';
    ?>
    <?php
//---------------------------------------
// Monta a programação do Sub Menu
//---------------------------------------
    echo $abremenu;
    echo $abrelista;
    
    // Item - Galeria
    if (is_page($galeria_home)) {
        echo $abreitemON;
    } else {
        echo $abreitemOFF;
    }
    echo $abrelink_submenu_A;
    echo get_permalink($galeria_home);
    echo $abrelink_submenu_B;
    echo $title_galeria;
    echo $fechalink_submenu;
    echo $fechaitem;
    
    // Item - Circuito
    if (is_page($parque)) {
        echo $abreitemON;
    } else {
        echo $abreitemOFF;
    }
    echo $abrelink_submenu_A;
    echo get_permalink($parque);
    echo $abrelink_submenu_B;
    echo $title_parque;
    echo $fechalink_submenu;
    echo $fechaitem;
    // Item - Circuito
    if (is_page($circuito)) {
        echo $abreitemON;
    } else {
        echo $abreitemOFF;
    }
    echo $abrelink_submenu_A;
    echo get_permalink($circuito);
    echo $abrelink_submenu_B;
    echo $title_circuito;
    echo $fechalink_submenu;
    echo $fechaitem;
    // Item - História
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
    // Item - Kartódromo
    if (is_page($kartodromo)) {
        echo $abreitemON;
    } else {
        echo $abreitemOFF;
    }
    echo $abrelink_submenu_A;
    echo get_permalink($kartodromo);
    echo $abrelink_submenu_B;
    echo $title_kartodromo;
    echo $fechalink_submenu;
    echo $fechaitem;
    // Item - Conheça
    if (is_page($conheca)) {
        echo $abreitemON;
    } else {
        echo $abreitemOFF;
    }
    echo $abrelink_submenu_A;
    echo get_permalink($conheca);
    echo $abrelink_submenu_B;
    echo $title_conheca;
    echo $fechalink_submenu;
    echo $fechaitem;

    echo $fechalista;
    echo $fechamenu;
    ?>
</div>
