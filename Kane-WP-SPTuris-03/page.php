<?php get_header(); ?>
<div id="faixaSingle">   
</div>
<div id="contentSingle">
    <div id="content_faixa">
        <div id="content_faixa_bread">
            <p id="content_faixa_bread_txt">Voc&ecirc; est&aacute; em: <a href="<?php bloginfo('url') ?>"><?php bloginfo('name') ?></a> > <span id="content_faixa_bread_txt2">Contato</span></p>
        </div>
        <div id="content_faixa_search">
            <?php get_search_form(); ?>
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
    <div id="contentSingle_colEsquerda">
        <h1 id="contentSingle_colEsquerda_tituloContato">Contato</h1> 
        <?php while (have_posts()): the_post(); ?>
            <article <?php post_class(); ?>>
                <div id="contentSingle_colEsquerda_theContent"><?php the_content(); ?></div>
            </article>
        <?php endwhile;
        wp_reset_query();
        ?>
        <div id="contato_adendo">(*)Campos de preenchimento obrigat&oacute;rio</div>
        <form action="http://spturis.com/sistemas/mailer_imprensa/contato_envia.php" method="post">
            <div class="form_inputText">
                Nome*
            </div> 
            <input class="form_input" type="text" name="nome" />
            <div class="form_inputText">
                Telefone
            </div>
            <input class="form_input" type="text" name="telefone" />
            <div class="form_inputText">
                E-mail*
            </div>
            <input class="form_input" type="text" name="email" />
            <div class="form_inputText">
                Assunto*
            </div>
            <input class="form_input" type="text" name="assunto" />
            <div class="form_inputText">
                Mensagem*
            </div>
            <textarea class="form_textarea" name="mensagem" 
                      onKeyDown="if(this.value.length >= 300){this.value = this.value.substring(0, 300)}" 
                      onKeyUp="if(this.value.length >= 300){this.value = this.value.substring(0, 300)}"></textarea>
            <button class="form_btn" name="submit" type="submit" value="Enviar">Enviar</button>
        </form>

    </div>
    <div id="contentSingle_colDireita">
<?php get_sidebar('contato'); ?>
    </div>
</div>
<?php get_footer(); ?>