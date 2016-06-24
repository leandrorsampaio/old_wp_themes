<?php
 $anotitle = '2016';
if (is_page(4335)) {
    $anotitle = '2016';
} elseif(is_page(8383)) {
    $anotitle = '2015';
} else {
    $anotitle = '2014';
}
// verifica se eh a page geral das escolas ou single especifica de uma escola
if (is_page(4335) || is_page(6497) || is_page(8383)) {
    // SAMBAS GRUPO ESPECIAL
    echo '<h4 class="biliotecaSampa_title">Grupo Especial ' . $anotitle . '</h4>';
    $asideposts = new WP_Query('post_type=sambaenredo&posts_per_page=-1&orderby=rand&anocarnaval=' . $anotitle . '&grupos=grupo-especial');
    while ($asideposts->have_posts()) : $asideposts->the_post();
        $titulobox = 'Samba-enredo';
        $titulo = get_the_title();
        $autordosamba = get_field('autor_do_samba-enredo_v2');
        $titulosamba = get_field('titile_samba-enredo_v2');
        $letrasamba = get_field('samba_enredo_v2');
        $url_audio = get_field('audio_do_samba_v2');
        $url_thumbnail = wp_get_attachment_url(get_post_thumbnail_id());
        // Inclui o limitador de caracteres
        include ('sidebar-samba-limitador.php');
        echo '<div class="wrapperBiliotecaSampa">';
        // Inclui o HTML
        include ('sidebar-samba-box.php');
        echo '</div>';
    endwhile;
    wp_reset_postdata();
    // SAMBAS GRUPO ESPECIAL
    echo '<h4 class="biliotecaSampa_title">Grupo de Acesso ' . $anotitle . '</h4>';
    $asideposts = new WP_Query('post_type=sambaenredo&posts_per_page=-1&orderby=rand&anocarnaval=' . $anotitle . '&grupos=grupo-de-acesso');
    while ($asideposts->have_posts()) : $asideposts->the_post();
        $titulobox = 'Samba-enredo';
        $titulo = get_the_title();
        $autordosamba = get_field('autor_do_samba-enredo_v2');
        $titulosamba = get_field('titile_samba-enredo_v2');
        $letrasamba = get_field('samba_enredo_v2');
        $url_audio = get_field('audio_do_samba_v2');
        $url_thumbnail = wp_get_attachment_url(get_post_thumbnail_id());
        // Inclui o limitador de caracteres
        include ('sidebar-samba-limitador.php');
        echo '<div class="wrapperBiliotecaSampa">';
        // Inclui o HTML
        include ('sidebar-samba-box.php');
        echo '</div>';
    endwhile;
    wp_reset_postdata();
    // SAMBAS UESP
    echo '<h4 class="biliotecaSampa_title">UESP ' . $anotitle . '</h4>';
    $asideposts = new WP_Query('post_type=sambaenredo&posts_per_page=-1&orderby=rand&anocarnaval=' . $anotitle . '&grupos=uesp');
    while ($asideposts->have_posts()) : $asideposts->the_post();
        $titulobox = 'Samba-enredo';
        $titulo = get_the_title();
        $autordosamba = get_field('autor_do_samba-enredo_v2');
        $titulosamba = get_field('titile_samba-enredo_v2');
        $letrasamba = get_field('samba_enredo_v2');
        $url_audio = get_field('audio_do_samba_v2');
        $url_thumbnail = wp_get_attachment_url(get_post_thumbnail_id());
        // Inclui o limitador de caracteres
        include ('sidebar-samba-limitador.php');
        echo '<div class="wrapperBiliotecaSampa">';
        // Inclui o HTML
        include ('sidebar-samba-box.php');
        echo '</div>';
    endwhile;
    wp_reset_postdata();
} elseif (is_page()) {
//---------------------------------- Query Escolas
    $asideposts = new WP_Query('post_type=sambaenredo&posts_per_page=1&orderby=rand&anocarnaval=2016');
    while ($asideposts->have_posts()) : $asideposts->the_post();
        $titulobox = 'Samba-enredo';
        $titulo = get_the_title();
        $autordosamba = get_field('autor_do_samba-enredo_v2');
        $titulosamba = get_field('titile_samba-enredo_v2');
        $letrasamba = get_field('samba_enredo_v2');
        $url_audio = get_field('audio_do_samba_v2');
        $url_thumbnail = wp_get_attachment_url(get_post_thumbnail_id());
        // Inclui o limitador de caracteres
        include ('sidebar-samba-limitador.php');
        // Inclui o HTML
        include ('sidebar-samba-box.php');
    endwhile;
    wp_reset_postdata();
} else {
    //
    // Pagina da propria escola
    //
    // CODIGO ANTIGO
    //$titulobox = 'Samba-enredo';
    //$titulo = get_the_title();
    //$autordosamba = get_field('autor_do_samba-enredo');
    //$titulosamba = get_field('titile_samba-enredo');
    //$letrasamba = get_field('samba_enredo');
    //$url_audio = get_field('audio_do_samba');
    // Inclui o limitador de caracteres
    //include ('sidebar-samba-limitador.php');
    //
    // Puxa a imagem da Taxonomia
    $terms = wp_get_object_terms($post->ID, 'escolasrelacionadas');
    if (!empty($terms)) :
        $escolarelacionada = array();
        foreach ($terms as $term) {
            $escolarelacionada = $term->slug;
        }
    endif;
    // Monta query
    $asideposts = new WP_Query('post_type=sambaenredo&posts_per_page=1&anocarnaval=2016&escolasrelacionadas=' . $escolarelacionada);
    while ($asideposts->have_posts()) : $asideposts->the_post();
        $titulobox = 'Samba-enredo';
        $titulo = get_the_title();
        $autordosamba = get_field('autor_do_samba-enredo_v2');
        $titulosamba = get_field('titile_samba-enredo_v2');
        $letrasamba = get_field('samba_enredo_v2');
        $url_audio = get_field('audio_do_samba_v2');
        $url_thumbnail = wp_get_attachment_url(get_post_thumbnail_id());
        // Inclui o limitador de caracteres
        include ('sidebar-samba-limitador.php');
        // Inclui o HTML
        include ('sidebar-samba-box.php');
    endwhile;
    wp_reset_postdata();
}
?>
