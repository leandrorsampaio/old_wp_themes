<div id="internaContent_sidebar_palavraDestaque">
    <h2>Palavra do dia</h2>
    <?php
    /* Chama Modulo da Palavra do dia */
    include ('mod_palavradodia.php');
    //--------  Query Palavra do dia (palavra destaque)
    global $palavradestaque;
    $palavradestaque = new WP_Query($query_palavra_do_dia);
    while ($palavradestaque->have_posts()) : $palavradestaque->the_post();
        ?>
        <div id="internaContent_sidebar_palavraDestaque_balaobico">
            <img src="<?php bloginfo('template_url'); ?>/images/balaoBico-contribua.png" alt="Elemento decorativo" />
        </div>
        <div id="internaContent_sidebar_palavraDestaque_titulo">
            <h3>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </h3>
        </div>
        <?php
    endwhile;
    wp_reset_query();
    ?>
</div>