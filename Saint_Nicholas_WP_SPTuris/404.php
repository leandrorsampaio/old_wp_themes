<?php get_header(); ?>
<!-- ---------------------------------------- ESQUERDA ---------------------------------->
<?php while (have_posts()): the_post(); ?>
    <div id="contentCartao">
        <div id="contentCartao_setorPrincipal">
            <div id="contentCartao_setorPrincipal_imgTopo"> </div>
            <div id="contentCartao_setorPrincipal_box">
                <div id="contentPaginaInterna_setorPrincipal_box_textos" style="width: 100%">
                    <h1>
                        <?php the_title(); ?>
                    </h1>        
                    <br/>
                    <big><h1>Erro 404</h1></big><br/>
                    <h2>Desculpe, a p&aacute;gina que voc&ecirc; procura n&atilde;o existe ou est&aacute; fora do ar!<br/>
                        Verifique se digitou o endere&ccedil;o correto ou tente novamente mais tarde.</h2>
                </div>
                <div id="contentCartao_setorPrincipal_imgFim"> </div>                           
            </div>
            <?php
        endwhile;
        wp_reset_query();
        ?>
    </div>
    <?php get_footer(); ?>

