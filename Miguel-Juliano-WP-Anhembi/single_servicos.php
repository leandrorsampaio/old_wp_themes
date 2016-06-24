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
                <a href="<?php echo get_permalink(1810); ?>">
                    <?php
                    $post_id = 1810;
                    $queried_post = get_post($post_id);
                    $title = $queried_post->post_title;
                    echo $title;
                    wp_reset_query()
                    ?>
                </a>
                - 
                <a href="<?php echo the_permalink(); ?>">
                    <?php the_title(); ?>
                </a>
            </h4>
        </div>
        <!------------------------------------------ Esquerda ---------------------------------->
        <div id="content_esquerda">
            <div class="content_esquerda_sidebarX">
                <?php
                get_sidebar('publicidade');
                //Sidebar Mapa
                if (is_single(array(519, 520, 1177))) {
                    get_sidebar('mapa');
                } elseif (is_single(array(1001, 1929, 7317))) {
                    get_sidebar('oportunidades');
                } elseif (is_single(4775)) {
                    get_sidebar('midia');
                } else {
                    get_sidebar('telecom');
                }
                ?>
            </div>
        </div>
        <div id="content_border">
            <div id="content_borde_color"></div>
        </div>
        <!------------------------------------------ Direita ---------------------------------->
        <div id="content_direita">
            <?php
            //Menu superior para a página Downloads somente
            if (is_single('1001')) {
                ?>
                <div id="downloads">
                    <ul id="downloads_lista">
                        <li class="downloads_lista_item">
                            <a href="#plantas" id="downloads_lista_item_linkPlanta" title="Plantas"></a>
                        </li>
                        <li class="downloads_lista_item">
                            <a href="#manuais" id="downloads_lista_item_linkManuais" title="Manuais"></a>
                        </li>
                        <li class="downloads_lista_item">
                            <a href="#folhetos" id="downloads_lista_item_linkFolhetos" title="Folhetos Ilustrativos"></a>
                        </li>
                        <li class="downloads_lista_item">
                            <a href="#precos" id="downloads_lista_item_linkPrecos" title="Tabela de Pre&ccedil;os"></a>
                        </li>
                        <li class="downloads_lista_item">
                            <a href="#logos" id="downloads_lista_item_linkLogo" title="Logos"></a>
                        </li>
                        <li class="downloads_lista_item">
                            <a href="#mapa" id="downloads_lista_item_linkMapa" title="Mapa"></a>
                        </li>
                    </ul>
                </div>
                <?php
            } else {
                
            }
            ?>
            <?php while (have_posts()): the_post(); ?>
                <article class="content_direita_article">
                    <div id="id117">
                        <?php
                        if (is_single('7317')) {
                            
                        } else {
                            the_content();
                        }
                        ?>
                        <?php
                        //Conteúdo da página de Acessibilidade
                        if (is_single('1929')) {
                            ?>                            
                            <div class="content_direita_article_acessibilidade">
                                <div class="scroll-pane acessibilidade">
                                    <style>
                                        .gallery {
                                        }
                                        .gallery-item {
                                        }
                                        .gallery-icon {
                                        }
                                        .gallery-icon a {
                                        }
                                        .gallery-icon a img {
                                            border: 1px solid #fff !important;
                                            width: 200px;
                                            height: 150px;
                                        }
                                        .gallery_pages_list {
                                            text-align: center;
                                            margin: 2px 0 0 0;
                                            font-size: 13px;
                                            color: #fff;
                                        }
                                        .gallery_pages_list a {
                                            color: #fff;
                                        }
                                    </style>
                                    <?php
                                    // Chama a galeria de imagens do WP
                                    the_field('acessibilidade_imagens');
                                    ?>
                                </div>
                            </div>
                            <?php
                            // Chama a a segunda parte do texto
                            the_field('acessibilidade_texto2');
                        } else {
                            
                        }
                        ?>
                    </div>
                    <?php
                    //Campos personalizados para a página de downloads
                    if (is_single('1001')) {
                        ?>
                        <div class="downloads_fields_item">
                            <div id="downloadsSub_iconPlanta"></div>
                            <h1 class="downloadsSub_title">Plantas</h1>
                            <a name="plantas"></a>
                            <div class="downloads_fields_text">
                                <?php the_field('plantas'); ?>    
                            </div>
                        </div>
                        <div class="downloads_fields_item2col">
                            <div id="downloadsSub_iconManuais"></div>
                            <h1 class="downloadsSub_title">Manuais</h1>
                            <a name="manuais"></a>
                            <div class="downloads_fields_text_2col">
                                <?php the_field('manuais'); ?>    
                            </div>
                        </div>
                        <div class="downloads_fields_item2col">
                            <div id="downloadsSub_iconMinuta"></div>
                            <h1 class="downloadsSub_title">Minuta de contrato</h1>
                            <a name="minuta"></a>
                            <div class="downloads_fields_text_2col">
                                <?php the_field('minuta_de_contrato'); ?>    
                            </div>                  
                        </div>
                        <div class="downloads_fields_item2col">
                            <div id="downloadsSub_iconFolhetos"></div>
                            <h1 class="downloadsSub_title">Folhetos Ilustrativos</h1>
                            <a name="folhetos"></a>
                            <div class="downloads_fields_text_2col">
                                <?php the_field('folhetos_ilustrativos'); ?>    
                            </div>
                        </div>
                        <div class="downloads_fields_item2col">
                            <div id="downloadsSub_iconPrecos"></div>
                            <h1 class="downloadsSub_title">Tabela de Pre&ccedil;os</h1>
                            <a name="precos"></a>
                            <div class="downloads_fields_text_2col">
                                <?php the_field('tabela_precos'); ?>    
                            </div>
                        </div>
                        <div class="downloads_fields_item">
                            <div id="downloadsSub_iconLogo"></div>
                            <h1 class="downloadsSub_title">Logos</h1>
                            <a name="logos"></a>
                            <div class="downloads_fields_text">
                                <?php the_field('logos'); ?>    
                            </div>
                        </div>
                        <div class="downloads_fields_item">
                            <div id="downloadsSub_iconMapa"></div>
                            <h1 class="downloadsSub_title">Mapa - Como Chegar</h1>
                            <a name="mapa"></a>
                            <div class="downloads_fields_text">
                                <?php the_field('mapa'); ?>    
                            </div>
                        </div>
                        <?php
                        //Campos personalizados para a página Onde Ficar
                    } elseif (is_single('1177')) {
                        ?>
                        <div id="id117">
                            <div id="id117_esq">
                                <h4 class="ondeFicar_title">Bem-vindos a S&atilde;o Paulo!</h4>
                                <?php the_field('cidade_sp'); ?> 
                                <br/>
                                <!--
                                <h4 class="ondeFicar_title">Turismetr&ocirc;</h4>
                                <?php // the_field('turismetro'); ?> 
                                -->
                                <br/>
                                <h4 class="ondeFicar_title">S&atilde;o Paulo Experience</h4>
                                <?php the_field('sp_experience'); ?> 
                            </div>
                            <div id="id117_dir">
                                <h4 class="ondeFicar_title">Hot&eacute;is perto do Anhembi</h4>
                                <?php the_field('hoteis'); ?> 
                                <br/>
                                <h4 class="ondeFicar_title">Fique mais um dia em S&atilde;o Paulo</h4>
                                <?php the_field('fique_mais'); ?> 
                                <br/>
                                <h4 class="ondeFicar_title">S&atilde;o Paulo 360&ordm;</h4>
                                <?php the_field('sp360'); ?> 
                            </div>
                        </div>
                    <?php } elseif (is_single('7317')) {
                        ?>
                        <div id="achadosEperdidos">
                            <div id="achadosEperdidos_direita">
                                <div id="achadosEperdidos_direita_contato">
                                    <?php the_field('contatos_ouvidoria'); ?>
                                </div>
                                <div id="achadosEperdidos_direita_iframe">
                                    <iframe src="http://intranet.spturis.com.br/intranet/modulos/achados_e_perdidos/widget.php" width="320" height="180" frameborder="0" style="overflow:hidden;"></iframe>
                                </div>
                                <div id="achadosEperdidos_direita_contatoBottom">
                                    <?php the_field('contatos_ouvidoria_bottom'); ?>
                                </div>
                            </div>
                            <div id="achadosEperdidos_esquerda">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <?php
                    }
                    ?>
                </article>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>