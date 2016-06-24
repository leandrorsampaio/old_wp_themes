<aside>
    <div id="contentInterna_aside">
        <?php
        get_sidebar('search');
        get_sidebar('aside-traducao');
        get_sidebar('aside-countdown');
        if (is_singular('espacos') || (is_page($home_espacos))) {
            //get_sidebar('aside-contato_vendas');
            get_sidebar('aside-menu-espacos');
        } elseif ( is_page (array( $dicas, $conheca, $historia, $circuito, $kartodromo, $parque, $galeria_home, $linha_do_tempo ))) {
            get_sidebar('aside-menu-conheca');
        } else {
            get_sidebar('aside-publicidade');
        }
        get_sidebar('aside-clima');
        ?>
    </div>
</aside>