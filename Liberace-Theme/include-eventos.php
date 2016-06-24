<?php
//adiciona um contador para numerar as divs do ajax.
$contador = 1;
?>
<!----------------------------- EVENTOS - COM AJAX (MAIOR QUE 540PX) --->
<div id="interna_content_eventos">
    <?php
    $args = array(
        'post_type' => $tipo_post,
        'posts_per_page' => $numberPosts,
        'order' => 'ASC',
        'idioma' => $idioma,
    );
    $eventos = new WP_Query($args);
    if ($eventos->have_posts()) {
        while ($eventos->have_posts()) : $eventos->the_post();
            ?>
            <div id="divDentro<?php echo $contador; ?>">
                <div class="interna_content_section_direita">

                    <?php the_content(); ?>

                </div>
            </div>
            <?php
            $contador++;
        endwhile;
    }
    wp_reset_query();
    ?>
    <div id="divFora">
        <?php
        if ($idioma == 'pt') {
            ?>
            <script>
                var aba = new JTabControl("divFora",700,300);
                aba.addTab("divDentro1", "Janeiro");
                aba.addTab("divDentro2", "Fevereiro");
                aba.addTab("divDentro3", "Mar&ccedil;o");
                aba.addTab("divDentro4", "Abril");
                aba.addTab("divDentro5", "Maio");
                aba.addTab("divDentro6", "Junho");
                aba.addTab("divDentro7", "Julho");
                aba.addTab("divDentro8", "Agosto");
                aba.addTab("divDentro9", "Setembro");
                aba.addTab("divDentro10", "Outubro");
                aba.addTab("divDentro11", "Novembro");
                aba.addTab("divDentro12", "Dezembro");
            </script>
            <?php
        } else {
            ?>
            <script>
                var aba = new JTabControl("divFora",700,300);
                aba.addTab("divDentro1", "January");
                aba.addTab("divDentro2", "February");
                aba.addTab("divDentro3", "March");
                aba.addTab("divDentro4", "April");
                aba.addTab("divDentro5", "May");
                aba.addTab("divDentro6", "June");
                aba.addTab("divDentro7", "July");
                aba.addTab("divDentro8", "August");
                aba.addTab("divDentro9", "September");
                aba.addTab("divDentro10", "October");
                aba.addTab("divDentro11", "November");
                aba.addTab("divDentro12", "December");
            </script>
            <?php
        }
        ?>
    </div>
    <div class="interna_content_article">
        <div class="interna_content_section">
            <section>
                <div class="interna_content_section_esquerda">
                    <img src="<?php echo the_field('imagem_1'); ?>" alt="<?php the_field('legenda_1'); ?>" title="<?php the_field('legenda_1'); ?>">
                    <img src="<?php echo the_field('imagem_2'); ?>" alt="<?php the_field('legenda_2'); ?>" title="<?php the_field('legenda_2'); ?>">
                    <img src="<?php echo the_field('imagem_3'); ?>" alt="<?php the_field('legenda_3'); ?>" title="<?php the_field('legenda_3'); ?>">
                    <p class="wp-caption-text">Parada Gay, Skol Sensation, SPFW. Jos&eacute; Cordeiro, Caio Pimenta|SP Turis.</p>
                </div>
                <div class="interna_content_section_direita">
                    <?php the_content(); ?>
                </div>
            </section>
        </div>
    </div>
</div>
<!----------------------------- EVENTOS MOBILE - SEM AJAX (MENOR QUE 540PX) --->
<div id="interna_content_eventosMob">
    <div id="eventosMob_anchorLinks">
        <?php
        if ($idioma == 'pt') {
            ?>
            <div class="eventosMob_anchorLinks_item"><a class="smoothScroll" href="#mes1" id="topo">Janeiro</a></div>
            <div class="eventosMob_anchorLinks_item"><a class="smoothScroll" href="#mes2">Fevereiro</a></div>
            <div class="eventosMob_anchorLinks_item"><a class="smoothScroll" href="#mes3">Mar&ccedil;o</a></div>
            <div class="eventosMob_anchorLinks_item"><a class="smoothScroll" href="#mes4">Abril</a></div>
            <div class="eventosMob_anchorLinks_item"><a class="smoothScroll" href="#mes5">Maio</a></div>
            <div class="eventosMob_anchorLinks_item"><a class="smoothScroll" href="#mes6">Junho</a></div>
            <div class="eventosMob_anchorLinks_item"><a class="smoothScroll" href="#mes7">Julho</a></div>
            <div class="eventosMob_anchorLinks_item"><a class="smoothScroll" href="#mes8">Agosto</a></div>
            <div class="eventosMob_anchorLinks_item"><a class="smoothScroll" href="#mes9">Setembro</a></div>
            <div class="eventosMob_anchorLinks_item"><a class="smoothScroll" href="#mes10">Outubro</a></div>
            <div class="eventosMob_anchorLinks_item"><a class="smoothScroll" href="#mes11">Novembro</a></div>
            <div class="eventosMob_anchorLinks_item"><a class="smoothScroll" href="#mes12">Dezembro</a></div>
            <?php
        } else {
            ?>
            <div class="eventosMob_anchorLinks_item"><a class="smoothScroll" href="#mes1" id="topo">January</a></div>
            <div class="eventosMob_anchorLinks_item"><a class="smoothScroll" href="#mes2">February</a></div>
            <div class="eventosMob_anchorLinks_item"><a class="smoothScroll" href="#mes3">March</a></div>
            <div class="eventosMob_anchorLinks_item"><a class="smoothScroll" href="#mes4">April</a></div>
            <div class="eventosMob_anchorLinks_item"><a class="smoothScroll" href="#mes5">May</a></div>
            <div class="eventosMob_anchorLinks_item"><a class="smoothScroll" href="#mes6">June</a></div>
            <div class="eventosMob_anchorLinks_item"><a class="smoothScroll" href="#mes7">July</a></div>
            <div class="eventosMob_anchorLinks_item"><a class="smoothScroll" href="#mes8">August</a></div>
            <div class="eventosMob_anchorLinks_item"><a class="smoothScroll" href="#mes9">September</a></div>
            <div class="eventosMob_anchorLinks_item"><a class="smoothScroll" href="#mes10">October</a></div>
            <div class="eventosMob_anchorLinks_item"><a class="smoothScroll" href="#mes11">November</a></div>
            <div class="eventosMob_anchorLinks_item"><a class="smoothScroll" href="#mes12">December</a></div>
            <?php
        }
        ?>
    </div>

    <?php
    $contador = 1;
    $args = array(
        'post_type' => $tipo_post,
        'posts_per_page' => $numberPosts,
        'order' => 'ASC',
        'idioma' => $idioma,
    );
    $eventos = new WP_Query($args);
    if ($eventos->have_posts()) {
        while ($eventos->have_posts()) : $eventos->the_post();
            ?>
            <div class="interna_content_section_direita">
                <a id="mes<?php echo $contador; ?>">
                    <h1><?php the_title(); ?></h1>
                </a>

                <?php the_content(); ?>

                <a class="smoothScroll" href="#topo"><span class="back_top"></span></a>
            </div>
            <?php
            $contador++;
        endwhile;
    }
    wp_reset_query();
    ?>
</div>

