<?php 
include ('inc_programador.php'); 

if (is_page($index_mobile)) {
    $classe1 = '';
    $classe2 = '';
    $classe3 = 'roteirosMobile_link2x';
} else {
    $classe1 = 'roteirosMobileInterna';
    $classe2 = 'Interna';
    $classe3 = '';
}

?>
<div class="roteirosMobile <?php echo $classe1; ?>">
    <h2 class="roteirosMobile_titleMain">Roteiros</h2>
    <a class="roteirosMobile_link<?php echo $classe2; ?>" href="<?php echo get_the_permalink($roteiros_paulista); ?>">
        <img class="roteirosMobile_img" src="<?php bloginfo('stylesheet_directory'); ?>/images/mob_03.png" alt="" />
        <h3 class="roteirosMobile_title"><?php echo get_the_title($roteiros_paulista); ?></h3>
    </a>
    <a class="roteirosMobile_link<?php echo $classe2; ?>" href="<?php echo get_the_permalink($roteiros_centro); ?>">
        <img class="roteirosMobile_img" src="<?php bloginfo('stylesheet_directory'); ?>/images/mob_01.png" alt="" />
        <h3 class="roteirosMobile_title"><?php echo get_the_title($roteiros_centro); ?></h3>
    </a>
    <a class="roteirosMobile_link<?php echo $classe2; ?>" href="<?php echo get_the_permalink($roteiros_farialima); ?>">
        <img class="roteirosMobile_img" src="<?php bloginfo('stylesheet_directory'); ?>/images/mob_02.png" alt="" />
        <h3 class="roteirosMobile_title"><?php echo get_the_title($roteiros_farialima); ?></h3>
    </a>
    <a class="roteirosMobile_link<?php echo $classe2; ?> <?php echo $classe3; ?>"  href="<?php echo get_the_permalink($roteiros_x1); ?>">
        <img class="roteirosMobile_img" src="<?php bloginfo('stylesheet_directory'); ?>/images/mob_05.png" alt="" />
        <h3 class="roteirosMobile_title"><?php echo get_the_title($roteiros_x1); ?></h3>
    </a>
    <a class="roteirosMobile_link<?php echo $classe2; ?>"  href="<?php echo get_the_permalink($roteiros_x2); ?>">
        <img class="roteirosMobile_img" src="<?php bloginfo('stylesheet_directory'); ?>/images/mob_04.png" alt="" />
        <h3 class="roteirosMobile_title"><?php echo get_the_title($roteiros_x2); ?></h3>
    </a>
</div>