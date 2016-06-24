<?php
// Modulo do programador
include ('inc_programmer.php');
//
// Main looping
if (have_posts()) {
    while (have_posts()) {
        the_post();
        //
        //
        //
        if ($getPty == $pty_cspturismo) {
            include ('pty_cspturismo.php');
        } elseif ($getPty == $pty_internacionalpress) {
            include ('pty_internacionalpress.php');
        } elseif ($getPty == $pty_spempauta) {
            include ('pty_spempauta.php');
        } elseif ($getPty == $pty_spturisevc) {
            include ('pty_spturisevc.php');
        } elseif ($getPty == $pty_interlagos) {
            include ('pty_interlagos.php');
        } else {
            // NADA
        }
        //
        //
        //        
    } // CHAVE DO : while (have_posts()) {
} // CHAVE DO : if (have_posts()) 
// query resset
wp_reset_query();
?>