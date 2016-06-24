<div class="content_block block-1x">

    <?php
    global $alfabeto;
    global $profissao;
//
    $alfabeto = 0;
    $profissao = 0;
//
    $alfabetoGet = $_GET['alfa'];
    $profissaoGet = $_GET['profiss'];
//
    /*
      if ($alfabetoGet == 0 && $profissaoGet == 0 || $alfabetoGet != 0 && $profissaoGet != 0) {
      $dica_alfa_link = $getPermalink . $idiomaURL . '&alfa=';
      $dica_profiss_link = $getPermalink . $idiomaURL . '&profiss=';
      } elseif ($alfabetoGet == 0 && $profissaoGet != 0) {
      $dica_alfa_link = $getPermalink . $idiomaURL . '&profiss=' . $profissaoGet . '&alfa=';
      $dica_profiss_link = $getPermalink . $idiomaURL . '&profiss=';
      } elseif ($alfabetoGet != 0 && $profissaoGet == 0) {
      $dica_alfa_link = $getPermalink . $idiomaURL . '&alfa=';
      $dica_profiss_link = $getPermalink . $idiomaURL . '&alfa=' . $alfabetoGet . '&profiss=';
      } else {
      $dica_alfa_link = $getPermalink . $idiomaURL . '&alfa=';
      $dica_profiss_link = $getPermalink . $idiomaURL . '&profiss=';
      }
     */
    $dica_alfa_link = $getPermalink . $idiomaURL . '&alfa=';
    $dica_profiss_link = $getPermalink . $idiomaURL . '&profiss=';
    ?>
    <div class="dicasBusca">
        <div class="dicasBusca_select">
            <p>Selecione a profiss&atilde;o: </p>
            <?php
            $terms = get_terms('dicasprofissa');
            if (!empty($terms) && !is_wp_error($terms)) {
                echo '<select onChange="window.location.href = this.value">';
                foreach ($terms as $term) {
                    echo '<option value="' . $dica_profiss_link . $term->slug . '">' . $term->name . '</option>';
                }
                echo '</select>';
            }
            ?>
        </div>
        <ul class="dicasBusca_alfabeto">
            <li>
                <a href="<?php echo $dica_alfa_link . 'a'; ?>">A</a>
                <a href="<?php echo $dica_alfa_link . 'b'; ?>">B</a>
                <a href="<?php echo $dica_alfa_link . 'c'; ?>">C</a>
                <a href="<?php echo $dica_alfa_link . 'd'; ?>">D</a>
                <a href="<?php echo $dica_alfa_link . 'e'; ?>">E</a>
                <a href="<?php echo $dica_alfa_link . 'f'; ?>">F</a>
                <a href="<?php echo $dica_alfa_link . 'g'; ?>">G</a>
                <a href="<?php echo $dica_alfa_link . 'h'; ?>">H</a>
                <a href="<?php echo $dica_alfa_link . 'i'; ?>">I</a>
                <a href="<?php echo $dica_alfa_link . 'j'; ?>">J</a>
                <a href="<?php echo $dica_alfa_link . 'k'; ?>">K</a>
                <a href="<?php echo $dica_alfa_link . 'l'; ?>">L</a>
                <a href="<?php echo $dica_alfa_link . 'm'; ?>">M</a>
                <a href="<?php echo $dica_alfa_link . 'n'; ?>">N</a>
                <a href="<?php echo $dica_alfa_link . 'o'; ?>">O</a>
                <a href="<?php echo $dica_alfa_link . 'p'; ?>">P</a>
                <a href="<?php echo $dica_alfa_link . 'q'; ?>">Q</a>
                <a href="<?php echo $dica_alfa_link . 'r'; ?>">R</a>
                <a href="<?php echo $dica_alfa_link . 's'; ?>">S</a>
                <a href="<?php echo $dica_alfa_link . 't'; ?>">T</a>
                <a href="<?php echo $dica_alfa_link . 'u'; ?>">U</a>
                <a href="<?php echo $dica_alfa_link . 'v'; ?>">V</a>
                <a href="<?php echo $dica_alfa_link . 'w'; ?>">W</a>
                <a href="<?php echo $dica_alfa_link . 'x'; ?>">X</a>
                <a href="<?php echo $dica_alfa_link . 'y'; ?>">Y</a>
                <a href="<?php echo $dica_alfa_link . 'z'; ?>">Z</a>
            </li>        
        </ul>
    </div>

    <?php
    $argsLdt = array(
        'post_type' => 'dicas',
        'posts_per_page' => -1,
        'orderby' => 'rand',
        'dicasprofissa' => $profissaoGet,
        'dicasalfabeto' => $alfabetoGet
    );
