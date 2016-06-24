<?php
if ($idioma == 3) {
    $titulo_divulgacao_siteinspec = 'divulgacao_siteinspec_titulo_es';
    $titulo_formulario_siteinspec = 'formulario_siteinspec_titulo_es';
} elseif ($idioma == 2) {
    $titulo_divulgacao_siteinspec = 'divulgacao_siteinspec_titulo_en';
    $titulo_formulario_siteinspec = 'formulario_siteinspec_titulo_en';
} else {
    $titulo_divulgacao_siteinspec = 'divulgacao_siteinspec_titulo_pt';
    $titulo_formulario_siteinspec = 'formulario_siteinspec_titulo_pt';
}
?>


<div class="content_block block-1x">
    <div class="tabcordion cspTabs cspTabs-azulClaro azulClaroTabs_interna">
        <ul class="nav nav-tabs cspTabs_ul cspTabs_ul-azulClaro">
            <li class="azulClaroTabs_interna_item active">
                <a data-target=".info" class="azulClaroTabs_interna_item_link">
                    <p class="azulClaroTabs_interna_item_link_text"><?php echo get_field($titulo_divulgacao_siteinspec); ?></p>
                </a>
            </li>
            <li class="azulClaroTabs_interna_item">
                <a data-target=".form" class="azulClaroTabs_interna_item_link">
                    <p class="azulClaroTabs_interna_item_link_text"><?php echo get_field($titulo_formulario_siteinspec); ?></p>
                </a>
            </li>            
        </ul>

        <div class="tab-content cspTabs_containers">
            <div class="tab-content-item info active cspTabs_containers_item_noBoarder azulClaroTabs_container azulClaroTabs_container-guia">
                <div class="wpWysiwyg wpWysiwyg-azulClaro">
                    <?php echo get_field($divulgacao_siteinspec); ?>
                </div>
            </div>
            <div class="tab-content-item form cspTabs_containers_item_noBoarder azulClaroTabs_container azulClaroTabs_container-guia">
                <div class="wpWysiwyg wpWysiwyg-azulClaro">
                    <?php echo get_field($formulario_siteinspec); ?>
                </div>
            </div>
        </div>
    </div>
</div>