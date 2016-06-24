<ul class="post-categories"> 
    <?php
    //pega o idioma
    $terms = wp_get_object_terms($post->ID, 'idioma');
    if (!empty($terms)) :
        $tipo = array();
        foreach ($terms as $term) {
            $tipo = $term->slug;
        }
    endif;
    // faz a query
    $related = get_posts(array(
        'category__in' => wp_get_post_categories($post->ID),
        'numberposts' => 10,
        'orderby' => 'rand',
        'idioma' => $tipo,
        'post__not_in' => array($post->ID)
            ));
    if ($related)
        foreach ($related as $post) {
            setup_postdata($post);
            ?>
            <li>
                <a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a>
            </li>
            <?php
        }
    wp_reset_postdata();
    ?>
</ul>   