<?php get_header(); ?>
<?php
if (!wp_is_mobile()) {
    ?>
    <div id="internaContent-turismo">
        <div id="turismo_esq">
            <ul id="turismo_esq_lista">
                <div id="turismo_esqNobar"></div>
            </ul>
        </div>
        <!--[if IE 8]>
        <div id="turismo_dir">
        <![endif]-->
        <!--[if IE 8]><![IGNORE[--><![IGNORE[]]>
        <article id="turismo_dir">
            <!--<![endif]-->
            <article id="turismo_dir">
                <h2 class="internaTitulo">
                    <?php
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
                            ('<p><strong>');
                    echo $count;
                    _e
                            ('</strong>');
                    _e
                            (' resultado(s) encontrado(s)');
                    _e
                            ('</p>');
                    wp_reset_query();
                    ?>
                </h2>
                <div id="turismoReceptivo_content">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <a class="resultBusca" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <h1 class="resultBuscaNO">Desculpe, n&atilde;o encontramos nenhum resultado com o termo desejado.</h1>
                    <?php endif; ?>
                    <div class="search_resultado_pagination">
                        <div class="search_resultado_paginationCentralizador">
                            <!--- pega a paginacao (que esta nas functions --->
                            <?php pagination() ?>
                        </div>
                    </div>
                </div>
                <!--[if IE 8]>
         </div>
         <![endif]-->
                <!--[if IE 8]><![IGNORE[--><![IGNORE[]]>
            </article>
            <!--<![endif]-->
    </div>
    <?php
} else {
    ?>


    <article class="internaArticleMob">
        <h2 class="internaTituloMob">
            <?php
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
                    ('<p class="internaSubTituloMob"><strong>');
            echo $count;
            _e
                    ('</strong>');
            _e
                    (' resultado(s) encontrado(s)');
            _e
                    ('</p>');
            wp_reset_query();
            ?>
        </h2>
        <div>
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post(); ?>
                    <a class="internaLinkMob" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <?php endwhile; ?>
            <?php else : ?>
                <h1>Desculpe, n&atilde;o encontramos nenhum resultado com o termo desejado.</h1>
            <?php endif; ?>
            <div class="paginacaoMob">
                <!--- pega a paginacao (que esta nas functions --->
                <?php pagination() ?>
            </div>
        </div>
    </article>











    <?php
}
?>
<?php get_footer(); ?>












