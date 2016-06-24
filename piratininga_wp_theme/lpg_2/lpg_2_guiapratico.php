<?php
if ($idioma == 3) {
    $titulo_moeda = $guiapratico_moeda_titulo_es;
    $titulo_religiao = $guiapratico_religiao_titulo_es;
    $titulo_cultura = $guiapratico_cultura_titulo_es;
    $titulo_visto = $guiapratico_visto_titulo_es;
    $titulo_perguntas = $guiapratico_perguntas_titulo_es;
    $titulo_frases = $guiapratico_frases_titulo_es;
    $titulo_clima = $guiapratico_clima_titulo_es;
    $titulo_comida = $guiapratico_comida_titulo_es;
    $titulo_cits = $guiapratico_cits_titulo_es;
    $titulo_sustentavel = $guiapratico_sustentavel_titulo_es;
    $content_moeda = $guiapratico_moeda_es;
    $content_religiao = $guiapratico_religiao_es;
    $content_cultura = $guiapratico_cultura_es;
    $content_visto = $guiapratico_visto_es;
    $content_perguntas = $guiapratico_perguntas_es;
    $content_frases = $guiapratico_frases_es;
    $content_clima = $guiapratico_clima_es;
    $content_comida = $guiapratico_comida_es;
    $content_cits = $guiapratico_cits_es;
    $content_sustentavel = $guiapratico_sustentavel_es;
} elseif ($idioma == 2) {
    $titulo_moeda = $guiapratico_moeda_titulo_en;
    $titulo_religiao = $guiapratico_religiao_titulo_en;
    $titulo_cultura = $guiapratico_cultura_titulo_en;
    $titulo_visto = $guiapratico_visto_titulo_en;
    $titulo_perguntas = $guiapratico_perguntas_titulo_en;
    $titulo_frases = $guiapratico_frases_titulo_en;
    $titulo_clima = $guiapratico_clima_titulo_en;
    $titulo_comida = $guiapratico_comida_titulo_en;
    $titulo_cits = $guiapratico_cits_titulo_en;
    $titulo_sustentavel = $guiapratico_sustentavel_titulo_en;
    $content_moeda = $guiapratico_moeda_en;
    $content_religiao = $guiapratico_religiao_en;
    $content_cultura = $guiapratico_cultura_en;
    $content_visto = $guiapratico_visto_en;
    $content_perguntas = $guiapratico_perguntas_en;
    $content_frases = $guiapratico_frases_en;
    $content_clima = $guiapratico_clima_en;
    $content_comida = $guiapratico_comida_en;
    $content_cits = $guiapratico_cits_en;
    $content_sustentavel = $guiapratico_sustentavel_en;
} else {
    $titulo_moeda = $guiapratico_moeda_titulo_pt;
    $titulo_religiao = $guiapratico_religiao_titulo_pt;
    $titulo_cultura = $guiapratico_cultura_titulo_pt;
    $titulo_visto = $guiapratico_visto_titulo_pt;
    $titulo_perguntas = $guiapratico_perguntas_titulo_pt;
    $titulo_frases = $guiapratico_frases_titulo_pt;
    $titulo_clima = $guiapratico_clima_titulo_pt;
    $titulo_comida = $guiapratico_comida_titulo_pt;
    $titulo_cits = $guiapratico_cits_titulo_pt;
    $titulo_sustentavel = $guiapratico_sustentavel_titulo_pt;
    $content_moeda = $guiapratico_moeda_pt;
    $content_religiao = $guiapratico_religiao_pt;
    $content_cultura = $guiapratico_cultura_pt;
    $content_visto = $guiapratico_visto_pt;
    $content_perguntas = $guiapratico_perguntas_pt;
    $content_frases = $guiapratico_frases_pt;
    $content_clima = $guiapratico_clima_pt;
    $content_comida = $guiapratico_comida_pt;
    $content_cits = $guiapratico_cits_pt;
    $content_sustentavel = $guiapratico_sustentavel_pt;
}
?>
<div class="content_block block-1x">
    <div class="tabcordion cspTabs cspTabs-amarelo amareloTabs_interna">
        <ul class="nav nav-tabs cspTabs_ul cspTabs_ul-amarelo">
            <li class="amareloTabs_interna_item active">
                <a data-target=".moeda_guiapratico" class="amareloTabs_interna_item_link" style="background-image: url(<?php bloginfo('template_url'); ?>/images/moeda.png);">
                    <p class="amareloTabs_interna_item_link_text"><?php echo get_field($titulo_moeda); ?></p>
                </a>
            </li>
            <li class="amareloTabs_interna_item">
                <a data-target=".religiao_guiapratico" class="amareloTabs_interna_item_link" style="background-image: url(<?php bloginfo('template_url'); ?>/images/religiao.png);">
                    <p class="amareloTabs_interna_item_link_text"><?php echo get_field($titulo_religiao); ?></p>
                </a>
            </li>            
            <li class="amareloTabs_interna_item">
                <a data-target=".cultura_guiapratico" class="amareloTabs_interna_item_link" style="background-image: url(<?php bloginfo('template_url'); ?>/images/cultura.png);">
                    <p class="amareloTabs_interna_item_link_text"><?php echo get_field($titulo_cultura); ?></p>
                </a>
            </li>
            <li class="amareloTabs_interna_item">
                <a data-target=".vistos_guiapratico" class="amareloTabs_interna_item_link" style="background-image: url(<?php bloginfo('template_url'); ?>/images/vistoeconsulados.png);">
                    <p class="amareloTabs_interna_item_link_text"><?php echo get_field($titulo_visto); ?></p>
                </a>
            </li>
            <li class="amareloTabs_interna_item">
                <a data-target=".infos_guiapratico" class="amareloTabs_interna_item_link" style="background-image: url(<?php bloginfo('template_url'); ?>/images/info.png);">
                    <p class="amareloTabs_interna_item_link_text"><?php echo get_field($titulo_perguntas); ?></p>
                </a>
            </li>
            <li class="amareloTabs_interna_item">
                <a data-target=".frases_guiapratico" class="amareloTabs_interna_item_link" style="background-image: url(<?php bloginfo('template_url'); ?>/images/idioma.png);">
                    <p class="amareloTabs_interna_item_link_text"><?php echo get_field($titulo_frases); ?></p>
                </a>
            </li>
            <li class="amareloTabs_interna_item">
                <a data-target=".clima_guiapratico" class="amareloTabs_interna_item_link" style="background-image: url(<?php bloginfo('template_url'); ?>/images/clima.png);">
                    <p class="amareloTabs_interna_item_link_text"><?php echo get_field($titulo_clima); ?></p>
                </a>
            </li>
            <li class="amareloTabs_interna_item">
                <a data-target=".comida_guiapratico" class="amareloTabs_interna_item_link" style="background-image: url(<?php bloginfo('template_url'); ?>/images/comida.png);">
                    <p class="amareloTabs_interna_item_link_text"><?php echo get_field($titulo_comida); ?></p>
                </a>
            </li>
            <li class="amareloTabs_interna_item">
                <a data-target=".cits_guiapratico" class="amareloTabs_interna_item_link" style="background-image: url(<?php bloginfo('template_url'); ?>/images/cits.png);">
                    <p class="amareloTabs_interna_item_link_text"><?php echo get_field($titulo_cits); ?></p>
                </a>
            </li>
            <li class="amareloTabs_interna_item">
                <a data-target=".sustentavel_guiapratico" class="amareloTabs_interna_item_link" style="background-image: url(<?php bloginfo('template_url'); ?>/images/turismosustentavel.png);">
                    <p class="amareloTabs_interna_item_link_text"><?php echo get_field($titulo_sustentavel); ?></p>
                </a>
            </li>
        </ul>
        <div class="tab-content cspTabs_containers">
            <div class="tab-content-item moeda_guiapratico active cspTabs_containers_item amareloTabs_container amareloTabs_container-guia background_moeda">
                <div class="wpWysiwyg wpWysiwyg-amarelo">
                    <?php echo get_field($content_moeda); ?>
                </div>
            </div>

            <div class="tab-content-item religiao_guiapratico cspTabs_containers_item amareloTabs_container amareloTabs_container-guia background_religiao">
                <div class="wpWysiwyg wpWysiwyg-amarelo">
                    <?php echo get_field($content_religiao); ?>
                </div>
            </div>
            <div class="tab-content-item cultura_guiapratico cspTabs_containers_item amareloTabs_container amareloTabs_container-guia background_cultura">
                <div class="wpWysiwyg wpWysiwyg-amarelo">
                    <?php echo get_field($content_cultura); ?>
                </div>
            </div>
            <div class="tab-content-item vistos_guiapratico cspTabs_containers_item amareloTabs_container amareloTabs_container-guia background_visto">
                <div class="wpWysiwyg wpWysiwyg-amarelo">
                    <?php echo get_field($content_visto); ?>
                </div>
            </div>
            <div class="tab-content-item infos_guiapratico cspTabs_containers_item amareloTabs_container amareloTabs_container-guia background_perguntas">
                <div class="wpWysiwyg wpWysiwyg-amarelo">
                    <?php echo get_field($content_perguntas); ?>
                </div>
            </div>
            <div class="tab-content-item frases_guiapratico cspTabs_containers_item amareloTabs_container amareloTabs_container-guia background_frases">
                <div class="wpWysiwyg wpWysiwyg-amarelo">
                    <?php echo get_field($content_frases); ?>
                </div>
            </div>
            <div class="tab-content-item clima_guiapratico cspTabs_containers_item amareloTabs_container amareloTabs_container-guia background_clima">
                <div class="wpWysiwyg wpWysiwyg-amarelo">
                    <?php echo get_field($content_clima); ?>
                </div>
            </div>
            <div class="tab-content-item comida_guiapratico cspTabs_containers_item amareloTabs_container amareloTabs_container-guia background_culinaria">
                <div class="wpWysiwyg wpWysiwyg-amarelo">
                    <?php echo get_field($content_comida); ?>
                </div>
            </div>
            <div class="tab-content-item cits_guiapratico cspTabs_containers_item amareloTabs_container amareloTabs_container-guia background_cit">
                <div class="wpWysiwyg wpWysiwyg-amarelo">
                    <?php echo get_field($content_cits); ?>
                </div>
            </div>
            <div class="tab-content-item sustentavel_guiapratico cspTabs_containers_item amareloTabs_container amareloTabs_container-guia background_turismosustentavel">
                <div class="wpWysiwyg wpWysiwyg-amarelo">
                    <?php echo get_field($content_sustentavel); ?>
                </div>
            </div>
        </div>
    </div>
</div>