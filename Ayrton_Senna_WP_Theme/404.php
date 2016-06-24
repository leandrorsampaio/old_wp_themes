<div id="contentInterna">
    <?php get_header(); ?>
    <div id="contentInterna_miolo">
        <!------------------------------------ CONTENT ------->
        <div id="contentInterna_miolo_theContent">
            <div id="contentInterna_miolo_404">
                <h1>OPS!</h1>
                <!--
                <h2>Algo de inesperado aconteceu com o sistema.</h2>
                <img src="<?php bloginfo('template_url'); ?>/images/404.jpg">
                -->
                <?php
                $page404 = new WP_Query('page_id=63');
                while ($page404->have_posts()) : $page404->the_post();
                    the_content();
                endwhile;
                wp_reset_postdata();
                ?>
            </div>
            <!------------------------------------ MAIS NOTICIAS ------->
            <?php
            get_sidebar('maisnoticias');
            ?>
        </div>
    </div>
    <!------------------------------------ ASIDE ------->
    <?php include('sidebar-aside.php'); ?>
</div>
<?php get_footer(); ?>
<?php get_sidebar('background'); ?>