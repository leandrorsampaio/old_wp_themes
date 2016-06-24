<?php include('sidebar-idioma.php'); ?>
<div id="banner-fade">
    <!-------------------------- Slider ------------>
    <ul class="bjqs">
        <?php
        // Capturando os dados dos custom fields
        $args = array(
            'post_type' => 'slider',
            'idioma' => $idioma,
        );
        $slider = new WP_Query($args);
        if ($slider->have_posts()) {
            while ($slider->have_posts()) : $slider->the_post();
                $slider_img = get_field('slider_img');
                $slider_desc = get_field('slider_desc');
                $slider_texto = get_field('slider_texto');
                $slider_link = get_field('slider_link');

                $slider_cor = get_field('slider_cor');
                if ($slider_cor == 'Vermelho') {
                    $bgCss = 'bg-vermelho.png';
                    $colorCss = '#84449a';
                } elseif ($slider_cor == 'Laranja') {
                    $bgCss = 'bg-laranja.png';
                    $colorCss = '#faaa21';
                } elseif ($slider_cor == 'Amarelo') {
                    $bgCss = 'bg-amarelo.png';
                    $colorCss = '#FFFFFF';
                } elseif ($slider_cor == 'Verde') {
                    $bgCss = 'bg-verde.png';
                    $colorCss = '#84449a';
                } elseif ($slider_cor == 'Azul') {
                    $bgCss = 'bg-azul.png';
                    $colorCss = '#52ba66';
                } elseif ($slider_cor == 'Roxo') {
                    $bgCss = 'bg-roxo.png';
                    $colorCss = '#27AEFF';
                } else {
                    $bgCss = 'bg-vermelho.png';
                    $colorCss = '#ffc90f';
                }
                ?>
                <li>
                    <div class="slider_lista_content" style="background-image:url('<?php bloginfo('template_url') ?>/images/<?php echo $bgCss; ?>') !important;">
                        <a href="<?php echo $slider_link; ?>">
                            <h1 style="color:<?php echo $colorCss; ?> !important;">
                                <?php
                                // Conta carecteres e exibe o Titulo
                                $contador = get_the_title();
                                if ((strlen($contador)) < 50) {
                                    $limitador = substr(get_the_title(), 0, 50);
                                    echo $limitador;
                                } else {
                                    $limitador = substr(get_the_title(), 0, 50);
                                    echo $limitador . ' (...)';
                                }
                                ?>
                            </h1>
                            <h2 style="color:<?php echo $colorCss; ?> !important;">
                                <?php
                                // Conta carecteres e exibe o texto
                                $contador = $slider_texto;
                                if ((strlen($contador)) < 140) {
                                    $limitador = substr($slider_texto, 0, 140);
                                    echo $limitador;
                                } else {
                                    $limitador = substr($slider_texto, 0, 140);
                                    echo $limitador . ' (...)';
                                }
                                ?>
                            </h2>
                            <h3 style="color:<?php echo $colorCss; ?> !important;">
                                <?php
                                // Conta carecteres e exibe a legenda
                                $contador = $slider_desc;
                                if ((strlen($contador)) < 50) {
                                    $limitador = substr($slider_desc, 0, 50);
                                    echo $limitador;
                                } else {
                                    $limitador = substr($slider_desc, 0, 50);
                                    echo $limitador . ' (...)';
                                }
                                ?>
                            </h3>
                        </a>
                    </div>
                    <img class="slider_lista_item" style="background: url(<?php echo $slider_img; ?>)" alt="<?php echo $slider_desc; ?>" src="<?php bloginfo('template_url'); ?>/images/1.png">
                </li>					
                <?php
            endwhile;
        }
        wp_reset_query();
        ?>
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