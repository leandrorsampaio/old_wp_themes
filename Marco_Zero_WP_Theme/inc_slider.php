<?php
// Se não tiver Créditos, coloca o padrao
if (!$slider_desc1) {
    $slider_desc1 = 'Cr&eacute;ditos: SPTuris';
}
if (!$slider_desc2) {
    $slider_desc2 = 'Cr&eacute;ditos: SPTuris';
}
if (!$slider_desc3) {
    $slider_desc3 = 'Cr&eacute;ditos: SPTuris';
}
if (!$slider_desc4) {
    $slider_desc4 = 'Cr&eacute;ditos: SPTuris';
}
?>
<div id="banner-fade">
    <!-------------------------- Slider ------------>
    <ul class="bjqs">
        <li>
            <img class="slider_lista_item" style="background: url(<?php echo $slider_img1; ?>)" alt="<?php echo $slider_desc1; ?>" src="<?php bloginfo('template_url');?>/images/1.png">
            <p class="slider_legenda"><?php echo $slider_desc1; ?></p>
        </li>					
        <li>
            <img class="slider_lista_item" style="background: url(<?php echo $slider_img2; ?>)" alt="<?php echo $slider_desc2; ?>" src="<?php bloginfo('template_url');?>/images/1.png">
            <p class="slider_legenda"><?php echo $slider_desc2; ?></p>
        </li>
        <li>
            <img class="slider_lista_item" style="background: url(<?php echo $slider_img3; ?>)" alt="<?php echo $slider_desc3; ?>" src="<?php bloginfo('template_url');?>/images/1.png">
            <p class="slider_legenda"><?php echo $slider_desc3; ?></p>
        </li>
        <li>
            <img class="slider_lista_item" style="background: url(<?php echo $slider_img4; ?>)" alt="<?php echo $slider_desc4; ?>" src="<?php bloginfo('template_url');?>/images/1.png">
            <p class="slider_legenda"><?php echo $slider_desc4; ?></p>
        </li>
    </ul>
</div>
<script class="secret-source">
    jQuery(document).ready(function($) {
        $('#banner-fade').bjqs({
            height      : 250,
            responsive  : true
        });
    });
</script>