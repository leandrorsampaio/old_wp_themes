<div id="contentInterna_miolo_theContent">
    <?php
    include ('sidebar-programador.php');
    //
    get_sidebar('thecontent-title');
    get_sidebar('thecontent-date');
    //------------------------------------------------ IF SINGLES
    //#################### SINGLE ESPAÇOS
    if ($espacos) {
        get_sidebar('espacos_submenu');

        get_sidebar('espacos_especificacoes');

        //################# SINGLE EVENTOS
    } elseif ($eventos) {
        ?>
        <div id="theContent_eventos">
            <?php the_content(); ?>
        </div>
        <?php
        get_sidebar('eventos_info');
        //################# SINGLE GALERIAS 
    } elseif (is_singular('galeria')) {
        ?>
        <?php get_sidebar('galerias-single'); ?>
        <?php
    } //elseif (is_page(array($conheca, $circuito, $kartodromo, $historia, $parque))) {
    //  get_sidebar('conheca_submenu');
    //  echo '<p>';
    //  the_content();
    //  echo '</p>';
    // }
//------------------------------------------------ IF PAGES
    elseif (is_search()) {
        include ('sidebar-search-result.php');
    } elseif (is_page($agenda)) {
        get_sidebar('agenda');
    } elseif (is_page($contato)) {
        get_sidebar('faleconosco');
    } elseif (is_page('fale-conosco-teste')) {
        get_sidebar('faleconosco-teste');
    } elseif (is_page($home_noticias)) {
        get_sidebar('home-noticias');
    } elseif (is_page($home_espacos)) {
        get_sidebar('home-espacos');
    } elseif (is_page($como_chegar)) {
        get_sidebar('comochegar');
    } elseif (is_page($galeria_home)) {
        get_sidebar('conheca_submenu');
        get_sidebar('galerias-home');
    } elseif (is_page($todas_noticias)) {
        get_sidebar('todas-noticias');
    } elseif (is_page($achados_e_perdidos)) {
        get_sidebar('achadoseperdidos');
    } else {
        ?>
        <p><?php the_content(); ?></p>
        <?php
    }
    ?>
</div>