//
    $contator = 0;
//
//
//
    global $queryLdt;
    $queryLdt = new WP_Query($argsLdt);
//
//
    if ($queryLdt->have_posts()) :
        ?>
        <div class="dicas">
            <div class="dicas_title" style="margin-top: 25px;">
                <i class="fa fa-heart"></i>
            </div>
            <div class="dicas_linha">
                <?php
                while ($queryLdt->have_posts()) : $queryLdt->the_post();
                    //
                    $dicasID = get_the_ID();
                    $dicasJOB = get_field_object($dicas_profissao, $ltdID);
                    //$dicasCONTENT = get_field_object($dicas_dica, $ltdID);
                    $dicasRESUMO = get_field_object($dicas_resumo, $ltdID);
                    //
                    if ($contator % 2 == 0) {
                        $noEsq = ' wpNone ';
                        $noDir = ' ';
                        $clear = ' wpClearBoth ';
                    } else {
                        $noEsq = ' ';
                        $noDir = ' wpNone ';
                        $clear = ' ';
                    }
                    ?>
                    <div class="dicas_linha_item <?php echo $clear; ?>">
                        <div class="dicas_linha_item_esqMark <?php echo $noEsq; ?>" style="margin-top: <?php echo rand(150, 300); ?>px;">
                            <img src="<?php bloginfo('template_url'); ?>/images/bg_bico_verde_esq.png" alt="" />
                        </div>
                        <div class="dicas_linha_item_box">
                            <a href="<?php echo get_permalink() . $idiomaURL; ?>">
                                <div class="dicas_linha_item_box_foto" style="background-image: url(<?php echo get_field('dicas_retrato'); ?>);">
                                    <p class="dicas_linha_item_box_foto_credito"><?php echo get_field('dicas_creditoretrato'); ?></p>
                                </div>
                            </a>
                            <div class="dicas_linha_item_box_info">
                                <a href="<?php echo get_permalink() . $idiomaURL; ?>">
                                    <h3 class="dicas_linha_item_box_info_nome"><?php echo get_field('dicas_nome'); ?></h3>
                                </a>
                                <?php
                                $terms = get_the_terms($post->ID, 'dicasprofissa');
                                if ($terms != null) {
                                    foreach ($terms as $term) {
                                        print '<p class="dicas_linha_item_box_info_job">' . $term->name . '</p>';
                                        unset($term);
                                    }
                                }
                                ?>
                                <a href="<?php echo get_permalink() . $idiomaURL; ?>">
                                    <div class="dicas_linha_item_box_info_thumb" style="background-image: url(<?php echo get_field('dicas_thumbnail'); ?>);">
                                        <p class="dicas_linha_item_box_info_credito"><?php echo get_field('dicas_thumbnai_credito'); ?></p>
                                    </div>
                                </a>
                                <div class="dicas_linha_item_box_info_text wpWysiwyg wpWysiwyg-branco">
                                    <?php echo $dicasRESUMO['value']; ?>
                                </div>
                            </div>
                        </div>
                        <div class="dicas_linha_item_dirMark <?php echo $noDir; ?>" style="margin-top: <?php echo rand(15, 130); ?>px;">
                            <img src="<?php bloginfo('template_url'); ?>/images/bg_bico_verde_dir.png" alt="" />
                        </div>
                    </div>
                    <?php
                    $contator = $contator + 1;
                //
                endwhile;
                wp_reset_query();
                ?>
            </div>
            <div class="dicas_title">
                <i class="fa fa-heart"></i>
            </div>
        </div>
        <?php
//
//
//
    else :
        // Se nao houver Resultados
        echo '<div class="content_block block-1x">' . '<div class="dicas">' . '<div class="dicas_title">' . '<h1>' .
        'Desculpe, nenhum resultado encontrado.' .
        '</h1>' . '</div>' . '</div>' . '</div>';
    endif;
    ?>
</div>
