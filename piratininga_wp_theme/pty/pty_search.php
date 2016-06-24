<div class="content_block block-4x-3 block-first">
    <div class="content_block_box">
        <div class="search">
            <?php
            echo '<div class="search_header">';
            /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1");
            $key = wp_specialchars($s, 1);
            $count = $allsearch->post_count;
            _e('');
            _e
                    ('');
            _e
                    ('<h1>Resultados para: ');
            _e
                    ('<span>&quot;');
            echo $key;
            _e
                    ('&quot;</span></h1>');
            _e
                    ('<h2>');
            echo $count;
            _e
                    (' resultado(s) encontrado(s)');
            _e
                    ('</h2>');
            wp_reset_query();
            echo '</div>'; // DIV search_header
            //
        //
        //
        echo '<div class="search_looping">';
            if ($idioma == 3) {
                $varTitle = 'lang_title_es';
            } elseif ($idioma == 2) {
                $varTitle = 'lang_title_en';
            } else {
                $varTitle = 'lang_title_pt';
            }
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    ?>
                    <div class="search_looping_item">
                        <?php
                        echo '<a href="' . get_permalink() . '">' . get_field($varTitle) . '</a>';
                        ?>
                    </div>
                    <?php
                } // CHAVE DO : while (have_posts()) {
            } // CHAVE DO : if (have_posts()) 
            // query resset
            wp_reset_query();
            echo '</div>'; // DIV search_looping
            ?>
        </div>
    </div>
</div>
<div class="content_block block-3x block-last">
    <div class="content_block_box">
        <?php
        // Sidebar
        include ($sidebarInclude);
        ?>
    </div>
</div>
