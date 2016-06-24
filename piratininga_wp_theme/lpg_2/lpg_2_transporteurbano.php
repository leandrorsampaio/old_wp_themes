<?php
if ($idioma == 3) {
    $titulo_aeroporto = transpurbano_aeroporto_titulo_es;
    $titulo_aluguelcarro = transpurbano_aluguelcarro_titulo_es;
    $titulo_metro = transpurbano_metro_titulo_es;
    $titulo_trem = transpurbano_trem_titulo_es;
    $titulo_taxi = transpurbano_taxi_titulo_es;
    $titulo_bike = transpurbano_bike_titulo_es;
    $titulo_heli = transpurbano_heli_titulo_es;
    $titulo_onibus = transpurbano_onibus_titulo_es;
    $content_aeroporto = transpurbano_aeroporto_es;
    $content_aluguelcarro = transpurbano_aluguelcarro_es;
    $content_metro = transpurbano_metro_es;
    $content_trem = transpurbano_trem_es;
    $content_taxi = transpurbano_taxi_es;
    $content_bike = transpurbano_bike_es;
    $content_heli = transpurbano_heli_es;
    $content_onibus = transpurbano_onibus_es;
} elseif ($idioma == 2) {
    $titulo_aeroporto = transpurbano_aeroporto_titulo_en;
    $titulo_aluguelcarro = transpurbano_aluguelcarro_titulo_en;
    $titulo_metro = transpurbano_metro_titulo_en;
    $titulo_trem = transpurbano_trem_titulo_en;
    $titulo_taxi = transpurbano_taxi_titulo_en;
    $titulo_bike = transpurbano_bike_titulo_en;
    $titulo_heli = transpurbano_heli_titulo_en;
    $titulo_onibus = transpurbano_onibus_titulo_en;
    $content_aeroporto = transpurbano_aeroporto_en;
    $content_aluguelcarro = transpurbano_aluguelcarro_en;
    $content_metro = transpurbano_metro_en;
    $content_trem = transpurbano_trem_en;
    $content_taxi = transpurbano_taxi_en;
    $content_bike = transpurbano_bike_en;
    $content_heli = transpurbano_heli_en;
    $content_onibus = transpurbano_onibus_en;
} else {
    $titulo_aeroporto = transpurbano_aeroporto_titulo_pt;
    $titulo_aluguelcarro = transpurbano_aluguelcarro_titulo_pt;
    $titulo_metro = transpurbano_metro_titulo_pt;
    $titulo_trem = transpurbano_trem_titulo_pt;
    $titulo_taxi = transpurbano_taxi_titulo_pt;
    $titulo_bike = transpurbano_bike_titulo_pt;
    $titulo_heli = transpurbano_heli_titulo_pt;
    $titulo_onibus = transpurbano_onibus_titulo_pt;
    $content_aeroporto = transpurbano_aeroporto_pt;
    $content_aluguelcarro = transpurbano_aluguelcarro_pt;
    $content_metro = transpurbano_metro_pt;
    $content_trem = transpurbano_trem_pt;
    $content_taxi = transpurbano_taxi_pt;
    $content_bike = transpurbano_bike_pt;
    $content_heli = transpurbano_heli_pt;
    $content_onibus = transpurbano_onibus_pt;
}
?>
<div class="content_block block-1x">
    <div class="tabcordion cspTabs cspTabs-amarelo amareloTabs_interna">
        <ul class="nav nav-tabs cspTabs_ul cspTabs_ul-amarelo">
            <li class="amareloTabs_interna_item active">
                <a data-target=".aeroporto_transpurbano" class="amareloTabs_interna_item_link" style="background-image: url(<?php bloginfo('template_url'); ?>/images/aviao.png);">
                    <p class="amareloTabs_interna_item_link_text"><?php echo get_field($titulo_aeroporto); ?></p>
                </a>
            </li>
            <li class="amareloTabs_interna_item">
                <a data-target=".aluguelcarro_transpurbano" class="amareloTabs_interna_item_link" style="background-image: url(<?php bloginfo('template_url'); ?>/images/carro.png);">
                    <p class="amareloTabs_interna_item_link_text"><?php echo get_field($titulo_aluguelcarro); ?></p>
                </a>
            </li>            
            <li class="amareloTabs_interna_item">
                <a data-target=".metro_transpurbano" class="amareloTabs_interna_item_link" style="background-image: url(<?php bloginfo('template_url'); ?>/images/metro.png);">
                    <p class="amareloTabs_interna_item_link_text"><?php echo get_field($titulo_metro); ?></p>
                </a>
            </li>
            <li class="amareloTabs_interna_item">
                <a data-target=".trem_transpurbano" class="amareloTabs_interna_item_link" style="background-image: url(<?php bloginfo('template_url'); ?>/images/trem.png);">
                    <p class="amareloTabs_interna_item_link_text"><?php echo get_field($titulo_trem); ?></p>
                </a>
            </li>
            <li class="amareloTabs_interna_item">
                <a data-target=".taxi_transpurbano" class="amareloTabs_interna_item_link" style="background-image: url(<?php bloginfo('template_url'); ?>/images/taxi.png);">
                    <p class="amareloTabs_interna_item_link_text"><?php echo get_field($titulo_taxi); ?></p>
                </a>
            </li>
            <li class="amareloTabs_interna_item">
                <a data-target=".bike_transpurbano" class="amareloTabs_interna_item_link" style="background-image: url(<?php bloginfo('template_url'); ?>/images/bicicleta.png);">
                    <p class="amareloTabs_interna_item_link_text"><?php echo get_field($titulo_bike); ?></p>
                </a>
            </li>
            <li class="amareloTabs_interna_item">
                <a data-target=".heli_transpurbano" class="amareloTabs_interna_item_link" style="background-image: url(<?php bloginfo('template_url'); ?>/images/helicoptero.png);">
                    <p class="amareloTabs_interna_item_link_text"><?php echo get_field($titulo_heli); ?></p>
                </a>
            </li>
            <li class="amareloTabs_interna_item">
                <a data-target=".onibus_transpurbano" class="amareloTabs_interna_item_link" style="background-image: url(<?php bloginfo('template_url'); ?>/images/onibus.png);">
                    <p class="amareloTabs_interna_item_link_text"><?php echo get_field($titulo_onibus); ?></p>
                </a>
            </li>
        </ul>
        <div class="tab-content cspTabs_containers">
            <div class="tab-content-item aeroporto_transpurbano active cspTabs_containers_item amareloTabs_container amareloTabs_container-transporte background_aviao">
                <div class="wpWysiwyg wpWysiwyg-amarelo">
                    <?php echo get_field($content_aeroporto); ?>
                </div>
            </div>
            <div class="tab-content-item aluguelcarro_transpurbano cspTabs_containers_item amareloTabs_container amareloTabs_container-transporte background_carro">
                <div class="wpWysiwyg wpWysiwyg-amarelo">
                    <?php echo get_field($content_aluguelcarro); ?>
                </div>
            </div>
            <div class="tab-content-item metro_transpurbano cspTabs_containers_item amareloTabs_container amareloTabs_container-transporte background_metro">
                <div class="wpWysiwyg wpWysiwyg-amarelo">
                    <?php echo get_field($content_metro); ?>
                </div>
            </div>
            <div class="tab-content-item trem_transpurbano cspTabs_containers_item amareloTabs_container amareloTabs_container-transporte background_trem">
                <div class="wpWysiwyg wpWysiwyg-amarelo">
                    <?php echo get_field($content_trem); ?>
                </div>
            </div>
            <div class="tab-content-item taxi_transpurbano cspTabs_containers_item amareloTabs_container amareloTabs_container-transporte background_taxi">
                <div class="wpWysiwyg wpWysiwyg-amarelo">
                    <?php echo get_field($content_taxi); ?>
                </div>
            </div>
            <div class="tab-content-item bike_transpurbano cspTabs_containers_item amareloTabs_container amareloTabs_container-transporte background_bicicleta">
                <div class="wpWysiwyg wpWysiwyg-amarelo">
                    <?php echo get_field($content_bike); ?>
                </div>
            </div>
            <div class="tab-content-item heli_transpurbano cspTabs_containers_item amareloTabs_container amareloTabs_container-transporte background_helicoptero">
                <div class="wpWysiwyg wpWysiwyg-amarelo">
                    <?php echo get_field($content_heli); ?>
                </div>
            </div>
            <div class="tab-content-item onibus_transpurbano cspTabs_containers_item amareloTabs_container amareloTabs_container-transporte background_onibus">
                <div class="wpWysiwyg wpWysiwyg-amarelo">
                    <?php echo get_field($content_onibus); ?>
                </div>
            </div>            
        </div>
    </div>
</div>