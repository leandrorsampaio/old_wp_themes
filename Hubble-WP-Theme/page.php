<?php
get_header();
if (have_posts()) : while (have_posts()) : the_post();
        ?>
        <div id="content">
            <div id="content_left">
                <div id="content_left_news">
                    <div id="content_left_news_title-page">
                        <a href="<?php the_permalink() ?>" class="content_titles_h-page" rel="bookmark">
                            <?php the_title(); ?>
                        </a>
                    </div>
                    <div class="postWrapper" id="post-<?php the_ID(); ?>">
                        <h1 class="postTitle">
                        </h1>
                        <div class="post">
                            <p>
                                <?php the_content(); ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="content_right">
                <?php include 'sidebar_category.php';?>
            </div>
        </div>
        <?php
    endwhile;
else:
    ?>
    <p>Desulpe, erro do sistema.</p>
<?php
endif;

get_footer();
?>
