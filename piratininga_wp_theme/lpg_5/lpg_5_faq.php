<?php
if ($idioma == 3) {
    $titulo_transporte_faq = 'transporte_faq_titulo_es';
    $titulo_feiras_faq = 'feiras_faq_titulo_es';
    $titulo_compras_faq = 'compras_faq_titulo_es';
    $titulo_citytour_faq = 'citytour_faq_titulo_es';
    $titulo_trocademoeda_faq = 'trocademoeda_faq_titulo_es';
    $titulo_programacao_faq = 'programacao_faq_titulo_es';
    $titulo_alimentacao_faq = 'alimentacao_faq_titulo_es';
    $titulo_agua_faq = 'agua_faq_titulo_es';
    $titulo_voltagem_faq = 'voltagem_faq_titulo_es';
    $titulo_hospitais_faq = 'hospitais_faq_titulo_es';
    $titulo_idioma_faq = 'idioma_faq_titulo_es';
} elseif ($idioma == 2) {
    $titulo_transporte_faq = 'transporte_faq_titulo_en';
    $titulo_feiras_faq = 'feiras_faq_titulo_en';
    $titulo_compras_faq = 'compras_faq_titulo_en';
    $titulo_citytour_faq = 'citytour_faq_titulo_en';
    $titulo_trocademoeda_faq = 'trocademoeda_faq_titulo_en';
    $titulo_programacao_faq = 'programacao_faq_titulo_en';
    $titulo_alimentacao_faq = 'alimentacao_faq_titulo_en';
    $titulo_agua_faq = 'agua_faq_titulo_en';
    $titulo_voltagem_faq = 'voltagem_faq_titulo_en';
    $titulo_hospitais_faq = 'hospitais_faq_titulo_en';
    $titulo_idioma_faq = 'idioma_faq_titulo_en';
} else {
    $titulo_transporte_faq = 'transporte_faq_titulo_pt';
    $titulo_feiras_faq = 'feiras_faq_titulo_pt';
    $titulo_compras_faq = 'compras_faq_titulo_pt';
    $titulo_citytour_faq = 'citytour_faq_titulo_pt';
    $titulo_trocademoeda_faq = 'trocademoeda_faq_titulo_pt';
    $titulo_programacao_faq = 'programacao_faq_titulo_pt';
    $titulo_alimentacao_faq = 'alimentacao_faq_titulo_pt';
    $titulo_agua_faq = 'agua_faq_titulo_pt';
    $titulo_voltagem_faq = 'voltagem_faq_titulo_pt';
    $titulo_hospitais_faq = 'hospitais_faq_titulo_pt';
    $titulo_idioma_faq = 'idioma_faq_titulo_pt';
}
?>

