<h1 class="contentInterna_miolo_theContent_title">
    <?php
    if (is_search()) {
        /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1");
        $key = wp_specialchars($s, 1);
        $count = $allsearch->post_count;
        _e('');
        _e
                ('');
        _e
                ('Resultados para: ');
        _e
                ('<strong>&quot;');
        echo $key;
        _e
                ('&quot;</strong>');
        _e
                ('<p style="margin: 0"><strong>');
        echo $count;
        _e
                ('</strong>');
        _e
                (' resultado(s) encontrado(s)');
        _e
                ('</p>');
        wp_reset_query();
        ?>  <br/> 
        <?php
    } else {
        the_title();
    }
    ?>
</h1>