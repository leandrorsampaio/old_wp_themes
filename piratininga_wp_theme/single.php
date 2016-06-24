<?php
// Modulo do programador
include ('inc_programmer.php');
//
//
//get_header();
include ('header.php');
//
// main content Open
echo '<div class="content containerFixed">';

//
//
//
//
//
//
// Titulos de terceiro nivel (content_header_subTitle)
$testaSubTitulo = 1;
if (is_search()) {
    $testaSubTitulo = 0;
} else {
    if (is_single($lpg_1_linhadotempo)) {
        $argPai_ID = $lpg_1_historia;
        $argPai_PTY = $pty_pqsp;
    } elseif (is_single($lpg_2_mapainterativo)) {
        $argPai_ID = $lpg_2_mapadacidade;
        $argPai_PTY = $pty_planeje;
    } elseif (is_single($lpg_2_listahoteis) || is_single($lpg_2_triphoteis)) {
        $argPai_ID = $lpg_2_ondeficar;
        $argPai_PTY = $pty_planeje;
    } elseif (is_single($lpg_3_tripcomerebeber)) {
        $argPai_ID = $lpg_3_comerebeber;
        $argPai_PTY = $pty_vivasp;
    } elseif (is_single($lpg_3_tripnoite)) {
        $argPai_ID = $lpg_3_noite;
        $argPai_PTY = $pty_vivasp;
    } elseif (is_single($lpg_3_roteirostematicos) || is_single($lpg_3_roteirosporregiao) || is_single($lpg_3_roteirosguiados) || is_single($lpg_3_roteirosape) || is_single($lpg_3_roteirospoeperiodo)) {
        $argPai_ID = $lpg_3_roteiros;
        $argPai_PTY = $pty_vivasp;
    } elseif (is_single($lpg_5_faleconosco) || is_single($lpg_5_privacidade) || is_single($lpg_5_parceiros)) {
        $argPai_ID = $lpg_5_quemsomos;
        $argPai_PTY = $pty_institucional;
    } elseif (is_single($lpg_5_famtour) || is_single($lpg_5_siteinspection) || is_single($lpg_5_comtur) || is_single($lpg_5_presstrips)) {
        $argPai_ID = $lpg_5_trade;
        $argPai_PTY = $pty_institucional;
    } elseif ($getPty == $pty_roteirosape) {
        $argPai_ID = $lpg_3_roteirosape;
        $argPai_PTY = $pty_vivasp;
    } elseif ($getPty == $pty_roteirospoeperiodo) {
        $argPai_ID = $lpg_3_roteirospoeperiodo;
        $argPai_PTY = $pty_vivasp;
    } elseif ($getPty == $pty_roteirosportema) {
        $argPai_ID = $lpg_3_roteirostematicos;
        $argPai_PTY = $pty_vivasp;
    } elseif ($getPty == $pty_roteirosporregiao) {
        $argPai_ID = $lpg_3_roteirosporregiao;
        $argPai_PTY = $pty_vivasp;
    } elseif ($getPty == $pty_atrativos) {
        $argPai_ID = $lpg_3_pontosturisticos;
        $argPai_PTY = $pty_vivasp;
    } elseif ($getPty == $pty_agenda) {
        $argPai_ID = $lpg_4_agenda;
        $argPai_PTY = $pty_acontece;
    } elseif ($getPty == $pty_novidades) {
        $argPai_ID = $lpg_4_novidades;
        $argPai_PTY = $pty_acontece;
    } else {
        $testaSubTitulo = 0;
    }
}
//
//
//
if ($testaSubTitulo == 1) {
    $argsSubTitulo = array(
        'post_type' => $argPai_PTY,
        'p' => $argPai_ID,
    );
    global $querySubTitulo;
    $querySubTitulo = new WP_Query($argsSubTitulo);
    while ($querySubTitulo->have_posts()) : $querySubTitulo->the_post();
        //
        $subTituloHomeID = get_the_ID();
        $subTituloHomeTITLE = get_field_object($lang_title, $subTituloHomeID);
        //
        $subTituloResultado = $subTituloHomeTITLE['value'];
        $subTituloLink = get_permalink();
    //
    endwhile;
    wp_reset_query();
    //
    $cssNoSubTitle = ' ';
} else {
    $cssNoSubTitle = ' visibility: hidden;';
}
//
//
// Pega custon field do titulo
if (is_search()) {
    if ($idioma == 3) {
        $content_header_title = 'Resultados de la b&uacute;squeda';
    } elseif ($idioma == 2) {
        $content_header_title = 'Search results';
    } else {
        $content_header_title = 'Resultado de busca';
    }
} elseif (is_404()) {
    if ($idioma == 3) {
        $content_header_title = 'P&aacute;gina no encontrada';
    } elseif ($idioma == 2) {
        $content_header_title = 'Page not found';
    } else {
        $content_header_title = 'P&aacute;gina n&atilde;o encontrada';
    }
} elseif ($getPty == $pty_atrativos) {
    //
    // Variavel do idioma
    if ($idioma == 3) {
        $eve_title = 'eve_titulo_es';
    } elseif ($idioma == 2) {
        $eve_title = 'eve_titulo_en';
    } else {
        $eve_title = 'eve_titulo_br';
    }
    // chama API
    $wpFildBanco_single = get_field('atrativos_id');
    $json_single = bancoDeDados($wpFildBanco_single);
    // se há resultado:
    foreach ($json_single as $obj_evento) {
        $content_header_title = $obj_evento->$eve_title;
    }
} else {
    if ($idioma == 3) {
        $content_header_title = get_field('lang_title_es');
    } elseif ($idioma == 2) {
        $content_header_title = get_field('lang_title_en');
    } else {
        $content_header_title = get_field('lang_title_pt');
    }
}
?>
<div class="content_header" <?php echo $noTranslate; ?>>
<?php
if (is_single($lpg_1_pqsp) || is_single($lpg_2_planeje) || is_single($lpg_3_vivasp) || is_single($lpg_5_institucional)) {
    // nada
} else {
    ?>
        <a href="<?php echo $subTituloLink; ?>" class="content_header_subTitle" style="<?php echo $cssCorText . $cssNoSubTitle; ?>">
    <?php echo $subTituloResultado; ?>
        </a>
        <h1 class="content_header_title" style="<?php echo $cssCorText; ?>"><?php echo $content_header_title; ?></h1>
    <?php
}
?>
    <!--
    <p class="content_header_intro" style="<?php echo $cssCorText; ?>">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor
    in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
    sunt in culpa qui officia deserunt mollit anim id est laborum
    </p>
    -->
