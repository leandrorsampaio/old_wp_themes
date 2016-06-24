<div id="contentInterna_aside_ad">
    <?php
    // LOOPING ANUNCIOS
    $ads = new WP_Query('post_type=ads&posts_per_page=1&orderby=rand');
    while ($ads->have_posts()) : $ads->the_post();
        if (get_field('ads_blank')) {
            echo "<a href=" . get_field('ads_link') . " target=\"_blank\">";
            echo "<img src=" . get_field('ads_img') . " alt=\"Publicidade Autodromo\" />";
            echo "</a>";
        } else {
            echo "<a href=" . get_field('ads_link') . ">";
            echo "<img src=" . get_field('ads_img') . " alt=\"Publicidade Autodromo\" />";
            echo "</a>";
        }
    endwhile;
    wp_reset_postdata();
    ?>
</div>