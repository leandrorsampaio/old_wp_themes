<?php
//Query de todas as galerias
$galerias = new WP_Query('post_type=galeria&posts_per_page=-1');
if ($galerias->have_posts()) {
    while ($galerias->have_posts()) : $galerias->the_post();
        ?>
        <div class="contentInterna_miolo_theContent_galerias">
            <h1 class="galeria_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <?php
            //
            //
            //--------------------------- GALERIAS
//Pega os dados dos custom fields
            $foto1 = get_field('foto_1');
            $foto2 = get_field('foto_2');
            $foto3 = get_field('foto_3');
            $foto4 = get_field('foto_4');
            $foto5 = get_field('foto_5');
            $foto6 = get_field('foto_6');
            $foto7 = get_field('foto_7');
            $foto8 = get_field('foto_8');
            $foto9 = get_field('foto_9');
            $foto10 = get_field('foto_10');
            $foto11 = get_field('foto_11');
            $foto12 = get_field('foto_12');
            $foto13 = get_field('foto_13');
            $foto14 = get_field('foto_14');
            $foto15 = get_field('foto_15');

            $legenda_1 = get_field('legenda_1');
            $legenda_2 = get_field('legenda_2');
            $legenda_3 = get_field('legenda_3');
            $legenda_4 = get_field('legenda_4');
            $legenda_5 = get_field('legenda_5');
            $legenda_6 = get_field('legenda_6');
            $legenda_7 = get_field('legenda_7');
            $legenda_8 = get_field('legenda_8');
            $legenda_9 = get_field('legenda_9');
            $legenda_10 = get_field('legenda_10');
            $legenda_11 = get_field('legenda_11');
            $legenda_12 = get_field('legenda_12');
            $legenda_13 = get_field('legenda_13');
            $legenda_14 = get_field('legenda_14');
            $legenda_15 = get_field('legenda_15');

//Atribuindo a novas variaveis
            $cont_1 = $foto1;
            $cont_2 = $foto2;
            $cont_3 = $foto3;
            $cont_4 = $foto4;
            $cont_5 = $foto5;
            $cont_6 = $foto6;
            $cont_7 = $foto7;
            $cont_8 = $foto8;
            $cont_9 = $foto9;
            $cont_10 = $foto10;
            $cont_11 = $foto11;
            $cont_12 = $foto12;
            $cont_13 = $foto13;
            $cont_14 = $foto14;
            $cont_15 = $foto15;
//Verificando se o campo esta preenchido ou em branco
            if ((strlen($cont_1)) > 3) {
                $cont_1 = 1;
            } else {
                $cont_1 = 0;
            }
            if ((strlen($cont_2)) > 3) {
                $cont_2 = 1;
            } else {
                $cont_2 = 0;
            }
            if ((strlen($cont_3)) > 3) {
                $cont_3 = 1;
            } else {
                $cont_3 = 0;
            }
            if ((strlen($cont_4)) > 3) {
                $cont_4 = 1;
            } else {
                $cont_4 = 0;
            }
            if ((strlen($cont_5)) > 3) {
                $cont_5 = 1;
            } else {
                $cont_5 = 0;
            }
            if ((strlen($cont_6)) > 3) {
                $cont_6 = 1;
            } else {
                $cont_6 = 0;
            }
            if ((strlen($cont_7)) > 3) {
                $cont_7 = 1;
            } else {
                $cont_7 = 0;
            }
            if ((strlen($cont_8)) > 3) {
                $cont_8 = 1;
            } else {
                $cont_8 = 0;
            }
            if ((strlen($cont_9)) > 3) {
                $cont_9 = 1;
            } else {
                $cont_9 = 0;
            }
            if ((strlen($cont_10)) > 3) {
                $cont_10 = 1;
            } else {
                $cont_10 = 0;
            }
            if ((strlen($cont_11)) > 3) {
                $cont_11 = 1;
            } else {
                $cont_11 = 0;
            }
            if ((strlen($cont_12)) > 3) {
                $cont_12 = 1;
            } else {
                $cont_12 = 0;
            }
            if ((strlen($cont_13)) > 3) {
                $cont_13 = 1;
            } else {
                $cont_13 = 0;
            }
            if ((strlen($cont_14)) > 3) {
                $cont_14 = 1;
            } else {
                $cont_14 = 0;
            }
            if ((strlen($cont_15)) > 3) {
                $cont_15 = 1;
            } else {
                $cont_15 = 0;
            }
            //
            //
            //Printa as imagens se os CF estiverem preenchidos
            if ($cont_1 == 1) {
                ?> 
                <a href="<?php the_field('foto_1') ?>">
                    <img id="galeria_item" class="colorbox-562" src="<?php the_field('foto_1'); ?>" title="<?php echo $legenda_1; ?>">
                </a>
                <?php
            } else {
                
            }
            if ($cont_2 == 1) {
                ?> 
                <a href="<?php the_field('foto_2') ?>">
                    <img id="galeria_item" class="colorbox-562" src="<?php the_field('foto_2'); ?>" title="<?php echo $legenda_2; ?>">
                </a>
                <?php
            } else {
                
            }
            if ($cont_3 == 1) {
                ?> 
                <a href="<?php the_field('foto_3') ?>">
                    <img id="galeria_item" class="colorbox-562" src="<?php the_field('foto_3'); ?>" title="<?php echo $legenda_3; ?>">
                </a>
                <?php
            } else {
                
            }
            if ($cont_4 == 1) {
                ?> 
                <a href="<?php the_field('foto_4') ?>">
                    <img id="galeria_item" class="colorbox-562" src="<?php the_field('foto_4'); ?>" title="<?php echo $legenda_4; ?>">
                </a>
                <?php
            } else {
                
            }
            if ($cont_5 == 1) {
                ?> 
                <a href="<?php the_field('foto_5') ?>">
                    <img id="galeria_item" class="colorbox-562" src="<?php the_field('foto_5'); ?>" title="<?php echo $legenda_5; ?>">
                </a>
                <?php
            } else {
                
            }
            if ($cont_6 == 1) {
                ?> 
                <a href="<?php the_field('foto_6') ?>">
                    <img id="galeria_item" class="colorbox-562" src="<?php the_field('foto_6'); ?>" title="<?php echo $legenda_6; ?>">
                </a>
                <?php
            } else {
                
            }
            if ($cont_7 == 1) {
                ?> 
                <a href="<?php the_field('foto_7') ?>">
                    <img id="galeria_item" class="colorbox-562" src="<?php the_field('foto_7'); ?>" title="<?php echo $legenda_7; ?>">
                </a>
                <?php
            } else {
                
            }
            if ($cont_8 == 1) {
                ?> 
                <a href="<?php the_field('foto_8') ?>">
                    <img id="galeria_item" class="colorbox-562" src="<?php the_field('foto_8'); ?>" title="<?php echo $legenda_8; ?>">
                </a>
                <?php
            } else {
                
            }
            if ($cont_9 == 1) {
                ?> 
                <a href="<?php the_field('foto_9') ?>">
                    <img id="galeria_item" class="colorbox-562" src="<?php the_field('foto_9'); ?>" title="<?php echo $legenda_9; ?>">
                </a>
                <?php
            } else {
                
            }
            if ($cont_10 == 1) {
                ?> 
                <a href="<?php the_field('foto_10') ?>">
                    <img id="galeria_item" class="colorbox-562" src="<?php the_field('foto_10'); ?>" title="<?php echo $legenda_10; ?>">
                </a>
                <?php
            } else {
                
            }
            if ($cont_11 == 1) {
                ?> 
                <a href="<?php the_field('foto_11') ?>">
                    <img id="galeria_item" class="colorbox-562" src="<?php the_field('foto_11'); ?>" title="<?php echo $legenda_11; ?>">
                </a>
                <?php
            } else {
                
            }
            if ($cont_12 == 1) {
                ?> 
                <a href="<?php the_field('foto_12') ?>">
                    <img id="galeria_item" class="colorbox-562" src="<?php the_field('foto_12'); ?>" title="<?php echo $legenda_12; ?>">
                </a>
                <?php
            } else {
                
            }
            if ($cont_13 == 1) {
                ?> 
                <a href="<?php the_field('foto_13') ?>">
                    <img id="galeria_item" class="colorbox-562" src="<?php the_field('foto_13'); ?>" title="<?php echo $legenda_13; ?>">
                </a>
                <?php
            } else {
                
            }
            if ($cont_14 == 1) {
                ?> 
                <a href="<?php the_field('foto_14') ?>">
                    <img id="galeria_item" class="colorbox-562" src="<?php the_field('foto_14'); ?>" title="<?php echo $legenda_14; ?>">
                </a>
                <?php
            } else {
                
            }
            if ($cont_15 == 1) {
                ?> 
                <a href="<?php the_field('foto_15') ?>">
                    <img id="galeria_item" class="colorbox-562" src="<?php the_field('foto_15'); ?>" title="<?php echo $legenda_15; ?>">
                </a>
                <?php
            } else {
                
            }
            ?>
            <br/>
            <?php the_content(); ?>
        </div>
        <?php
    endwhile;
}
wp_reset_query();
?>