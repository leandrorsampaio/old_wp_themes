<div class="content_block block-1x">
    <div class="tabcordion cspTabs cspTabs-azulClaro azulClaroTabs_interna">
        <ul class="nav nav-tabs cspTabs_ul cspTabs_ul-azulClaro">
            <li class="azulClaroTabs_interna_item active">
                <a data-target=".comtur" class="azulClaroTabs_interna_item_link">
                    <p class="azulClaroTabs_interna_item_link_text">CONSELHO MUNICIPAL DE TURISMO</p>
                </a>
            </li>
            <li class="azulClaroTabs_interna_item">
                <a data-target=".atas" class="azulClaroTabs_interna_item_link">
                    <p class="azulClaroTabs_interna_item_link_text">ATAS</p>
                </a>
            </li>            
            <li class="azulClaroTabs_interna_item">
                <a data-target=".platum" class="azulClaroTabs_interna_item_link">
                    <p class="azulClaroTabs_interna_item_link_text">PLATUM</p>
                </a>
            </li>
            <li class="azulClaroTabs_interna_item">
                <a data-target=".futur" class="azulClaroTabs_interna_item_link">
                    <p class="azulClaroTabs_interna_item_link_text">FUTUR</p>
                </a>
            </li>
        </ul>
        <div class="tab-content cspTabs_containers">
            <div class="tab-content-item comtur active cspTabs_containers_item_noBoarder azulClaroTabs_container azulClaroTabs_container-guia">
                <div class="wpWysiwyg wpWysiwyg-azulClaro">
                    <?php echo get_field($layoutpadrao_text); ?>
                </div>
            </div>
            <div class="tab-content-item atas cspTabs_containers_item_noBoarder azulClaroTabs_container azulClaroTabs_container-guia">
                <div class="wpWysiwyg wpWysiwyg-azulClaro">
                    <?php echo get_field('atas_comtur_pt'); ?>
                </div>
            </div>
            <div class="tab-content-item platum cspTabs_containers_item_noBoarder azulClaroTabs_container azulClaroTabs_container-guia">
                <div class="wpWysiwyg wpWysiwyg-azulClaro">
                    <?php echo get_field('platum_comtur_pt'); ?>
                </div>
            </div>
            <div class="tab-content-item futur cspTabs_containers_item_noBoarder azulClaroTabs_container azulClaroTabs_container-guia">
                <div class="wpWysiwyg wpWysiwyg-azulClaro">
                    <?php echo get_field('futur_comtur_pt'); ?>
                </div>
            </div>

        </div>
    </div>
</div>