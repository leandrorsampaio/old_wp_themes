<div id="boxGaleria" style="border-color: <?php echo $cor1; ?>;">
    <div id="boxGaleria_boxTitle" style="background-color: <?php echo $cor1; ?>;">
        <h3 id="boxGaleria_boxTitle_text" style="color: <?php echo $cor2; ?>;">&Uacute;ltimas fotos</h3>
    </div>
    <div id="boxGaleria_destaque">
        <?php
        //---------------------------------- Query Galerias
        $box2 = new WP_Query('post_type=galerias&posts_per_page=1&p=' . get_field('id_galeria_principal'));
        while ($box2->have_posts()) : $box2->the_post();
            $images = get_posts(array("post_type" => "attachment", "post_parent" => $post->ID, "orderby" => "rand", "numberposts" => 1));
            foreach ($images as $image) {
                $urls = array();
                list ($url) = wp_get_attachment_image_src($image->ID, $s);
                echo '<img src="' . $url . '" alt="Imagem destaque da Escola de Samba" />';
            }
        endwhile;
        wp_reset_postdata();
        ?>
    </div>
    <div id="boxGaleria_lista">
        <h4 id="boxGaleria_lista_title">Veja mais fotos em nossas galerias:</h4>
        <div>
            <?php
            if (is_page()) {
                $args = array(
                    'post_type' => 'galerias',
                    'posts_per_page' => 6,
                );
            } else {
                if (is_single($vaivai)) {
                    $cat_escolasrelacionadas = $tax_vaivai;
                } elseif (is_single($atatuape)) {
                    $cat_escolasrelacionadas = $tax_atatuape;
                } elseif (is_single($mancha)) {
                    $cat_escolasrelacionadas = $tax_mancha;
                } elseif (is_single($rosasdeouro)) {
                    $cat_escolasrelacionadas = $tax_rosasdeouro;
                } elseif (is_single($x9)) {
                    $cat_escolasrelacionadas = $tax_x9;
                } elseif (is_single($aguiadeouro)) {
                    $cat_escolasrelacionadas = $tax_aguiadeouro;
                } elseif (is_single($dragoesdareal)) {
                    $cat_escolasrelacionadas = $tax_dragoesdareal;
                } elseif (is_single($nene)) {
                    $cat_escolasrelacionadas = $tax_nene;
                } elseif (is_single($mocidadealegre)) {
                    $cat_escolasrelacionadas = $tax_mocidadealegre;
                } elseif (is_single($gavioes)) {
                    $cat_escolasrelacionadas = $tax_gavioes;
                } elseif (is_single($tommaior)) {
                    $cat_escolasrelacionadas = $tax_tommaior;
                } elseif (is_single($uvilamaria)) {
                    $cat_escolasrelacionadas = $tax_uvilamaria;
                } elseif (is_single($tucuruvi)) {
                    $cat_escolasrelacionadas = $tax_tucuruvi;
                } elseif (is_single($imperadordecasaverde)) {
                    $cat_escolasrelacionadas = $tax_imperadordecasaverde;
                } elseif (is_single($usantabarbara)) {
                    $cat_escolasrelacionadas = $tax_usantabarbara;
                } elseif (is_single($uperuche)) {
                    $cat_escolasrelacionadas = $tax_uperuche;
                } elseif (is_single($camisaverdeebranco)) {
                    $cat_escolasrelacionadas = $tax_camisaverdeebranco;
                } elseif (is_single($imperadordoipiranga)) {
                    $cat_escolasrelacionadas = $tax_imperadordoipiranga;
                } elseif (is_single($leandro)) {
                    $cat_escolasrelacionadas = $tax_leandro;
                } elseif (is_single($perolanegra)) {
                    $cat_escolasrelacionadas = $tax_perolanegra;
                } elseif (is_single($estrela3)) {
                    $cat_escolasrelacionadas = $tax_estrela3;
                } elseif (is_single($morrocasaverde)) {
                    $cat_escolasrelacionadas = $tax_morrocasaverde;
                } elseif (is_single($uirapuru)) {
                    $cat_escolasrelacionadas = $tax_uirapuru;
                } elseif (is_single($usaolucas)) {
                    $cat_escolasrelacionadas = $tax_usaolucas;
                } elseif (is_single($tup)) {
                    $cat_escolasrelacionadas = $tax_tup;
                } elseif (is_single($dbosco)) {
                    $cat_escolasrelacionadas = $tax_dbosco;
                } elseif (is_single($barroca)) {
                    $cat_escolasrelacionadas = $tax_barroca;
                } elseif (is_single($torcidajovem)) {
                    $cat_escolasrelacionadas = $tax_torcidajovem;
                } elseif (is_single($coloradodobras)) {
                    $cat_escolasrelacionadas = $tax_coloradodobras;
                } elseif (is_single($camisa12)) {
                    $cat_escolasrelacionadas = $tax_camisa12;
                } elseif (is_single($tradicaoalbertinense)) {
                    $cat_escolasrelacionadas = $tax_tradicaoalbertinense;
                } elseif (is_single($provadefogo)) {
                    $cat_escolasrelacionadas = $tax_provadefogo;
                } elseif (is_single($mooca)) {
                    $cat_escolasrelacionadas = $tax_mooca;
                } elseif (is_single($barroca)) {
                    $cat_escolasrelacionadas = $tax_barroca;
                } elseif (is_single($viladalila)) {
                    $cat_escolasrelacionadas = $tax_viladalila;
                } elseif (is_single($independentetricolor)) {
                    $cat_escolasrelacionadas = $tax_independentetricolor;
                } else {
                    $cat_escolasrelacionadas = $tax_vaivai;
                }
                $args = array(
                    'post_type' => 'galerias',
                    'escolasrelacionadas' => $cat_escolasrelacionadas,
                    'posts_per_page' => 8,
                    'orderby' => 'rand'
                );
            }
            echo '<ul id="boxGaleria_lista_ul">';
            //---------------------------------- Query Escolas
            $asideposts = new WP_Query($args);
            while ($asideposts->have_posts()) : $asideposts->the_post();
                ?>
                <li class="boxGaleria_lista_ul_li">
                    <a class="boxGaleria_lista_ul_li_a" href="<?php the_permalink();?>">
                        <img class="boxGaleria_lista_ul_li_a_img" src="<?php bloginfo('template_url') ?>/images/list_mask.png" style="background-color: <?php echo $cor1; ?>;" alt="" />
                        <?php the_title(); ?>
                    </a>
                </li>
                <?php
            endwhile;
            wp_reset_postdata();
            echo '</ul>';
            ?>
        </div>
    </div>
</div>