<?php include ('sidebar-programador.php'); ?>
<script type="text/javascript">
    //---------- TOGGLE FAQ
    $(document).ready(function () {
	
        $('#toggle-view li').click(function () {

            var text = $(this).children('div.panel');

            if (text.is(':hidden')) {
                text.slideDown('200');
                $(this).children('span').html('-');		
            } else {
                text.slideUp('200');
                $(this).children('span').html('+');		
            }
		
        });

    });
</script>
<div id="theContent_FaleConosco_left">
    <?php the_content(); ?>
</div>
<div id="theContent_FaleConosco_right">
    <div class="theContent_FaleConosco_right_box" style="margin-left: 0;">
        <div id="theContent_FaleConosco_right_box_link">
            <img class="theContent_FaleConosco_right_box_link_img"
                 src="<?php bloginfo('template_url') ?>/images/icone-comochegar.png" 
                 alt="aquiSignpost designed by Joe Harrison from The Noun Project"
                 title="aquiSignpost designed by Joe Harrison from The Noun Project"
                 />
            <a href="<?php echo get_permalink($como_chegar); ?>">Como <br/>Chegar</a>
        </div>
    </div>
    <div class="theContent_FaleConosco_right_box">
        <div id="theContent_FaleConosco_right_box_link">
            <img class="theContent_FaleConosco_right_box_link_img"
                 src="<?php bloginfo('template_url') ?>/images/icone-seueventoaqui.png" 
                 alt="aquiSignpost designed by Joe Harrison from The Noun Project"
                 title="aquiSignpost designed by Joe Harrison from The Noun Project"
                 />
            <a href="<?php echo get_permalink($home_espacos); ?>">&Aacute;reas <br/>Loc&aacute;veis</a>
        </div>
    </div>
    <!--
    <div class="theContent_FaleConosco_right_box">
        <div id="theContent_FaleConosco_right_box_link">
            <a href="<?php echo get_permalink($calendario); ?>">Calend&aacute;rio de Eventos</a>
        </div>
    </div>
    -->
    <div class="theContent_FaleConosco_right_box">
        <div id="theContent_FaleConosco_right_box_link">
            <img class="theContent_FaleConosco_right_box_link_img2"
                 src="<?php bloginfo('template_url') ?>/images/icone-dicas.png" 
                 />
            <a href="<?php echo get_permalink($dicas); ?>">Dicas</a>
        </div>
    </div>
    <div class="theContent_FaleConosco_right_box">
        <div id="theContent_FaleConosco_right_box_link">
            <img class="theContent_FaleConosco_right_box_link_img2"
                 src="<?php bloginfo('template_url') ?>/images/icone-achadoseperdidos.png" 
                 />
            <a href="<?php echo get_permalink($achados_e_perdidos); ?>">Achados e Perdidos</a>
        </div>
    </div>
</div>
<div id="theContent_FaleConosco_content">
    <?php the_field('faq'); ?>
</div>
<div id="theContent_FaleConosco_form" style="overflow: hidden;">
    <iframe id="frame" src="http://spturis.com/sistemas/mailer_interlagos/mailer_contato_form.php" style="overflow: hidden;"></iframe> 
</div>
<div id="theContent_FaleConosco_news">
    <a id="theContent_FaleConosco_news_link" href="<?php echo get_permalink(806); ?>">Clique e receba novidades do Aut&oacute;dromo de Interlagos!</a>
</div>