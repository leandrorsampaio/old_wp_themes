<!--?php /* Template name: Downloads Portugues */ ?-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; <?php bloginfo('charset') ?>" />
        <title><?php bloginfo('name') ?> <?php bloginfo('description') ?></title>
        <link rel="stylesheet"  type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/downloadsCSP.css" />
        <?php wp_head(); ?>
    </head>
    <body>
        <header>
            <div id="header">
                <div id="header_logo">
                    <img src="<?php bloginfo('template_url') ?>/images/marca_sp.jpg" alt="Sao Paulo - Downloads" />
                </div>
                <div id="header_title">
                    <?php
                    if (is_page(3413)) {
                        //---------------------------------- QUERY Page Portugues
                        $headerpage1 = new WP_Query('page_id=3413');
                        while ($headerpage1->have_posts()) : $headerpage1->the_post();
                            ?>
                            <h1 id="header_title_top"><?php the_title(); ?></h1>
                            <h2 id="header_title_middle">Cidade de S&atilde;o Paulo</h2>
                            <h3 id="header_title_bottom"><?php the_excerpt(); ?></h3>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    } elseif (is_page(3412)) {
                        //---------------------------------- QUERY Page Ingles
                        $headerpage2 = new WP_Query('page_id=3412');
                        while ($headerpage2->have_posts()) : $headerpage2->the_post();
                            ?>
                            <h1 id="header_title_top"><?php the_title(); ?></h1>
                            <h2 id="header_title_middle">City of S&atilde;o Paulo</h2>
                            <h3 id="header_title_bottom"><?php the_excerpt(); ?></h3>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    } elseif (is_page(3411)) {
                        //---------------------------------- QUERY Page Espanhol
                        $headerpage3 = new WP_Query('page_id=3411');
                        while ($headerpage3->have_posts()) : $headerpage3->the_post();
                            ?>
                            <h1 id="header_title_top"><?php the_title(); ?></h1>
                            <h2 id="header_title_middle">Ciudad de S&atilde;o Paulo</h2>
                            <h3 id="header_title_bottom"><?php the_excerpt(); ?></h3>
                            <?php
                        endwhile;
                        wp_reset_postdata();
                    }
                    ?>
                </div>
            </div>
        </header>
        <div id="abas">
            <div id="abas_pt">
                <a href="#">
                    <h3>Portugues</h3>
                </a>
            </div>
            <div id="abas_en"></div>
            <div id="abas_es"></div>
        </div>
        <div id="content">
            <?php
            //---------------------------------- Query 
            $downloadscsp = new WP_Query('post_type=downloadscsp&tag=Port&posts_per_page=-1');
            while ($downloadscsp->have_posts()) : $downloadscsp->the_post();
                $linkpdf = get_post_custom_values('PDF');
                if (isset($linkpdf)) {
                    ?>
                    <div class="item">
                        <div class="item_thumb">
                            <?php
                            get_post_custom_values('PDF');
                            echo '<a class="item_text_link" href="' . implode(get_post_custom_values('PDF')) . '" target="_blank">';
                            if (has_post_thumbnail()) {
                                the_post_thumbnail('thumb-download');
                            } else {
                                ?>
                                <img src="<?php bloginfo('template_url'); ?>/images/thumb-download-padrao.gif" />
                                <?php
                            }
                            ?>
                            </a>
                        </div>
                        <div class="item_text">
                            <h4 class="item_text_title"><?php the_title(); ?></h4>
                            <span class="item_text_resumo">
                                <?php the_excerpt(); ?>
                            </span>
                            <span class="item_text_donloadlink">
                                <?php
                                get_post_custom_values('PDF');
                                echo '<a href="' . implode(get_post_custom_values('PDF')) . '" target="_blank">- Download</a>';
                                ?>
                            </span>
                            <?php
                            if (get_post_custom_values('ISSUU')) {
                                echo '<span class="item_text_donloadlink">';
                                echo '<a href="' . implode(get_post_custom_values('ISSUU')) . '" target="_blank">- Visualizar em tela</a>';
                                echo '</span>';
                            } else {
                                
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                } else {
                    
                }
                ?>
                <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
        <footer>
        </footer>
        <?php wp_footer(); ?>
    </body>
</html>