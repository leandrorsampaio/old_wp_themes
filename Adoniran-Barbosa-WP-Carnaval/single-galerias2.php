<?php
// inclui o header
get_header();

//looping
while (have_posts()): the_post();
    ?>



    OOOOOOOOOOOOOOOOOOOOO
    
    
    <div id="pictureka">
        <section id="pictureka_section">
            <a href="http://carnaval.spturis.com.br/galerias-de-imagens/">
                <img id ="pictureka_section_title-img" src="<?php bloginfo('template_directory'); ?>/images/pictureka_section_title-img.png" /> 
            </a>
            <h1 id="pictureka_section_title">
                <?php the_title(); ?>
            </h1>
            <div id="pictureka_section_slider">
                <div id="pictureka_section_slider_wrap">
                    <?php
                    //---------------------------------- Query Galerias
                    $box1 = new WP_Query('post_type=galerias2&p=' . get_field('galeria_single'));
                    while ($box1->have_posts()) : $box1->the_post();
                        ?>
                        <div id="pictureka_section_slider_wrap_big">
                            <?php
                            $images = get_posts(array("post_type" => "attachment", "post_parent" => $post->ID, "orderby" => "menu_order", "numberposts" => -1));
                            $contador = 1;
                            foreach ($images as $image) {
                                $urls = array();
                                list ($url) = wp_get_attachment_image_src($image->ID, $s);
                                $caption = $image->post_excerpt;
                                ?>
                                <div id="normal<?php echo $contador; ?>">
                                    <a href="<?php echo $url ?>" target="blank" title="Clique para ver em tamanho maior">
                                        <img src="<?php echo $url ?>" alt="Imagem Destaque da Escola de Samba" />
                                    </a>
                                    <p class="caption"><?php echo $caption; ?></p>
                                </div>
                                <?php
                                $contador++;
                            }
                            ?>
                        </div>

                        <div id="pictureka_section_slider_wrap_thumbs">
                            <?php
                            $images = get_posts(array("post_type" => "attachment", "post_parent" => $post->ID, "orderby" => "menu_order", "numberposts" => -1));
                            $contador = 1;
                            foreach ($images as $image) {
                                $urls = array();
                                list ($url) = wp_get_attachment_image_src($image->ID, $s);
                                ?>

                                <a href="javascript: changeImage(<?php echo $contador; ?>);" style="border-color: <?php echo $cor2; ?>">
                                    <img src="<?php echo $url ?>" alt="Thumb" />
                                </a>
                                <?php
                                $contador++;
                            }
                            ?>
                        </div>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
            <!-- box Mais Galerias -->
            <div id="maisGalerias">
                <div id="maisGalerias_boxTitle">
                    <h3 id="maisGalerias_boxTitle_text">+ Galerias
                        <div id="maisGalerias_more">
                            <a href="http://carnaval.spturis.com.br/galerias-de-imagens/">
                                Veja todas &raquo;
                            </a>
                        </div>
                    </h3>
                </div>
                <div id="maisGalerias_lista">
                    <?php
                    //---------------------------------- Query Galerias
                    $box = new WP_Query('post_type=galerias&posts_per_page=8&orderby=rand');
                    while ($box->have_posts()) : $box->the_post();
                        ?>
                        <ul>
                            <li>
                                <a href="<?php the_permalink(); ?>">
                                    <img class="boxGaleria_lista_ul_li_a_img" src="<?php bloginfo('template_url') ?>/images/list_mask.png" style="background-color: #a6ce39;" alt="" />
                                    <?php the_title(); ?>
                                </a>
                            </li>
                        </ul>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
            <!-- fim box Mais Galerias -->


            <!-- box Escolas Relacionadas -->
            <div id="maisGalerias">
                <div id="maisGalerias_boxTitle">
                    <h3 id="maisGalerias_boxTitle_text">
                        <?php
                        //checa se é da categoria "diversas".
                        if (has_term('diversas', 'tiposgalerias')) {
                            ?>
                            + Fotos destas escolas
                        </h3>
                    </div>
                    <?php
                } else {
                    //----- puxa o term da custom taxonomy da página atual e printa o nome
                    $terms = wp_get_object_terms($post->ID, 'escolasrelacionadas');
                    if (!empty($terms)) :
                        $tipo = array();
                        foreach ($terms as $term) {
                            $tipo = $term->name;
                        }
                        echo '+ ' . $tipo;
                    endif;
                    ?>
                    </h3>
                </div>
                <h4 id="boxGaleria_lista_title"style="color: #a6ce39;">
                    Veja mais fotos desta escola!
                </h4>
                <?php
            }
            ?>
            <div id="maisGalerias_lista">
                <?php
                $term_name = $term->slug;
                $args = array(
                    'post_type' => 'galerias', //nome do post_type
                    'escolasrelacionadas' => "$term_name", //nome da taxonomia que você quer puxar
                    'posts_per_page' => 8,
                    'orderby' => 'rand',
                );
                //--------  Inicia a query e o loop
                global $galerias;
                $galerias = new WP_Query($args);
                while ($galerias->have_posts()) : $galerias->the_post();
                    ?>
                    <ul>
                        <li>
                            <a href="<?php the_permalink(); ?>">
                                <img class="boxGaleria_lista_ul_li_a_img" src="<?php bloginfo('template_url') ?>/images/list_mask.png" style="background-color: #a6ce39;" alt="" />
                                <?php the_title(); ?>
                            </a>
                        </li>
                    </ul>
                    <?php
                endwhile;
                wp_reset_query();
                ?>
            </div>

    </div>
    <!--fim box Escolas Relacionadas -->


    <!-- box Tipos Relacionados -->
    <div id="maisGalerias">
        <div id="maisGalerias_boxTitle">
            <h3 id="maisGalerias_boxTitle_text">
                <?php
                //----- puxa o term da custom taxonomy da página atual e printa o nome
                $terms = wp_get_object_terms($post->ID, 'tiposgalerias');
                if (!empty($terms)) :
                    $tipo = array();
                    foreach ($terms as $term) {
                        $tipo = $term->name;
                    }
                    echo '+ ' . $tipo;
                endif;
                ?>
            </h3>
        </div>
        <div id="maisGalerias_lista">
            <?php
            $term_name = $term->slug;
            $args = array(
                'post_type' => 'galerias', //nome do post_type
                'tiposgalerias' => "$term_name", //nome da taxonomia que você quer puxar
                'posts_per_page' => 8,
                'orderby' => 'rand',
            );
            //--------  Inicia a query e o loop
            global $galerias;
            $galerias = new WP_Query($args);
            while ($galerias->have_posts()) : $galerias->the_post();
                ?>
                <ul>
                    <li>
                        <a href="<?php the_permalink(); ?>">
                            <img class="boxGaleria_lista_ul_li_a_img" src="<?php bloginfo('template_url') ?>/images/list_mask.png" style="background-color: #a6ce39;" alt="" />
                            <?php the_title(); ?>
                        </a>
                    </li>
                </ul>
                <?php
            endwhile;
            wp_reset_query();
            ?>
        </div>

    </div>
    <!--fim box Tipos Relacionados-->



    <!-- box Escolas -->
    <div id="maisGalerias">
        <div id="maisGalerias_boxTitle">
            <h3 id="maisGalerias_boxTitle_text">
                Conhe&ccedil;a as escolas
            </h3>
        </div>
        <div id="maisGalerias_lista">
            <?php
            //---------------------------------- Query Escolas
            $asideposts = new WP_Query('post_type=escolas&posts_per_page=21&orderby=rand');
            while ($asideposts->have_posts()) : $asideposts->the_post();
                ?>
                <div class="asideBox-maisEscolas_bandeira">
                    <a class="asideBox-maisEscolas_bandeira_link" href="<?php the_permalink(); ?>">
                        <?php $url_thumbnail = wp_get_attachment_url(get_post_thumbnail_id()); ?>
                        <img class="asideBox-maisEscolas_bandeira_link_img" src="<?php echo $url_thumbnail; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
                    </a>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
    </div>
    <!--fim box Escolas -->
    </section>
    </div>
    <?php
endwhile;
get_footer();
?>