</div>
    <?php
// Pega custon field do Resumo
    if ($idioma == 1) {
        $content_theContent = 'lang_text_pt';
    } elseif ($idioma == 2) {
        if (get_field('lang_boo_en')) {
            $content_theContent = 'lang_content_en';
        } else {
            $content_theContent = 'lang_text_pt';
        }
    } elseif ($idioma == 3) {
        if (get_field('lang_boo_es')) {
            $content_theContent = 'lang_content_es';
        } else {
            $content_theContent = 'lang_text_pt';
        }
    }
//
//Conteudo Geral no topo somente para quem nao for conteúdo de notícias/blog
    if ($getPty == $pty_atrativos || $getPty == $pty_agenda || $getPty == $pty_novidades) {
        // Nao carrega conteudo geral (vai carregar no arquivo de looping de cada um deles
    } else {
        ?>
    <div class="content_theContent wpWysiwyg <?php echo 'wpWysiwyg-' . $pty_cor; ?>" <?php echo $noTranslate; ?>>
    <?php the_field($content_theContent); ?>
    </div>
    <?php
}

//
//
// Insere inicio do HTML (Somente 404) - Tem q ficar fora do looping
if (is_404()) {
    //
    echo '<div class="content_block block-4x-3 block-first">' . '<div class="content_block_box">';
    echo '<img style="width:100%;" src="' . get_bloginfo('template_url') . '/images/404.jpg" alt="404" />';
    echo '</div>' . '</div>'; // fecha block-4x-3
    echo '<div class="content_block block-3x block-last">' . '<div class="content_block_box">';
    include ($sidebarInclude);
    echo '</div>' . '</div>';
    //
} elseif (is_search()) {
    //
    include ('pty/pty_search.php');
    //
} else {
    //
    //
    //
    // Main looping
    if (have_posts()) {
        while (have_posts()) {
            the_post();
            //
            //
            //
            //ACONTECE POST TYPES
            if ($getPty == $pty_atrativos) {
                include ('pty/pty_atrativos.php');
            } elseif ($getPty == $pty_agenda) {
                include ('pty/pty_agenda.php');
            } elseif ($getPty == $pty_novidades) {
                include ('pty/pty_novidades.php');
            } elseif ($getPty == $pty_dicas) {
                include ('pty/pty_dicas.php');
            }
            //
            //
            //
            //ROTEIROS POST TYPES
            if ($getPty == $pty_roteirospoeperiodo || $getPty == $pty_roteirosportema || $getPty == $pty_roteirosporregiao || $getPty == $pty_roteirosape) {
                include ('pty/pty_roteirospadrao.php');
            }
            //
            //
            //
            //POST TYPES
            elseif ($pty == 1) {
                //            
                // 1 - PQ SAO PAULO
                if (is_single($lpg_1_pqsp)) {
                    include ('lpg_1/lpg_1_pqsp.php');
                } elseif (is_single($lpg_1_historia)) {
                    include ('lpg_1/lpg_1_historia.php');
                } elseif (is_single($lpg_1_dadosefatos)) {
                    include ('lpg_1/lpg_1_dadosefatos.php');
                } elseif (is_single($lpg_1_passeiovirtual)) {
                    include ('lpg_1/lpg_1_passeiovirtual.php');
                } elseif (is_single($lpg_1_linhadotempo)) {
                    include ('lpg_1/lpg_1_linhadotempo.php');
                } elseif (is_single($lpg_1_razoes)) {
                    include ('lpg_1/lpg_1_razoes.php');
                } else {
                    // NADA
                }
            } elseif ($pty == 2) {
                //
                // 2 - PLANEJE SUA VIAGEM
                if (is_single($lpg_2_planeje)) {
                    include ('lpg_2/lpg_2_planeje.php');
                } elseif (is_single($lpg_2_mapadacidade)) {
                    include ('lpg_2/lpg_2_mapadacidade.php');
                } elseif (is_single($lpg_2_mapainterativo)) {
                    include ('lpg_2/lpg_2_mapainterativo.php');
                } elseif (is_single($lpg_2_comochegar)) {
                    include ('lpg_2/lpg_2_comochegar.php');
                } elseif (is_single($lpg_2_ondeficar)) {
                    include ('lpg_2/lpg_2_ondeficar.php');
                } elseif (is_single($lpg_2_listahoteis)) {
                    include ('lpg_2/lpg_2_listahoteis.php');
                } elseif (is_single($lpg_2_triphoteis)) {
                    include ('lpg_2/lpg_2_triphoteis.php');
                } elseif (is_single($lpg_2_guiapratico)) {
                    include ('lpg_2/lpg_2_guiapratico.php');
                } elseif (is_single($lpg_2_transporteurbano)) {
                    include ('lpg_2/lpg_2_transporteurbano.php');
                } elseif (is_single($lpg_2_agencias)) {
                    include ('lpg_2/lpg_2_agencias.php');
                } else {
                    // NADA
                }
            } elseif ($pty == 3) {
                //
                // 3 - VIVA SAO PAULO
                if (is_single($lpg_3_vivasp)) {
                    include ('lpg_3/lpg_3_vivasp.php');
                } elseif (is_single($lpg_3_pontosturisticos)) {
                    include ('lpg_3/lpg_3_pontosturisticos.php');
                } elseif (is_single($lpg_3_compras)) {
                    include ('lpg_3/lpg_3_compras.php');
                } elseif (is_single($lpg_3_comerebeber)) {
                    include ('lpg_3/lpg_3_comerebeber.php');
                } elseif (is_single($lpg_3_tripcomerebeber)) {
                    include ('lpg_3/lpg_3_tripcomerebeber.php');
                } elseif (is_single($lpg_3_noite)) {
                    include ('lpg_3/lpg_3_noite.php');
                } elseif (is_single($lpg_3_tripnoite)) {
                    include ('lpg_3/lpg_3_tripnoite.php');
                } elseif (is_single($lpg_3_cultura)) {
                    include ('lpg_3/lpg_3_cultura.php');
                } elseif (is_single($lpg_3_esporte)) {
                    include ('lpg_3/lpg_3_esporte.php');
                } elseif (is_single($lpg_3_muitomaissp)) {
                    include ('lpg_3/lpg_3_muitomaissp.php');
                } elseif (is_single($lpg_3_fiquemaisumdia)) {
                    include ('lpg_3/lpg_3_fiquemaisumdia.php');
                } elseif (is_single($lpg_3_arredores)) {
                    include ('lpg_3/lpg_3_arredores.php');
                } elseif (is_single($lpg_3_roteiros)) {
                    include ('lpg_3/lpg_3_roteiros.php');
                } elseif (is_single($lpg_3_roteirostematicos) || is_single($lpg_3_roteirosporregiao) || is_single($lpg_3_roteirospoeperiodo) || is_single($lpg_3_roteirosape)) {
                    include ('lpg_3/lpg_3_roteirossub.php');
                } elseif (is_single($lpg_3_roteirosguiados)) {
                    include ('lpg_3/lpg_3_roteirosguiados.php');
                }
                //elseif (is_single($lpg_3_roteirosape)) {
                //    include ('lpg_3/lpg_3_roteirosape.php');
                //} elseif (is_single($lpg_3_roteirostematicos)) {
                //    include ('lpg_3/lpg_3_roteirostematicos.php');
                //} elseif (is_single($lpg_3_roteirosporregiao)) {
                //    include ('lpg_3/lpg_3_roteirosporregiao.php');
                //} elseif (is_single($lpg_3_roteirospoeperiodo)) {
                //    include ('lpg_3/lpg_3_roteirospoeperiodo.php');
                //} 
                else {
                    // NADA 
                }
            } elseif ($pty == 4) {
                //            
                // 4 - ACONTECE
                if (is_single($lpg_4_acontece)) {
                    include ('lpg_4/lpg_4_acontece.php');
                } elseif (is_single($lpg_4_agenda)) {
                    include ('lpg_4/lpg_4_agenda.php');
                } elseif (is_single($lpg_4_novidades)) {
                    include ('lpg_4/lpg_4_novidades.php');
                } elseif (is_single($lpg_4_dicas)) {
                    include ('lpg_4/lpg_4_dicas.php');
                } else {
                    // NADA
                }
            } elseif ($pty == 5) {
                //
                // 5 - INSTITUCIONAL
                if (is_single($lpg_5_institucional)) {
                    include ('lpg_5/lpg_5_institucional.php');
                } elseif (is_single($lpg_5_trade)) {
                    include ('lpg_5/lpg_5_trade.php');
                } elseif (is_single($lpg_5_quemsomos)) {
                    include ('lpg_5/lpg_5_quemsomos.php');
                } elseif (is_single($lpg_5_app)) {
                    include ('lpg_5/lpg_5_app.php');
                } elseif (is_single($lpg_5_downloads)) {
                    include ('lpg_5/lpg_5_downloads.php');
                } elseif (is_single($lpg_5_famtour)) {
                    include ('lpg_5/lpg_5_famtour.php');
                } elseif (is_single($lpg_5_comtur)) {
                    include ('lpg_5/lpg_5_comtur.php');
                } elseif (is_single($lpg_5_presstrips)) {
                    include ('lpg_5/lpg_5_presstrips.php');
                } elseif (is_single($lpg_5_faleconosco)) {
                    include ('lpg_5/lpg_5_faleconosco.php');
                } elseif (is_single($lpg_5_privacidade)) {
                    include ('lpg_5/lpg_5_privacidade.php');
                } elseif (is_single($lpg_5_parceiros)) {
                    include ('lpg_5/lpg_5_parceiros.php');
                } elseif (is_single($lpg_5_sejaumparceiro)) {
                    include ('lpg_5/lpg_5_sejaumparceiro.php');
                } elseif (is_single($lpg_5_faq)) {
                    include ('lpg_5/lpg_5_faq.php');
                } elseif (is_single($lpg_5_siteinspection)) {
                    include ('lpg_5/lpg_5_siteinspection.php');
                } else {
                    // NADA
                }
            } else {
                // NADA
            }
        } // CHAVE DO : while (have_posts()) {
    } // CHAVE DO : if (have_posts()) 
    // query resset
    wp_reset_query();
} // CHADO DO : if is 404
//
//
//
//
// class="content" close
echo '</div>';
//    
// get footer()
include ('footer.php');
?>