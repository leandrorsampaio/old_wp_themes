<footer>
    <div id="footer">
        <div id="footer_pudim"></div>
        <div id="footer_logosEtxt">
            <div id="footer_logosEtxt_container">
                <div id="footer_logos">
                    <div id="footer_info">
                        <p>*Informa&ccedil;&otilde;es sujeitas a altera&ccedil;&atilde;o sem aviso pr&eacute;vio.</p>
                    </div> 
                    <div class="footer_logos_img"><a href="http://www.cidadedesaopaulo.com" target="_blank" alt="Site Cidade de São Paulo"><img src="<?php bloginfo('template_url') ?>/images/footer_logo_marcaSP.png" alt="" /></a></div>
                    <div class="footer_logos_img"><a href="http://spturis.com" target="_blank" alt="Site SPTuris"><img src="<?php bloginfo('template_url') ?>/images/footer_logo_SPTuris.png" alt="" /></a></div>
                    <div class="footer_logos_img"><a href="http://www.capital.sp.gov.br" target="_blank" alt="Site Prefeitura de São Paulo"><img src="<?php bloginfo('template_url') ?>/images/footer_logo_SPPref.png" alt="" /></a></div>
                </div>
                <div id="footer_menu">
                    <div id="footer_content_menus_nav">
                        <nav>
                            <div id="footer_content_menus_nav_content">
                                <?php wp_nav_menu(array('theme_location' => 'menu-superior', 'container' => false)); ?>
                            </div>
                        </nav>
                    </div>
                </div>
                <?php get_sidebar('footer'); ?>
                <div id="footer_logos_linha2">
                    <div id="footer_logos_img_linha2_text">
                        <p>Associado a:</p>
                    </div> 
                    <div class="footer_logos_img_linha2"><a href="http://visitesaopaulo.com/" target="_blank" alt="UBRAFE"><img src="<?php bloginfo('template_url') ?>/images/footer_logo_SaoPaulo.png" alt="" /></a></div>
                    <div class="footer_logos_img_linha2"><a href="http://www.ifesnet.com/" target="_blank" alt="UBRAFE"><img src="<?php bloginfo('template_url') ?>/images/footer_logo_Ifes.png" alt="" /></a></div>
                    <div class="footer_logos_img_linha2"><a href="http://www.ubrafe.org.br/" target="_blank" alt="UBRAFE"><img src="<?php bloginfo('template_url') ?>/images/footer_logo_Ubrafe.png" alt="" /></a></div>
                </div>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</footer>
</div>
</body>
</html>