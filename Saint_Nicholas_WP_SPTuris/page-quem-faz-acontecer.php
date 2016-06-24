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
                    <br/><br/>
                    <?php the_content(); ?>
                    <div class="contentPaginaInterna_setorPrincipal_box_textos_QuemFaz_fields" style="float:left;">
                        <h2>Realiza&ccedil;&atilde;o</h2>
                        <div class="contentPaginaInterna_setorPrincipal_box_textos_QuemFaz_fields_content">
                            <?php the_field('realizacao'); ?> 
                        </div>
                    </div>
                    <div class="contentPaginaInterna_setorPrincipal_box_textos_QuemFaz_fields" style="float:right;">
                        <h2>Coordena&ccedil;&atilde;o</h2>
                        <div class="contentPaginaInterna_setorPrincipal_box_textos_QuemFaz_fields_content">
                            <?php the_field('coordenacao'); ?>
                        </div>
                    </div>
                    <div class="contentPaginaInterna_setorPrincipal_box_textos_QuemFaz_fields">
                        <h2>Parceiros</h2>
                        <div class="contentPaginaInterna_setorPrincipal_box_textos_QuemFaz_fields_content">
                            <?php the_field('parceiros'); ?> 
                        </div>
                    </div>
                    <div class="contentPaginaInterna_setorPrincipal_box_textos_QuemFaz_fields">
                        <h2>Apoio</h2>
                        <div class="contentPaginaInterna_setorPrincipal_box_textos_QuemFaz_fields_content">
                            <?php the_field('apoio'); ?>
                        </div>
                    </div>
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
