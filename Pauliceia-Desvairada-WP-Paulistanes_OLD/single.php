<?php get_header(); ?>
<div id="internaContent">
    <article>
        <div id="internaContent_article">
            <?php
            // Looping Padrao
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    ?>
                    <div id="internaContent_article_palavra">
                        <h1 id="internaContent_article_palavra_title"><?php the_title(); ?></h1>
                        <?php include ('mod_socialShare.php'); ?>
                        <div id="internaContent_article_palavra_imagem">
                            <img src="<?php the_field('palavra_img'); ?>" alt="<?php the_field('palavra_credito'); ?>" title="<?php the_field('palavra_credito'); ?>" />
                            <p>Cr&eacute;ditos: <?php the_field('palavra_credito'); ?></p>
                        </div>
                        <div id="internaContent_article_palavra_texto">
                            <?php the_content(); ?>
                        </div>
                        <div id="internaContent_article_palavra_exemplo">
                            <h3>Exemplo de uso:</h3>
                            <?php the_field('palavra_ex') ?>
                        </div>
                        <?php
                        // Carreca audio
                        $url_audio = get_field('palavra_audio');
                        if ($url_audio) {
                            ?>
                            <div id="internaContent_article_palavra_ouvir">
                                <h3 id="internaContent_article_palavra_ouvir_chamada">Ouvir Pron&uacute;ncia:</h3>
                                <h3 id="internaContent_article_palavra_ouvir_chamada_responsivel">Ouvir:</h3>
                                <div id="internaContent_article_palavra_ouvir_player">
                                    <audio controls>
                                        <source src="<?php echo $url_audio ?>" type="audio/mpeg">
                                        <embed src="<?php echo $url_audio ?>">
                                    </audio>


                                    <audio src="<?php echo $url_audio ?>" preload="auto" />


                                </div>
                            </div>                        
                            <?php
                        } else {
                            
                        }
                        ?>
                        <div id="internaContent_article_palavra_relacionadas">
                            <h2 id="internaContent_article_palavra_relacionadas_title">Mais palavras paulistanas:     
                                <?php
                                // CODIGO ANTIGO - PUXAVA A PALAVRAS DA LETRA ATUAL
                                //----- puxa o term da custom taxonomy da página atual e printa o nome
                                //$terms = wp_get_object_terms($post->ID, 'alfabeto');
                                //if (!empty($terms)) :
                                //    $letra = array();
                                //   foreach ($terms as $term) {
                                //         $letra = $term->name;
                                //    }
                                //    echo $letra;
                                //endif;
                                ?>
                            </h2>
                            <div id="internaContent_article_palavra_relacionadas_lista">
                                <ul>
                                    <?
                                    // CODIGO ANTIGO - PUXAVA PALAVRAS DA MESMA LETRA
                                    //$palavraID = $post->ID;
                                    //$term_name = $term->slug;
                                    //$args = array(
                                    //    // 'post_type' => (array('post', 'gastronomia')), //nome dos post_type
                                    //    'post_type' => (array('post')), //nome dos post_type (Somente palavras)
                                    //    'alfabeto' => "$term_name", //nome da taxonomia a ser puxada
                                    //    'posts_per_page' => 7,
                                    //    'post__not_in' => array($palavraID), //exclui o post atual da query
                                    //);
                                    //--------  Inicia a query e o loop
                                    //global $alfabeto;
                                    //$alfabeto = new WP_Query($args);
                                    //while ($alfabeto->have_posts()) : $alfabeto->the_post();
                                    //--------  Query Mais Palavras
                                    global $maispalavras;
                                    $maispalavras = new WP_Query('orderby=rand&posts_per_page=5');
                                    while ($maispalavras->have_posts()) : $maispalavras->the_post();
                                        ?>
                                        <li class="internaContent_article_palavra_relacionadas_lista_item">
                                            <div class="internaContent_article_palavra_relacionadas_lista_item_imagem">
                                                <a href="<?php the_permalink(); ?>">
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
                                            </div>
                                            <div class="internaContent_article_palavra_relacionadas_lista_item_texto">
                                                <a href="<?php the_permalink(); ?>">
                                                    <?php
                                                    // Conta carecteres e exibe o Titulo
                                                    $contador = get_the_title();
                                                    if ((strlen($contador)) < 13) {
                                                        $limitador = substr(get_the_title(), 0, 15);
                                                        echo '<p>' . $limitador . '</p>';
                                                    } else {
                                                        $limitador = substr(get_the_title(), 0, 12);
                                                        echo '<p>' . $limitador . ' (...)</p>';
                                                    }
                                                    ?>
                                                </a>
                                            </div>
                                        </li>
                                        <?php
                                    endwhile;
                                    wp_reset_query();
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div id="internaContent_article_palavra_contribua">
                        <?php include('mod_contribua.php'); ?>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
    </article>
    <aside>
        <div id="internaContent_sidebar">
            <?php get_sidebar('aside'); ?>
        </div>
    </aside>
</div>
<?php get_footer(); ?>