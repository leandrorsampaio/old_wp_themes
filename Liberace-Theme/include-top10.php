<div class="interna_content_article">
    <article>
        <?php the_content(); ?>
    </article>
</div>
<?php
$args = array(
    'post_type' => $tipo_post,
    'posts_per_page' => $numberPosts,
    'categorias' => 'top-10',
    'idioma' => $idioma,
);
$top10 = new WP_Query($args);
if ($top10->have_posts()) {
    while ($top10->have_posts()) : $top10->the_post();
        ?>
        <div class="interna_content_section">
            <section>
                <div class="interna_content_section_esquerda">
                    <h2><?php the_title(); ?></h2>
                </div>
                <div class="interna_content_section_direita">
                    <?php the_content(); ?>
                </div>
            </section>
        </div>
        <?php
    endwhile;
}
wp_reset_query();
?>
<div class="interna_content_section">
    <section>
        <div class="interna_content_section_esquerda">
            <h3>&nbsp;</h3>
        </div>
        <div class="interna_content_section_direita">
            <?php
            if ($idioma == 'pt') {
                echo '<h2>Outros &iacute;cones da cidade</h2>';
            } else {
                echo '<h2>Other city icons</h2>';
            }
            ?>

        </div>
    </section>
</div>
<?php
//------------------ TOP 10: Outros ícones da Cidade
$args = array(
    'post_type' => $tipo_post,
    'posts_per_page' => $numberPosts,
    'categorias' => 'outros',
    'idioma' => $idioma,
);
$top10_outros = new WP_Query($args);
if ($top10_outros->have_posts()) {
    while ($top10_outros->have_posts()) : $top10_outros->the_post();
        ?>
        <div class="interna_content_section">
            <section>
                <div class="interna_content_section_esquerda">
                    <h3><?php the_title(); ?></h3>
                </div>
                <div class="interna_content_section_direita">
                    <?php the_content(); ?>
                </div>
            </section>
        </div>
        <?php
    endwhile;
}
wp_reset_query();