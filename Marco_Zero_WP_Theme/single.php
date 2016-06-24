<?php
get_header();
//
while (have_posts()): the_post();
    ?>
    <div id="slider">
        <?php include("inc_slider.php"); ?>
    </div>
    <section>
        <div id="section_content" class="block">
            <?php
            include('inc_content.php');
        endwhile;
        wp_reset_query();
        ?>
    </div>
</section>
</div>
<?php get_footer(); ?>