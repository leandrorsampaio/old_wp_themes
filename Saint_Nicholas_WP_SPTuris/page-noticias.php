<?php
//
// NOTICIAS 2013
// 
// ID 3150 - 2012
// ID 3151 - 2013
// ID 4168 - 2014
// ID 25 - Geral (ano atual)
//
//
?>
<?php get_header(); ?>
<!-- ---------------------------------------- ESQUERDA ---------------------------------->
<div id="contentPaginaInterna">
    <?php while (have_posts()): the_post(); ?>
        <div id="contentPaginaInterna_setorPrincipal">
            <div id="contentPaginaInterna_setorPrincipal_imgTopo"> </div>
            <div id="contentPaginaInterna_setorPrincipal_box">
                <div id="contentPaginaInterna_setorPrincipal_box_textos">
                    <h1>
                        <?php the_title(); ?>
                    </h1>
                    <br/>
                    <?php the_content(); ?>
                    <?php
                    $noticias = new WP_Query('cat=88&posts_per_page=-1');
                    while ($noticias->have_posts()) : $noticias->the_post();
                        ?>
                        <h1 class="contentPaginaInterna_setorPrincipal_box_textos_noticias">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>                        
                            </a>
                        </h1>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                    <br/>
                    <br/>
                    <h3 class="boasNoticiasAnos">Veja tamb&eacute;m as boas not&iacute;cias de
                        <a class="boasNoticiasAnos_link" href="<?php echo get_permalink(3150); ?>">2012</a>
                        , 
                        <a class="boasNoticiasAnos_link" href="<?php echo get_permalink(3151); ?>">2013</a>
                        e 
                        <a class="boasNoticiasAnos_link" href="<?php echo get_permalink(4168); ?>">2014</a>
                    </h3>
                </div>     
            </div>
            <div id="contentPaginaInterna_setorPrincipal_imgFim"> </div>                        
        </div>
        <?php
    endwhile;
    wp_reset_query();
    ?>
    <!-- ---------------------------------------- DIREITA ---------------------------------->
    <div id="contentPaginaInterna_barraLateral"> 
        <div id="contentPaginaInterna_barraLateral_imgTopo"> </div>
        <div id="contentPaginaInterna_barraLateral_imgMiolo">
            <div id="contentPaginaInterna_barraLateral_imgMiolo_conteudo">
                <?php get_sidebar('geral'); ?>
            </div>
        </div>                  
        <div id="contentPaginaInterna_barraLateral_imgFim"> </div>
    </div>
</div>
<?php get_footer(); ?>
