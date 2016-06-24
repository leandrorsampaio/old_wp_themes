<div id = "contentInterna_miolo_theContent">        
    <ul>
        <?php
        // --------------------------------- Todas as noticias
        $todas_noticias = new WP_Query('posts_per_page=-1');
        while ($todas_noticias->have_posts()) : $todas_noticias->the_post();
            ?>
            <li class="contentInterna_miolo_theContent_news_li"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php
        endwhile;
        wp_reset_query();
        ?>
    </ul>
</div>