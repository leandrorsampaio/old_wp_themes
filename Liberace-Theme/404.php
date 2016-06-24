<?php
get_header();
?>
<div class="A2-compras interna_topo_title">
    <a>
        <p>404</p>
    </a>
</div>
</div>
    <div id="interna_topo_collapse">
        <?php get_sidebar('menu_responsivo'); ?>
    </div>

<div class="interna_content">
    <div class="interna_content_article">
        <?php
        $erro404 = new WP_Query('page_id=135');
        if ($erro404->have_posts()) {
            while ($erro404->have_posts()) : $erro404->the_post();

                the_content();
            endwhile;
        }
        wp_reset_query();
        ?>
    </div>    
</div>
<?php
get_footer();
?>
