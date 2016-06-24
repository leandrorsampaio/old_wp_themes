<?php
get_header();
if (have_posts()):
    ?>
    <div id="content">
        <div id="content_left">
            <div id="content_left_news">
                <div id="content_left_news_title-page">
                    <h2 class="content_titles_h-page">
                        <?php
                        echo 'Estudos e Publica&ccedil;&otilde;es';
                        //if (in_category(102)) {
                        //    echo 'Estudos e Publica&ccedil;&otilde;es';
                        //} else {
                        //    echo 'Estudos e Publica&ccedil;&otilde;es > ';
                        //    the_category(', ');
                        //}
                        ?>
                    </h2>
                </div>
                <ol id="posts">
                    <?php
                    
                    $categoria = $_GET["cat"];
                    
                    if (is_category(103)) {
                        query_posts('cat=103&posts_per_page=-1');
                    } else {
                         query_posts('cat=' . $categoria . '&posts_per_page=-1');
                    }
                    ?>








                    <?php while (have_posts()) : the_post(); ?>
                        <div class="content_left_news_calls">
                            <div class="content_left_news_left">
                                <a href="<?php the_permalink() ?>" rel="bookmark">
                                    <?php the_content(); ?>
                                </a>
                            </div>
                            <div class="content_left_news_right" id="post-<?php the_ID(); ?>">
                                <p class="content_left_news_right_categoria"><?php the_category() ?></p>
                                <p>
                                    <a href="<?php the_permalink() ?>" rel="bookmark" class="content_left_news_right_titulo"><?php the_title(); ?></a>
                                </p>
                                <p class="content_left_news_right_texto">
                                    <a href="<?php the_permalink() ?>" rel="bookmark">Clique e saiba mais</a>
                                </p>
                            </div>
                        </div>
                        <?php comments_template(); // Get wp-comments.php template ?>
                    <?php endwhile; ?>








                </ol>
            <?php else: ?>
                <!-- Meu ELSE para paginas vazias-->
                <div id="content">
                    <div id="content_left">
                        </br>
                        <h1 style="font-size: 16px; margin: 0 0 0 25px;">Nenhum item nesta categoria.</h1>
                    </div>
                    <div id="content_right">
                        <?php include 'sidebar_category.php'; ?>
                    </div>
                </div>
            </div>
            <?php
            exit();
            ?>
            <!-- Meu ELSE para paginas vazias-->
        <?php endif; ?>
        <?php if (will_paginate()): ?>
        <?php endif; ?>
    </div>
</div>
<div id="content_right">
    <?php include 'sidebar_category.php'; ?>
</div>
</div>
<?php get_footer(); ?>