<div class="aside_box"  style="border-color: <?php echo $cor1; ?>;">
    <h5 class="aside_box_title"  style="color: <?php echo $cor1; ?>;">Conhe&ccedil;a outras escolas:</h5>
    <?php
    //---------------------------------- Query Escolas
    $asideposts = new WP_Query('post_type=escolas&posts_per_page=10&orderby=rand');
    while ($asideposts->have_posts()) : $asideposts->the_post();
        ?>
        <div class="asideBox-maisEscolas_bandeira">
            <a class="asideBox-maisEscolas_bandeira_link bandeiraSidebarImagem" href="<?php the_permalink(); ?>">
                <?php $url_thumbnail = wp_get_attachment_url(get_post_thumbnail_id()); ?>
                <img class="asideBox-maisEscolas_bandeira_link_img" src="<?php echo $url_thumbnail; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
            </a>
            <a class="bandeiraSidebarText" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </div>
        <?php
    endwhile;
    wp_reset_postdata();
    ?>
</div>