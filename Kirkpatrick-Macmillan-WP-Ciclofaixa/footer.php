<?php include ('inc_programador.php'); ?>
<?php
if (!wp_is_mobile()) {
    ?>
    <footer>
        <div id="footer">
            <div id="footer_info">
                <p>Cidade de S&atilde;o Paulo - S&atilde;o Paulo Turismo S/A</p>
                <p>Ilustra&ccedil;&atilde;o: Gabriela Namie</p>
            </div>
            <div id="sppp" style="float:left;">
                <a href="http://www.cidadedesaopaulo.com/sp/" target="_blank">
                    <img src="<?php bloginfo('template_url') ?>/images/footer_saopaulo_logo_white.png" alt="Logo Movimento Conviva" />
                </a>
            </div>
            <div id="footer_logo">
                <div id="footer_logo_conviva">
                    <a href="http://www.movimentoconviva.com.br/site/" target="_blank">
                        <img src="<?php bloginfo('template_url') ?>/images/footer_logo_conviva_transp.png" alt="Logo Movimento Conviva" />
                    </a>
                </div>
                <div id="footer_logo_CET">
                    <a href="http://www.cetsp.com.br/" target="_blank">
                        <img src="<?php bloginfo('template_url') ?>/images/footer_logo_CET.png" alt="Logo CET - Companhia de Engenharia de Trafego" />
                    </a>
                </div>
                <div id="footer_logo_spturis">
                    <a href="http://spturis.com" target="_blank">
                        <img src="<?php bloginfo('template_url') ?>/images/footer_logo_SPTuris.png" alt="Logo SPTuris" />
                    </a>
                </div>
                <div id="footer_logo_prefeitura">
                    <a href="http://www.capital.sp.gov.br" target="_blank">
                        <img src="<?php bloginfo('template_url') ?>/images/footer_logo_SPPref.png" alt="Logo Prefeitura de Sao Paulo" />
                    </a>
                </div>
            </div>
        </div> 
    </footer>
    </div>
    <?php
} else {
    ?>
    <div class="footerMobile">
        <a class="footerMobile_link footerMobile_linkSPTURIS" href="http://www.cidadedesaopaulo.com/" target="_blank">
            <img class="footerMobile_link_img" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo_mobile_sp.png" alt="Logo Spturis">
        </a>
        <a class="footerMobile_link footerMobile_linkSAOPAULOTURISMO" href="http://spturis.com/v7/index.php" target="_blank">
            <img class="footerMobile_link_img" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo_mobile_spturis.png" alt="Logo São Paulo Turismo">
        </a>
        <a class="footerMobile_link footerMobile_linkPREFEITURA" href="http://www.capital.sp.gov.br/" target="_blank">
            <img class="footerMobile_link_img" src="<?php bloginfo('stylesheet_directory'); ?>/images/logo_mobile_prefeitura.png" alt="Logo Prefeitura">
        </a>
    </div>
    </div>
    <?php
}
?>
</body>
<?php wp_footer(); ?>
</html>