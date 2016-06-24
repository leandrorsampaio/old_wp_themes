<?php get_header(); ?>
<?php include ('inc_programador.php'); ?>
<div class="sliderMobile">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php
            $slider = new WP_Query('post_type=slider');
            while ($slider->have_posts()) : $slider->the_post();
                ?>
                <?php
                if (get_field('imagem_mobile')) {
                    $imagem_mobile = get_field('imagem_mobile');
                } else {
                    $imagem_mobile = get_bloginfo('template_url') . '/images/' . 'thumb_default.png';
                }
                if (get_field('credito_mobile')) {
                    $credito_mobile = get_field('credito_mobile');
                } else {
                    $credito_mobile = 'Foto: SPTuris';
                }
                ?>
                <div class="swiper-slide yellow-slide">
                    <a href="<?php echo get_field('link_imagem'); ?>">
                        <img class="sliderMobile_imagem" src="<?php echo $imagem_mobile; ?>" alt="" />
                    </a>
                    <a href="<?php echo get_field('link_imagem'); ?>" class="sliderMobile_textWrap">
                        <h2 class="sliderMobile_title"><?php echo get_the_title(); ?></h2>
                        <span class="sliderMobile_resumo"><?php the_excerpt(); ?></span>
                        <p class="sliderMobile_creditos"><?php echo $credito_mobile; ?></p>
                    </a>
                </div>
                <?php
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
        <!--<div class="pagination"></div>-->
    </div>
    <script src="<?php bloginfo('stylesheet_directory'); ?>/js/idangerous.swiper.min.js"></script>
    <script>
        var mySwiper = new Swiper('.swiper-container', {
            pagination: '.pagination',
            paginationClickable: true
        })
    </script>
</div>

<?php include ('inc_roteirobolinhas.php'); ?>

<div class="linksHomeMobile">
    
    
    
    
    
    <a class="linksHomeMobile_link" href="<?php echo get_the_permalink($vias); ?>">
        <h3 class="linksHomeMobile_title"><?php echo get_the_title($vias); ?></h3>
        <img class="linksHomeMobile_img" src="<?php bloginfo('stylesheet_directory'); ?>/images/mob_links_05.png" alt="" />
    </a>
     <a class="linksHomeMobile_link" href="<?php echo get_the_permalink(21); ?>">
        <h3 class="linksHomeMobile_title"><?php echo get_the_title($precisa); ?></h3>
        <img class="linksHomeMobile_img" src="<?php bloginfo('stylesheet_directory'); ?>/images/mob_links_06.png" alt="" />
    </a>
    <a class="linksHomeMobile_link" href="<?php echo get_the_permalink($friendly); ?>">
        <h3 class="linksHomeMobile_title"><?php echo get_the_title($friendly); ?></h3>
        <img class="linksHomeMobile_img" src="<?php bloginfo('stylesheet_directory'); ?>/images/mob_links_01.png" alt="" />
    </a>
     <a class="linksHomeMobile_link" href="<?php echo get_the_permalink($etiqueta); ?>">
        <h3 class="linksHomeMobile_title"><?php echo get_the_title($etiqueta); ?></h3>
        <img class="linksHomeMobile_img" src="<?php bloginfo('stylesheet_directory'); ?>/images/mob_links_04.png" alt="" />
    </a>
    <a class="linksHomeMobile_link" href="<?php echo get_the_permalink($transporte_mobile); ?>">
        <h3 class="linksHomeMobile_title"><?php echo $transporte_v2; ?></h3>
        <img class="linksHomeMobile_img" src="<?php bloginfo('stylesheet_directory'); ?>/images/mob_links_03.png" alt="" />
    </a>
    <a class="linksHomeMobile_link" href="<?php echo get_the_permalink($porai_mobile); ?>">
        <h3 class="linksHomeMobile_title"><?php echo get_the_title($porai); ?></h3>
        <img class="linksHomeMobile_img" src="<?php bloginfo('stylesheet_directory'); ?>/images/mob_links_02.png" alt="" />
    </a>
    
</div>
<?php get_footer(); ?>