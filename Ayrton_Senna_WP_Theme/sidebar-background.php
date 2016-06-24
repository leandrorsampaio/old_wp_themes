<?php
$bg = new WP_Query('post_type=background&orderby=rand&posts_per_page=1');
if ($bg->have_posts()) {
    while ($bg->have_posts()) : $bg->the_post();
        $url_thumbnail = wp_get_attachment_url(get_post_thumbnail_id());
        ?>
        <div id="background_creditos">Foto: <?php the_field('creditos'); ?></div> 
        <div class="background" style="background: url(<?php echo $url_thumbnail; ?>);">
            <div class="background_degrade" style="background: url('<?php bloginfo('template_url') ?>/images/degrade.png');"></div>
        </div>
        <?php
    endwhile;
} else {
    ?>
    <div id="background_creditos">Foto: Jos&eacute; Cordeiro / SPTuris</div> 
    <div class="background" style="background: url('<?php bloginfo('template_url') ?>/images/bg-padrao.jpg');">
        <div class="background_degrade" style="background: url('<?php bloginfo('template_url') ?>/images/degrade.png');"></div>
    </div>
    <?php
}
wp_reset_query();
?>
