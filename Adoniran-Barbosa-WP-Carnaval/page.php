<?php
// inclui o header
get_header();

//looping
while (have_posts()): the_post();

// escolhe as cores
    include ('sidebar-escolheacor.php');
// pega o id das paginas
    include ('sidebar-idspaginas.php')
    ?>
    <div id="noticias" style="color: <?php echo $cor1; ?>;">
        <div id="noticias_section">
            <div id="noticias_section_head">
                <h1 id="noticias_section_head_title"><?php the_title(); ?></h1>
                <?php
                if ($menu == 1) {
                    include ('sidebar-submenu.php');
                } else {
                    
                }
                ?>
            </div>
            <div id="noticias_section_conteudo">
                <div id="page_section_conteudo">
                    <?php
                    //---------------------------- IF IS PAGE CORTE DO CARNAVAL
                    if (is_page(array('corte-do-carnaval-paulistano', 'carnaval-de-rua'))) {
                        ?>
                        <div id="pictureka_section_slider" style="width: 100%;">
                            <div id="pictureka_section_slider_wrap">
                                <?php
                                //---------------------------------- Query Galerias
                                $box1 = new WP_Query('post_type=galerias&posts_per_page=1&p=' . get_field('id_galeria_page'));
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
                        <br/>
                        <?php
                        the_content();
                    } else {
                        the_content();
                    }
                    ?>
                </div>
            </div>
            <?php
            include ('sidebar-servicebar.php');
            ?>
        </div>
        <!-- Aside -->
        <div id="aside">
            <?php
            include ('sidebar-publicidade.php');
            include ('sidebar-maisnoticias.php');
            ?>
        </div>
        <!-- Aside -->
    </div>
<?php endwhile; ?>
<?php get_footer(); ?>