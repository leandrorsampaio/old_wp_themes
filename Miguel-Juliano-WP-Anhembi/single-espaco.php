<?php
//########################################################################
// Setando as Variáveis
//########################################################################
//---------------------------------------
// ID´s das paginas
//---------------------------------------
$single_elisregina = 1735;
$single_arena = 1726;
$single_novaarena = 1791;
$single_espacodacidade = 1728;
$single_palacio = 1793;
$single_salas = 1730;
$single_halls = 1732;
$single_auditorios = 2343;
$single_celsofurtado = 1734;
$single_terrazza = 1733;
$single_sambodromo = 1723;
$single_setores = 1725;
$single_pista = 1724;
$single_pavilhaooeste = 1722;
$single_pavilhaonortesul = 1721;
$single_pavilhaocompleto = 1720;
$single_auditorio8 = 2524;
$single_auditorio9 = 2525;
//---------------------------------------
// Titles Gerais
//---------------------------------------
$title_espacodacidade = 'Espa&ccedil;o Anhembi';
$title_palacio = 'Pal&aacute;cio das Conven&ccedil;&otilde;es';
$title_salas = 'Salas Modulares';
$title_halls = 'Halls';
$title_auditorios = 'Audit&oacute;rios';
$title_terrazza = 'Terra&ccedil;o';
$title_sambodromo = 'Samb&oacute;dromo';
$title_pavilhaooeste = 'Pavilh&atilde;o Oeste';
$title_pavilhaonortesul = 'Pavilh&atilde;o Norte/Sul';
$title_pavilhaocompleto = 'Pavilh&atilde;o de Exposi&ccedil;&otilde;es';
//---------------------------------------
// Titles reduzidos
//---------------------------------------
$title_arena_min = 'Arena';
$title_novaarena_min = 'Nova Arena';
$title_setores_min = 'Setores';
$title_pista_min = 'Pista';
?>
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
                    $id = 1831;
                    $post = get_page($id);
                    echo $post->post_title;
                    ?>
                </a>
                <?php
                //########################################################################
                // Cria os complementos do Breadcrumbs.
                //########################################################################
                //---------------------------------------
                // Cria o HTML 
                //---------------------------------------
                $bredc_abrelink_a = '<a href="';
                $bredc_abrelink_b = '">';
                $bredc_fechalink = '</a>';
                $bredc_separator = '<span> - </span>';
                //---------------------------------------
                // Conheca o espaco - Pavilhao, Sambodromo e Palacio
                //---------------------------------------
                if (is_single($single_pavilhaocompleto)) {
                    $tipo = 1;
                } elseif (is_single($single_sambodromo)) {
                    $tipo = 2;
                } elseif (is_single($single_palacio)) {
                    $tipo = 3;
                } elseif (is_single(array($single_pavilhaonortesul, $single_pavilhaooeste))) {
                    if (is_single($single_pavilhaooeste)) {
                        $tipo = 1;
                        $tipo_pavilhaooeste = 1;
                    } elseif (is_single($single_pavilhaonortesul)) {
                        $tipo = 1;
                        $tipo_pavilhaooeste = 0;
                    }
                    echo $bredc_separator;
                    echo $bredc_abrelink_a;
                    echo get_permalink($single_pavilhaocompleto);
                    echo $bredc_abrelink_b;
                    echo $title_pavilhaocompleto;
                    echo $bredc_fechalink;
                    //---------------------------------------
                    // SAMBODROMO - sub paginas
                    //---------------------------------------
                } elseif (is_single(array($single_arena, $single_novaarena, $single_espacodacidade, $single_pista, $single_setores))) {
                    $tipo = 2;
                    echo $bredc_separator;
                    echo $bredc_abrelink_a;
                    echo get_permalink($single_sambodromo);
                    echo $bredc_abrelink_b;
                    echo $title_sambodromo;
                    echo $bredc_fechalink;
                    //---------------------------------------
                    // PALACIO - sub paginas
                    //---------------------------------------
                } elseif (is_single(array($single_terrazza, $single_auditorios, $single_halls, $single_salas))) {
                    $tipo = 3;
                    if (is_single($single_auditorios)) {
                        // Pagina de Auditorios possui um layout diferente
                        $tipo_auditorio = 1;
                    } else {
                        $tipo_auditorio = 0;
                    }
                    echo $bredc_separator;
                    echo $bredc_abrelink_a;
                    echo get_permalink($single_palacio);
                    echo $bredc_abrelink_b;
                    echo $title_palacio;
                    echo $bredc_fechalink;
                    //--------------------------------------- Subdivisao Elis, Celso Furtado, Auditorio 8 e Auditorio 9
                } elseif (is_single(array($single_elisregina, $single_celsofurtado, $single_auditorio8, $single_auditorio9))) {
                    $tipo = 3;
                    echo $bredc_separator;
                    echo $bredc_abrelink_a;
                    echo get_permalink($single_palacio);
                    echo $bredc_abrelink_b;
                    echo $title_palacio;
                    echo $bredc_fechalink;
                    echo $bredc_separator;
                    echo $bredc_abrelink_a;
                    echo get_permalink($single_auditorios);
                    echo $bredc_abrelink_b;
                    echo $title_auditorios;
                    echo $bredc_fechalink;
                }
                ?>
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
                <div id="content_esquerda_sidebar_linkVideos">
                    <a href="http://www.anhembi.com.br/videos/">Veja mais v&iacute;deos dos espa&ccedil;os e eventos realizados no Anhembi!</a>
                </div>
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
                            <h2 class="content_direita_article_link_textSingle"><?php the_title(); ?></h2>
                        </a>
                    </div>
                    <div class="menuSupSingle">
                        <?php
                        //########################################################################
                        // Menu em abas dos espacos
                        //########################################################################
                        // Montando o HTML (Sem subitens)
                        $abredivON = '<div id="menuSupSingle_boxON">';
                        $abredivOFF = '<div id="menuSupSingle_boxOFF">';
                        $fechadiv = '</div>';
                        $label_inicial = 'Conhe&ccedil;a o Espa&ccedil;o';
                        // Montando o HTML (lista de subitens)                           
                        $abrelista = '<ul class="menuSupSingle_lista">';
                        $abreitemOFF = '<li class="menuSupSingle_lista_itemOFF">';
                        $abreitemON = '<li class="menuSupSingle_lista_itemON">';
                        $abrelink_submenu_A = '<a class="menuSupSingle_lista_item_link" href="';
                        $abrelink_submenu_B = '">';
                        $fechalink_submenu = '</a>';
                        $fechaitem = '</li>';
                        $separador = '<span class="menuSupSingle_lista_item_separator">|</span>';
                        $fechalista = '</ul>';
                        //---------------------------------------
                        // Monta o Menu em abas - PAVILHAO
                        //---------------------------------------
                        if ($tipo == 1) {
                            // PAVILHAO - Conheca o espaco
                            if (is_single($single_pavilhaocompleto)) {
                                echo $abredivON;
                            } else {
                                echo $abredivOFF;
                            }
                            echo $abrelink_submenu_A;
                            echo get_permalink($single_pavilhaocompleto);
                            echo $abrelink_submenu_B;
                            echo $label_inicial;
                            echo $fechalink_submenu;
                            echo $fechadiv;
                            // Abre lista UL
                            echo $abrelista;
                            // Item - Pavilhao Norte Sul
                            if (is_single($single_pavilhaonortesul)) {
                                echo $abreitemON;
                            } else {
                                echo $abreitemOFF;
                            }
                            echo $abrelink_submenu_A;
                            echo get_permalink($single_pavilhaonortesul);
                            echo $abrelink_submenu_B;
                            echo $title_pavilhaonortesul;
                            echo $fechalink_submenu;
                            echo $fechaitem;
                            echo $separador;
                            // Item - Pavilhao Oeste
                            if (is_single($single_pavilhaooeste)) {
                                echo $abreitemON;
                            } else {
                                echo $abreitemOFF;
                            }
                            echo $abrelink_submenu_A;
                            echo get_permalink($single_pavilhaooeste);
                            echo $abrelink_submenu_B;
                            echo $title_pavilhaooeste;
                            echo $fechalink_submenu;
                            echo $fechaitem;
                            echo $fechalista;
                        } elseif ($tipo == 2) {
                            //---------------------------------------
                            // Monta o Menu em abas - SAMBODROMO
                            //---------------------------------------
                            if (is_single($single_sambodromo)) {
                                echo $abredivON;
                            } else {
                                echo $abredivOFF;
                            }
                            echo $abrelink_submenu_A;
                            echo get_permalink($single_sambodromo);
                            echo $abrelink_submenu_B;
                            echo $label_inicial;
                            echo $fechalink_submenu;
                            echo $fechadiv;
                            // Abre lista UL
                            echo $abrelista;
                            // Item - Arena
                            if (is_single($single_arena)) {
                                echo $abreitemON;
                            } else {
                                echo $abreitemOFF;
                            }
                            echo $abrelink_submenu_A;
                            echo get_permalink($single_arena);
                            echo $abrelink_submenu_B;
                            echo $title_arena_min;
                            echo $fechalink_submenu;
                            echo $fechaitem;
                            echo $separador;
                            // Item - Nova Arena
                            if (is_single($single_novaarena)) {
                                echo $abreitemON;
                            } else {
                                echo $abreitemOFF;
                            }
                            echo $abrelink_submenu_A;
                            echo get_permalink($single_novaarena);
                            echo $abrelink_submenu_B;
                            echo $title_novaarena_min;
                            echo $fechalink_submenu;
                            echo $fechaitem;
                            echo $separador;
                            // Item - Espaco da Cidade
                            if (is_single($single_espacodacidade)) {
                                echo $abreitemON;
                            } else {
                                echo $abreitemOFF;
                            }
                            echo $abrelink_submenu_A;
                            echo get_permalink($single_espacodacidade);
                            echo $abrelink_submenu_B;
                            echo $title_espacodacidade;
                            echo $fechalink_submenu;
                            echo $fechaitem;
                            echo $separador;
                            // Item - Setores
                            if (is_single($single_setores)) {
                                echo $abreitemON;
                            } else {
                                echo $abreitemOFF;
                            }
                            echo $abrelink_submenu_A;
                            echo get_permalink($single_setores);
                            echo $abrelink_submenu_B;
                            echo $title_setores_min;
                            echo $fechalink_submenu;
                            echo $fechaitem;
                            echo $separador;
                            // Item - Pista
                            if (is_single($single_pista)) {
                                echo $abreitemON;
                            } else {
                                echo $abreitemOFF;
                            }
                            echo $abrelink_submenu_A;
                            echo get_permalink($single_pista);
                            echo $abrelink_submenu_B;
                            echo $title_pista_min;
                            echo $fechalink_submenu;
                            echo $fechaitem;
                            echo $fechalista;
                        } elseif ($tipo == 3) {
                            //---------------------------------------
                            // Monta o Menu em abas - PALACIO
                            //---------------------------------------
                            if (is_single($single_palacio)) {
                                echo $abredivON;
                            } else {
                                echo $abredivOFF;
                            }
                            echo $abrelink_submenu_A;
                            echo get_permalink($single_palacio);
                            echo $abrelink_submenu_B;
                            echo $label_inicial;
                            echo $fechalink_submenu;
                            echo $fechadiv;
                            // Abre lista UL
                            echo $abrelista;
                            // Item - Auditorios
                            if (is_single(array($single_auditorios, $single_elisregina, $single_celsofurtado))) {
                                echo $abreitemON;
                            } else {
                                echo $abreitemOFF;
                            }
                            echo $abrelink_submenu_A;
                            echo get_permalink($single_auditorios);
                            echo $abrelink_submenu_B;
                            echo $title_auditorios;
                            echo $fechalink_submenu;
                            echo $fechaitem;
                            echo $separador;
                            // Item - Halls
                            if (is_single($single_halls)) {
                                echo $abreitemON;
                            } else {
                                echo $abreitemOFF;
                            }
                            echo $abrelink_submenu_A;
                            echo get_permalink($single_halls);
                            echo $abrelink_submenu_B;
                            echo $title_halls;
                            echo $fechalink_submenu;
                            echo $fechaitem;
                            echo $separador;
                            // Item - Salas
                            if (is_single($single_salas)) {
                                echo $abreitemON;
                            } else {
                                echo $abreitemOFF;
                            }
                            echo $abrelink_submenu_A;
                            echo get_permalink($single_salas);
                            echo $abrelink_submenu_B;
                            echo $title_salas;
                            echo $fechalink_submenu;
                            echo $fechaitem;
                            echo $separador;
                            // Item - Terrazza
                            if (is_single($single_terrazza)) {
                                echo $abreitemON;
                            } else {
                                echo $abreitemOFF;
                            }
                            echo $abrelink_submenu_A;
                            echo get_permalink($single_terrazza);
                            echo $abrelink_submenu_B;
                            echo $title_terrazza;
                            echo $fechalink_submenu;
                            echo $fechaitem;
                            echo $fechalista;
                        } else {
                            //---------------------------------------
                            // Monta o Menu em abas padrao caso o id da pagina for desconhecido
                            //---------------------------------------
                            echo $abredivON;
                            echo $abrelink_submenu_A;
                            echo '#';
                            echo $abrelink_submenu_B;
                            echo $label_inicial;
                            echo $fechalink_submenu;
                            echo $fechadiv;
                        }
                        ?>
                    </div>
                    <div id="content_direita_article_anchorEspacos">
                        <ul id="anchorEspacos_lista">
                            <li class="anchorEspacos_lista_item">
                                <a href="#especificacoes" id="anchorEspacos_lista_item_linkEspecificacoes" title="Especifica&ccedil;&otilde;es T&eacute;cnicas"></a>
                            </li>
                            <li class="anchorEspacos_lista_item">
                                <a href="#orangeboxes" id="anchorEspacos_lista_item_linkFotos" title="Fotos"></a>
                            </li>
                            <li class="anchorEspacos_lista_item">
                                <a href="#orangeboxes" id="anchorEspacos_lista_item_linkPlantas" title="Plantas"></a>
                            </li>
                            <li class="anchorEspacos_lista_item">
                                <a href="#orangeboxes" id="anchorEspacos_lista_item_linkDocumentos" title="Documentos"></a>
                            </li>
                            <li class="anchorEspacos_lista_item">
                                <a href="#tabela" id="anchorEspacos_lista_item_linkTabela" title="Tabela de Pre&ccedil;os"></a>
                            </li>
                            <li class="anchorEspacos_lista_item">
                                <div id="anchorEspacos_lista_item_linkCesta">
                                    <a class="colorbox-link cboxElement" href="http://spturis.com/sistemas/mailer_anhembi/mailer_locacao_form.php">
                                        <img src="<?php bloginfo('template_url'); ?>/images/BG-anchorEspacos_lista_item_linkCesta.gif" alt="Reservar Espa&ccedil;o" title="Reservar Espa&ccedil;o">
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>          
                    <?php
                    // query que carrega o resumo dodas paginas dos auditorios (Elis, Ceslo Furtado, 8 e 9)
                    // somente para a pagina de auditorios
                    if ($tipo_auditorio == 1) {
                        ?>    
                        <div id="content_direita_article_auditorios">
                            <?php
                            //---------------------------------------
                            // Monta o Menu de auditorio - CELSO FURTADO
                            //---------------------------------------
                            $auditorios_celso = new WP_Query('post_type=espaco&p=' . $single_celsofurtado);
                            while ($auditorios_celso->have_posts()) : $auditorios_celso->the_post();
                                ?>
                                <div class="content_direita_article_auditorios_box">
                                    <div class="content_direita_article_auditorios_box_left">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail('thumb-destaques-servico');
                                            } else {
                                                echo '<img class="oportunidadesInternas_query_article_thumb" src="';
                                                bloginfo('template_url');
                                                echo '/images/oportunidadesInternas_query_article_thumb.png" />';
                                            }
                                            ?>
                                        </a>
                                    </div>
                                    <div class="content_direita_article_auditorios_box_right">
                                        <h4 class="content_direita_article_auditorios_box_right_title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h4>
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                                <?php
                            endwhile;
                            wp_reset_postdata();
                            //---------------------------------------
                            // Monta o Menu de auditorio - ELIS REGINA
                            //---------------------------------------
                            $auditorios_elis = new WP_Query('post_type=espaco&p=' . $single_elisregina);
                            while ($auditorios_elis->have_posts()) : $auditorios_elis->the_post();
                                ?>
                                <div class="content_direita_article_auditorios_box">
                                    <div class="content_direita_article_auditorios_box_left">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail('thumb-destaques-servico');
                                            } else {
                                                echo '<img class="oportunidadesInternas_query_article_thumb" src="';
                                                bloginfo('template_url');
                                                echo '/images/oportunidadesInternas_query_article_thumb.png" />';
                                            }
                                            ?>
                                        </a>
                                    </div>
                                    <div class="content_direita_article_auditorios_box_right">
                                        <h4 class="content_direita_article_auditorios_box_right_title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h4>
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                                <?php
                            endwhile;
                            wp_reset_postdata();
                            //---------------------------------------
                            // Monta o Menu de auditorio - AUDITORIO 9
                            //---------------------------------------
                            $auditorios_9 = new WP_Query('post_type=espaco&p=' . $single_auditorio9);
                            while ($auditorios_9->have_posts()) : $auditorios_9->the_post();
                                ?>
                                <div class="content_direita_article_auditorios_box">
                                    <div class="content_direita_article_auditorios_box_left">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail('thumb-destaques-servico');
                                            } else {
                                                echo '<img class="oportunidadesInternas_query_article_thumb" src="';
                                                bloginfo('template_url');
                                                echo '/images/oportunidadesInternas_query_article_thumb.png" />';
                                            }
                                            ?>
                                        </a>
                                    </div>
                                    <div class="content_direita_article_auditorios_box_right">
                                        <h4 class="content_direita_article_auditorios_box_right_title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h4>
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                                <?php
                            endwhile;
                            wp_reset_postdata();
                            //---------------------------------------
                            // Monta o Menu de auditorio - AUDITORIO 8
                            //---------------------------------------
                            $auditorios_8 = new WP_Query('post_type=espaco&p=' . $single_auditorio8);
                            while ($auditorios_8->have_posts()) : $auditorios_8->the_post();
                                ?>
                                <div class="content_direita_article_auditorios_box">
                                    <div class="content_direita_article_auditorios_box_left">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php
                                            if (has_post_thumbnail()) {
                                                the_post_thumbnail('thumb-destaques-servico');
                                            } else {
                                                echo '<img class="oportunidadesInternas_query_article_thumb" src="';
                                                bloginfo('template_url');
                                                echo '/images/oportunidadesInternas_query_article_thumb.png" />';
                                            }
                                            ?>
                                        </a>
                                    </div>
                                    <div class="content_direita_article_auditorios_box_right">
                                        <h4 class="content_direita_article_auditorios_box_right_title">
                                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </h4>
                                        <?php the_excerpt(); ?>
                                    </div>
                                </div>
                                <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>
                        </div>
                        <?php
                    } else {
                        //---------------------------------------
                        // SE nao for a pagina AUDITORIOS - Imprime Conteudo, Especificacoes Tecnocias e Tabela de Precos
                        //---------------------------------------
                        ?>
                        <div id="content_direita_videos_theContent">
                            <?php the_content(); ?>
                        </div>
                        <?php
                        $video = get_field('video');
                        $field_360 = get_field('video_360');
                        $field_360_URL = 'http://www.anhembi.com.br/360/' . $field_360;
                        //if (field_360) {
                        //    $video_360 = $field_360;
                        //} else {
                        //    $video_360 = 'http://www.anhembi.com.br/360/' . get_field('field_360') . '.html';
                        //}
                        if ($video) {
                            ?>
                            <div id="content_direita_article_videoEspacos">
                                <iframe width="300" height="233" src="http://www.youtube-nocookie.com/embed/<?php the_field('video'); ?>?rel=0"  frameborder="0" allowfullscreen></iframe>
                            </div>
                            <div id="content_direita_article_videoEspacos">
                                <a href="<?php echo $field_360_URL; ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/banner_360.gif"></a>
                            </div>
                            <?php
                        } else {
                            ?>    
                            <div id="content_direita_article_videoEspacos2">
                                <a href="<?php echo $field_360_URL; ?>" target="_blank"><img src="<?php bloginfo('template_url'); ?>/images/banner_360-2.gif"></a>
                            </div>
                            <?php
                        }
                        ?>
                        <div id="content_direita_article_fieldsEspacos">
                            <div id="fieldsEspacos_especificacoes">
                                <div id="fieldsEspacos_especificacoes_esquerda">
                                    <h3>
                                        <a name="especificacoes"></a>
                                        Especifica&ccedil;&otilde;es T&eacute;cnicas
                                    </h3>
                                </div>
                                <div id="fieldsEspacos_especificacoes_direita">
                                    <?php the_field('especificacoes_tecnicas'); ?>    
                                </div>
                            </div>
                            <div id="fieldsEspacos_tabela">
                                <div id="fieldsEspacos_tabela_esquerda">
                                    <h3>
                                        <a name="tabela"></a>
                                        Tabela de Pre&ccedil;os
                                    </h3>
                                </div>
                                <div id="fieldsEspacos_tabela_direita">
                                    <?php the_field('tabela_de_precos'); ?>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                    <div id="content_direita_article_orangeboxes">
                        <div class="orangeboxes_container">
                            <h4 class="orangeboxes_container_title"><a name="orangeboxes"></a>Fotos</h4>
                            <div class="orangeboxes_container_box">
                                <div class="orangeboxes_container_box_anchor">
                                    <img src="<?php bloginfo('template_url') ?>/images/orangeboxes_container_box_anchor_fotos.png" alt="Galeria de imagens" />
                                </div>
                                <div class="orangeboxes_container_box_content">
                                    <div class="scroll-pane">
                                        <?php
                                        // Chama a galeria de imagens do WP
                                        the_field('ibagens');
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="orangeboxes_separator"></div>
                        <div class="orangeboxes_container">
                            <h4 class="orangeboxes_container_title">Plantas</h4>
                            <div class="orangeboxes_container_box">
                                <div class="orangeboxes_container_box_anchor">
                                    <img src="<?php bloginfo('template_url') ?>/images/orangeboxes_container_box_anchor_plantas.png" alt="Galeria de imagens" />
                                </div>
                                <div class="orangeboxes_container_box_content">
                                    <div class="scroll-pane">
                                        <?php
                                        //---------------------------------------
                                        // PLANTAS - Mostra as plantas de acordo com as paginas. 
                                        //---------------------------------------
                                        /*
                                         * 
                                         * 
                                          if ($tipo == 1) {
                                          $downloads_plantas = get_downloads('category=21&limit=5');
                                          } elseif (is_single(array($single_sambodromo, $single_pista, $single_setores))) {
                                          $downloads_plantas = get_downloads('category=22&limit=5');
                                          } elseif (is_single($single_arena)) {
                                          $downloads_plantas = get_downloads('category=29&limit=5');
                                          } elseif (is_single($single_novaarena)) {
                                          $downloads_plantas = get_downloads('category=30&limit=5');
                                          } elseif (is_single($single_espacodacidade)) {
                                          $downloads_plantas = get_downloads('category=28&limit=5');
                                          } elseif (is_single(array($single_palacio, $single_halls, $single_auditorios, $single_auditorio8, $single_auditorio9))) {
                                          $downloads_plantas = get_downloads('category=20&limit=5');
                                          } elseif (is_single($single_elisregina)) {
                                          $downloads_plantas = get_downloads('category=23&limit=5');
                                          } elseif (is_single($single_celsofurtado)) {
                                          $downloads_plantas = get_downloads('category=24&limit=5');
                                          } elseif (is_single($single_salas)) {
                                          $downloads_plantas = get_downloads('category=26&limit=5');
                                          } elseif (is_single($single_terrazza)) {
                                          $downloads_plantas = get_downloads('category=27&limit=5');
                                          }
                                          echo '<ul class="orangeboxes_container_box_content_lista">';
                                          foreach ($downloads_plantas as $d1) {
                                          echo '<li class="orangeboxes_container_box_content_lista_item">';
                                          echo '<a class="orangeboxes_container_box_content_lista_item_link" href="' . $d1->url . '" title="' . $d1->desc . ' " >' . $d1->title . '</a>';
                                          echo '</li>';
                                          }
                                          echo '</ul>';
                                         * 
                                         * 
                                         */

                                        echo '<span class="plantasdownloads">';
                                        the_field('downloads_plantas');
                                        echo '</span>';
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="orangeboxes_separator"></div>
                        <div class="orangeboxes_container">
                            <h4 class="orangeboxes_container_title">Documentos</h4>
                            <div class="orangeboxes_container_box">
                                <div class="orangeboxes_container_box_anchor">
                                    <img src="<?php bloginfo('template_url') ?>/images/orangeboxes_container_box_anchor_documentos.png" alt="Galeria de imagens" />
                                </div>
                                <div class="orangeboxes_container_box_content">
                                    <div class="scroll-pane">
                                        <?php
                                        //---------------------------------------
                                        // Seleciona os documentos a serem exibidos, de acordo com a area do site (OBS: Pavilhao Oeste possui um documento especifico so para ele)
                                        //---------------------------------------
                                        if ($tipo == 3) {
                                            $downloads_documentos = get_downloads('category=17&limit=3');
                                        } elseif ($tipo == 2) {
                                            $downloads_documentos = get_downloads('category=19&limit=3');
                                        } elseif (($tipo == 1) && ($tipo_pavilhaooeste == 0)) {
                                            $downloads_documentos = get_downloads('category=18&limit=3');
                                        } elseif (($tipo == 1) && ($tipo_pavilhaooeste == 1)) {
                                            $downloads_documentos = get_downloads('category=31&limit=3');
                                        }
                                        echo '<ul class="orangeboxes_container_box_content_lista">';
                                        foreach ($downloads_documentos as $d2) {
                                            echo '<li class="orangeboxes_container_box_content_lista_item">';
                                            echo '<a class="orangeboxes_container_box_content_lista_item_link" href="' . $d2->url . '" title="' . $d2->desc . ' " >' . $d2->title . '</a>';
                                            echo '</li>';
                                        }
                                        echo '</ul>';
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="orangeboxes_separator"></div>
                        <div class="orangeboxes_container">
                            <h4 class="orangeboxes_container_title">Tabela de Precos</h4>
                            <div id="orangeboxes_container_boxTabeladeprecos">
                                <div class="orangeboxes_container_box_anchor">
                                    <img src="<?php bloginfo('template_url') ?>/images/orangeboxes_container_box_anchor_tabela.png" alt="Galeria de imagens" />
                                </div>
                                <div class="orangeboxes_container_box_content">
                                    <div class="scroll-pane">
                                        <?php
                                          /*
                                          //---------------------------------------
                                          // Download da Tabela de Precos
                                          //---------------------------------------
                                          $downloads_tabela = get_downloads('category=1&limit=3');
                                          echo '<ul class="orangeboxes_container_box_content_lista">';
                                          foreach ($downloads_tabela as $d3) {
                                          echo '<li class="orangeboxes_container_box_content_lista_item">';
                                          echo '<a class="orangeboxes_container_box_content_lista_item_link" href="' . $d3->url . '" title="' . $d3->desc . ' " >' . $d3->title . '</a>';
                                          echo '</li>';
                                          }
                                          echo '</ul>';
                                          */
                                        ?>
                                        <li class="orangeboxes_container_box_content_lista_item">
                                            <a class="orangeboxes_container_box_content_lista_item_link" href="http://www.anhembi.com.br/e-anhembi/downloads/Tabela_precos_geral_anhembi.pdf" target="_blank">Tabela de Pre&ccedil;os Geral</a>
                                        </li>
                                        <li class="orangeboxes_container_box_content_lista_item">
                                            <a class="orangeboxes_container_box_content_lista_item_link" href="http://www.anhembi.com.br/e-anhembi/downloads/Tabela_precos_telecom.pdf" target="_blank">Tabela de Pre&ccedil;os Telecom</a>
                                        </li>
                                        <li class="orangeboxes_container_box_content_lista_item">
                                            <a class="orangeboxes_container_box_content_lista_item_link" href="http://www.anhembi.com.br/e-anhembi/downloads/Tabela_precos_midia.pdf" target="_blank">Tabela de Pre&ccedil;os M&iacute;dia</a>
                                        </li>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            <?php endwhile; ?> 
        </div>
    </div>
</div>
<?php get_footer(); ?>