<?php
// inclui o header
get_header();

// escolhe as cores
include ('sidebar-escolheacor.php');
?>
<div id="noticias" style="color: <?php echo $cor1; ?>;">
    <section id="noticias_section">
        <div id="noticias_section_head">
            <h1 id="noticias_section_head_title">P&aacute;gina n&atilde;o encontrada</h1>
        </div>
        <div id="erro404">
            <?php
            $page_404 = new WP_Query('page_id=432');
            while ($page_404->have_posts()) : $page_404->the_post();
                the_post_thumbnail();
                the_content();
            endwhile;
            wp_reset_postdata();
            ?>
        </div>
        <?php
        include ('sidebar-servicebar.php');
        ?>
    </section>
    <!-- Aside -->
    <aside id="aside">
        <?php
        include ('sidebar-publicidade.php');
        include ('sidebar-maisnoticias.php');
        ?>
    </aside>
    <!-- Aside -->
</div>
<?php get_footer(); ?>