<div id="contentInterna_miolo_theContent_news">
    <h1 class="contentInterna_miolo_theContent_news_title">&Uacute;ltimas not&iacute;cias</h1>
    <?php
    $news = new WP_Query('posts_per_page=5');
    if ($news->have_posts()) {
        while ($news->have_posts()) : $news->the_post();
            ?>
            <ul>
                <li class="contentInterna_miolo_theContent_news_li"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            </ul>
            <?php
        endwhile;
    }
    wp_reset_query();
    ?>
</div>