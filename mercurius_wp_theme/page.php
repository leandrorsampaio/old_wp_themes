<?php

// Modulo do programador
include ('inc_programmer.php');
// header
include ('header.php');
//
if (is_page($link_cspturismo)) {
    $loopvar = $pty_cspturismo;
} elseif (is_page($link_internacionalpress)) {
    $loopvar = $pty_internacionalpress;
} elseif (is_page($link_spempauta)) {
    $loopvar = $pty_spempauta;
} elseif (is_page($link_spturisevc)) {
    $loopvar = $pty_spturisevc;
} elseif (is_page($link_interlagos)) {
    $loopvar = $pty_interlagos;
} else {
    // NADA
}
//
echo '<div class="all">';
//
echo '<div class="pageHeader">';
if ($loopvar == $pty_cspturismo) {
    echo '<h1 class="pageHeader_h1"><i class="fa fa-heart pageHeader_logo"></i>Turismo em S&atilde;o Paulo</h1>';
} elseif ($loopvar == $pty_internacionalpress) {
    echo '<h1 class="pageHeader_h1"><i class="fa fa-globe pageHeader_logo"></i>Imprensa Internacional</h1>';
} elseif ($loopvar == $pty_spempauta) {
    echo '<h1 class="pageHeader_h1"><i class="fa fa-bullhorn pageHeader_logo"></i>S&atilde;o Paulo em Pauta</h1>';
} elseif ($loopvar == $pty_spturisevc) {
    echo '<h1 class="pageHeader_h1"><i class="fa fa-comments pageHeader_logo"></i>SPTuris e Voc&ecirc;</h1>';
} elseif ($loopvar == $pty_interlagos) {
    echo '<h1 class="pageHeader_h1"><i class="fa fa-trophy pageHeader_logo"></i>Aut&oacute;dromo de Interlagos</h1>';
} else {
    // NADA   
}
echo '</div>';
//
//
// Main looping
if (have_posts()) {
    while (have_posts()) {
        the_post();
        //
        echo '<ul class="postsUl">';
        $args = array(
            'post_type' => $loopvar,
            'posts_per_page' => -1
        );
        //
        global $query;
        $query = new WP_Query($args);
        while ($query->have_posts()) : $query->the_post();
            //
            echo '<li class="postsUl_li">';
            //
            echo '<p class="postsUl_li_title">';
            echo get_the_title();
            echo '</p>';
            //
            echo '<a href="' . get_permalink() . '" class="postsUl_li_visualizar link" target="_blank">';
            echo 'Visualizar Newsletter';
            echo '</a>';
            //
            if (is_user_logged_in()) {
                echo '<a href="' . get_edit_post_link() . '" class="postsUl_li_editar link" target="_blank">';
                echo 'Editar Newsletter';
                echo '</a>';
            } else {
                echo '<a href="' . get_admin_url() . '" class="postsUl_li_editar link" target="_blank">';
                echo 'Logar para Editar';
                echo '</a>';
            }
            //
            echo '</li>';
        //
        endwhile;
        wp_reset_query();
        echo '</ul>';
        //
        //
        //        
    } // CHAVE DO : while (have_posts()) {
} // CHAVE DO : if (have_posts()) 
// query resset
wp_reset_query();
//
echo '</div>'; //<div class="all">
//
// Footer
include ('footer.php');
?>