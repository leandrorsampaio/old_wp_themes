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


    <?php
    $linkatual = get_permalink();
    ?>



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


    <div class="homeroteirosporregiao">
        <div class="roteirosporregiao_cards">

            <div class="roteirosporregiao_intro">
                <p>Lorem ipsum dolor sit amet, sea amet vocent euismod an, melius euismod ut est. Doming vidisse in has, eum in pertinax incorrupte comprehensam. Ne duo harum dolorem, ad causae ponderum quo. Cetero lobortis pertinax id his. Vis in primis rationibus consectetuer, sanctus suscipit accommodare no qui, ne mea labitur corpora. Altera erroribus et sit, quo esse fabellas ea. Ne labores definiebas sed, fugit tincidunt nec ex.

                    Ad quodsi constituam vel, sit vero democritum no. Ad latine deserunt duo, at nec mutat harum mentitum, ne quod conceptam eam. Malis falli ut nec. Ex vix primis minimum, sensibus consetetur disputationi no nam, cu detracto perpetua iudicabit his. Partiendo consectetuer no duo. Mutat ceteros nominati sed ad, pri verear constituam no.

                    Per propriae fabellas id, vim ne dico mucius. Eius suavitate delicatissimi ad nec, euismod consulatu mel eu, an cum duis omnis legimus. Eu has quidam detracto mandamus, nec ne putant percipitur. Ad utinam nonumy aliquip ius, eu hinc volumus vel. Ad eius contentiones eos, mucius sententiae vituperata in eam.

            </div>

            <?php
            $argsRoteirosPorRegiao = array(
                'post_type' => 'roteirosporregiao',
                'posts_per_page' => -1,
                'orderby' => 'title',
                'order' => 'ASC',
                'downloadslang' => $taxonomiaNome
            );
//
            global $queryRoteirosPorRegiao;
            $queryRoteirosPorRegiao = new WP_Query($argsRoteirosPorRegiao);
            while ($queryRoteirosPorRegiao->have_posts()) : $queryRoteirosPorRegiao->the_post();
                //
                $RoteirosPorPeriodoID = get_the_ID();
                $RoteirosPorPeriodoTITLE = get_the_title();

                //


                echo '<div class="roteirosporregiao_item">';
                echo '<a class="link_roteirosporregiao" href="#">';
                echo '<div class="roteirosporregiao_item_img img_roteirosporregiao"' .
                ' style="background-image: url(' . get_field('roteirosporregiao_thumbnail') . ');">';
                echo '</div>';
                echo '<p>' . get_field('roteirosporregiao_descricao') . '</p>';
                echo '</a>';
                echo '</div>';


//
            endwhile;
            wp_reset_query();
            ?>            
        </div>
    </div>
</div>
