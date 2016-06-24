<?php
// inclui o header
get_header();

//looping
while (have_posts()): the_post();

// escolhe as cores
    include ('sidebar-escolheacor.php');
    ?>
    <div id="noticias" style="color: <?php echo $cor1; ?>;">
        <div id="noticias_section">
            <div id="noticias_section_head">
                <h1 id="noticias_section_head_title"><?php the_title(); ?></h1>
            </div>
            <div id="noticias_section_conteudo">
                <?php the_content(); ?>
                <br/>
                <ul>
                    <?php
                    //---------------------------------- Query Lei Mais
                    $box1 = new WP_Query('posts_per_page=-1&anocarnaval=2016&post_type=post');
                    while ($box1->have_posts()) : $box1->the_post();
                        ?>
                        <li class="noticias_section_conteudo_leiamais_lista_item">
                            <a class="noticias_section_conteudo_leiamais_lista_item_link" href="<?php the_permalink(); ?>">
                                <img class="noticias_section_conteudo_leiamais_lista_item_link_img" src="<?php bloginfo('template_url') ?>/images/list_mask.png" style="background-color: <?php echo $cor1; ?>; border: none;" alt="" />
                                <?php the_title(); ?>
                            </a>
                        </li>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </ul>
            </div>
            <div id="noticias_section_outroscarnavais">
                <h4 class="red">Not&iacute;cias de outros carnavais:
                    <a href="http://carnaval.spturis.com.br/noticias-carnaval-2013/">2013</a>, 
                    <a href="http://carnaval.spturis.com.br/noticias/">2014</a>, 
                    <a href="http://carnaval.spturis.com.br/noticias-carnaval-2015/">2015</a> e 
                    <a href="http://carnaval.spturis.com.br/noticias-carnaval-2016/">2016</a>
                </h4>
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