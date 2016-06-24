<?php get_header(); ?>
<section>
    <div id="section_content" class="block">
        <?php
        $arq_historica = 'arquitetura-historica';
        $arq_religiosa = 'arquitetura-religiosa';
        $biblioteca = 'biblioteca';
        $centro_cultura = 'centro-de-cultura';
        $monumento = 'monumento';
        $museu = 'museu';
        $parque = 'parque';
        $pat_cultural = 'patrimonio-cultural';
        $praca = 'praca';
        $teatro = 'teatro';

        if (is_category($arq_historica)) {
            $imagemCat = 'arquitetura-historica.png';
            $nomeCat = 'arquitetura-historica';
        } elseif (is_category($arq_religiosa)) {
            $imagemCat = 'arquitetura-religiosa.png';
            $nomeCat = 'arquitetura-religiosa';
        } elseif (is_category($biblioteca)) {
            $imagemCat = 'biblioteca.png';
            $nomeCat = 'biblioteca';
        } elseif (is_category($centro_cultura)) {
            $imagemCat = 'centro-de-cultura.png';
            $nomeCat = 'centro-de-cultura';
        } elseif (is_category($monumento)) {
            $imagemCat = 'monumento.png';
            $nomeCat = 'monumento';
        } elseif (is_category($museu)) {
            $imagemCat = 'museu.png';
            $nomeCat = 'museu';
        } elseif (is_category($parque)) {
            $imagemCat = 'parque-urbano.png';
            $nomeCat = 'parque';
        } elseif (is_category($pat_cultural)) {
            $imagemCat = 'patrimonio-cultural.png';
            $nomeCat = 'patrimonio-cultural';
        } elseif (is_category($praca)) {
            $imagemCat = 'praca.png';
            $nomeCat = 'praca';
        } elseif (is_category($teatro)) {
            $imagemCat = 'teatro.png';
            $nomeCat = 'teatro';
        } else {
            $imagemCat = 'marca_sp.png';
        }
        ?>
        <div id="section_content_title" class="wrap">
            <div id="section_content_title_logo">
                <img src="<?php bloginfo('template_url') ?>/images/<?php echo $imagemCat; ?>">
            </div>
            <div id="section_content_title_texto">
                <h1><?php single_cat_title(''); ?></h1>
            </div>
        </div>

        <div id="section_content_page">
            <?php
            $args = array(
                'category_name' => $nomeCat,
                'posts_per_page' => -1,
                'idioma' => 'pt',
                'orderby' => 'title',
                'order' => 'ASC',
            );
            $posts = new WP_Query($args);
            if ($posts->have_posts()) {
                while ($posts->have_posts()) : $posts->the_post();
                    ?>
                    <ul>
                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                    </ul>
                    <?php
                endwhile;
            }
            wp_reset_query();
            ?>
        </div>

    </div><!--- Miolo -->
</section>
<?php get_footer(); ?>