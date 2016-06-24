<?php
// Sidebar Programador
include 'inc_programador.php';
?>
<?php
if (!wp_is_mobile()) {
    ?>
    <footer id="footer">
        <?php wp_footer(); ?>
        <div class="content">
            <ul class="megamenu footerMapa_ul"><!-- Begin Mega Menu -->
                <li>
                    <span class="footerMapa_btn">
                        <img src="<?php bloginfo('template_url'); ?>/images/map_site.png" alt="Logo Ecoturismo" />
                    </span><!-- Begin Item -->
                    <div class="megamenu_fullwidth footerMapa_container"><!-- Begin Item Container -->
                        <?php
                        $bullet = '<span class="fa fa-caret-right"></span>';
                        // BEM-VINDO
                        echo '<div class="mapaSite">';
                        echo '<h3>' . $main_bemvindo . '</h3>';
                        echo '<a href="' . get_permalink($bv_historia) . $code_pt . '">' . $bullet . $bv_historia_txtLink . '</a>';
                        echo '<a href="' . get_permalink($bv_apa) . $code_pt . '">' . $bullet . $bv_apa_txtLink . '</a>';
                        echo '<a href="' . get_permalink($bv_fauna) . $code_pt . '">' . $bullet . $bv_fauna_txtLink . '</a>';
                        echo '<a href="' . get_permalink($bv_mapa) . $code_pt . '">' . $bullet . $bv_mapa_txtLink . '</a>';
                        echo '<a href="' . get_permalink($bv_pat) . $code_pt . '">' . $bullet . $bv_pat_txtLink . '</a>';
                        echo '<a href="' . get_permalink($bv_dicas) . $code_pt . '">' . $bullet . $bv_dicas_txtLink . '</a>';
                        echo '<a href="' . get_permalink($bv_seguranca) . $code_pt . '">' . $bullet . $bv_seguranca_txtLink . '</a>';
                        echo '<a href="' . get_permalink($bv_destaques) . $code_pt . '">' . $bullet . $bv_destaques_txtLink . '</a>';
                        echo '</div>';
                        // ATRACOES
                        echo '<div class="mapaSite mapaSiteAtracoes">';
                        echo '<h3>' . $main_atracoes . '</h3>';
                        echo '<div class="mapaSite_atracoesEsq">';
                        echo '<a href="' . get_permalink($at_parques) . $code_pt . '">' . $bullet . $at_parques_txtLink . '</a>';
                        echo '<a href="' . get_permalink($at_aldeias) . $code_pt . '">' . $bullet . $at_aldeias_txtLink . '</a>';
                        echo '<a href="' . get_permalink($at_rios) . $code_pt . '">' . $bullet . $at_rios_txtLink . '</a>';
                        echo '<a href="' . get_permalink($at_mirantes) . $code_pt . '">' . $bullet . $at_mirantes_txtLink . '</a>';
                        echo '<a href="' . get_permalink($at_fazendas) . $code_pt . '">' . $bullet . $at_fazendas_txtLink . '</a>';
                        echo '<a href="' . get_permalink($at_centrosecumenicos) . $code_pt . '">' . $bullet . $at_centrosecumenicos_txtLink . '</a>';
                        echo '<a href="' . get_permalink($at_pesqueiros) . $code_pt . '">' . $bullet . $at_pesqueiros_txtLink . '</a>';
                        echo '<a href="' . get_permalink($at_artesanato) . $code_pt . '">' . $bullet . $at_artesanato_txtLink . '</a>';
                        echo '</div>';
                        echo '<div class="mapaSite_atracoesDir">';
                        echo '<a href="' . get_permalink($at_patrimonio) . $code_pt . '">' . $bullet . $at_patrimonio_txtLink . '</a>';
                        echo '<a href="' . get_permalink($at_golf) . $code_pt . '">' . $bullet . $at_golf_txtLink . '</a>';
                        echo '<a href="' . get_permalink($at_marinas) . $code_pt . '">' . $bullet . $at_marinas_txtLink . '</a>';
                        echo '<a href="' . get_permalink($at_centrocultural) . $code_pt . '">' . $bullet . $at_centrocultural_txtLink . '</a>';
                        //PLANETARIO echo '<a href="' . get_permalink($at_planetario) . $code_pt . '">' . $bullet . $at_planetario_txtLink . '</a>';
                        echo '<a href="' . get_permalink($at_borboletario) . $code_pt . '">' . $bullet . $at_borboletario_txtLink . '</a>';
                        echo '<a href="' . get_permalink($at_aventura) . $code_pt . '">' . $bullet . $at_aventura_txtLink . '</a>';
                        echo '<a href="' . get_permalink($at_flores) . $code_pt . '">' . $bullet . $at_flores_txtLink . '</a>';
                        echo '</div>';
                        echo '</div>';
                        // ROTEIROS
                        echo '<div class="mapaSite">';
                        echo '<h3>' . $main_roteiros . '</h3>';
                        echo '<a href="' . get_permalink($rt_mata) . $code_pt . '">' . $bullet . $rt_mata_txtLink . '</a>';
                        echo '<a href="' . get_permalink($rt_historia) . $code_pt . '">' . $bullet . $rt_historia_txtLink . '</a>';
                        echo '<a href="' . get_permalink($rt_religioso) . $code_pt . '">' . $bullet . $rt_religioso_txtLink . '</a>';
                        echo '<a href="' . get_permalink($rt_cicloturismo) . $code_pt . '">' . $bullet . $rt_cicloturismo_txtLink . '</a>';
                        echo '<a href="' . get_permalink($rt_nautico) . $code_pt . '">' . $bullet . $rt_nautico_txtLink . '</a>';
                        echo '</div>';
                        // SUSTENTABILIDADE
                        echo '<div class="mapaSite">';
                        echo '<h3>' . $main_sustentabilidadeV2 . '</h3>';
                        echo '<a href="' . get_permalink($cr_produtos) . $code_pt . '">' . $bullet . $cr_produtos_txtLink . '</a>';
                        //ARTESANATO echo '<a href="' . get_permalink($cr_artesanato) . $code_pt . '">' . $bullet . $cr_artesanato_txtLink . '</a>';
                        echo '<a href="' . get_permalink($cr_responsabilidade) . $code_pt . '">' . $bullet . $cr_responsabilidade_txtLink . '</a>';
                        // ROOFING echo '<a href="' . get_permalink($cr_roofing) . $code_pt . '">' . $bullet . $cr_roofing_txtLink . '</a>';
                        echo '<a href="' . get_permalink($cr_produtores) . $code_pt . '">' . $bullet . $cr_produtores_txtLink . '</a>';
                        echo '</div>';
                        // ONDE FICAR
                        echo '<div class="mapaSite">';
                        echo '<h3>' . $main_ondeficar . '</h3>';
                        echo '<a href="' . get_permalink($of_camping) . $code_pt . '">' . $bullet . $of_camping_txtLink . '</a>';
                        echo '<a href="' . get_permalink($of_alojamento) . $code_pt . '">' . $bullet . $of_alojamento_txtLink . '</a>';
                        echo '<a href="' . get_permalink($of_pousadas) . $code_pt . '">' . $bullet . $of_pousadas_txtLink . '</a>';
                        echo '</div>';
                        // ONDE COMER
                        echo '<div class="mapaSite">';
                        echo '<h3>' . $main_ondecomer . '</h3>';
                        //COMIDA DE RUA echo '<a href="' . get_permalink($oc_comidaderua) . $code_pt . '">' . $bullet . $oc_comidaderua_txtLink . '</a>';
                        echo '<a href="' . get_permalink($oc_mercado) . $code_pt . '">' . $bullet . $oc_mercado_txtLink . '</a>';
                        echo '<a href="' . get_permalink($oc_buteco) . $code_pt . '">' . $bullet . $oc_buteco_txtLink . '</a>';
                        echo '<a href="' . get_permalink($oc_pesqueiros) . $code_pt . '">' . $bullet . $oc_pesqueiros_txtLink . '</a>';
                        echo '<a href="' . get_permalink($oc_restaurantes) . $code_pt . '">' . $bullet . $oc_restaurantes_txtLink . '</a>';
                        echo '<a href="' . get_permalink($oc_caipira) . $code_pt . '">' . $bullet . $oc_caipira_txtLink . '</a>';
                        echo '<a href="' . get_permalink($oc_cafes) . $code_pt . '">' . $bullet . $oc_cafes_txtLink . '</a>';
                        echo '</div>';
                        // COMO CHEGAR
                        echo '<div class="mapaSite">';
                        echo '<h3>' . $main_comochegar . '</h3>';
                        echo '<a href="' . get_permalink($ch_onibus) . $code_pt . '">' . $bullet . $ch_onibus_txtLink . '</a>';
                        echo '<a href="' . get_permalink($ch_carro) . $code_pt . '">' . $bullet . $ch_carro_txtLink . '</a>';
                        echo '<a href="' . get_permalink($ch_trem) . $code_pt . '">' . $bullet . $ch_trem_txtLink . '</a>';
                        echo '<a href="' . get_permalink($ch_bicicleta) . $code_pt . '">' . $bullet . $ch_bicicleta_txtLink . '</a>';
                        echo '<a href="' . get_permalink($ch_agencias) . $code_pt . '">' . $bullet . $ch_agencias_txtLink . '</a>';
                        echo '<a href="' . get_permalink($ch_guias) . $code_pt . '">' . $bullet . $ch_guias_txtLink . '</a>';
                        echo '</div>';
                        ?>
                    </div><!-- End Item Container -->
                </li><!-- End Item -->
            </ul><!-- End Mega Menu -->
            <a href="<?php bloginfo('template_url'); ?>/guia_ecoturismo.pdf" class="footerMapa_ul" target="_blank">
                <span class="footerMapa_btn">
                    <img src="<?php bloginfo('template_url'); ?>/images/downloadicon.png" alt="Download" />
                </span>
            </a>
            <?php
            // Creditos para a home
            $linkContato = '<a href="' . get_permalink($dp_contato) . '?lang=' . $idiomaMenu . '"><span class="fa fa-envelope-o footerFotosSpan"></span></a>';
            $divCreditosAbre = '<div class="footerFotos">';
            $divCreditosFecha = '</div>';
            $creditoCordeiro = '<p>Fotos da homepage: </br> Jos&eacute; Cordeiro | SPTuris</p>';
            if (is_home()) {
                echo $divCreditosAbre . $linkContato . $creditoCordeiro . $divCreditosFecha;
            } else {
                echo $divCreditosAbre . $linkContato . $divCreditosFecha;
            }
            ?>
            <div class="logos">
                <a href="http://www.cidadedesaopaulo.com/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/sp_marca.png" alt="Cidade de Sao Paulo"></a>  
                <a href="http://spturis.com/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/spturis.png" alt="SPTuris"></a>
                <a href="http://www.capital.sp.gov.br/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/governo.png" alt="Prefeitura de Sao Paulo"></a>
            </div>
        </div>
    </footer>
    <?php
} else {
    // Se nao for desktop
    ?>
    <footer class="footerMob">
        <div class="footerMob_logos">
            <a class="footerMob_logos_csp" href="http://www.cidadedesaopaulo.com/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/sp_marca.png" alt="Cidade de Sao Paulo"></a>  
            <a class="footerMob_logos_spturis" href="http://spturis.com/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/spturis.png" alt="SPTuris"></a>
            <a class="footerMob_logos_prefeitura" href="http://www.capital.sp.gov.br/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/governo.png" alt="Prefeitura de Sao Paulo"></a>
        </div>
    </footer>
    <?php
}
?>
<script>
    // INDEX: CALCULA LARGURA E ALTURA
    // Função adaptImage()
    // Parâmetros: targetimg (objeto jquery com elementos selecionados)
    var varAltura = $(window).height(); // altura da janela do navegador
    var varLargura = $(window).width(); // largura da janela do navegador
    //sec 1 (slider)
    document.getElementById("sec1").style.width = varLargura + "px";
    document.getElementById("sec1").style.height = varAltura + "px";
</script>
</div> <!-- DIV TUDO -->
</body>
</html>