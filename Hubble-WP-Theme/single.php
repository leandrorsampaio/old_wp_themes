<?php
get_header();

if (is_single(25)) {
    require_once("pesquisa.php");
}
if (have_posts()) : while (have_posts()) : the_post();
        ?>
        <div id="content">
            <div id="content_left">
                <div id="content_left_news">
                    <div id="content_left_news_title-page">
                        <h2 class="content_titles_h-page">
                            <?php
                                echo 'Estudos e Publica&ccedil;&otilde;es > ';
                                the_category(', ');
                            ?>
                        </h2>
                    </div>
                    <div class="postWrapper" id="post-<?php the_ID(); ?>">
                        <h1 class="postTitle">
                            <a href="<?php the_permalink() ?>" rel="bookmark">
                                <?php the_title(); ?>
                            </a>
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
    <p>Sorry, no pages matched your criteria.</p>
<?php
endif;

get_footer();
?>
