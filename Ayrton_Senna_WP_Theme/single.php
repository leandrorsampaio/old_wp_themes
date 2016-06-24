<div id="contentInterna">
    <?php
    get_header();
    ?>
    <div id="contentInterna_miolo">
        <?php while (have_posts()): the_post(); ?>
            <!------------------------------------ SERVICE BAR --->
            <div id="contentInterna_miolo_serviceBar">
                <?php
                get_sidebar('content-breadcrumb');
                get_sidebar('content-servicos');
                get_sidebar('content-social');
                ?>
            </div>
            <!------------------------------------ CONTENT ------->
            <article>
                <?php include ('sidebar-thecontent.php'); ?>
            </article>
            <!------------------------------------ MAIS NOTICIAS ------->
            <?php
            if ($espacos) {
                
            } else {
                get_sidebar('maisnoticias');
                get_sidebar('content-newsletter');
            }
            ?>
        </div>
    <?php endwhile; ?> 
    <!------------------------------------ ASIDE ------->
    <?php include('sidebar-aside.php'); ?>
</div>
<?php get_footer(); ?>
<?php get_sidebar('background'); ?>