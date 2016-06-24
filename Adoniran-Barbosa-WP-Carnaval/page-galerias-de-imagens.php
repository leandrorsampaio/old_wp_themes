<?php
//Id das escolas
include ('sidebar-idescolas.php');

// inclui o header
get_header();

//looping
while (have_posts()): the_post();

// escolhe as cores
    include ('sidebar-escolheacor.php');
    ?>

    <div id="picturekaPage" style="color: <?php echo $cor1; ?>;">
        <div id="picturekaPage_section">
            <img id ="pictureka_section_title-img" src="<?php bloginfo('template_directory'); ?>/images/pictureka_section_title-img.png" />
            <h1 id="picturekaPage_section_title">
                <?php the_title(); ?>
            </h1>
            
            <div id="pictureka_section_slider">
                <div id="pictureka_section_slider_wrap">
                    <?php
                    //---------------------------------- Query Galerias
                    $box1 = new WP_Query('post_type=galerias&posts_per_page=1&p=' . get_field('id_galeria_destaque'));
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
                                        <img src="<?php echo $url ?>" alt="Imagem destaque da Escola de Samba" />
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
            
            <!-- boxGaleria -->
            <?php
            include ('sidebar-boxgaleria.php');
            ?>
            <!-- boxGaleria -->
            <!-- box Galerias Desfiles -->
            <div id="boxGaleriaDesfiles" style="border-color: <?php echo $cor1; ?>;">
                <div id="boxGaleria_boxTitle" style="background-color: <?php echo $cor1; ?>;">
                    <h3 id="boxGaleria_boxTitle_text" style="color: <?php echo $cor2; ?>;">Desfiles</h3>
                </div>
                <div id="boxGaleriaDesfiles_destaque">
                    <?php
                    $my_query = new WP_Query('page_id=272');
                    if ($my_query->have_posts()) {
                        while ($my_query->have_posts()) : $my_query->the_post();
                            ?>
                            <img src="<?php the_field('imagem_desfile'); ?>">
                            <?php
                        endwhile;
                    }
                    wp_reset_query();
                    ?>
                </div>
                <div id="boxGaleria_lista">
                    <div id="boxGaleriaDesfiles_lista">
                        <?php
                        $args = array(
                            'tiposgalerias' => 'desfiles',
                            'post_type' => 'galerias',
                            'post_status' => 'publish',
                            'posts_per_page' => 8,
                            'orderby' => 'random',
                        );
                        echo '<ul id="boxGaleria_lista_ul">';
                        $my_query = new WP_Query($args);
                        if ($my_query->have_posts()) {
                            while ($my_query->have_posts()) : $my_query->the_post();
                                ?>
                                <li class="boxGaleria_lista_ul_li">
                                    <a class="boxGaleria_lista_ul_li_a" href="<?php the_permalink(); ?>">
                                        <img class="boxGaleria_lista_ul_li_a_img" src="<?php bloginfo('template_url') ?>/images/list_mask.png" style="background-color: <?php echo $cor1; ?>;" alt="" />
                                        <?php the_title(); ?>
                                    </a>
                                </li>
                                <?php
                            endwhile;
                        }
                        wp_reset_query();
                        ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!--fim box Galeria Desfiles -->

            <!-- box BUSQUE POR ESCOLA -->
            <div id="boxGaleriaEnsaios" style="border: <?php echo $cor1; ?> 1px solid; height: 270px;">
                <h3 id="boxGaleria_boxTitle_text" style="padding: 8px;">Busque por escola</h3>
                <div id="boxGaleria_lista" style="padding: 8px; width:365px; overflow-y: auto; height: 205px;">
                    <?php
                    $args = array(
                        'post_type' => 'galerias',
                        'post_status' => 'publish',
                        'posts_per_page' => -1,
                        'orderby' => 'title',
                        'order' => 'ASC',
                    );
                    echo '<ul id="boxGaleria_lista_ul">';
                    $my_query = new WP_Query($args);
                    if ($my_query->have_posts()) {
                        while ($my_query->have_posts()) : $my_query->the_post();
                            ?>
                            <li class="boxGaleria_lista_ul_li">
                                <a class="boxGaleria_lista_ul_li_a" href="<?php the_permalink(); ?>">
                                    <img class="boxGaleria_lista_ul_li_a_img" src="<?php bloginfo('template_url') ?>/images/list_mask.png" style="background-color: <?php echo $cor1; ?>;" alt="" />
                                    <?php the_title(); ?>
                                </a>
                            </li>
                            <?php
                        endwhile;
                    }
                    wp_reset_query();
                    ?>
                    </ul>
                </div>
            </div>
            <!--fim box BUSQUE POR ESCOLAS-->

            <!-- box Galerias Diversas --->
            <div id="boxGaleriaDesfiles" style="border-color: <?php echo $cor1; ?>; height: 270px;">
                <div id="boxGaleria_boxTitle" style="background-color: <?php echo $cor1; ?>;">
                    <h3 id="boxGaleria_boxTitle_text" style="color: <?php echo $cor2; ?>;">Diversas</h3>
                </div>
                <div id="boxGaleria_lista">
                    <h4 id="boxGaleria_lista_title">Veja mais fotos:</h4>
                    <div id="boxGaleriaDesfiles_lista" style="height: auto">
                        <?php
                        $args = array(
                            'tiposgalerias' => 'diversas',
                            'post_type' => 'galerias',
                            'post_status' => 'publish',
                            'posts_per_page' => 5,
                            'orderby' => 'random',
                            //'anocarnaval' => '2014',
                        );
                        echo '<ul id="boxGaleria_lista_ul">';
                        $my_query = new WP_Query($args);
                        if ($my_query->have_posts()) {
                            while ($my_query->have_posts()) : $my_query->the_post();
                                ?>
                                <li class="boxGaleria_lista_ul_li">
                                    <a class="boxGaleria_lista_ul_li_a" href="<?php the_permalink(); ?>">
                                        <img class="boxGaleria_lista_ul_li_a_img" src="<?php bloginfo('template_url') ?>/images/list_mask.png" style="background-color: <?php echo $cor1; ?>;" alt="" />
                                        <?php the_title(); ?>
                                    </a>
                                </li>
                                <?php
                            endwhile;
                        }
                        wp_reset_query();
                        ?>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- fix box Galerias Diversas -->

            <!-- Leia Mais -->
            <?php
            include ('sidebar-leiamais.php');
            ?>
            <!-- Leia Mais -->
        </div>
        <!-- Aside -->
        <div id="aside">
            <?php
            include ('sidebar-publicidade.php');
            include ('sidebar-maisnoticias.php');
            include ('sidebar-maisescolas.php');
            ?>
        </div>
        <!-- Aside -->
    </div>
<?php endwhile; ?>
<?php get_footer(); ?>