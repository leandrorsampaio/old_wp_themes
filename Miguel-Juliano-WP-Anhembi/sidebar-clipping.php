<aside id="content_bloco3_boxDownload_Sidebar">
    <?php
    //chama os widgets para essa sidebar cadastrados no admin do WP 
    !dynamic_sidebar('clipping');
    ?>
</aside>
<div class="contentEsquerda_servicos_box">
    <p class="contentEsquerda_servicos_title">Leia Mais</p>
    <?php
    //---------------------------------- Leia mais (posts comuns)
    $servicos_mais = new WP_Query('post_type=clipping&posts_per_page=3');
    while ($servicos_mais->have_posts()) : $servicos_mais->the_post();
        ?>
        <a class="contentEsquerda_servicos_box_link" href="<?php the_permalink(); ?>">
            <h2 class="contentEsquerda_servicos_box_h"><?php the_title(); ?></h2>
        </a>
        <?php
    endwhile;
    wp_reset_postdata();
    ?>
    <div id="clipping_sidebar_leiaMais">
        <a href="<?php echo get_permalink(1231); ?>">
            Veja todas as not&iacute;cias &gt;&gt;
        </a>
    </div>
</div>
<div style="margin: 20px 0 0 0; ">
    <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FAnhembiParque&amp;width=200&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:290px;" allowTransparency="true"></iframe>
</div>
<!------------------------------------------ BOX Twitter
<h1 class="sidebarServicos_twitter">
    Siga-nos
</h1>
<div id="sidebar_boxTwitter">
    <iframe src="http://www.anhembiexpo.com.br/wp-content/themes/Miguel-Juliano-WP-Anhembi/twitter_widget/twitter_widget-sidebar.html" scrolling="no"></iframe>
</div>
<div id="sidebar_twitterBird">
    <a href="http://twitter.com/anhembiparque" target="_blank">
        <img src="<?php bloginfo('template_url'); ?>/images/twitter_bird.png" alt="Logo do Twitter" />
    </a>
</div>
-->