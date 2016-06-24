<?php get_header(); ?>
<?php
// Pegando via URl a linguagem
$idioma = $_GET['lang'];
if ($idioma) {
    
} else {
    $idioma = 'pt';
}
// Monta link
$fieldTitleLang = 'title_' . $idioma;
$fieldTextLang = 'text_' . $idioma;
?>
<?php
if (is_search()) {
    echo '<div class="topSearch"><div class="topSearch_wrapper">';
    /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1");
    $key = wp_specialchars($s, 1);
    $count = $allsearch->post_count;
    _e('');
    _e
            ('');
    _e
            ('<h1>Resultados para: ');
    _e
            ('<span>&quot;');
    echo $key;
    _e
            ('&quot;</span></h1>');
    _e
            ('<h2>');
    echo $count;
    _e
            (' resultado(s) encontrado(s)');
    _e
            ('</h2>');
    wp_reset_query();
    echo '</div></div>';
} else {
    
}
?>
<?php
// Looping Padrao
if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
        <div class="contentPage">
            <?php
            // Inclue o Menu
            include 'menu_interno.php';
            //
            //
            // Variavel modifica layout da pagina 404
            if (is_single($dp_404)) {
                $css404 = 'content404';
            } else {
                $css404 = '';
            }
            ?>
            <article class="articleWrap <?php echo $css404; ?>">
                <?php
                if (is_single($bv_mapa) || is_single($dp_404)) {
                    // SE FOR A PAGINA DE MAPAS NAO TEM HEADER
                } else {
                    // ESSA CONDICAO FAZ COM QUE SEXIBA O HEADER NAS PAGINAS DESKTOPS E NO RESULTADO DE BUSCA DO MOBILE APENAS
                    if (!wp_is_mobile() || (wp_is_mobile() && is_search())) {
                        // Se for Busca cria um link na imagem
                        if (is_search()) {
                            // cria classe pro CSS da busca
                            $classebusca = 'classeBusca';
                            //
                            echo '<a href="' . get_permalink() . '">';
                            $legendaImagem = get_field($fieldTitleLang);
                        } else {
                            // cria classe pro CSS da busca
                            $classebusca = ' ';
                            //
                            $legendaImagem = get_field('img_legenda');
                        }
                        if (get_field('img_header')) {
                            $fieldImagemHeader = get_field('img_header');
                        } else {
                            $fieldImagemHeader = get_bloginfo('template_url') . '/images/exemploHeaderInterno.jpg';
                        }
                        ?>
                        <div class="articleWrap_imageHearder" style="background-image: url(<?php echo $fieldImagemHeader; ?>);">
                            <?php
                            if (get_field('img_legenda')) {
                                echo '<h3 class="articleWrap_imageHearder_h3 ' . $classebusca . '">' . $legendaImagem . '</h3>';
                            } else {
                                
                            }
                            if (get_field('img_creditos')) {
                                echo '<p class="articleWrap_imageHearder_creditos">Cr&eacute;ditos: ' . get_field('img_creditos') . '</p>';
                            } else {
                                echo '<p class="articleWrap_imageHearder_creditos">Cr&eacute;ditos: Divulga&ccedil;&atilde;o</p>';
                            }
                            ?>
                        </div>
                        <?php
                        // Se for Busca (fecha Link)
                        if (is_search()) {
                            echo '</a>';
                            echo '<br/><br/><br/>';
                        } else {
                            
                        }
                    } else {
                        // NAO EXIBE O HEADER
                    }
                }
                if (!is_search()) {
                    // se nao for busca nao exibe o conteudo
                    ?>
                    <div class="articleWrap_content">
                        <?php
                        if (get_post_type() == 'post') {
                            // IF SOMENTE PARA OS DESTAQUES
                            // Tiulo e Conteudo
                            echo '<h1 class="articleWrap_content_titleGeral">' . get_the_title() . '</h1>';
                            echo '<div class="articleWrap_content_fieldText">';
                            echo the_content();
                            echo '</div>';
                            // Leia mais + query
                            echo '<div class="articleWrap_content_leiaMais">';
                            echo '<h2 class="articleWrap_content_titleGeral">Outros destaques</h2>';
                            $excuiid = get_the_ID(); // exclui o post atual da query
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => -1,
                                'post__not_in' => array($excuiid),
                            );
                            global $destaquequery;
                            $destaquequery = new WP_Query($args);
                            while ($destaquequery->have_posts()) : $destaquequery->the_post();
                                echo '<div class="articleWrap_content_leiaMais_item">';
                                echo '<a class="articleWrap_content_leiaMais_item_link" href="' . get_permalink() . '">' . get_the_title() . '</a>';
                                echo '</div>';
                            endwhile;
                            wp_reset_query();
                            echo '</div>';
                        } elseif (is_search()) {
                            // Se for busca nao faz nada
                        } else {
                            // TODAS AS DEMAIS PAGINAS
                            // 
                            // SE NAO FOR A PAGINA 404
                            if (!is_single($dp_404)) {
                                $fieldTitle = get_field($fieldTitleLang);
                                echo '<h1 class="articleWrap_content_titleGeral">' . $fieldTitle . '</h1>';
                                $fieldText = get_field($fieldTextLang);
                                echo '<div class="articleWrap_content_fieldText">' . $fieldText . '</div>';
                                // Inclue a query e menu das paginas de atracoes
                                include 'atracoes.php';
                            } else {
                                echo '<img src="' . get_bloginfo('template_url') . '/images/404.jpg" alt="404 page image" />';
                            }
                            // Bolinhas leia mais se for alguma single de atracoes
                            if (get_post_type() == 'atracoes') {
                                echo '<div class="articleWrap_content_leiaMais">';
                                echo '<h2>Outras atra&ccedil;&otilde;es</h2>';
                                echo '<div class="atracoesThumbs">';
                                // Pega a Taxonomia (categoria da atracao) 
                                // Serve para mostrar no começo apenas as atrações daquela categoria. Se faltar aparecem as de outras
                                $terms = wp_get_object_terms($post->ID, 'atracoestipo');
                                if (!empty($terms)) :
                                    $tipo = array();
                                    foreach ($terms as $term) {
                                        $tipo = $term->slug;
                                    }
                                endif;
                                $excuiid = get_the_ID(); // exclui o post atual da query
                                $args = array(
                                    'post_type' => 'atracoes',
                                    'posts_per_page' => 3,
                                    'orderby' => 'rand',
                                    'atracoestipo' => $tipo,
                                    'post__not_in' => array($excuiid)
                                );
                                $contador = 0;
                                global $destaquequery;
                                $destaquequery = new WP_Query($args);
                                while ($destaquequery->have_posts()) : $destaquequery->the_post();
                                    if (get_field('thumbbolinhas')) {
                                        $bgBolinha = get_field('thumbbolinhas');
                                    } else {
                                        $bgBolinha = get_bloginfo('template_url') . '/images/parquesbolinha.jpg';
                                    }
                                    $fieldTitle = get_field($fieldTitleLang);
                                    echo '<a style="background: url(' . $bgBolinha . ')center;" class="atracoesThumbs_item" href="' . get_permalink() . '">' . $fieldTitle . '</a>';
                                    $contador = $contador + 1;
                                endwhile;
                                wp_reset_query();
                                // Se ouver menos de 3 atracoes de uma categoria, ele exibe de outras categorias de forma a completar 3 bolinhas
                                if ($contador == 3) {
                                    // nao faz nada se ja ouver 3 bolinhas
                                } else {
                                    // se houver menos de 3 bolinhas
                                    if ($contador == 2) {
                                        $queryComplementar = 1;
                                    } elseif ($contador == 1) {
                                        $queryComplementar = 2;
                                    } elseif ($contador == 0) {
                                        $queryComplementar = 3;
                                    } else {
                                        $queryComplementar = -1;
                                    }
                                    $args2 = array(
                                        'post_type' => 'atracoes',
                                        'posts_per_page' => $queryComplementar,
                                        'orderby' => 'rand',
                                        'post__not_in' => array($excuiid)
                                    );
                                    global $destaquequery;
                                    $destaquequery = new WP_Query($args2);
                                    while ($destaquequery->have_posts()) : $destaquequery->the_post();
                                        if (get_field('thumbbolinhas')) {
                                            $bgBolinha = get_field('thumbbolinhas');
                                        } else {
                                            $bgBolinha = get_bloginfo('template_url') . '/images/parquesbolinha.jpg';
                                        }
                                        $fieldTitle = get_field($fieldTitleLang);
                                        echo '<a style="background: url(' . $bgBolinha . ')center;" class="atracoesThumbs_item" href="' . get_permalink() . '">' . $fieldTitle . '</a>';

                                    endwhile;
                                    wp_reset_query();
                                }
                                echo '</div>';
                                echo '</div>';
                            } elseif (is_single($bv_mapa)) {
                                if (wp_is_mobile()) {
                                    // inclui o conteudo do mapa versao mobile
                                    echo '<div class="articleWrap_content">';
                                    echo '<div class="articleWrap_content_fieldText">';
                                    echo get_field('mapa_text_mob');
                                    echo '</div>';
                                    echo '</div>';
                                } else {
                                    // Inclui o mapa
                                    include 'mapa.php';
                                }
                            } elseif (wp_is_mobile() && (get_post_type() == 'post' || is_single($bv_destaques))) {
                                // Leia mais + query
                                echo '<div class="articleWrap_content_leiaMais">';
                                echo '<h2 class="articleWrap_content_titleGeral">Outros destaques</h2>';
                                $excuiid = get_the_ID(); // exclui o post atual da query
                                $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 3,
                                    'post__not_in' => array($excuiid),
                                );
                                global $destaquequery;
                                $destaquequery = new WP_Query($args);
                                while ($destaquequery->have_posts()) : $destaquequery->the_post();
                                    echo '<div class="articleWrap_content_leiaMais_item">';
                                    echo '<a class="articleWrap_content_leiaMais_item_link" href="' . get_permalink() . '">' . get_the_title() . '</a>';
                                    echo '</div>';
                                endwhile;
                                wp_reset_query();
                                echo '</div>';
                            } elseif (wp_is_mobile()) {
                                // Inclue o Leia mais mobile
                                include 'leiamais_mob.php';
                            } else {
                                
                            }
                        }
                        ?>
                    </div>
                    <?php
                } else {
                    // Se for busca nao faz nada
                }
                ?>
            </article>
        </div>
        <?php
        // Fim do Looping
    }
}
// pega a paginacao (codigo completo nas nas functions)
if (is_search()) {
    echo '<div class="paginationWrap">';
    pagination();
    echo '</div>';
} else {
    
}
// Limpa loop
wp_reset_query();
?>
<?php get_footer(); ?>