<?php
get_header();
while (have_posts()): the_post();
    //
    //sidebar programador
    include('sidebar-programador.php');
    ?>
    <div class="<?php echo $classeCSS; ?> interna_topo_title">
        <a>
            <p id="<?php echo $idCSS; ?>"><?php the_title(); ?></p>
        </a>
    </div>
    <script src="<?php bloginfo('template_url') ?>/js/jquery.fittext.js"></script>
    <script type="text/javascript">
        $("#fittext-Z1").fitText(0.34);
        $("#fittext-Z2").fitText(0.3);
        $("#fittext-A1").fitText(0.5);
        $("#fittext-A2").fitText(0.54);
        $("#fittext-A3").fitText(0.8);
        $("#fittext-A4").fitText(0.4);
        $("#fittext-B1").fitText(0.5);
        $("#fittext-B2").fitText(0.5);
        $("#fittext-B3").fitText(0.54);
        $("#fittext-B4").fitText(1.05);
        $("#fittext-C1").fitText(0.8);
    </script>
    </div>
    <!---------------------------------------- MENU RESPONSIVO - COLLAPSE -->
    <div id="interna_topo_collapse">
        <?php get_sidebar('menu_responsivo'); ?>
    </div>
    <div class="interna_content">
        <?php
        //----------------------------- Página EVENTOS
        if (is_page(array('eventos', 'events'))) {
            include('include-eventos.php');
            //-------------------------- Página TOP 10
        } elseif (is_page(array('top-10', 'top-10-en'))) {
            include('include-top10.php');
            //
            //-------------------------- Página ROTEIRO DE UMA SEMANA
        } elseif (is_page(array('roteiro-de-uma-semana', 'one-week-in-sao-paulo'))) {
            include('include-roteiro.php');
            //
        } elseif (is_page(array(148, 211))) {
            //--------------------------- Página REDES SOCIAIS
            include('include-redes.php');
            //
            //------------------------- Demais Páginas
        } else {
            ?>
            <div class="interna_content_article">
                <article>
                    <?php the_content(); ?>
                </article>
            </div>
            <?php
            //começa as queries
            $args = array(
                'post_type' => $tipo_post,
                'posts_per_page' => $numberPosts,
                'idioma' => $idioma,
            );
            $pageQuery = new WP_Query($args);
            if ($pageQuery->have_posts()) {
                while ($pageQuery->have_posts()) : $pageQuery->the_post();
                    ?>
                    <div class="interna_content_section"> 
                        <section>
                            <div class="interna_content_section_esquerda">
                                <?php
                                //pega o url do thumbnail
                                $image_id = get_post_thumbnail_id();
                                $image_url = wp_get_attachment_image_src($image_id, 'thumb-page', true);
                                $img_grande = wp_get_attachment_image_src($image_id, 'thumb-grande', true);
                                if (is_page(array('diversao', 'joy-fun'))) {
                                    //na page diversão o thumb é grande
                                    ?>
                                    <img src="<? echo $img_grande[0]; ?>" title="<?php echo get_field('legenda'); ?>" alt="<?php echo get_field('legenda'); ?>">
                                    <?php
                                } else {
                                    ?>
                                    <img src="<? echo $image_url[0]; ?>" title="<?php echo get_field('legenda'); ?>" alt="<?php echo get_field('legenda'); ?>"> <br/>
                                    <?php
                                }
                                ?>
                                <p style = "font-size: 11px; text-align: right;"><?php the_field('legenda'); ?></p>
                            </div>
                            <div class="interna_content_section_direita">
                                <h2><?php the_title(); ?></h2>
                                <?php the_content(); ?>
                            </div>
                        </section>    
                    </div>
                    <?php
                endwhile;
            }
            wp_reset_query();
            ?>
        <?php }
        ?>
    </div>
    <?php
endwhile;
get_footer();
?>