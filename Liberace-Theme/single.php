<?php
get_header();
while (have_posts()): the_post();
//
//sidebar programador
    include('sidebar-programador.php');
//
//
    //INDEX EM PORTUGUÊS
    if (is_single(372)) {
        include('single-index-pt.php');
    //INDEX EM INGLÊS
    } elseif (is_single(373)) {
        include('single-index-en.php');
    } else {
        ?>
        <div class="C1-roteiro interna_topo_title">
            <a>
                <p><?php the_title(); ?></p>
            </a>
        </div>
        </div>
        <!---------------------------------------- MENU RESPONSIVO - COLLAPSE -->
        <div id="interna_topo_collapse">
            <?php get_sidebar('menu_responsivo'); ?>
        </div>
        <div class="interna_content">
            <div class="interna_content_article">
                <?php
                if (is_single(122)) {
                    //se for o single "Servicos e Enderecos"
                    ?>
                    <div class="roteiroServicosColuna">
                        <?php the_field('servicos_1'); ?>
                    </div>
                    <div class="roteiroServicosColuna">
                        <?php the_field('servicos_2'); ?>
                    </div>
                    <div class="roteiroServicosColuna">
                        <?php the_field('servicos_3'); ?>
                    </div>
                    <div class="roteiroMob_link roteiro-link">
                        <?php
                        if ($idioma == 'pt') {
                            echo '<a href="';
                            echo get_permalink(52);
                            echo '">';
                            echo get_the_title(52);
                            echo '</a>';
                        } else {
                            echo '<a href="';
                            echo get_permalink(214);
                            echo '">';
                            echo get_the_title(214);
                            echo '</a>';
                        }
                        ?>
                    </div>
                    <div class="roteiroMob_link downloads">
                        <?php
                        if ($idioma == 'pt') {
                            echo '<a href="';
                            echo get_permalink(123);
                            echo '">';
                            echo get_the_title(123);
                            echo '</a>';
                        } else {
                            echo '<a href="';
                            echo get_permalink(371);
                            echo '">';
                            echo get_the_title(371);
                            echo '</a>';
                        }
                        ?>
                    </div>
                    <?
                    //se for o single "Downloads"
                } elseif (is_single(123)) {
                    ?>
                    <article>
                        <p><?php the_content(); ?></p>
                    </article>
                    <div class="roteiroMob_link roteiro-link">
                        <?php
                        if ($idioma == 'pt') {
                            echo '<a href="';
                            echo get_permalink(52);
                            echo '">';
                            echo get_the_title(52);
                            echo '</a>';
                        } else {
                            echo '<a href="';
                            echo get_permalink(214);
                            echo '">';
                            echo get_the_title(214);
                            echo '</a>';
                        }
                        ?>
                    </div>
                    <div class="roteiroMob_link servicos">
                        <?php
                        if ($idioma == 'pt') {
                            echo '<a href="';
                            echo get_permalink(123);
                            echo '">';
                            echo get_the_title(123);
                            echo '</a>';
                        } else {
                            echo '<a href="';
                            echo get_permalink(371);
                            echo '">';
                            echo get_the_title(371);
                            echo '</a>';
                        }
                        ?>
                    </div>
                    <?php
                } else {
                    ?>
                    <article>
                        <p><?php the_content(); ?></p>
                    </article>
                    <?php
                }
                ?>
            </div>
        </div>
        <?php
    }
endwhile;
get_footer();
?>