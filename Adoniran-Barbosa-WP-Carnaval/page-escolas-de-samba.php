<?php
//Id das escolas
include ('sidebar-idescolas.php');

// inclui o header
get_header();

//looping
while (have_posts()): the_post();

// escolhe as cores
    include ('sidebar-escolheacor.php');
    ?>

    <div id="unidosdodesignPage" style="color: <?php echo $cor1; ?>;">
        <div id="unidosdodesignPage_section">
            <div id="noticias_section_head">
                <h1 id="noticias_section_head_title"><?php the_title(); ?></h1>
            </div>
            <div id="unidosdodesignPage_section_especial">
                <div id="unidosdodesignPage_section_especial_title">
                    <img src="<?php bloginfo('template_url') ?>/images/grupoespecial.gif" alt="Liga - Grupo especial" />
                </div>
                <div id="unidosdodesignPage_section_especial_bandeiras">
                    <?php
                    $args = array(
                        'post_type' => 'escolas',
                        'grupos' => 'grupo-especial',
                        'posts_per_page' => 14,
                        'orderby' => 'rand'
                    );
                    //---------------------------------- Query Escolas
                    $asideposts = new WP_Query($args);
                    while ($asideposts->have_posts()) : $asideposts->the_post();
                        ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php $url_thumbnail = wp_get_attachment_url(get_post_thumbnail_id()); ?>
                            <img src="<?php echo $url_thumbnail; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
                            <p class="bandeiras_title_01"><?php the_title(); ?></p>
                        </a>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
            <div id="unidosdodesignPage_section_acesso">
                <div id="unidosdodesignPage_section_acesso_title">
                    <img src="<?php bloginfo('template_url') ?>/images/grupodeacesso-v2.gif" alt="Liga - Grupo de acesso" />
                </div>
                <div id="unidosdodesignPage_section_acesso_bandeiras">
                    <?php
                    $args = array(
                        'post_type' => 'escolas',
                        'grupos' => 'grupo-de-acesso',
                        'posts_per_page' => 9,
                        'orderby' => 'rand'
                    );
                    //---------------------------------- Query Escolas
                    $asideposts = new WP_Query($args);
                    while ($asideposts->have_posts()) : $asideposts->the_post();
                        ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php $url_thumbnail = wp_get_attachment_url(get_post_thumbnail_id()); ?>
                            <img src="<?php echo $url_thumbnail; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
                            <p class="bandeiras_title_02"><?php the_title(); ?></p>
                        </a>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
            <div id="unidosdodesignPage_section_uesp">
                <div id="unidosdodesignPage_section_uesp_title">
                    <img src="<?php bloginfo('template_url') ?>/images/uespgrupo1-v2.gif" alt="UESP - Grupo 1" />
                </div>
                <div id="unidosdodesignPage_section_uesp_bandeiras">
                    <?php
                    $args = array(
                        'post_type' => 'escolas',
                        'grupos' => 'uesp',
                        'posts_per_page' => '11',
                        'orderby' => 'rand'
                    );
                    //---------------------------------- Query Escolas
                    $asideposts = new WP_Query($args);
                    while ($asideposts->have_posts()) : $asideposts->the_post();
                        ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php $url_thumbnail = wp_get_attachment_url(get_post_thumbnail_id()); ?>
                            <img src="<?php echo $url_thumbnail; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>" />
                            <p class="bandeiras_title_03"><?php the_title(); ?></p>
                        </a>
                        <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>





            <!--

            <div class="chamadasEscolasPage">
                <div class="homeInicio_quad2 quadX">
                    <h2 class="homeInicio_title">Carna-Cardiograma</h2>
                    <a href="http://carnaval.spturis.com.br/carna-cardiograma/">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/carnacardiogramachamada.gif" alt="Carna cardiograma chamada" />
                    </a>
                    <p class="homeInicio_text">Veja aqui a trajet&oacute;ria de t&iacute;tulos de sua escola desde a inaugura&ccedil;&atilde;o do Samb&oacute;dromo</p>
                </div>
                <div class="homeInicio_quad3 quadX">
                    <h2 class="homeInicio_title">Sambas-Enredo 2014</h2>
                    <a href="http://carnaval.spturis.com.br/biblioteca-de-sambas-enredo/">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/chamadaindex2.gif" alt="Bilbioteca do samba chamada" />
                    </a>
                    <p class="homeInicio_text">Escolha o seu samba-enredo favorito, prepare o samba no p&eacute; e pule o Carnaval!</p>
                </div>
                <div class="homeInicio_quad5 quadX">
                    <h2 class="homeInicio_title">Mapa do Samba</h2>
                    <a href="http://carnaval.spturis.com.br/mapa-samba/">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/mapasambachamada.gif" alt="Mapa do Samba Link" />
                    </a>
                </div>
                <div class="homeInicio_quad6 quadX">
                    <h2 class="homeInicio_title">Linha do Tempo</h2>
                    <a href="http://carnaval.spturis.com.br/carnaval-de-sao-paulo/delorean/">
                        <img src="<?php bloginfo('stylesheet_directory'); ?>/images/linhadotempochamada.jpg" alt="Linha do Tempo Link" />
                    </a>
                </div>
            </div>

            -->



            <!-- Samba -->
            <?php
            include ('sidebar-samba.php');
            ?>
            <!-- Samba -->
            <!-- boxGaleria -->
            <?php
            include ('sidebar-boxgaleria.php');
            ?>
            <!-- boxGaleria -->
            <!-- Leia Mais -->
            <?php
            include ('sidebar-leiamais.php');
            ?>
            <!-- Leia Mais -->
        </div>
        <!-- Aside -->
        <div id="aside">
            <?php
            include ('sidebar-publicidade.php');
            include ('sidebar-maisnoticias.php');
            ?>
        </div>
        <!-- Aside -->
    </div>
<?php endwhile; ?>
<?php get_footer(); ?>