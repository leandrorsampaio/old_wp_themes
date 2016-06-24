<!------------- As tabs funcionam com o script "tabs.js" na pasta js. -------------->
<div id="theContent_comoChegar">
    <div id="theContent_comoChegar_theContent">
        <?php the_content(); ?>
    </div>
    <div id="theContent_comoChegar_maps">
        <iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com.br/maps?sll=-22.54605174134102,-48.64628721151877&amp;sspn=9.996286375779002,21.589033011165107&amp;t=m&amp;q=Av.+Senador+Teot%C3%B4nio+Vilela,+261+Interlagos+-+S%C3%A3o+Paulo+-+SP+CEP+04801-010&amp;dg=opt&amp;ie=UTF8&amp;hq=Av.+Senador+Teot%C3%B4nio+Vilela,+261+Interlagos+-+S%C3%A3o+Paulo+-+SP+CEP+04801-010&amp;hnear=&amp;radius=15000&amp;ll=-23.70289,-46.697602&amp;spn=0.013753,0.018239&amp;z=15&amp;output=embed"></iframe>
    </div>
    <h1>Escolha o seu meio de transporte:</h1>
    <ul id="theContent_comoChegar_links">
        <li>
            <a id="theContent_comoChegar_links_trem" title="Trem" href="#trem"></a>
        </li>
        <li>
            <a id="theContent_comoChegar_links_bus" title="&Ocirc;nibus" href="#bus"></a>
        </li>
        <li>
            <a id="theContent_comoChegar_links_bike" title="Bicicleta" href="#bike"></a>
        </li>
        <li>
            <a id="theContent_comoChegar_links_carro" title="Carro" href="#carro"></a>
        </li>
        <li>
            <a id="theContent_comoChegar_links_taxi" title="T&aacute;xi" href="#taxi"></a>
        </li>
        <li>
            <a id="theContent_comoChegar_links_heli" title="Helic&oacute;ptero" href="#helicoptero"></a>
        </li>
        <li>
            <a id="theContent_comoChegar_links_aviao" title="Avi&atilde;o" href="#aviao"></a>
        </li>
    </ul>
    <div id="theContent_comoChegar_content">
        <ul id="theContent_comoChegar_content_ulComoChegar">
            <div class="theContent_comoChegar_content_item">
                <li id="theContent_comoChegar_content_item_trem" style="list-style-type: none !important;"></li>
                <h2>Trem</h2>
                <a name="trem"></a>
                <?php the_field('trem'); ?>
            </div>
            <div class="theContent_comoChegar_content_item">
                <li id="theContent_comoChegar_content_item_bus" style="list-style-type: none !important;"></li>
                <h2>&Ocirc;nibus</h2>
                <a name="bus"></a>
                <?php the_field('onibus'); ?>
            </div>
            <div class="theContent_comoChegar_content_item">
                <li id="theContent_comoChegar_content_item_bike" style="list-style-type: none !important;"></li>
                <h2>Bicicleta</h2>
                <a name="bike"></a>
                <?php the_field('bike'); ?>
            </div>
            <div class="theContent_comoChegar_content_item">
                <li id="theContent_comoChegar_content_item_carro" style="list-style-type: none !important;"></li>
                <h2>Carro</h2>
                <a name="carro"></a>
                <?php the_field('carro'); ?>
            </div>
            <div class="theContent_comoChegar_content_item">
                <li id="theContent_comoChegar_content_item_taxi" style="list-style-type: none !important;"></li>
                <h2>T&aacute;xi</h2>
                <a name="taxi"></a>
                <?php the_field('taxi'); ?>
            </div>
            <div class="theContent_comoChegar_content_item">
                <li id="theContent_comoChegar_content_item_heli" style="list-style-type: none !important;"></li>
                <h2>Helic&oacute;ptero</h2>
                <a name="helicoptero"></a>
                <?php the_field('helicoptero'); ?>
            </div>
            <div class="theContent_comoChegar_content_item" style="border: none!important">
                <li id="theContent_comoChegar_content_item_aviao" style="list-style-type: none !important;"></li>
                <h2>Avi&atilde;o</h2>
                <a name="aviao"></a>
                <?php the_field('aviao'); ?>
            </div>
        </ul>
    </div>
</div>