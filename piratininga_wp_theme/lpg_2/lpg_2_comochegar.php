<div class="content_block block-1x">
    <div class="tabcordion cspTabs cspTabs-amarelo amareloTabs_interna">
        <ul class="nav nav-tabs cspTabs_ul cspTabs_ul-amarelo">
            <li class="amareloTabs_interna_item active">
                <a data-target=".porar" class="amareloTabs_interna_item_link">
                    <p class="amareloTabs_interna_item_link_text">POR AR</p>
                </a>
            </li>
            <li class="amareloTabs_interna_item">
                <a data-target=".porterra" class="amareloTabs_interna_item_link">
                    <p class="amareloTabs_interna_item_link_text">POR TERRA</p>
                </a>
            </li>            
        </ul>
        <div class="tab-content cspTabs_containers bgAmarelo">
            <div class="tab-content-item porar active cspTabs_containers_item amareloTabs_container amareloTabs_container-guia noPaddingMobileTabs">
                <div class="background_comochegar">
                    <div class="wpWysiwyg wpWysiwyg-amarelo">
                        <?php echo get_field($comochegar_ar); ?>
                    </div>
                </div>
            </div>
            <div class="tab-content-item porterra cspTabs_containers_item amareloTabs_container amareloTabs_container-guia noPaddingMobileTabs">
                <div class="background_comochegar">
                    <div class="wpWysiwyg wpWysiwyg-amarelo">
                        <?php echo get_field($comochegar_terra); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>









<div class="content_block block-4x-3 block-first">
    <div class="content_block_box box-20y box-y-freeMobile">
        <div class="content_block_box_content" style="background-color: #F79D1F;">
            <h1 class="content_block_box_content_titlePadrao" style="text-align: left; margin-left: 15px;">EXPRESSO TUR&Iacute;STICO</h1>  

            <div class="wpWysiwyg wpWysiwyg-amarelo" style="color: #fff; margin-left: 15px; width: 98%;">
                <?php echo get_field($comochegar_expresso); ?>
            </div>


        </div>

    </div>


    <div class="content_block_box box-45y box-y-freeMobile">
        <div class="content_block_box_content bgAmarelo">
            <a href="<?php echo get_permalink($lpg_2_transporteurbano); ?>" target="_blank">
                <h1 class="content_block_box_content_titlePadrao bglinkAmarelo"><?php echo $lpg_2_transporteurbano_title['value']; ?></h1>       
            </a>


            <ul class="boxTransporteurbano">
                <li class="boxTransporteUrbano_item">
                    <a class="boxTransporteUrbano_item_link link-01 boxTransporteUrbanoInter" href="#">
                        <img class="boxTransporteUrbano_item_link_img" src="<?php bloginfo('template_url'); ?>/images/aviao.jpg" alt="" />
                        <span class="boxTransporteUrbano_item_link_title">AEROPORTOS</span>
                    </a>
                </li>
                <li class="boxTransporteUrbano_item">
                    <a class="boxTransporteUrbano_item_link link-02 boxTransporteUrbanoInter" href="#">
                        <img class="boxTransporteUrbano_item_link_img" src="<?php bloginfo('template_url'); ?>/images/aluguel.jpg" alt="" />
                        <span class="boxTransporteUrbano_item_link_title">ALUGUEL DE<br/>CARROS</span>
                    </a>
                </li>
                <li class="boxTransporteUrbano_item">
                    <a class="boxTransporteUrbano_item_link link-03 boxTransporteUrbanoInter" href="#">
                        <img class="boxTransporteUrbano_item_link_img" src="<?php bloginfo('template_url'); ?>/images/metro.jpg" alt="" />
                        <span class="boxTransporteUrbano_item_link_title">METR&Ocirc;</span>
                    </a>
                </li>
                <li class="boxTransporteUrbano_item">
                    <a class="boxTransporteUrbano_item_link link-04 boxTransporteUrbanoInter" href="#">
                        <img class="boxTransporteUrbano_item_link_img" src="<?php bloginfo('template_url'); ?>/images/trem.jpg" alt="" />
                        <span class="boxTransporteUrbano_item_link_title">TREM</span>
                    </a>
                </li>
                <li class="boxTransporteUrbano_item">
                    <a class="boxTransporteUrbano_item_link link-05 boxTransporteUrbanoInter" href="#">
                        <img class="boxTransporteUrbano_item_link_img" src="<?php bloginfo('template_url'); ?>/images/taxi.jpg" alt="" />
                        <span class="boxTransporteUrbano_item_link_title">T&Aacute;XI</span>
                    </a>
                </li>
                <li class="boxTransporteUrbano_item">
                    <a class="boxTransporteUrbano_item_link link-06 boxTransporteUrbanoInter" href="#">
                        <img class="boxTransporteUrbano_item_link_img" src="<?php bloginfo('template_url'); ?>/images/bike.jpg" alt="" />
                        <span class="boxTransporteUrbano_item_link_title">BICICLETA</span>
                    </a>
                </li>
                <li class="boxTransporteUrbano_item">
                    <a class="boxTransporteUrbano_item_link link-07 boxTransporteUrbanoInter" href="#">
                        <img class="boxTransporteUrbano_item_link_img" src="<?php bloginfo('template_url'); ?>/images/helicoptero.jpg" alt="" />
                        <span class="boxTransporteUrbano_item_link_title">HELIC&Oacute;PTERO</span>
                    </a>
                </li>
                <li class="boxTransporteUrbano_item">
                    <a class="boxTransporteUrbano_item_link link-08 boxTransporteUrbanoInter" href="#">
                        <img class="boxTransporteUrbano_item_link_img" src="<?php bloginfo('template_url'); ?>/images/bus.jpg" alt="" />
                        <span class="boxTransporteUrbano_item_link_title">&Ocirc;NIBUS</span>
                    </a>
                </li>
            </ul>





        </div>
    </div>

</div>



<div class="content_block block-3x block-last">

    <div class="content_block_box box-65y">
        <div class="content_block_box_content bgAmarelo background_ondeficarTRIP ">



            <a href="<?php echo get_permalink($lpg_2_ondeficar); ?>" target="_blank">
                <h1 class="content_block_box_content_titlePadrao"><?php echo $lpg_2_ondeficar_title['value']; ?></h1>            
            </a>

        </div>
    </div>

</div>
