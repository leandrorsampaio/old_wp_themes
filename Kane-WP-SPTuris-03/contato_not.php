<?php get_header(); ?>
<div id="faixaSingle">   
</div>
<div id="contentSingle">
    <div id="content_faixa">
        <div id="content_faixa_bread">
            <p id="content_faixa_bread_txt">Voc&ecirc; est&aacute; em: <a href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a> > Contato</p>
        </div>
        <div id="content_faixa_search">
            <?php get_search_form(); ?>
        </div>
    </div>
    <div id="content_socialSide">
        <a href="#" id="content_socialSide_rss" target="_blank"></a>
        <a href="https://www.facebook.com/TurismoemSP" target="_blank" id="content_socialSide_face"></a>
        <a href="http://twitter.com/#!/TurismoSaoPaulo" id="content_socialSide_twitter" target="_blank"></a>
        <div id="content_socialSide_dobra">
            <img src="<?php bloginfo('template_url') ?>/images/socialSide-dobra.png"/>
        </div>
    </div>
    <div id="contentSingle_colEsquerda">
        <h1 id="contentSingle_colEsquerda_tituloContato">Contato</h1> 
        <div id="contato_txt">Desculpe! não foi possível enviar sua mensagem. Por favor, tente novamente mais tarde!</div>
        
        

    </div>
    <div id="contentSingle_colDireita">
        <?php get_sidebar('contato'); ?>
    </div>
</div>
<?php get_footer(); ?>