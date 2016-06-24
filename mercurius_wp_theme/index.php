<?php
// Modulo do programador
include ('inc_programmer.php');
// header
include ('header.php');
?>
<div class="all">
    <div target="_blank" class="caixa">
        <h2 class="title mainTitle">Sistema Mercurius</h2>
        <h2 class="title2"><i class="fa fa-wordpress"></i>Orgulhosamente feito<br/>em WordPress</h2>
    </div>    
    <a href="<?php echo get_permalink($link_cspturismo); ?>" class="caixa">
        <i class="fa fa-heart faItens"></i>
        <h2 class="title">Turismo em<br/>S&atilde;o Paulo</h2>
    </a>    
    <a href="<?php echo get_permalink($link_spempauta); ?>" class="caixa">
        <i class="fa fa-bullhorn faItens"></i>
        <h2 class="title">S&atilde;o Paulo<br/>em Pauta</h2>
    </a>   
    <a href="<?php echo get_permalink($link_internacionalpress); ?>" class="caixa">
        <i class="fa fa-globe faItens"></i>
        <h2 class="title">Imprensa<br/>Internacional</h2>
    </a>   
    <a href="<?php echo get_permalink($link_spturisevc); ?>" class="caixa">
        <i class="fa fa-comments faItens"></i>
        <h2 class="title">SPTuris<br/>e Voc&ecirc;</h2>
    </a>   
    <a href="<?php echo get_permalink($link_interlagos); ?>" class="caixa">
        <i class="fa fa-trophy faItens"></i>
        <h2 class="title">Aut&oacute;dromo de<br/>Interlagos</h2>
    </a>   
</div>
<?php
// Footer
include ('footer.php');
?>