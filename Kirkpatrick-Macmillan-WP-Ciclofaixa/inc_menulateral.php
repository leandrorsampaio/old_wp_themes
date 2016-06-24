<?php
$postType = get_post_type();


if (is_page(array($precisa, $friendly, $etiqueta))) {
    ?>
    <div id="turismo_esqNobar"></div>
    <?php
} elseif (is_page($roteiros) || $postType == 'roteiros') {
    ?>


    <?php
    // variavel para montar as cores do CSS
    $contadorCor = 1;
    //--------  Query Menu (ROTEIROS)
    global $varQuery;
    $varQuery = new WP_Query('post_type=roteiros&posts_per_page=-1');
    while ($varQuery->have_posts()) : $varQuery->the_post();
        ?>
        <li class="turismo_esq_lista_item">
            <a id="turismo_esq_lista_item_link-V<?php echo $contadorCor; ?>" class="transition30 noUnderlineHover" href="<?php echo get_permalink(); ?>">
                <span><?php echo get_the_title(); ?></span>
            </a>
        </li>
        <?php
        // variavel para montar as cores do CSS
        if ($contadorCor == 4) {
            $contadorCor = 1;
        } else {
            $contadorCor = $contadorCor + 1;
        }
    endwhile;
    wp_reset_query();
    ?>




    <?php
} elseif (is_page(array($vias, $vias_CE, $vias_ZN, $vias_ZS, $vias_ZO, $vias_ZL)) || $postType == 'vias') {
    ?>



    <li class="turismo_esq_lista_item">
        <a id="turismo_esq_lista_item_link-V1" class="transition30 noUnderlineHover" href="<?php echo get_permalink($vias); ?>">
            <span>Mapa de S&atilde;o Paulo</span>
        </a>
    </li>
    <li class="turismo_esq_lista_item">
        <a id="turismo_esq_lista_item_link-V2" class="transition30 noUnderlineHover" href="<?php echo get_permalink($vias_CE); ?>">
            <span>Centro</span>
        </a>
    </li>
    <li class="turismo_esq_lista_item">
        <a id="turismo_esq_lista_item_link-V3" class="transition30 noUnderlineHover" href="<?php echo get_permalink($vias_ZN); ?>">
            <span>Zona Norte</span>
        </a>
    </li>
    <li class="turismo_esq_lista_item">
        <a id="turismo_esq_lista_item_link-V4" class="transition30 noUnderlineHover" href="<?php echo get_permalink($vias_ZL); ?>">
            <span>Zona Leste</span>
        </a>
    </li>
    <li class="turismo_esq_lista_item">
        <a id="turismo_esq_lista_item_link-V1" class="transition30 noUnderlineHover" href="<?php echo get_permalink($vias_ZO); ?>">
            <span>Zona Oeste</span>
        </a>
    </li>
    <li class="turismo_esq_lista_item">
        <a id="turismo_esq_lista_item_link-V2" class="transition30 noUnderlineHover" href="<?php echo get_permalink($vias_ZS); ?>">
            <span>Zona Sul</span>
        </a>
    </li>




    <?php
} elseif (is_page(array($transporte_MT, $transporte_TR)) || $postType == 'transporte') {
    ?>


    <li class="turismo_esq_lista_item">
        <a id="turismo_esq_lista_item_link-V1" class="transition30 noUnderlineHover" href="<?php echo get_permalink($transporte_TR); ?>">
            <span>Trem</span>
        </a>
    </li>
    <li class="turismo_esq_lista_item">
        <a id="turismo_esq_lista_item_link-V2" class="transition30 noUnderlineHover" href="<?php echo get_permalink($transporte_MT); ?>">
            <span>Metrô</span>
        </a>
    </li>

        <?php
} elseif (is_page(array($porai,$porai_site,$porai_app)) || $postType == 'porai') {
    ?>

    <li class="turismo_esq_lista_item">
        <a id="turismo_esq_lista_item_link-V1" class="transition30 noUnderlineHover" href="<?php echo get_permalink($porai_site); ?>">
            <span>SITES</span>
        </a>
    </li>
    <li class="turismo_esq_lista_item">
        <a id="turismo_esq_lista_item_link-V2" class="transition30 noUnderlineHover" href="<?php echo get_permalink($porai_app); ?>">
            <span>APP's</span>
        </a>
    </li>


    

    <?php
} elseif (is_page($news) || $postType == 'noticia') {
    ?>



    <!-- <li class="turismo_esq_lista_item">
        <a id="ciclofaixas_esq_lista_item_link-V1" class="transition30 noUnderlineHover">
            Saiba <span>Mais:</span>
        </a>
    </li> -->
    <?php
    // variavel para montar as cores do CSS
    $contadorCor = 2;
    //--------  Query Menu (ROTEIROS)
    global $varQuery;
    $varQuery = new WP_Query('post_type=noticia&posts_per_page=4');
    while ($varQuery->have_posts()) : $varQuery->the_post();
        ?>
        <li class="turismo_esq_lista_item">
            <a id="turismo_esq_lista_item_link-V<?php echo $contadorCor; ?>" class="transition30 noUnderlineHover" href="<?php echo get_permalink(); ?>">
                <span><?php echo get_the_title(); ?></span>
            </a>
        </li>
        <?php
        // variavel para montar as cores do CSS
        if ($contadorCor == 4) {
            $contadorCor = 1;
        } else {
            $contadorCor = $contadorCor + 1;
        }
    endwhile;
    wp_reset_query();
    ?>
    <li class="turismo_esq_lista_item">
        <a id="turismo_esq_lista_item_link-V2" class="transition30 noUnderlineHover" href="<?php echo get_the_permalink($allNews); ?>">
            <span>Veja todas as not&iacute;cias</span>
        </a>
    </li>




    <?php
} else {
    echo '<div id="turismo_esqNobar"></div>';
}
?>

