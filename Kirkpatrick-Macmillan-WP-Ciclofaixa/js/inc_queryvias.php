<?php include ('inc_programador.php'); ?>   
    <div id="wrapper">
        <div id="tabs">
            <div id="tabs_container" class="mapaWrap_esq">    
                

                <span class="mapaWrap_esq_title"> Clique no Mapa!</span>
                <div id="tabs-1">
                    <a class="mapaWrap_esq_title" href="javascript:void(0)" onclick="window.location.href='<?php echo get_the_permalink($vias_CE); ?>'">Centro</a>
                    <?php
                    $links = new WP_Query('post_type=vias&posts_per_page=-1&orderby=title&zonas=centro');
                    while ($links->have_posts()) : $links->the_post();
                        ?>
                    <a class="mapaWrap_esq_link" href="javascript:void(0)" onclick="window.location.href='<?php the_permalink(); ?>'"><?php the_title(); ?></a>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
                <div id="tabs-2">
                    <a class="mapaWrap_esq_title" href="javascript:void(0)" onclick="window.location.href='<?php echo get_the_permalink($vias_ZN); ?>'">Zona Norte</a>
                    <?php
                    $links = new WP_Query('post_type=vias&posts_per_page=-1&orderby=title&zonas=zona-norte ');
                    while ($links->have_posts()) : $links->the_post();
                        ?>
                    <a class="mapaWrap_esq_link" href="javascript:void(0)" onclick="window.location.href='<?php the_permalink(); ?>'"><?php the_title(); ?></a>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
                <div id="tabs-3">
                    <a class="mapaWrap_esq_title" href="javascript:void(0)" onclick="window.location.href='<?php echo get_the_permalink($vias_ZL); ?>'">Zona Leste</a>
                    <?php
                    $links = new WP_Query('post_type=vias&posts_per_page=-1&orderby=title&zonas=zona-leste');
                    while ($links->have_posts()) : $links->the_post();
                        ?>
                        <a class="mapaWrap_esq_link" href="javascript:void(0)" onclick="window.location.href='<?php the_permalink(); ?>'"><?php the_title(); ?></a>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
                <div id="tabs-4">
                    <a class="mapaWrap_esq_title" href="javascript:void(0)" onclick="window.location.href='<?php echo get_the_permalink($vias_ZO); ?>'">Zona Oeste</a>
                    <?php
                    $links = new WP_Query('post_type=vias&posts_per_page=-1&orderby=title&zonas=zona-oeste');
                    while ($links->have_posts()) : $links->the_post();
                        ?>
                        <a class="mapaWrap_esq_link" href="javascript:void(0)" onclick="window.location.href='<?php the_permalink(); ?>'"><?php the_title(); ?></a>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
                <div id="tabs-5">
                    <a class="mapaWrap_esq_title" href="javascript:void(0)" onclick="window.location.href='<?php echo get_the_permalink($vias_ZS); ?>'">Zona Sul</a>
                    <?php
                    $links = new WP_Query('post_type=vias&posts_per_page=-1&orderby=title&zonas=zona-sul');
                    while ($links->have_posts()) : $links->the_post();
                        ?>
                        <a class="mapaWrap_esq_link" href="javascript:void(0)" onclick="window.location.href='<?php the_permalink(); ?>'"><?php the_title(); ?></a>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div><!--End tabs container-->
            <ul class="mapaWrap_dir">
                <li class="mapaWrap_dir_item mapCE">
                    <a href="#tabs-1" title="" class="mapaWrap_dir_item_link">Centro</a>
                </li>
                <li class="mapaWrap_dir_item mapZN">
                    <a href="#tabs-2" title="" class="mapaWrap_dir_item_link">Zona Norte</a>
                </li>
                <li class="mapaWrap_dir_item mapZL">
                    <a href="#tabs-3" title="" class="mapaWrap_dir_item_link">Zona Leste</a>
                </li>
                <li class="mapaWrap_dir_item mapZO">
                    <a href="#tabs-4" title="" class="mapaWrap_dir_item_link">Zona Oeste</a>
                </li>
                <li class="mapaWrap_dir_item mapZS">
                    <a href="#tabs-5" title="" class="mapaWrap_dir_item_link">Zona Sul</a>
                </li>
                <img src="<?php bloginfo('template_url') ?>/images/mapaSP.gif" />
            </ul>
        </div><!--End tabs-->
    </div>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/tabulous.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url') ?>/js/js.js"></script>