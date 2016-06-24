<?php get_header(); ?>
<div id="indexContent">
    <div id="indexContent_turisBike">
        <a href="<?php echo get_permalink(14); ?>" id="indexContent_turisBike_link">
            <img src="<?php bloginfo('template_url') ?>/images/below-turisbike.gif" alt="Turismo de Bike" />
            <div id="indexContent_turisBike_link_info">
                <h1 class="info_title-V1"><span>Turismo</span> de Bike</h1>
                <p class="info_resumo">Roteiros para viver a cidade e descobrir pontos tur&iacute;sticos, museus e outros atrativos</p>
            </div>
        </a>
    </div>
    <div id="indexContent_ciclofaixas">
        <a href="<?php echo get_permalink(12); ?>" id="indexContent_ciclofaixas_link">
            <img src="<?php bloginfo('template_url') ?>/images/below-ciclofaixa.gif" alt="Ciclofaixas" />
            <div id="indexContent_ciclofaixas_link_info">
                <h1 class="info_title-V1">Vias <span>exclusivas</span></h1>
                <p class="info_resumo">Confira as ciclofaixas e ciclovias de S&atilde;o Paulo separadas por regi&atilde;o</p>
            </div>
        </a>
    </div>
    <div id="indexContent_parques">
        <a href="<?php echo get_permalink(583); ?>" id="indexContent_parques_link">
            <img src="<?php bloginfo('template_url') ?>/images/below-parques.gif" alt="Parques" />
            <div id="indexContent_parques_link_info">
                <h1 class="info_title-V1"><span>Not&iacute;cias</span></h1>
                <p class="info_resumo">Fique sabendo as principais novidades relacionadas &agrave; bicicleta em SP </p>
            </div>
        </a>
    </div>
    <div id="indexContent_seguranca">
        <a href="<?php echo get_permalink(17); ?>" id="indexContent_seguranca_link">
            <img src="<?php bloginfo('template_url') ?>/images/below-seguranca.gif" alt="Pedale com seguran&ccedil;a" />
            <div id="indexContent_seguranca_link_info">
                <h1 class="info_title-V2"><span>Comporta-<br/>mento</span></h1>
                <p class="info_resumo">Veja dicas de seguran&ccedil;a e como agir ao pedalar na cidade</p>
            </div>
        </a>
    </div>
    <div id="indexContent_paraciclos">
        <a href="<?php echo get_permalink(21); ?>" id="indexContent_paraciclos_link">
            <img src="<?php bloginfo('template_url') ?>/images/below-paraciclos.gif" alt="Biciclet&aacute;rios e Paraciclos" />
            <div id="indexContent_paraciclos_link_info">
                <h1 class="info_title-V2">Bike <span>friendly</span></h1>
                <p class="info_resumo">Confira locais onde o ciclista &eacute; bem-vindo em SP</p>
            </div>
        </a>
    </div>
    <div id="indexContent_social">
        <a href="<?php echo get_permalink(73); ?>" id="indexContent_social_link">
            <img src="<?php bloginfo('template_url') ?>/images/below-social.gif" alt="Redes Sociais" usemap="#Map" />
            <map name="Map" id="Map">
                <area shape="rect" coords="5,3,122,217" href="https://www.facebook.com/TurismoemSP" target="_blank" />
                <area shape="rect" coords="126,6,243,217" href="http://twitter.com/turismosaopaulo" target="_blank" />
            </map>
        </a>
    </div>
    <div id="indexContent_metro">
        <a href="<?php echo get_permalink(57); ?>" id="indexContent_metro_link">
            <img src="<?php bloginfo('template_url') ?>/images/below-metro.gif" alt="Bike no Metr&ocirc; e no Trem" />
            <div id="indexContent_metro_link_info">
                <h1 class="info_title-V2"><span>Intermodal</span></h1>
                <p class="info_resumo">V&aacute; mais longe fazendo integra&ccedil;&atilde;o da bike com transporte coletivo</p>
            </div>
        </a>
    </div>
    <div id="indexContent_links">
        <a href="<?php echo get_permalink(59); ?>" id="indexContent_links_link">
            <img src="<?php bloginfo('template_url') ?>/images/below-links.gif" alt="Por a&iacute; - Links interesantes" />
            <div id="indexContent_links_link_info">
                <h1 class="info_title-V2"><span>Por a&iacute;</span></h1>
                <p class="info_resumo">Conhe&ccedil;a sites interessantes e aplicativos &uacute;teis sobre o mundo das bikes</p>
            </div>
        </a>
    </div>
    <div id="indexContent_aluguel">
        <a href="<?php echo get_permalink(29); ?>" id="indexContent_aluguel_link">
            <img src="<?php bloginfo('template_url') ?>/images/below-aluguel.gif" alt="Aluguel de Bikes" />
            <div id="indexContent_aluguel_link_info">
                <h1 class="info_title-V2"><span>Aluguel</span> de bikes</h1>
                <p class="info_resumo">Fa&ccedil;a loca&ccedil;&atilde;o de uma bicicleta e explore a cidade sobre duas rodas</p>
            </div>
        </a>
    </div>
</div>
<?php echo $TURISMO_resumo; ?>
<?php get_footer(); ?>