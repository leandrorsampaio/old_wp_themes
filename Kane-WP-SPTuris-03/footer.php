<footer>
    <div id="footer">
        <div id="footer_menuElogos">
            <div id="footer_nav">
                <nav>
                    <div id="footer_nav_container">
                        <?php wp_nav_menu(array('theme_location' => 'menu-superior', 'container' => false)); ?>
                    </div>
                </nav>
            </div>
            <div id="footer_logosEtxt">
                <div id="footer_logos">
                    <div id="footer_logos_imgMarcaSp"><a href="http://www.cidadedesaopaulo.com" target="_blank" alt="Site Cidade de São Paulo"><img src="<?php bloginfo('template_url') ?>/images/footer_logo_marcaSP.png" alt="" /></a></div>
<!--                    <div class="footer_logos_img"><a href="http://www.saopauloexpo2020.com.br/pt" target="_blank" alt="Site São Paulo Expo 2020"><img src="<?php bloginfo('template_url') ?>/images/footer_logo_2020.png" alt="" /></a></div>-->
<!--                     <div class="footer_logos_img"><a href="http://www.fifa.com/worldcup/destination/cities/index.html" target="_blank" alt="Site Fifa World Cup - Host City"><img src="<?php bloginfo('template_url') ?>/images/footer_logo_host.png" alt="" /></a></div>-->
                    <div class="footer_logos_img"><a href="http://spturis.com/v7/index.php" target="_blank" alt="Site SPTuris"><img src="<?php bloginfo('template_url') ?>/images/footer_logo_SPTuris.png" alt="" /></a></div>
                    <div class="footer_logos_img"><a href="http://www.capital.sp.gov.br/portalpmsp/homec.jsp" target="_blank" alt="Site Prefeitura de São Paulo"><img src="<?php bloginfo('template_url') ?>/images/footer_logo_SPPref.png" alt="" /></a></div>
                </div>
                <p id="footer_txt">S&atilde;o Paulo Turismo S/A<br/>Av. Olavo Fontoura, 1.209 , Anhembi Parque, Santana - S&atilde;o Paulo/SP - CEP 02012-021 </p>
            </div>
        </div>
    </div>
    <?php wp_footer(); ?>
</footer>
</body>
</html>