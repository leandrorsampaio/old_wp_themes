<?php
//
// Antigo código do sistema de fotos. Antes verificava so usuário estava logado 
//
//
//
//session_start();
//$usuario = wp_get_current_user();
//if($usuario->ID == 0){
//header("Location: ".wp_login_url(site_url( '/fotos/ ' )));
//exit();
//}
//$_SESSION['usuario_logado'] = $usuario->data;
//
//
//
?>
<?php get_header(); ?>
<!--?php /* Template name: Galeria de Fotos*/ ?-->
<div id="faixaSingle">   
</div>
<div id="contentSingle">
    <div id="content_faixa">
        <div id="content_faixa_bread">
            <p id="content_faixa_bread_txt">Voc&ecirc; est&aacute; em: <a href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a> > Galeria de Fotos</p>
        </div>
        <div id="content_faixa_areaRestrita">
            <p id="content_faixa_areaRestrita_txt">Area Restrita |<a id="content_faixa_areaRestrita_link" href="#">Policy</a></p>
        </div>
    </div>
    <div id="content_socialSide">
         <a id="content_socialSide_rss" href="http://feeds.feedburner.com/feeds_imprensaSPTuris" target="_blank" title="Subscreva-se ao meu feed" rel="alternate" type="application/rss+xml"></a>
        <a href="https://www.facebook.com/TurismoemSP" target="_blank" id="content_socialSide_face"></a>
        <a href="http://twitter.com/#!/TurismoSaoPaulo" id="content_socialSide_twitter" target="_blank"></a>
        <div id="content_socialSide_dobra">
            <img src="<?php bloginfo('template_url') ?>/images/socialSide-dobra.png"/>
        </div>
    </div>
    <div id="contentFotos">
        <div id="contentFotos_tituloEicones">
            <a id="contentFotos_tituloFotos" href="<?php bloginfo('template_url') ?>/fotos">Fotos S&atilde;o Paulo</a>  
        </div>       
         <?php while (have_posts()): the_post(); ?>
        <article <?php post_class(); ?>>
         <div id="contentSingle_colEsquerda_theContent"><?php the_content(); ?></div>
        </article>
         <?php endwhile;
        wp_reset_query(); ?>
    </div>
</div>
<?php get_footer(); ?>
