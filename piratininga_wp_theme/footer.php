<div class="parceiros containerFixed" <?php echo $noTranslate; ?>>
    <h6 class="parceiros_title">Nossos Parceiros Estrat&eacute;gicos</h6>
    <!-- Swiper -->
    <div class="swiper-container swiper-containerFooter">
        <div class="swiper-wrapper swiper-wrapperFooter">
            <?php
            $argsParceiros = array(
                'post_type' => 'parceiros',
                'posts_per_page' => -1,
            );
            global $queryParceiros;
            $queryParceiros = new WP_Query($argsParceiros);
            while ($queryParceiros->have_posts()) : $queryParceiros->the_post();
                //
                echo '<div class="swiper-slide">';
                echo '<a href="' . get_field('parceiros_site') . '" target="_blank">';
                echo '<img src="' . get_field('parceiros_logo') . '" alt="Logo ' . get_the_title() . '">';
                echo '</a>';
                echo '</div>';
            //
            endwhile;
            wp_reset_query();
            ?>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next swiper-button-nextFooter swiper-button-icon">
            <i class="fa fa-angle-right" style="font-size: 5em; color: #4f4f4f; margin-left: 42%;"></i>
        </div>
        <div class="swiper-button-prev swiper-button-prevFooter swiper-button-icon">
            <i class="fa fa-angle-left" style="font-size: 5em; color: #4f4f4f;"></i>
        </div>
    </div>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-containerFooter', {
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            spaceBetween: 30,
            loop: true,
            slidesPerView: 9
        });
    </script>
</div>
<?php
if (is_home()) {
    $cssfooterHome1 = '';
    $cssfooterHome2 = '';
    $corLogoPref = 'preto';
    $corLogoSpturis = 'preto';
    $cssCorMenuFooter = 'color:#212121;';
} else {
    $cssfooterHome1 = $cssCorFundo;
    $cssfooterHome2 = $cssCorFundoDark;
    $corLogoPref = 'branco';
    $corLogoSpturis = 'brancoTotal';
    $cssCorMenuFooter = 'color:#fff;';
}
?>

<!-- NEWSLETTER -->

<div class="ondeFicar_wrapper_links_news_footer" <?php echo $noTranslate; ?>>
    <div class="ondeFicar_wrapper_links_news_wrapper_footer containerFixed">
        <form class="formSearch" role="search" method="get" id="searchform" action="http://intranet.spturis.com.br/csp/">
            <p class="formNews_input_title">Digite seu e-mail para receber dicas de S&atilde;o Paulo:</p>
            <input class="formNews_input_footer formNewsDesk" type="text" value="Seu e-mail aqui para receber dicas de S&atilde;o Paulo" name="s" maxlenght="50" onclick="this.value = ''" />
            <input class="formNews_input_footer formNewsMob" type="text" value="Seu e-mail aqui" name="s" maxlenght="50" onclick="this.value = ''" />
            <button class="formNews_btn_footer" type="submit">confirmar</button>  
        </form>
    </div>
</div>

<!-- FIM - NEWSLETTER -->


<footer class="footer containerFull" style="<?php echo $cssfooterHome1; ?>" <?php echo $noTranslate; ?>>
    <div class="footer_wrapper containerFixed">
        <div class="footer_wrapper_menu" style="<?php echo $cssCorMenuFooter; ?>">
            <nav class="footer_wrapper_menu_col">
                <h4>
                    <a href="<?php echo get_permalink($lpg_1_pqsp); ?>">Porque<br/>S&atilde;o Paulo</a>
                </h4>
                <?php echo $menu_1; ?>
            </nav>
            <nav class="footer_wrapper_menu_col">
                <h4>
                    <a href="<?php echo get_permalink($lpg_2_planeje); ?>">Sua Viagem</a>
                </h4>
                <?php echo $menu_2; ?>
            </nav>
            <nav class="footer_wrapper_menu_col">
                <h4>
                    <a href="<?php echo get_permalink($lpg_3_vivasp); ?>">Viva<br/>S&atilde;o Paulo</a>
                </h4>
                <?php echo $menu_3; ?>
            </nav>
            <nav class="footer_wrapper_menu_col">
                <h4>
                    <a href="<?php echo get_permalink($lpg_4_acontece); ?>">Acontece</a>
                </h4>
                <?php echo $menu_4; ?>
            </nav>
            <nav class="footer_wrapper_menu_col">
                <h4>
                    <a href="<?php echo get_permalink($lpg_5_institucional); ?>">Institucional</a>
                </h4>
                <?php echo $menu_5; ?>
            </nav>
        </div>
        <div class="footer_wrapper_marcas">
            <a href="http://spturis.com" target="_blank" class="footer_wrapper_marcas_logo spturis">
                <img src="<?php echo get_bloginfo('template_url'); ?>/images/footer_wrapper_marcas_logo-spturis-<?php echo $corLogoSpturis; ?>.png" alt="Logo SPTuris" /> 
            </a>
            <a href="http://www.capital.sp.gov.br" target="_blank" class="footer_wrapper_marcas_logo pref">
                <img src="<?php echo get_bloginfo('template_url'); ?>/images/footer_wrapper_marcas_logo-pref-<?php echo $corLogoPref; ?>.png" alt="Logo Prefeitura de S&atilde;o Paulo" /> 
            </a>
        </div>

    </div>
    <div class="footer_bottom containerFull" style="<?php echo $cssfooterHome2 . $cssCorMenuFooter; ?>">
        <?php
        $argsCitacoes = array(
            'post_type' => 'citacoes',
            'orderby' => 'rand',
            'posts_per_page' => 1
        );
        global $queryCitacoes;
        $queryCitacoes = new WP_Query($argsCitacoes);
        while ($queryCitacoes->have_posts()) : $queryCitacoes->the_post();
            //
            if ($idioma == 1) {
                $citcao = 'citacao_pt';
            } elseif ($idioma == 2) {
                if (get_field('citacao_boo_en')) {
                    $citcao = 'citacao_en';
                } else {
                    $citcao = 'citacao_pt';
                }
            } elseif ($idioma == 3) {
                if (get_field('citacao_boo_es')) {
                    $citcao = 'citacao_es';
                } else {
                    $citcao = 'citacao_pt';
                }
            } else {
                $citcao = 'citacao_pt';
            }
            echo '<div class="footer_bottom_text" style="' . $cssCorMenuFooter . '">' . get_field($citcao) . '</div>';
            echo '<a href="' . get_field('citacao_link') . '" class="footer_bottom_author" target="_blank" style="' . $cssCorMenuFooter . '">Por ' . get_field('citacao_autor') . '</a>';
        //
        endwhile;
        wp_reset_query();
        ?>
    </div>
</footer>
<?php
if (is_home()) {
    echo '</div> <!-- div "container-INDEX" -->';
} else {
    echo '</div> <!-- div "container-INTERNA" -->';
}
?>
</div> <!-- div "all" -->
<?php wp_footer(); ?>
</body>
</html>