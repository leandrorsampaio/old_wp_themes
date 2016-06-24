<?php get_header(); ?>
<div id="internaContent">
    <article>
        <div id="internaContent_article">
            <?php
            // Looping Padrao
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    ?>
                    <div id="internaContent_article_page">
                        <h1 id="internaContent_article_page_title"><?php the_title(); ?></h1>
                        <?php include ('mod_socialShare.php'); ?>
                        <div id="internaContent_article_page_content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <?php
                }
            }
            // Limpa loop
            wp_reset_query();
            ?>
            <div id="internaContent_article_prefacio">
                <div id="internaContent_article_prefacio_form">
                    <form action="<?php bloginfo('template_url'); ?>/mailer/prefacio_envia.php" method="post">
                        <h2>Nome:</h2>
                        <input class="internaContent_article_prefacio_form_input" type="text" value="" name="nome" />
                        <h2>E-mail:</h2>
                        <input class="internaContent_article_prefacio_form_input" type="text" value="" name="email" />
                        <h2>Mensagem:</h2>
                        <textarea id="internaContent_article_prefacio_form_textarea" name="mensagem" onKeyDown="if(this.value.length >= 400){this.value = this.value.substring(0, 400)}" onKeyUp="if(this.value.length >= 400){this.value = this.value.substring(0, 400)}"></textarea>
                        <input id="internaContent_article_prefacio_form_btn" name="submit" type="submit" value="Enviar" />
                    </form>
                </div>
            </div>
        </div>
    </article>
    <aside>
        <div id="internaContent_sidebar">
            <?php get_sidebar('aside'); ?>
        </div>
    </aside>
</div>
<?php get_footer(); ?>