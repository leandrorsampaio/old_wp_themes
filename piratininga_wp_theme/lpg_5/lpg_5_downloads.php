<?php
if ($idioma == 3) {
    $titulo_selecione = 'Selecione o idioma dos materiais: (ES)';
} elseif ($idioma == 2) {
    $titulo_selecione = 'Selecione o idioma dos materiais: (EN)';
} else {
    $titulo_selecione = 'Selecione o idioma dos materiais: (PT)';
}
?>



<div class="content_block block-1x">
    <ul class="downloads">






        <?php
        $linkatual = get_permalink();
        ?>


        <!--
        <div class="selecione"> 
            
        <?php echo $titulo_selecione; ?>
    
            <a href="<?php echo $linkatual . $idiomaURL . '&load=pt' ?>">
                <img class="selecione_lang_img"  src="<?php bloginfo('template_url'); ?>/images/flag_pt.png" alt="" />
            </a>
            <a href="<?php echo $linkatual . $idiomaURL . '&load=en' ?>">
                <img class="selecione_lang_img"  src="<?php bloginfo('template_url'); ?>/images/flag_en.png" alt="" />
            </a>
            <a href="<?php echo $linkatual . $idiomaURL . '&load=es' ?>">
                <img class="selecione_lang_img"  src="<?php bloginfo('template_url'); ?>/images/flag_es.png" alt="" />
            </a>
    
        </div>
    
        <div class="linhaHorizontal"></div>
        -->

        <?php
        $carrega = $_GET['load'];

        if ($carrega) {
            if ($carrega == 'es') {
                $taxonomiaNome = 'espanhol';
            } elseif ($carrega == 'en') {
                $taxonomiaNome = 'ingles';
            } else {
                $taxonomiaNome = 'portugues';
            }
        } else {
            if ($idioma == 3) {
                $taxonomiaNome = 'espanhol';
            } elseif ($idioma == 2) {
                $taxonomiaNome = 'ingles';
            } else {
                $taxonomiaNome = 'portugues';
            }
        }
        ?>






        <?php
        //

        if ($idioma == 3) {
            $download_title = 'downloads_title_es';
            $download_descricao = 'downloads_descricao_es';
        } elseif ($idioma == 2) {
            $download_title = 'downloads_title_en';
            $download_descricao = 'downloads_descricao_en';
        } else {
            $download_title = 'downloads_title_pt';
            $download_descricao = 'downloads_descricao_pt';
        }










        //
        //
        $argsDownloads = array(
            'post_type' => 'downloadscsp',
            'posts_per_page' => -1,
            'orderby' => 'title',
            'order' => 'ASC',
                //'downloadslang' => $taxonomiaNome
        );
//
        global $queryDownloads;
        $queryDownloads = new WP_Query($argsDownloads);
        while ($queryDownloads->have_posts()) : $queryDownloads->the_post();
            //
            $downloadsID = get_the_ID();
            $downloadsTITLE = get_the_title();

            //
            echo '<li class="downloads_item">';
            echo '<div class="downloads_item_img"' .
            ' style="background-image: url(' . get_field('downloads_thumbnail') . ');">'
            . '</div>';
            echo '<div class="downloads_item_content">';




            echo '<h2>' . get_field($download_title) . '</h2>';
            echo '<p class="descricao">' . get_field($download_descricao) . '</p>';




            if (get_field('downloads_versao')) {
                // Se tiver Versão
                echo '<h4 class="versao"> <b>Vers&atilde;o:</b> ' . get_field('downloads_versao') . '</h4>';
            }
            echo '<h3 class="formato"> <b>Formato:</b> ' . get_field('downloads_formato') . ' (' . get_field('downloads_peso') . ')</h3>';

            //
            //
            $download_pt = 0;
            $download_en = 0;
            $download_es = 0;
            $download_fonteBoo = 0;
            //
            if (get_field('downloads_boofile') == 1) {
                //
                // WP UPLOAD
                if (get_field('downloads_wpfile_pt')) {
                    $download_pt = 1;
                    $download_pt_url = get_field('downloads_wpfile_pt');
                }
                if (get_field('downloads_wpfile_en')) {
                    $download_en = 1;
                    $download_en_url = get_field('downloads_wpfile_en');
                }
                if (get_field('downloads_wpfile_es')) {
                    $download_es = 1;
                    $download_es_url = get_field('downloads_wpfile_es');
                }
                $titleselec = ' ';
                $targetselec = ' ';
            } else {
                //
                // Link Upload
                if (get_field('downloads_linkfile_pt')) {
                    $download_pt = 1;
                    $download_pt_url = get_field('downloads_linkfile_pt');
                }
                if (get_field('downloads_linkfile_en')) {
                    $download_en = 1;
                    $download_en_url = get_field('downloads_linkfile_en');
                }
                if (get_field('downloads_linkfile_es')) {
                    $download_es = 1;
                    $download_es_url = get_field('downloads_linkfile_es');
                }
                //
                if (get_field('downloads_booissue') == 1) {
                    $titleselec = 'title="' . get_field('downloads_extlink') . '"';
                    $targetselec = 'target="_blank"';
                } else {
                    $titleselec = ' ';
                    $targetselec = ' ';
                }
            }
            //
            echo '<div class="links">';
            echo '<p><b>Download:</b></p>';
            if ($download_pt == 1) {
                echo '<a class="links_flags flagPT" href="' . $download_pt_url . '" alt="Link Download em Portgues" ' . $targetselec . ' ' . $titleselec . ' >';
                echo '<img src="' . get_bloginfo('template_url') . '/images/flag_pt_color.png" title="Brazil Flag" />';
                echo '</a>';
            }
            if ($download_en == 1) {
                echo '<a class="links_flags flagEN" href="' . $download_en_url . '" alt="Link Download in Englisg" ' . $targetselec . ' ' . $titleselec . ' >';
                echo '<img src="' . get_bloginfo('template_url') . '/images/flag_en_color.png" title="UK Flag" />';
                echo '</a>';
            }
            if ($download_es == 1) {
                echo '<a class="links_flags flagES" href="' . $download_es_url . '" alt="Link Download en Espanol" ' . $targetselec . ' ' . $titleselec . ' >';
                echo '<img src="' . get_bloginfo('template_url') . '/images/flag_es_color.png" title="Spain Flag" />';
                echo '</a>';
            }
            echo '</div>';


            echo '</a>';
            echo '</li>';
        //
        endwhile;
        wp_reset_query();
        ?>            
    </ul>
</div>



