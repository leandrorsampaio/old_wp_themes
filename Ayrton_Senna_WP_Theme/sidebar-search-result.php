<?php
//
include ('sidebar-programador.php');
//
if (have_posts()) :
    ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="contentInterna_miolo_sresult">
            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <h2><?php
        //pega a categoria e o endereço do link
        $categoria = get_the_category();
        $nomeCat = $categoria[0]->cat_name;

        //checa se o post tem categoria
        if (has_category()) {
            ?>
                    <a href="<?php echo get_category_link($categoria); ?>">
                        <?php echo $nomeCat; ?>
                    </a> | 
                    <?php
                } else {
                    
                }
                ?>
                <?php
                //checa se é notícia ou não. se for notícia, mostra a data
                $post_type = get_post_type($post->ID);
                if ($post_type == 'post') {
                    ?> <?php the_date('d \d\e F \d\e Y'); ?></h2>
                <?
            } else {
                
            }
            ?>
            <h3><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></h3>
        </div>
        <?php
    endwhile;
else :
    ?>
    <h1 id="texto404">Desculpe, n&atilde;o encontramos nenhum resultado com o termo desejado.</h1>
<?php endif; ?>
<br/>
<?php
if (function_exists('wp_paginate')) {
    wp_paginate();
}
?>