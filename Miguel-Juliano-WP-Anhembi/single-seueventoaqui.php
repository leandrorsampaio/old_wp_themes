<?php get_header(); ?>
<div id="all_content">
    <div id="orangeBox"></div>
    <div id="contentIntern">
        <!------------------------------------------ BLOCO 1 ---------------------------------->
        <div id="content_bloco1">
            <div id="content_bloco1_sliderNavegation"></div>
                       <div id="traductor">
                <?php get_sidebar('traducao'); ?>
            </div>
            <div id="content_bloco1_search">
                <?php get_search_form(); ?>
            </div>
        </div>
        <div id="content_breadcrumb">
            <h4 id="content_breadcrumb_text">
                <a href="<?php echo get_permalink(1831); ?>">
                    <?php
                    $post_id = 1831;
                    $queried_post = get_post($post_id);
                    $title = $queried_post->post_title;
                    echo $title;
                    wp_reset_query()
                    ?>
                </a>
            </h4>
        </div>
        <!------------------------------------------ Esquerda ---------------------------------->
        <div id="content_esquerda">
            <div class="content_esquerda_sidebarX">
                <?php
                get_sidebar('publicidade');
                get_sidebar('espacos');
                get_sidebar('seu-evento-aqui');
                ?>
            </div>
        </div>
        <div id="content_border">
            <div id="content_borde_color"></div>
        </div>
        <!------------------------------------------ Direita ---------------------------------->
        <div id="content_direita">
            <?php while (have_posts()): the_post(); ?>
                <article class="content_direita_article">
                    <div class="content_direita_article_titleBox">
                        <a class="content_direita_article_link" href="<?php the_permalink(); ?>">
                            <h2 class="content_direita_article_link_textSingle" name="teste"><?php the_title(); ?></h2>
                        </a>
                    </div>
                <?php endwhile; ?> 
                <div class="content_direita_article_theContent">                          
                    <?php the_content(); ?>
                </div>
                <?php
                // ----------------------- Categorias
                $feiraseexposicoes = 2215;
                $congressoseconvencoes = 2302;
                $showsecomemoracoes = 2303;
                //------------------------ Espacos
                $pavilhaocompleto = 1720;
                $pavilhaonortesul = 1721;
                $pavilhaooeste = 1722;
                $sambodromo = 1723;
                $pista = 1724;
                $setores = 1725;
                $arena = 1726;
                $novaarena = 1791;
                $espacodacidade = 1728;
                $salas = 1730;
                $auditorios = 1731;
                $halls = 1732;
                $terraza = 1733;
                $elisregina = 1735;
                $palacio = 1793;
                // -------------------- Montando o HTML (thumb, titulo e resumo)
                $abre_div_carrega = '<div id="carrega_espacos">';
                $fecha_div = '</div>';
                $abre_h2 = '<h2 class="carrega_espacos_title">';
                $abre_link_a = '<a class="carrega_espacos_title_link" href="';
                $abre_link_b = '">';
                $fecha_link = '</a>';
                $fecha_h2 = '</h2>';
                $abre_div_thumb = '<div class="carrega_espacos_thumb">';
                $abre_div_texto = '<div class="carrega_espacos_texto">';
                //-------------------------------------- INICIO IF'S
                //-------------------------- Feiras e Exposições
                if (is_single(array($feiraseexposicoes))) {
                    $categoria1 = new WP_Query(array('post_type' => 'espaco', 'post__in' => array($sambodromo, $pavilhaocompleto, $pavilhaonortesul, $pavilhaooeste, $palacio)));
                    while ($categoria1->have_posts()) : $categoria1->the_post();
                        echo $abre_div_carrega;
                        echo $abre_link_a;
                        the_permalink();
                        echo $abre_link_b;
                        echo $abre_div_thumb;
                        if (has_post_thumbnail()) {
                            $if_thumb = the_post_thumbnail('thumb-destaques-servico');
                        } else {
                            echo '<img class="oportunidadesInternas_query_article_thumb" src="';
                            bloginfo('template_url');
                            echo '/images/oportunidadesInternas_query_article_thumb.png" />';
                        }
                        echo $fecha_div;
                        echo $fecha_link;
                        echo $abre_div_texto;
                        echo $abre_h2;
                        echo $abre_link_a;
                        the_permalink();
                        echo $abre_link_b;
                        the_title();
                        echo $fecha_link;
                        echo $fecha_h2;
                        the_excerpt();
                        echo $fecha_div;
                        echo $fecha_div;
                    endwhile;
                    wp_reset_postdata();
                }
                //---------------------- Congressos e Convenções
                else if (is_single(array($congressoseconvencoes))) {
                    $categoria1 = new WP_Query(array('post_type' => 'espaco', 'post__in' => array($palacio, $elisregina, $espacodacidade)));
                    while ($categoria1->have_posts()) : $categoria1->the_post();
                        echo $abre_div_carrega;
                        echo $abre_link_a;
                        the_permalink();
                        echo $abre_link_b;
                        echo $abre_div_thumb;
                        if (has_post_thumbnail()) {
                            $if_thumb = the_post_thumbnail('thumb-destaques-servico');
                        } else {
                            echo '<img class="oportunidadesInternas_query_article_thumb" src="';
                            bloginfo('template_url');
                            echo '/images/oportunidadesInternas_query_article_thumb.png" />';
                        }
                        echo $fecha_div;
                        echo $fecha_link;
                        echo $abre_div_texto;
                        echo $abre_h2;
                        echo $abre_link_a;
                        the_permalink();
                        echo $abre_link_b;
                        the_title();
                        echo $fecha_link;
                        echo $fecha_h2;
                        the_excerpt();
                        echo $fecha_div;
                        echo $fecha_div;
                    endwhile;
                    wp_reset_postdata();
                }
                //---------------------- Shows e Comemorações
                else if (is_single(array($showsecomemoracoes))) {
                    $categoria1 = new WP_Query(array('post_type' => 'espaco', 'post__in' => array($sambodromo, $palacio, $pavilhaocompleto, $pavilhaonortesul, $pavilhaooeste, $elisregina, $espacodacidade)));
                    while ($categoria1->have_posts()) : $categoria1->the_post();
                        echo $abre_div_carrega;
                        echo $abre_link_a;
                        the_permalink();
                        echo $abre_link_b;
                        echo $abre_div_thumb;
                        if (has_post_thumbnail()) {
                            $if_thumb = the_post_thumbnail('thumb-destaques-servico');
                        } else {
                            echo '<img class="oportunidadesInternas_query_article_thumb" src="';
                            bloginfo('template_url');
                            echo '/images/oportunidadesInternas_query_article_thumb.png" />';
                        }
                        echo $fecha_div;
                        echo $fecha_link;
                        echo $abre_div_texto;
                        echo $abre_h2;
                        echo $abre_link_a;
                        the_permalink();
                        echo $abre_link_b;
                        the_title();
                        echo $fecha_link;
                        echo $fecha_h2;
                        the_excerpt();
                        echo $fecha_div;
                        echo $fecha_div;
                    endwhile;
                    wp_reset_postdata();
                }
                ?>
            </article>      
        </div>
    </div>
</div>
<?php get_footer(); ?>