<aside>
    <?php
    !dynamic_sidebar('geral');
    ?>
</aside>
<div id="contentPaginaInterna_barraLateral_socialLuzes">
    <a href="#rss">
        <div class="socialLuzes_rss">
            <div class="socialLuzes_rss_bg"></div>
            <img src="<?php bloginfo('template_url'); ?>/images/sidebar_social_lightsOFF_rss.png" />
        </div> 
    </a>
    <a href="https://www.facebook.com/TurismoemSP" target="blank">
       <div id="socialLuzes_face">
            <div id="socialLuzes_face_bg"></div>
            <img src="<?php bloginfo('template_url'); ?>/images/sidebar_social_lightsOFF_face.png" />
        </div>  
    </a>
    <a href="http://twitter.com/TurismoSaoPaulo" target="blank">
        <div id="socialLuzes_twitter">
            <div id="socialLuzes_twitter_bg"></div>
        <img src="<?php bloginfo('template_url'); ?>/images/sidebar_social_lightsOFF_twitter.png" />
</div> 
</a>
</div>
<!--
<div id="contentPaginaInterna_barraLateral_imgMiolo_conteudo_01">
    <div id="contentPaginaInterna_barraLateral_imgMiolo_conteudo_01_img"></div>
    <div id="contentPaginaInterna_barraLateral_imgMiolo_conteudo_01_titulo">
        <a href="<?php echo get_permalink(24); ?>">Envie um cart&atilde;o de Natal virtual!</a>
    </div>                 
</div>
-->
<div id="contentPaginaInterna_barraLateral_imgMiolo_conteudo_02">
    <div id="contentPaginaInterna_barraLateral_imgMiolo_conteudo_02_img"></div>
    <div id="contentPaginaInterna_barraLateral_imgMiolo_conteudo_02_titulo">Atra&ccedil;&otilde;es de Natal</div>
    <div id="contentPaginaInterna_barraLateral_imgMiolo_conteudo_02_links">
        <ul>
            <!-- Turis Metro de Natal
            <li>
                <a href="<?php echo get_permalink(5); ?>">   
                    <?php
                    $id = 5;
                    $post = get_page($id);
                    echo $post->post_title;
                    ?>
                </a>
            </li>
            -->
            <li>
                <a href="<?php echo get_permalink(6); ?>">             
                    <?php
                    $id = 6;
                    $post = get_page($id);
                    echo $post->post_title;
                    ?></a>
            </li>
            <li>
                <a href="<?php echo get_permalink(7); ?>">            
                    <?php
                    $id = 7;
                    $post = get_page($id);
                    echo $post->post_title;
                    ?>
                </a>
            </li>
        </ul>                        
    </div>
</div>
<div id="contentPaginaInterna_barraLateral_imgMiolo_conteudo_03">
    <div id="contentPaginaInterna_barraLateral_imgMiolo_conteudo_03_img"></div>
    <div id="contentPaginaInterna_barraLateral_imgMiolo_conteudo_03_titulo">Compras</div>
    <div id="contentPaginaInterna_barraLateral_imgMiolo_conteudo_03_links">
        <ul>
            <li>
                <a href="<?php echo get_permalink(8); ?>">
                    <?php
                    $id = 8;
                    $post = get_page($id);
                    echo $post->post_title;
                    ?>
                </a>
            </li>
            <li>
                <a href="<?php echo get_permalink(14); ?>">             
                    <?php
                    $id = 14;
                    $post = get_page($id);
                    echo $post->post_title;
                    ?>
                </a>
            </li>
            <li>
                <a href="<?php echo get_permalink(15); ?>">
                    <?php
                    $id = 15;
                    $post = get_page($id);
                    echo $post->post_title;
                    ?>
                </a>
            </li>
        </ul>
    </div>
</div>
<div id="contentPaginaInterna_barraLateral_imgMiolo_conteudo_04">
    <div id="contentPaginaInterna_barraLateral_imgMiolo_conteudo_04_img"></div>
    <div id="contentPaginaInterna_barraLateral_imgMiolo_conteudo_04_titulo">
        <a href="<?php echo get_permalink(292); ?>">             
            Calend&aacute;rio de Eventos
        </a>
    </div>
    <div id="contentPaginaInterna_barraLateral_imgMiolo_conteudo_04_titulo_subTitulo">
        <a href="<?php echo get_permalink(292); ?>">Escolha aqui sua atra&ccedil;&atilde;o e divirta-se!</a>
    </div>
</div>
<!--------- BOX NOTICIAS -------->   
<div id="contentPaginaInterna_barraLateral_boxNoticias">
    <div id="contentPaginaInterna_barraLateral_boxNoticias_img"></div>
    <h1 class="contentPaginaInterna_barraLateral_boxNoticias_title">
        <a class="contentPaginaInterna_barraLateral_boxNoticias_title" href="<?php echo get_permalink(25); ?>">
            <?php
            $id = 25;
            $post = get_page($id);
            echo $post->post_title;
            ?>
        </a> 
    </h1>
    <?php
    //Query Ultimas Noticias
    query_posts('posts_per_page=4');
    while (have_posts()): the_post();
        ?>
        <div class="contentPaginaInterna_barraLateral_boxNoticias_query">
            <a href="<?php the_permalink(); ?>">
            </a>
            <h2 class="contentPaginaInterna_barraLateral_boxNoticias_query_title">
                <a class="contentPaginaInterna_barraLateral_boxNoticias_query_title_link" href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h2>
        </div>
        <?php
    endwhile;
    wp_reset_postdata();
    ?> 
</div>
<!------ FIM - BOX NOTICIAS ----->        