<?php include ('inc_programador.php'); ?>

<?php
if (wp_is_mobile() && is_page($roteiros)) {
    include ('inc_roteirobolinhas.php');
} else if (wp_is_mobile() && is_page($news)) {
    ?>

    <ul class="homeNewsMobile">
        <?php
        // variavel para montar as cores do CSS
        $contadorCor = 2;
        //--------  Query Menu (ROTEIROS)
        global $varQuery;
        $varQuery = new WP_Query('post_type=noticia&posts_per_page=-1');
        while ($varQuery->have_posts()) : $varQuery->the_post();
            ?>
            <li class="turismo_esq_lista_item homeNewsMobile_item">
                <a id="turismo_esq_lista_item_link-V<?php echo $contadorCor; ?>" class="transition30 noUnderlineHover homeNewsMobile_link" href="<?php echo get_permalink(); ?>">
                    <span><?php echo get_the_title(); ?></span>
                </a>
            </li>
            <?php
            // variavel para montar as cores do CSS
            if ($contadorCor == 4) {
                $contadorCor = 1;
            } else {
                $contadorCor = $contadorCor + 1;
            }
        endwhile;
        wp_reset_query();
        ?>
    </ul>

    <?php
} else if (wp_is_mobile() && is_page($transporte_mobile)) {
    ?>
    <a href="<?php echo get_permalink($transporte_MT); ?>">
        <img style="float:left; width:50%;" src="<?php bloginfo('template_url') ?>/images/LEFT_METRO.gif" alt="">
    </a>
    <a href="<?php echo get_permalink($transporte_TR); ?>">
        <img style="width:50%;" src="<?php bloginfo('template_url') ?>/images/LEFT_RIGHT.gif" alt="">
    </a>

    <?php
} else if (wp_is_mobile() && is_page($porai_mobile)) {
    ?>

    <a href="<?php echo get_permalink($porai_app); ?>">
        <img style="float:left; width:50%;" src="<?php bloginfo('template_url') ?>/images/left_mobile.gif" alt="">
    </a>
    <a href="<?php echo get_permalink($porai_site); ?>">
        <img style="width:50%;" src="<?php bloginfo('template_url') ?>/images/right_desk.gif" alt="">
    </a>


    <?php
} else {
    ?>
    <div id="internaContent-turismo">
        <div id="turismo_esq" class="<?php echo $NoDisplay; ?>">
            <ul id="<?php
            if (is_page(array($porai, $porai_site, $porai_app, $roteiros, $roteiros_paulista, $roteiros_centro, $roteiros_farialima, $roteiros_x1, $roteiros_x2, $vias, $vias_CE, $vias_ZN, $vias_ZS, $vias_ZO, $vias_ZL, $news, $allNews, $transporte_TR, $transporte_MT, $transporte,)) || $postType == 'roteiros' || $postType == 'noticia' || $postType == 'noticia' || $postType == 'vias' || $postType == 'porai') {
                print ("turismo_esq_lista");
            } else {
                print(" ");
            }
            ?>">
                    <?php include ('inc_menulateral.php'); ?>    
            </ul>
        </div>
        <!--[if IE 8]>
        <div id="turismo_dir">
        <![endif]-->
        <!--[if IE 8]><![IGNORE[--><![IGNORE[]]>
        <article id="<?php
        if (is_page(array($porai, $porai_site, $porai_app, $roteiros, $roteiros_paulista, $roteiros_centro, $roteiros_farialima, $roteiros_x1, $roteiros_x2, $vias, $vias_CE, $vias_ZN, $vias_ZS, $vias_ZO, $vias_ZL, $news, $allNews, $transporte_TR, $transporte_MT, $transporte)) || $postType == 'roteiros' || $postType == 'noticia' || $postType == 'noticia' || $postType == 'vias' || $postType == 'porai') {
            print ("turismo_dir");
        } else {
            print("turismo_dir_full");
        }
        ?>" class="<?php echo $widith100; ?>">
                     <?php
                     // BREADCRUMBS PARA MOBILE
                     if (wp_is_mobile()) {
                         $postTypeMobile = get_post_type();
                         if (is_page($roteiros) || $postType == 'roteiros') {
                             $titlebreadMob = 'Roteiros';
                             $linkBreadCrumbs = $roteiros;
                             $noDiplay = '';
                         } elseif (is_page(array($vias, $vias_CE, $vias_ZN, $vias_ZS, $vias_ZO, $vias_ZL)) || $postType == 'vias') {
                             $titlebreadMob = 'Vias Exclusivas';
                             $linkBreadCrumbs = $vias;
                             $noDiplay = '';
                         } elseif (is_page($news) || $postType == 'noticia') {
                             $titlebreadMob = 'News';
                             $linkBreadCrumbs = $news;
                             $noDiplay = '';
                         } else {
                             $titlebreadMob = '';
                             $linkBreadCrumbs = '';
                             $noDiplay = 'style="display:none;"';
                         }
                         ?>
                <div class="breadcrumbs" <?php echo $noDiplay; ?>>
                    <a class="breadcrumbs_link" href="<?php echo get_permalink($linkBreadCrumbs); ?>"><?php echo $titlebreadMob; ?></a>
                </div>
                <?php
            } else {
                
            }
            ?>
            <!--<![endif]-->
            <article id="<?php
            if (is_page(array($porai, $porai_site, $porai_app, $roteiros, $roteiros_paulista, $roteiros_centro, $roteiros_farialima, $roteiros_x1, $roteiros_x2, $vias, $vias_CE, $vias_ZN, $vias_ZS, $vias_ZO, $vias_ZL, $news, $allNews, $transporte_TR, $transporte_MT, $transporte)) || $postType == 'roteiros' || $postType == 'noticia' || $postType == 'noticia' || $postType == 'vias' || $postType == 'porai') {
                print ("turismo_dir");
            } else {
                print("turismo_dir_full");
            }
            ?>" class="<?php echo $widith100; ?>">
                         <?php while (have_posts()): the_post(); ?>
                    <h2 class="internaTitulo <?php echo $titleMobile; ?>">
                        <?php echo get_the_title(); ?>
                    </h2>


                    <?php
                    global $getPty;
                    $getPty = get_post_type();


                    if ($getPty == 'noticia') {
                        echo '<p class="internaData">' . get_the_date('l') .  ', ' . get_the_date('j') . ' de ' . get_the_date('F') . ' de ' . get_the_date('Y') . '</p>';
                    } else {
                        
                    }
                    ?>




                    <?php
                    if (!wp_is_mobile()) {
                        ?>
                        <div id="topBar" class="<?php echo $widith100; ?>">    
                            <?php include ('inc_share.php'); ?>
                        </div>
                        <?php
                    } else {
                        
                    }
                    ?>


                    <?php
                    if (wp_is_mobile() && is_page($vias)) {
                        include ('inc_menuviasmobile.php');
                    } else {
                        
                    }
                    ?>


                    <div id="<?php
                    if (is_page(array($porai, $porai_site, $porai_app, $roteiros, $roteiros_paulista, $roteiros_centro, $roteiros_farialima, $roteiros_x1, $roteiros_x2, $vias, $vias_CE, $vias_ZN, $vias_ZS, $vias_ZO, $vias_ZL, $news, $allNews, $transporte_TR, $transporte_MT, $transporte)) || $postType == 'roteiros' || $postType == 'noticia' || $postType == 'noticia' || $postType == 'vias' || $postType == 'porai') {
                        print ("turismoReceptivo_content");
                    } else {
                        print("turismoReceptivo_content_full");
                    }
                    ?>" class="<?php echo $mob_turismoReceptivo_content . $textMobile; ?>">
                             <?php
                             if (is_page($etiqueta) && wp_is_mobile()) {
                                 echo get_field('etiqueta_mob');
                             } else {
                                 if (wp_is_mobile() && is_page($vias)) {
                                     echo '<p><a href="https://www.google.com/maps/d/u/0/viewer?dg=feature&ll=-23.577833,-46.604691&t=m&source=embed&ie=UTF8&msa=0&spn=0.302075,0.439453&mid=z9TqTcegPvdk.kD1kEBduCkvI" target="_blank">Infraestrutura Ciclovi&aacute;ria Permanente da Cidade de S&atilde;o Paulo.</a></p>';
                                 } else {
                                     the_content();
                                 }
                             }
                             ?>
                    </div>
                
                    
                    <?php
                    $postTypeMap = get_post_type();
                    if ($postType == 'roteiros' || $postType == 'vias') {
                        ?>           
                        <div class="embed-container ">
                            <iframe src="<?php echo get_field('map_iframe'); ?>"></iframe>
                        </div>                 
                        <?php
                    } else {
                        
                    }
                    ?>




                    <?php
                    if (is_page($porai)) {

                        echo '<div id="internaContent_wrap">';
                        $links = new WP_Query('post_type=links&posts_per_page=-1&orderby=rand');
                        while ($links->have_posts()) : $links->the_post();
                            ?>

                            <?php
                            if (wp_is_mobile()) {
                                ?>

                                <div class="internaContent_porAiLinkMobile">
                                    <a class="internaContent_porAiLinkMobile_link" href="<?php the_field('url'); ?>" target="blank">
                                        <?php the_post_thumbnail(); ?><br/>
                                        <h1 class="internaContent_porAiLinkMobile_title"><?php the_title(); ?></h1></a> <br/>
                                    <?php the_content(); ?>
                                    </a>
                                </div>

                                <?php
                            } else {
                                ?>


                                <div class="internaContent_porAiLink">
                                    <a href="<?php the_field('url'); ?>" target="blank">
                                        <?php the_post_thumbnail(); ?><br/>
                                        <h1><?php the_title(); ?></h1></a> <br/>
                                    <?php the_content(); ?>
                                    </a>
                                </div>


                                <?php
                            }
                            ?>


                            <?php
                        endwhile;
                        wp_reset_postdata();
                        echo '</div>';
                    } elseif (is_page($porai_app)) {
                        echo '<div id="internaContent_wrap">';
                        $links = new WP_Query('post_type=links_app&posts_per_page=-1&orderby=rand');
                        while ($links->have_posts()) : $links->the_post();
                            ?>






                            <?php
                            if (wp_is_mobile()) {
                                ?>

                                <div class="internaContent_porAiLinkMobile">
                                    <a class="internaContent_porAiLinkMobile_link" href="<?php the_field('url'); ?>" target="blank">
                                        <?php the_post_thumbnail(); ?><br/>
                                        <h1 class="internaContent_porAiLinkMobile_title"><?php the_title(); ?></h1></a> <br/>
                                    <?php the_content(); ?>
                                    </a>
                                </div>

                                <?php
                            } else {
                                ?>


                                <div class="internaContent_porAiLink">
                                    <a href="<?php the_field('url'); ?>" target="blank">
                                        <?php the_post_thumbnail(); ?><br/>
                                        <h1><?php the_title(); ?></h1></a> <br/>
                                    <?php the_content(); ?>
                                    </a>
                                </div>


                                <?php
                            }
                            ?>








                            <?php
                        endwhile;
                        wp_reset_postdata();
                        echo '</div>';
                    } elseif (is_page($vias)) {
                        if (wp_is_mobile()) {
                            //include ('inc_menuviasmobile.php');
                        } else {
                            include ('inc_queryvias.php');
                        }
                    } elseif (is_page(array($vias_CE, $vias_ZN, $vias_ZS, $vias_ZO, $vias_ZL))) {
                        include ('inc_queryviaszonas.php');
                    } elseif (is_page($allNews)) {
                        global $varQuery;
                        echo '<ul>';
                        $varQuery = new WP_Query('post_type=noticia&posts_per_page=-1');
                        while ($varQuery->have_posts()) : $varQuery->the_post();
                            ?>
                            <a class="listaTodoasNews" href="<?php echo get_permalink(); ?>"><?php echo get_the_title(); ?></a>
                            <?php
                        endwhile;
                        wp_reset_query();
                        echo '</ul>';
                    } elseif (is_page($contato)) {
                        include ('inc_contato.php');
                    } else {
                        
                    }
                    ?>  




                    <?php
                    if (wp_is_mobile()) {
                        $postTypeFimPagina = get_post_type();
                        if (is_page(array($vias_CE, $vias_ZN, $vias_ZS, $vias_ZO, $vias_ZL)) || $postTypeFimPagina == 'vias') {
                            include ('inc_menuviasmobile.php');
                        } elseif ($postTypeFimPagina == 'roteiros') {
                            include ('inc_roteirobolinhas.php');
                        }
                    } else {
                        
                    }
                    ?>







                <?php endwhile; ?>
                <!--[if IE 8]>
         </div>
         <![endif]-->
                <!--[if IE 8]><![IGNORE[--><![IGNORE[]]>
            </article>
            <!--<![endif]-->
    </div>

    <?php
}
?>