<?php get_header(); ?>
<div id="content_index">
    <!-- ##################################### BLOCO 1 - SLIDER -->
    <div id="content_slider">
        <div id="sliderFrame">
            <div id="ribbon"></div>
            <div id="slider">
                <?php
                $slider = new WP_Query('post_type=slider');
                while ($slider->have_posts()) : $slider->the_post();
                    ?>
                    <a href=" <?php the_field('slider_link') ?>">
                        <div class="slider_title">
                            <p><?php the_title(); ?></p>
                        </div>
                        <div class="slider_credits"> 
                            <p><?php the_excerpt(); ?></p>
                        </div>
                        <span style="border-radius: 12px">
                            <?php the_post_thumbnail('thumb-slider'); ?>
                        </span>
                    </a>
                    <?php
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
            <div id="htmlcaption" style="display: none;">
                <em>HTML</em> caption. Link to <a href="http://www.google.com/">Google</a>.
            </div>
        </div>
    </div>
    <!-- ##################################### BLOCO 2 - BOXES -->
    <?php
    $recent = new WP_Query('pagename=home');
    while ($recent->have_posts()) : $recent->the_post();
        ?>
        <div id="content_box_indeBox1">
            <?php the_field('box_1') ?>
        </div>
        <div id="content_box_indeBox2">
            <?php the_field('box_2') ?>
        </div>
        <div id="content_box_indeBox3">
            <?php the_field('box_3') ?>
        </div>
    <?php endwhile; ?>
</div>

<!-- Home Versão Responsiva -->
<div id="content_index600">
    <div id="content_index600_roteiros">
        <?php
        //todos os roteiros comuns
        $roteiros = new WP_Query('post_type=roteiros');
        if ($roteiros->have_posts()) {
            while ($roteiros->have_posts()) : $roteiros->the_post();
                ?>     
                <a href="<?php the_permalink(); ?>"> 
                    <div class="roteiros_thumb">                                                                                                                                                                                        <!--                        <a href="<?php the_permalink(); ?>" style="background-image: url(<?php echo $url; ?>); width: 190px; height: 140px; display: table"><img src="<? //php get_field('imgOff')                                                                                                                    ?>"></a>-->
                        <?php the_post_thumbnail(); ?>
                        <div class="roteiros_thumbLabel">
                            <div class="roteiros_thumbLabel_title"> 
                                <?php the_title(); ?>
                            </div>
                        </div>
                    </div>
                </a>
                <?php
            endwhile;
        }
        wp_reset_query();
        ?>
        <?php
        //roteiro especial
        $roteirosEsp = new WP_Query('post_type=roteirosesp&posts_per_page=1');
        if ($roteirosEsp->have_posts()) {
            while ($roteirosEsp->have_posts()) : $roteirosEsp->the_post();
                ?>                                                                                                                                                                                                          <!--                        <a href="<?php the_permalink(); ?>" style="background-image: url(<?php echo $url; ?>); width: 190px; height: 140px; display: table"><img src="<? //php get_field('imgOff')                          ?>"></a>-->
                <a href="<?php the_permalink(); ?>"> 
                    <div class="roteiros_thumb">                                                                                                                                                                                           <!--                        <a href="<?php the_permalink(); ?>" style="background-image: url(<?php echo $url; ?>); width: 190px; height: 140px; display: table"><img src="<? //php get_field('imgOff')                                                                                                                    ?>"></a>-->
                        <img src="<?php the_field('imgOff') ?>">
                    </div>
                </a>                      
                <?php
            endwhile;
        }
        wp_reset_query();
        ?>
    </div>
</div>
<!-- Fim - Home Versão Responsiva --->
<?php get_footer(); ?>