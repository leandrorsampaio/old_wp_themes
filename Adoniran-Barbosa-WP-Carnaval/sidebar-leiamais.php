<div id="leiamais">
    <h3 id="leiamais_title"  style="border-color: <?php echo $cor1; ?>;" alt="">Veja mais noticias</h3>
    <ul id="leiamais_lista">
        <?php
        if (is_single(array($imperadordecasaverde, $tucuruvi, $uvilamaria, $tommaior, $mocidadealegre, $gavioes, $nene, $aguiadeouro, $dragoesdareal, $x9, $mancha, $rosasdeouro, $atatuape, $vaivai))) {
            $grupo = $cat_especial;
        } elseif (is_single(array($estrela3, $perolanegra, $leandro, $imperadordoipiranga, $camisaverdeebranco, $uperuche, $usantabarbara))) {
            $grupo = $cat_acesso;
        } elseif (is_single(array($mooca, $provadefogo, $tradicaoalbertinense, $camisa12, $coloradodobras, $torcidajovem, $barroca, $dbosco, $tup, $usaolucas, $uirapuru, $morrocasaverde))) {
            $grupo = $cat_uesp;
        } else {
            
        }

        if (in_category($cat_especial, $cat_acesso, $cat_uesp)) {
            //---------------------------------- Query Leia Mais Com categoria
            $box1 = new WP_Query('cat=' . $grupo . '&posts_per_page=10&anocarnaval=2016&post_type=post');
            while ($box1->have_posts()) : $box1->the_post();
                ?>
                <li class="leiamais_lista_item">
                    <a class="leiamais_lista_item_link" href="<?php the_permalink(); ?>">
                        <img class="leiamais_lista_item_link_img" src="<?php bloginfo('template_url') ?>/images/list_mask.png" style="background-color: <?php echo $cor1; ?>;" alt="" />
                        <?php the_title(); ?>
                    </a>
                </li>
                <?php
            endwhile;
            wp_reset_postdata();
        } else {
            //---------------------------------- Query Leia Mais Sem categoria
            $box1 = new WP_Query('posts_per_page=10&orderby=rand&anocarnaval=2016&post_type=post');
            while ($box1->have_posts()) : $box1->the_post();
                ?>
                <li class="leiamais_lista_item">
                    <a class="leiamais_lista_item_link" href="<?php the_permalink(); ?>">
                        <img class="leiamais_lista_item_link_img" src="<?php bloginfo('template_url') ?>/images/list_mask.png" style="background-color: <?php echo $cor1; ?>;" alt="" />
                        <?php the_title(); ?>
                    </a>
                </li>
                <?php
            endwhile;
            wp_reset_postdata();
        }
        ?>
    </ul>
</div>