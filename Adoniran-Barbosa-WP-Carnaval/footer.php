<?php
if (is_home()) {
    
} else {
    ?>
    <?php
    if (is_page(69)) {
        //se for linha do tempo
    } else {
        echo '<!-- englobador (open at header) --></div>';
    }
    ?>
    <?php
}
?>            
<div id="footer">
    <footer>
        <?php wp_footer(); ?>
        <div id="footer_policy">
            <?php
            if (is_page(4233)) {
                ?>
                <p>Para suporte t&eacute;cnico, entre em contato com a TXT. Telefone (11) 3056-4545. E-mail: <a href="mailto:credenciamento-imprensa@spturis.com">credenciamento-imprensa@spturis.com</a>.</p>
                <br/>
                <p>Para assessoria de imprensa, contate a Amigo!. Telefone: (11) 3873-5488, ramal 30. E-mail: <a href="mailto:carnaval2014@pressclub.com.br">carnaval2014@pressclub.com.br.</p>
                <br/>
                <p><a href="<?php bloginfo('stylesheet_directory'); ?>/Edital_Credenciamento_Imprensa_Carnaval2014.pdf" target="_blank">Clique aqui para abrir o edital.</p>
                <?php
            } else {
                ?>
                <p><a href="<?php bloginfo('stylesheet_directory'); ?>/policy.pdf" target="_blank">Pol&iacute;tica de privacidade e uso de imagem</a></p>
                <?php
            }
            ?> 
        </div>
        <div id="footer_logo">
            <a id="footer_logo_marcasp" href="http://cidadedesaopaulo.com" target="_blank">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/footer-marcasp.png" alt="Logo Cidade de Sa&atilde;o Paulo" />
            </a>
            <div id="footer_logo_separator"></div>
            <a id="footer_logo_spturis" href="http://spturis.com" target="_blank">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/footer-spturis.png" alt="Logo SPTuris" />
            </a>
            <a id="footer_logo_prefeitura" href="http://www.capital.sp.gov.br" target="_blank">
                <img src="<?php bloginfo('stylesheet_directory'); ?>/images/footer-prefeitura.png" alt="Logo Prefeitura de Sa&atilde;o Paulo" />
            </a>
        </div>
    </footer>
</div>
</div>
</body>
</html>