<?php if ((is_home()) || (is_single(array(372, 373)))) {
    //se for a index-pt ou index-en
    ?>
    <li class="C2-footer tipo2x1 alturabox">
        <footer>
            <a class="C2-footer_logoCSP_home" href="http://cidadedesaopaulo.com/" target="_blank">
                <img src="<?php bloginfo('template_url') ?>/images/logoCSP.png" alt="Logo Cidade de São Paulo" />
            </a>
            <a class="C2-footer_logoSPTuris_home" href="http://spturis.com/" target="_blank">
                <img src="<?php bloginfo('template_url') ?>/images/logoSPTuris.png" alt="Logo SPTuris" />
            </a>
        </footer>
    </li>
<?php } else {
    ?>
    <div class="interna_footer">
        <div class="C2-footer tipo2x1  footer">
            <footer>
                <a class="C2-footer_logoCSP" href="http://cidadedesaopaulo.com/" target="_blank">
                    <img src="<?php bloginfo('template_url') ?>/images/logoCSP.png" alt="Logo Cidade de São Paulo" />
                </a>
                <a class="C2-footer_logoSPTuris" href="http://spturis.com/" target="_blank">
                    <img src="<?php bloginfo('template_url') ?>/images/logoSPTuris.png" alt="Logo SPTuris" />
                </a>
            </footer>
        </div>
        <div class="interna_footer_pattern tipo2x1">
        </div>
    </div>
    </div><!-- DIV INTERNA --->
    <?php
}
wp_footer();
?>
</div> <!-- DIV TUDO -->
</body>
</html>