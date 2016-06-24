<aside id="content_bloco3_boxDownload_Sidebar">
    <?php
    //chama os widgets para essa sidebar cadastrados no admin do WP 
    !dynamic_sidebar('destaques-internas');
    ?>
</aside>
<div id="sidebar_destaquesInternas">
    <h1 class="sidebar_destaquesInternas_title">+ Destaques</h1><br/>
    <?php
    //Query get_the_tags
    $test = "";
    $posttags = get_the_tags();
    if ($posttags) {
        foreach ($posttags as $tag) {
            $test .= ',' . $tag->name;
        }
    }
    $test = substr($test, 1); // remove first comma
    //---------------------------------- BOX 1 - Query "Feiras e Exposições"
    $tag_query = new WP_Query('tag=' . $test . '&posts_per_page=4');
    while ($tag_query->have_posts()) : $tag_query->the_post();
        ?>
        <div class="sidebar_destaquesInternas_conteudo">
            <a class="sidebar_destaquesInternas_conteudo_link" href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a><br/>
        </div>
        <?php
    endwhile;
    wp_reset_postdata();
    ?>
    <a class="sidebar_destaquesInternas_leiaMais" href="<?php echo get_permalink(2138); ?>">
        Leia mais! &gt;&gt;
    </a>
</div>




