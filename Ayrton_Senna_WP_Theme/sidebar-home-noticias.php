<?php include ('sidebar-programador.php'); ?>
<div id="contentInterna_miolo_homeNews_bloco1">
    <?php
    // --------------------------------- Bloco 1: Última Notícia (em Destaque)
    $noticia_destaque = new WP_Query('posts_per_page=1');
    if ($noticia_destaque->have_posts()) {
        while ($noticia_destaque->have_posts()) : $noticia_destaque->the_post();
            $url_thumbnail_big = wp_get_attachment_url(get_post_thumbnail_id());
            ?>
            <a href="<?php the_permalink(); ?>">
                <?php if ((strlen($url_thumbnail_big)) > 5) { ?>    
                    <div id="contentInterna_miolo_homeNews_bloco1_thumb" style="background: url(<?php echo $url_thumbnail_big; ?>); background-position: center center;"></div>
                <?php } else { ?>
                    <div id="contentInterna_miolo_homeNews_bloco1_thumb"></div>
                <?php } ?>
            </a>
            <div id="contentInterna_miolo_homeNews_bloco1_texto">
                <a href="
                <?php
                $categoria = get_the_category();
                $linkCat = get_category_link($categoria);
                echo $linkCat;
                ?>
                   ">
                    <h3>
                        <?php
                        $nomeCat = $categoria[0]->cat_name;
                        echo $nomeCat;
                        ?>
                    </h3>
                </a>
                <a href="<?php the_permalink(); ?>">
                    <?php
                    // Conta carecteres e exibe o Titulo
                    $contador = get_the_title();
                    if ((strlen($contador)) < 70) {
                        $limitador = substr(get_the_title(), 0, 70);
                        echo '<h1>' . $limitador . '</h1>';
                    } else {
                        $limitador = substr(get_the_title(), 0, 70);
                        echo '<h1>' . $limitador . ' (...)</h1>';
                    }
                    // Conta caracteres e exibe o resumo
                    $contador = get_the_excerpt();
                    if ((strlen($contador)) < 200) {
                        $limitador = substr(get_the_excerpt(), 0, 150);
                        echo '<h2>' . $limitador . '</h2>';
                    } else {
                        $limitador = substr(get_the_excerpt(), 0, 150);
                        echo '<h2>' . $limitador . '... <b>(Continue lendo)</b></h2>';
                    }
                    ?>
                </a>
            </div>
        </a>
        <?php
    endwhile;
}
wp_reset_query();
?>
</div>
<div id="contentInterna_miolo_homeNews_bloco2">
    <?php
    // --------------------------------- Bloco 2: Últimas 6 notícias
    $noticia_outras = new WP_Query('posts_per_page=6&offset=1');
    if ($noticia_outras->have_posts()) {
        while ($noticia_outras->have_posts()) : $noticia_outras->the_post();
            $url_thumbnail = wp_get_attachment_url(get_post_thumbnail_id());
            ?>
            <div class="contentInterna_miolo_homeNews_bloco2_bloco">
                <?php if ((strlen($url_thumbnail)) > 5) { ?>    
                    <div class="contentInterna_miolo_homeNews_bloco2_bloco_thumb" style="background: url(<?php echo $url_thumbnail; ?>); background-position: center center;"></div>
                <?php } else { ?>
                    <div class="contentInterna_miolo_homeNews_bloco2_bloco_thumb"></div>
                <?php } ?>
                <div class="contentInterna_miolo_homeNews_bloco2_bloco_title">
                    <a href="<?php the_permalink(); ?>">
                        <?php
                        // Conta carecteres e exibe o Titulo
                        $contador = get_the_title();
                        if ((strlen($contador)) < 70) {
                            $limitador = substr(get_the_title(), 0, 70);
                            echo $limitador;
                        } else {
                            $limitador = substr(get_the_title(), 0, 70);
                            echo $limitador . '...';
                        }
                        ?>
                    </a>
                </div>
            </div>
            <?php
        endwhile;
    }
    wp_reset_query();
    ?>
</div>
<div id="contentInterna_miolo_homeNews_bloco3">
    <a id="contentInterna_miolo_homeNews_bloco3_linkMais" href="<?php bloginfo('siteurl'); ?>/?p=876">
        Conhe&ccedil;a todas as not&iacute;cias
    </a>
</div>
<div id="contentInterna_miolo_homeNews_bloco4">
    <div id="facebook">
        <div id="fb-root"></div>
        <script>
            //-------------------------- FACE AUTODROMO
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        <div class="fb-like-box" data-href="https://www.facebook.com/autodromodeinterlagos" data-width="262" data-height="380" data-show-faces="false" data-stream="true" data-header="true"></div>
    </div>
    <div id="twitter">
        <a class="twitter-timeline" href="https://twitter.com/InterlagosTrack" data-widget-id="379685017468669952">Tweets by @InterlagosTrack</a>
        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
    </div>
</div>