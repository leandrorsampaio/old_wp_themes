<div id="contentInterna">
    <?php
    get_header();
    ?>
    <div id="contentInterna_miolo">
        <!------------------------------------ CONTENT ------->
        <div id="contentInterna_miolo_theContent">
            <?php
            $categoria = get_the_category();
            $nomeCat = $categoria[0]->cat_name;
            echo '<h1 class="contentInterna_miolo_theContent_title">Not&iacute;cias na categoria "' . $nomeCat . '":</h1><br/>';
            $args = array(
                'category_name' => $nomeCat,
                'posts_per_page' => -1,
            );
            $posts = new WP_Query($args);
            if ($posts->have_posts()) {
                while ($posts->have_posts()) : $posts->the_post();
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
    </div>
    <!------------------------------------ ASIDE ------->
    <?php include('sidebar-aside.php'); ?>
</div>
<?php get_footer(); ?>
<?php get_sidebar('background'); ?>