<div class="content_block block-1x">
    <div class="content_block_box">
        <div class="tabcordion cspTabs cspTabs-azulClaro azulClaroTabs_interna">
            <ul class="nav nav-tabs cspTabs_ul cspTabs_ul-azulClaro">
                <li class="azulClaroTabs_interna_item active">
                    <a data-target=".transporte" class="azulClaroTabs_interna_item_link">
                        <p class="azulClaroTabs_interna_item_link_text"><?php echo get_field($titulo_transporte_faq); ?></p>
                    </a>
                </li>
                <li class="azulClaroTabs_interna_item">
                    <a data-target=".feiras" class="azulClaroTabs_interna_item_link">
                        <p class="azulClaroTabs_interna_item_link_text"><?php echo get_field($titulo_feiras_faq); ?></p>
                    </a>
                </li>            
                <li class="azulClaroTabs_interna_item">
                    <a data-target=".compras" class="azulClaroTabs_interna_item_link">
                        <p class="azulClaroTabs_interna_item_link_text"><?php echo get_field($titulo_compras_faq); ?></p>
                    </a>
                </li>
                <li class="azulClaroTabs_interna_item">
                    <a data-target=".citytour" class="azulClaroTabs_interna_item_link">
                        <p class="azulClaroTabs_interna_item_link_text"><?php echo get_field($titulo_citytour_faq); ?></p>
                    </a>
                </li>
                <li class="azulClaroTabs_interna_item">
                    <a data-target=".trocademoeda" class="azulClaroTabs_interna_item_link">
                        <p class="azulClaroTabs_interna_item_link_text"><?php echo get_field($titulo_trocademoeda_faq); ?></p>
                    </a>
                </li>
                <li class="azulClaroTabs_interna_item">
                    <a data-target=".programacao" class="azulClaroTabs_interna_item_link">
                        <p class="azulClaroTabs_interna_item_link_text"><?php echo get_field($titulo_programacao_faq); ?></p>
                    </a>
                </li>
                <li class="azulClaroTabs_interna_item">
                    <a data-target=".alimentacao" class="azulClaroTabs_interna_item_link">
                        <p class="azulClaroTabs_interna_item_link_text"><?php echo get_field($titulo_alimentacao_faq); ?></p>
                    </a>
                </li>
                <li class="azulClaroTabs_interna_item">
                    <a data-target=".agua" class="azulClaroTabs_interna_item_link">
                        <p class="azulClaroTabs_interna_item_link_text"><?php echo get_field($titulo_agua_faq); ?></p>
                    </a>
                </li>
                <li class="azulClaroTabs_interna_item">
                    <a data-target=".voltagem" class="azulClaroTabs_interna_item_link">
                        <p class="azulClaroTabs_interna_item_link_text"><?php echo get_field($titulo_voltagem_faq); ?></p>
                    </a>
                </li>
                <li class="azulClaroTabs_interna_item">
                    <a data-target=".hospitais" class="azulClaroTabs_interna_item_link">
                        <p class="azulClaroTabs_interna_item_link_text"><?php echo get_field($titulo_hospitais_faq); ?></p>
                    </a>
                </li>
                <li class="azulClaroTabs_interna_item">
                    <a data-target=".idioma" class="azulClaroTabs_interna_item_link">
                        <p class="azulClaroTabs_interna_item_link_text"><?php echo get_field($titulo_idioma_faq); ?></p>
                    </a>
                </li>
            </ul>

            <div class="tab-content cspTabs_containers">
                <div class="tab-content-item transporte active cspTabs_containers_item_noBoarder azulClaroTabs_container azulClaroTabs_container-guia">
                    <div class="wpWysiwyg wpWysiwyg-azulClaro">
                        <?php echo get_field($transporte_faq); ?>
                    </div>
                </div>
                <div class="tab-content-item feiras cspTabs_containers_item_noBoarder azulClaroTabs_container azulClaroTabs_container-guia">
                    <div class="wpWysiwyg wpWysiwyg-azulClaro">
                        <?php echo get_field($feiras_faq); ?>
                    </div>
                </div>
                <div class="tab-content-item compras cspTabs_containers_item_noBoarder azulClaroTabs_container azulClaroTabs_container-guia">
                    <div class="wpWysiwyg wpWysiwyg-azulClaro">
                        <?php echo get_field($compras_faq); ?>
                    </div>
                </div>
                <div class="tab-content-item citytour cspTabs_containers_item_noBoarder azulClaroTabs_container azulClaroTabs_container-guia">
                    <div class="wpWysiwyg wpWysiwyg-azulClaro">
                        <?php echo get_field($citytour_faq); ?>
                    </div>
                </div>
                <div class="tab-content-item trocademoeda cspTabs_containers_item_noBoarder azulClaroTabs_container azulClaroTabs_container-guia">
                    <div class="wpWysiwyg wpWysiwyg-azulClaro">
                        <?php echo get_field($trocademoeda_faq); ?>
                    </div>
                </div>
                <div class="tab-content-item programacao cspTabs_containers_item_noBoarder azulClaroTabs_container azulClaroTabs_container-guia">
                    <div class="wpWysiwyg wpWysiwyg-azulClaro">
                        <?php echo get_field($programacao_faq); ?>
                    </div>
                </div>
                <div class="tab-content-item alimentacao cspTabs_containers_item_noBoarder azulClaroTabs_container azulClaroTabs_container-guia">
                    <div class="wpWysiwyg wpWysiwyg-azulClaro">
                        <?php echo get_field($alimentacao_faq); ?>
                    </div>
                </div>
                <div class="tab-content-item agua cspTabs_containers_item_noBoarder azulClaroTabs_container azulClaroTabs_container-guia">
                    <div class="wpWysiwyg wpWysiwyg-azulClaro">
                        <?php echo get_field($agua_faq); ?>
                    </div>
                </div>
                <div class="tab-content-item voltagem cspTabs_containers_item_noBoarder azulClaroTabs_container azulClaroTabs_container-guia">
                    <div class="wpWysiwyg wpWysiwyg-azulClaro">
                        <?php echo get_field($voltagem_faq); ?>
                    </div>
                </div>
                <div class="tab-content-item hospitais cspTabs_containers_item_noBoarder azulClaroTabs_container azulClaroTabs_container-guia">
                    <div class="wpWysiwyg wpWysiwyg-azulClaro">
                        <?php echo get_field($hospitais_faq); ?>
                    </div>
                </div>
                <div class="tab-content-item idioma cspTabs_containers_item_noBoarder azulClaroTabs_container azulClaroTabs_container-guia">
                    <div class="wpWysiwyg wpWysiwyg-azulClaro">
                        <?php echo get_field($idioma_faq); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>