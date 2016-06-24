<div class="content_block block-4x-3 block-first">
    <div class="content_block_box">
        <div class="layoutpadrao_text wpWysiwyg wpWysiwyg-verde">






            <?php
            //
            $lang_boo_en = get_field('lang_boo_en');
            $lang_boo_es = get_field('lang_boo_es');
            //
            if ($idioma == 2) {
                $avisoTxt = $avisoTxt_en;
                if ($lang_boo_en == 1) {
                    $incluiBing = 0;
                } else {
                    $incluiBing = 1;
                }
            }
            if ($idioma == 3) {
                $avisoTxt = $avisoTxt_es;
                if ($lang_boo_es == 1) {
                    $incluiBing = 0;
                } else {
                    $incluiBing = 1;
                }
            }
            //
            // Aviso de Traducao - Bing Translator
            if ($incluiBing == 1) {
                $montaAvisoBing = '<div class="bingAviso">';
                $montaAvisoBing .= '<div class="bingAviso_esq"><div id="MicrosoftTranslatorWidget" class="Dark" style="color:white;background-color:#555555"></div></div>';
                $montaAvisoBing .= '<div class="bingAviso_dir" ' . $noTranslate . '><p>' . $avisoTxt . '</p></div>';
                $montaAvisoBing .= '</div>';
                //
                echo $montaAvisoBing;
                ?>
                <script type='text/javascript'>
                    setTimeout(function () {
                        {
                            var s = document.createElement('script');
                            s.type = 'text/javascript';
                            s.charset = 'UTF-8';
                            s.src = ((location && location.href && location.href.indexOf('https') == 0) ? 'https://ssl.microsofttranslator.com' : 'http://www.microsofttranslator.com') + '/ajax/v3/WidgetV3.ashx?siteData=ueOIGRSKkd965FeEGM5JtQ**&ctf=True&ui=true&settings=Manual&from=';
                            var p = document.getElementsByTagName('head')[0] || document.documentElement;
                            p.insertBefore(s, p.firstChild);
                        }
                    }, 0);
                </script>
                <?php
            }
            ?>





            <?php echo get_field($content_theContent); ?>





        </div>
    </div>
    <div class="content_block_box" <?php echo $noTranslate; ?>>
        <div class="readMoreAcontece">
            <h4 class="readMoreAcontece_title">Mais: Categoria</h4>
            <?php
            $argsReadMore = array(
                'post_type' => array('novidades', 'agenda'),
                'posts_per_page' => 6,
                'orderby' => 'rand'
            );
//
            global $queryReadMore;
            $queryReadMore = new WP_Query($argsReadMore);
            while ($queryReadMore->have_posts()) : $queryReadMore->the_post();
                //
                $readMoreID = get_the_ID();
                $readMoreTITLE = get_field_object($lang_title, $readMoreID);
                echo '<a href="' . get_permalink() . '" class="readMoreAcontece_link">';
                echo $readMoreTITLE['value'];
                echo '</a>';
//
            endwhile;
            wp_reset_query();
            ?>
        </div>
    </div>
</div>
<div class="content_block block-3x block-last" <?php echo $noTranslate; ?>>
    <div class="content_block_box">
        <?php
// Sidebar
        include ($sidebarInclude);
        ?>
    </div>
</div>
