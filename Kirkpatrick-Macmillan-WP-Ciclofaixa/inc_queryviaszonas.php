<?php include ('inc_programador.php'); ?>   
<?php
if (is_page($vias_CE)) {
    $qeryVar = 'centro';
} elseif (is_page($vias_ZN)) {
    $qeryVar = 'zona-norte';
} elseif (is_page($vias_ZS)) {
    $qeryVar = 'zona-sul';
} elseif (is_page($vias_ZO)) {
    $qeryVar = 'zona-oeste';
} elseif (is_page($vias_ZL)) {
    $qeryVar = 'zona-leste';
} else {
    $qeryVar = 'centro';
}
$links = new WP_Query('post_type=vias&posts_per_page=-1&orderby=title&zonas=' . $qeryVar);
while ($links->have_posts()) : $links->the_post();
    ?>
    <div class="queryZonas">
        <div class="queryZonas_esq">
            <a class="queryZonas_esq_title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <div class="queryZonas_esq_text">
                <?php the_content(); ?>
            </div>
        </div>
        <!--
        <div class="queryZonas_dir">
            <iframe class="queryZonas_dir_iframe" src="<?php echo get_field('map_iframe'); ?>"></iframe>
        </div>
        -->
    </div>
    <?php
endwhile;
wp_reset_postdata();
?>