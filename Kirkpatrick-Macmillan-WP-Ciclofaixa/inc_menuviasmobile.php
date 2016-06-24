<?php include ('inc_programador.php'); ?>   
<!-- MENU ACORDEON -->
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script>
    $(function() {
        $("#accordion").accordion();
    });
</script>
<div id="accordion">
    <h3 class="accordion_title">Centro</h3>
    <div class="accordion_divContent centroAccordion">
        <?php
        $links = new WP_Query('post_type=vias&posts_per_page=-1&orderby=title&zonas=centro');
        while ($links->have_posts()) : $links->the_post();
            ?>
            <p class="accordion_divContent_text"><a class="accordion_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
            <?php
        endwhile;
        wp_reset_postdata();
        ?>
    </div>
    <h3 class="accordion_title">Zona Norte</h3>
    <div class="accordion_divContent znAccordion">
        <?php
        $links = new WP_Query('post_type=vias&posts_per_page=-1&orderby=title&zonas=zona-norte');
        while ($links->have_posts()) : $links->the_post();
            ?>
            <p class="accordion_divContent_text"><a class="accordion_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
            <?php
        endwhile;
        wp_reset_postdata();
        ?>
    </div>
    <h3 class="accordion_title">Zona Sul</h3>
    <div class="accordion_divContent zsAccordion">
        <?php
        $links = new WP_Query('post_type=vias&posts_per_page=-1&orderby=title&zonas=zona-sul');
        while ($links->have_posts()) : $links->the_post();
            ?>
            <p class="accordion_divContent_text"><a class="accordion_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
            <?php
        endwhile;
        wp_reset_postdata();
        ?>
    </div>
    <h3 class="accordion_title">Zona Oeste</h3>
    <div class="accordion_divContent zoAccordion">
        <?php
        $links = new WP_Query('post_type=vias&posts_per_page=-1&orderby=title&zonas=zona-oeste');
        while ($links->have_posts()) : $links->the_post();
            ?>
            <p class="accordion_divContent_text"><a class="accordion_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
            <?php
        endwhile;
        wp_reset_postdata();
        ?>
    </div>
    <h3 class="accordion_title">Zona Leste</h3>
    <div class="accordion_divContent zlAccordion">
        <?php
        $links = new WP_Query('post_type=vias&posts_per_page=-1&orderby=title&zonas=zona-leste');
        while ($links->have_posts()) : $links->the_post();
            ?>
            <p class="accordion_divContent_text"><a class="accordion_link" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
            <?php
        endwhile;
        wp_reset_postdata();
        ?>
    </div>
    <!--
    <h3 class="accordion_title">Mapa de S&atilde;o Paulo</h3>
    <div class="accordion_divMapa">
        <div class="m_content">
            <img src="<?php bloginfo('template_url') ?>/images/map_sp.png" alt="">
            <h1>VIAS EXCLUSIVAS</h1>
            <h2>ONDE COOOO</h2>
            <li>
                <ul><a href="#">CENTRO</a></ul>
                <ul><a href="#">ZONA NORTE</a></ul>
                <ul><a href="#">ZONA LESTE</a></ul>
                <ul><a href="#">ZONA OESTE</a></ul>
                <ul><a href="#">ZONA SUL</a></ul>
            </li>
            <p class="accordion_divContent_text">MAPA DE SÃO PAULO</p>
        </div>
    </div>
    -->
</div>