<?php
if (is_page('ie-8')) {
    include(TEMPLATEPATH . '/index-ie.php');
} else {
    ?>
    <div id="contentInterna">
        <?php
        get_header();
        include ('sidebar-programador.php');
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
                <?php
                if (is_page($agenda)) {
                    get_sidebar('maisnoticias');
                } else {
                    
                }
                if (is_page($contato)) {
                    
                } else {
                    ?>
                    <newsletter>
                        <?php get_sidebar('content-newsletter'); ?>
                    </newsletter>
                <?php }
                ?>
            </div>
        <?php endwhile; ?> 
        <!------------------------------------ ASIDE ------->
        <?php include('sidebar-aside.php'); ?>
    </div>
    <?php get_footer(); ?>
    <?php
    get_sidebar('background');
}
?>