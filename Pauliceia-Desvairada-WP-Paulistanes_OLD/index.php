<?php get_header(); ?>
<div id="indexContent">
    <div id="indexContent_palavraDestaque">

        <?php
        /* Chama Modulo da Palavra do dia */
        include ('mod_palavradodia.php');
        //--------  Query Palavra do dia (palavra destaque)
        global $palavradestaque;
        $palavradestaque = new WP_Query($query_palavra_do_dia);
        while ($palavradestaque->have_posts()) : $palavradestaque->the_post();
            ?>
            <div id="indexContent_palavraDestaque_titulo">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </div>
            <div id="indexContent_palavraDestaque_chave">
                <img src="<?php bloginfo('template_url'); ?>/images/chavePalavra.png" alt="Elemento decorativo" />
            </div>
            <div id="indexContent_palavraDestaque_imgDestak">
                <a href="<?php the_permalink(); ?>">
                    <?php
                    // Conta caracteres da URL da imagem
                    $contador = get_field('palavra_img');
                    if ((strlen($contador)) < 3) {
                        ?>
                        <img src="<?php bloginfo('template_url'); ?>/images/palavra-imagem-padrao.jpg" alt="Imagem indispon&iacute;vel" title="Imagem indispon&iacute;vel" />
                        <?php
                    } else {
                        ?>
                        <img src="<?php the_field('palavra_img'); ?>" alt="<?php the_field('palavra_credito'); ?>" title="<?php the_field('palavra_credito'); ?>" />
                        <?php
                    }
                    ?>                                    
                </a>
            </div>
            <div id="indexContent_palavraDestaque_descricao"><?php the_content(); ?></div>
            <?php
            $url_audio = get_field('palavra_audio');
            if ($url_audio) {
                ?>
                <div id="indexContent_palavraDestaque_audio">
                    <audio src="<?php echo $url_audio ?>" preload="auto" />
                </div>
                <?php
            } else {
                
            }
            ?>
            <?php
        endwhile;
        wp_reset_query();
        ?>
    </div>
    <div class="indexContent_boxTri boxTri-responsivel">
        <div id="indexContent_boxTri_palavras">
            <div id="indexContent_boxTri_palavras_balao">
                <img src="<?php bloginfo('template_url'); ?>/images/balaoBico-index.png" alt="Elemento decorativo" />
            </div>
            <div id="indexContent_boxTri_palavras_content">
                <h2>Mais Palavras</h2>
                <ul>
                    <?php
                    //--------  Query Mais Palavras
                    global $maispalavras;
                    $maispalavras = new WP_Query('orderby=rand&posts_per_page=3');
                    while ($maispalavras->have_posts()) : $maispalavras->the_post();
                        ?>
                        <li>
                            <a class="thumb" href="<?php the_permalink(); ?>">
                                <?php
                                // Conta carecteres e exibe o Titulo
                                $contador = get_field('palavra_img');
                                if ((strlen($contador)) < 3) {
                                    ?>
                                    <img src="<?php bloginfo('template_url'); ?>/images/palavra-imagem-padrao.jpg" alt="Imagem indispon&iacute;vel" title="Imagem indispon&iacute;vel" />
                                    <?php
                                } else {
                                    ?>
                                    <img src="<?php the_field('palavra_img'); ?>" alt="<?php the_field('palavra_credito'); ?>" title="<?php the_field('palavra_credito'); ?>" />
                                    <?php
                                }
                                ?>
                            </a>
                            <a class="palavra" href="<?php the_permalink(); ?>">
                                <?php
                                // Conta carecteres e exibe o Titulo
                                $contador = get_the_title();
                                if ((strlen($contador)) < 13) {
                                    $limitador = substr(get_the_title(), 0, 13);
                                    echo '<p>' . $limitador . '</p>';
                                } else {
                                    $limitador = substr(get_the_title(), 0, 10);
                                    echo '<p>' . $limitador . ' (...)</p>';
                                }
                                ?>
                            </a>
                        </li>
                        <?php
                    endwhile;
                    wp_reset_query();
                    ?>
                </ul>
            </div>
        </div>
        <div id="indexContent_boxTri_social">
            <div id="indexContent_boxTri_social_balao">
                <img src="<?php bloginfo('template_url'); ?>/images/balaoBico-index.png" alt="Elemento decorativo" />
            </div>
            <div id="indexContent_boxTri_social_content">
                <h2>Fique Ligado e Compartilhe</h2>
                <a href="https://www.facebook.com/TurismoemSP" target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/images/indexContent_boxTri_social-facebook.jpg" alt="Facebook Link" title="Facebook Link" />
                </a>
                <a href="https://twitter.com/turismosaopaulo" target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/images/indexContent_boxTri_social-twitter.jpg" alt="Twitter Link" title="Twitter Link" />
                </a>
            </div>
        </div>
    </div>
    <div class="indexContent_boxTri">
        <div id="indexContent_boxTri_mania">
            <?php
            //--------  Query Mania de Paulistano
            global $maniapaulistano;
            $maniapaulistano = new WP_Query('page_id=9');
            while ($maniapaulistano->have_posts()) : $maniapaulistano->the_post();
                ?>
                <a id="mania_titulo" href="<?php the_permalink(); ?>">Mania de Paulistano</a>
                <a id="mania_imagem" href="<?php the_permalink(); ?>">
                    <img src="<?php the_field('mania_imagem'); ?>" alt="<?php the_field('mania_creditos'); ?>" title="<?php the_field('mania_creditos'); ?>" />
                </a>
                <p id="mania_legenda"><?php the_field('mania_creditos'); ?></p>
                <a id="mania_resumo" href="<?php the_permalink(); ?>"><?php the_field('mania_chamada'); ?></a>
                <?php
            endwhile;
            wp_reset_query();
            ?>
        </div>
    </div>
    <div class="indexContent_boxTri boxTri-NoMargin">
        <div id="indexContent_boxTri_gastronomia">
            <a id="gastronomia_titulo" href="<?php echo bloginfo('url') . '/?page_id=13'; ?>">Gastronomia</a>
            <?php
            //--------  Query Gastronomia
            global $gastronomia;
            $gastronomia = new WP_Query('post_type=gastronomia&orderby=rand&posts_per_page=1');
            while ($gastronomia->have_posts()) : $gastronomia->the_post();
                ?>
                <a id="gastronomia_imagem" href="<?php echo bloginfo('url') . '/?page_id=13'; ?>">
                    <img src="<?php the_field('gastro_img'); ?>" alt="<?php the_field('gastro_creditos'); ?>" title="<?php the_field('gastro_creditos'); ?>" />
                </a>
                <p id="gastronomia_legenda"><?php the_field('gastro_creditos'); ?></p>
                <a id="gastronomia_item" href="<?php echo bloginfo('url') . '/?page_id=13'; ?>"><?php the_title(); ?></a>
                <a id="gastronomia_resumo" href="<?php echo bloginfo('url') . '/?page_id=13'; ?>"><?php the_field('gastro_chamada'); ?></a>
                <?php
            endwhile;
            wp_reset_query();
            ?>
        </div>
    </div>
    <div id="index_content_boxDialetos">
        <div id="boxDialetos-responsivel">
            <div id="index_content_boxDialetos_titulo">
                <a id="index_content_boxDialetos_titulo_link" href="#">
                    <h2>Dialetos da Cidade</h2>
                </a>
            </div>
            <div id="index_content_boxDialetos_carrossel">
                <?php include('mod_dialetos.php'); ?>
            </div>
        </div>
    </div>
    <div id="indexContent_boxBoiando">
        <a href="<?php echo bloginfo('url') . '/?page_id=11'; ?>" id="indexContent_boxBoiando_blackpower">
            <img src="<?php bloginfo('template_url'); ?>/images/blackpower.gif" alt="Balao de Fala" />
        </a>
    </div>
    <div id="indexContent_boxContribua">
        <?php include('mod_contribua.php'); ?>
    </div>
    <?php include('mod_busca.php'); ?>
    <div id="indexContent_boxPraDoDia">
        <div id="indexContent_boxPraDoDia_title">
            <a href="<?php echo bloginfo('url') . '/?page_id=13'; ?>">
                <img src="<?php bloginfo('template_url'); ?>/images/pratoDoDia-title.png" alt="Prato do Dia" title="Prato do Dia" />
            </a>
        </div>
        <ul>    
            <?php
            //--------  Query Prato do Dia
            $contador = 1;
            global $pratododia;
            $pratododia = new WP_Query('post_type=gastronomia&orderby=rand&posts_per_page=5');
            while ($pratododia->have_posts()) : $pratododia->the_post();
                ?>
                <li <?php
            echo 'class="pratododiaCont-' . $contador . '"';
            $contador = $contador + 1;
                ?>>
                    <a class="boxPraDoDia-thumb" href="<?php echo bloginfo('url') . '/?page_id=13'; ?>">
                        <img src="<?php the_field('gastro_img'); ?>" alt="<?php the_field('gastro_creditos'); ?>" title="<?php the_field('gastro_creditos'); ?>" />
                    </a>
                    <a class="boxPraDoDia-title" href="<?php echo bloginfo('url') . '/?page_id=13'; ?>"><?php the_title(); ?></a>
                </li>
                <?php
            endwhile;
            wp_reset_query();
            ?>
        </ul>
    </div>
</div>
<?php get_footer(); ?>