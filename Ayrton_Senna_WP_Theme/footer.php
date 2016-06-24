<?php wp_footer(); ?>
<footer>
    <?php
    if ((is_home()) || (is_page(879))) {
        
    } else {
        ?>
        <div id="footer"> 
            <div id="footer_logos">
                <a href="http://www.cidadedesaopaulo.com" target="blank"><img src="<?php bloginfo('template_url') ?>/images/logos-footer-sp.png"></a>
                <a href="http://spturis.com" target="blank"><img src="<?php bloginfo('template_url') ?>/images/logos-footer-spt.png"></a>
                <a href="http://www.capital.sp.gov.br" target="blank"><img src="<?php bloginfo('template_url') ?>/images/logos-footer-prefeitura.png"></a>
            </div>
            <div id="footer_info">
                <h1>Todas as informa&ccedil;&otilde;es est&atilde;o sujeitas a altera&ccedil;&otilde;es sem aviso pr&eacute;vio. Todos os direitos reservados.</h1>
                <!--
                <h1>&copy; Aut&oacute;dromo de Interlagos <?php echo date("Y"); ?> | Todo o conte&uacute;do deste site cont&eacute;m Direitos Reservados
                    <br/>
                    Av. Senador Teot&ocirc;nio Vilela, 261 Interlagos - S&atilde;o Paulo - SP CEP 04801-010
                    <br/>
                </h1>
                -->
            </div>
        </div>
    <? }
    ?>
</footer>
</div>
</body>
</html>