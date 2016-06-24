<?php
get_header();

if (have_posts()) : while (have_posts()) : the_post();
        ?>
        <div id="content">
            <div class="content_left-search">
                <div class="content_left_news-search">
                    
                    <div class="content_left_news_search-result">
                        
                    </div>

                    <div class="postWrapper" id="post-<?php the_ID(); ?>">
                        <h1 class="postTitle">
                            <a href="<?php the_permalink() ?>" rel="bookmark">
                                <?php the_title(); ?>
                            </a>
                        </h1>
                        <p class="categoria_search-p">Categoria: <?php the_category(', '); ?></p>
                    </div>


                </div>
            </div>

        </div>

        <?php
    endwhile;
else:
    ?>
    <div id="content">
        <div id="content_left">
            <div id="content_left_news">

                <div class="postWrapper">
                     <h1 class="postTitle-search">
                        Desculpe, nenhum resultado encontrado.
                    </h1>
                </div>
            </div>
        </div>
        <div id="content_right">
            <?php include 'sidebar_category.php';?>
        </div>
    </div>
<?php
endif;
echo dynamic_sidebar('sidebar_post');
get_footer();
?>
