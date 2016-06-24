<?php
get_header();
//
?>
<section>
    <div id="section_content" class="block">
        <div id="section_content_title" class="wrap">
            <?php get_sidebar('title'); ?>
        </div>
        <div id="section_content_page">
            <?php
            //se for a pagina de categorias:
            if (is_page(17)) {
                ?>
                <div id="all_categories">
                    <?php
                    foreach (get_categories('exclude=1') as $cat) :
                        //exclude: categoria "sem categoria"
                        ?>
                        <div id="all_categories_box" class="block">
                            <a href="<?php echo get_category_link($cat->term_id); ?>">
                                <img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" />
                                <h1><?php echo $cat->cat_name; ?></h1>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php
        } else {
            the_content();
        }
        ?> 
    </div>
</div>
</section>
</div>
<?php get_footer(); ?>

