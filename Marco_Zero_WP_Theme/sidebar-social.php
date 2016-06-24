<?php
// Atribuindo a novas variaveis
$contador_facebook = $facebook;
$contador_twitter = $twitter;
$contador_youtube = $youtube;
$contador_instagram = $instagram;
$contador_pinterest = $pinterest;
$contador_flickr = $flickr;
$contador_foursquare = $foursquare;
$contador_gplus = $gplus;
$contador_outra = $outra;

$link_facebook = $contador_facebook;
$link_twitter = $contador_twitter;
$link_youtube = $contador_youtube;
$link_instagram = $contador_instagram;
$link_pinterest = $contador_pinterest;
$link_flickr = $contador_flickr;
$link_foursquare = $contador_foursquare;
$link_gplus = $contador_gplus;
$link_outra = $contador_outra;



// Colocando as Redes sociais da SPTuris caso o monumento 
// nao tenha nenhuma rede social propria
if ((strlen($contador_facebook)) < 2) {
    $link_facebook = 'https://www.facebook.com/TurismoemSP';
    $contador_facebook = 1;
} else {
    $contador_facebook = 1;
}
if ((strlen($contador_twitter)) < 2) {
    $link_twitter = 'https://twitter.com/turismosaopaulo';
    $contador_twitter = 1;
} else {
    $contador_twitter = 1;
}
if ((strlen($contador_youtube)) < 2) {
    $link_youtube = 'https://www.youtube.com/user/spturis';
    $contador_youtube = 1;
} else {
    $contador_youtube = 1;
}

// Verificando se o campo esta preenchido ou em branco
if ((strlen($contador_instagram)) > 2) {
    $contador_instagram = 1;
} else {
    $contador_instagram = 0;
}
if ((strlen($contador_pinterest)) > 2) {
    $contador_pinterest = 1;
} else {
    $contador_pinterest = 0;
}
if ((strlen($contador_flickr)) > 2) {
    $contador_flickr = 1;
} else {
    $contador_flickr = 0;
}
if ((strlen($contador_foursquare)) > 2) {
    $contador_foursquare = 1;
} else {
    $contador_foursquare = 0;
}
if ((strlen($contador_gplus)) > 2) {
    $contador_gplus = 1;
} else {
    $contador_gplus = 0;
}
if ((strlen($contador_outra)) > 2) {
    $contador_outra = 1;
} else {
    $contador_outra = 0;
}
// Fazendo a contagem dos itens preenchidos para saber se serao uma ou duas colunas
$soma = $contador_facebook + $contador_twitter + $contador_youtube +
        $contador_instagram + $contador_pinterest + $contador_flickr +
        $contador_foursquare + $contador_gplus + $contador_outra;
if ($soma <= 3) {
    echo "<div id='social_mod1'>";
} else {
    echo "<div id='social_mod2'>";
}

// Inserindo os logos
if ($contador_facebook == 1) {
    ?> 
    <a href="<?php echo $link_facebook; ?>" target="_blank">
        <img src="<?php bloginfo('template_directory'); ?>/images/social_facebook.png" alt="" />
    </a>
    <?php
} else {
    echo '<p>noooooooooooooo</p>';
}
if ($contador_twitter == 1) {
    ?> 
    <a href="<?php echo $link_twitter; ?>" target="_blank">
        <img src="<?php bloginfo('template_directory'); ?>/images/social_twitter.png" alt="" />
    </a>
    <?php
} else {
    
}
if ($contador_youtube == 1) {
    ?> 
    <a href="<?php echo $link_youtube; ?>" target="_blank">
        <img src="<?php bloginfo('template_directory'); ?>/images/social_youtube.png" alt="" />
    </a>
    <?php
} else {
    
}
if ($contador_instagram == 1) {
    ?> 
    <a href="<?php echo $link_instagram; ?>" target="_blank">
        <img src="<?php bloginfo('template_directory'); ?>/images/social_instagram.png" alt="" />
    </a>
    <?php
} else {
    
}
if ($contador_pinterest == 1) {
    ?> 
    <a href="<?php echo $link_pinterest; ?>" target="_blank">
        <img src="<?php bloginfo('template_directory'); ?>/images/social_pinterest.png" alt="" />
    </a>
    <?php
} else {
    
}
if ($contador_flickr == 1) {
    ?> 
    <a href="<?php echo $link_flickr; ?>" target="_blank">
        <img src="<?php bloginfo('template_directory'); ?>/images/social_flickr.png" alt="" />
    </a>
    <?php
} else {
    
}
if ($contador_foursquare == 1) {
    ?> 
    <a href="<?php echo $link_foursquare; ?>" target="_blank">
        <img src="<?php bloginfo('template_directory'); ?>/images/social_foursquare.png" alt="" />
    </a>
    <?php
} else {
    
}
if ($contador_gplus == 1) {
    ?> 
    <a href="<?php echo $link_gplus; ?>" target="_blank">
        <img src="<?php bloginfo('template_directory'); ?>/images/social_gplus.png" alt="" />
    </a>
    <?php
} else {
    
}
if ($contador_outra == 1) {
    ?> 
    <a href="<?php echo $link_outra; ?>" target="_blank">
        <img src="<?php bloginfo('template_directory'); ?>/images/social_outra.png" alt="" />
    </a>
    <?php
} else {
    
}
echo "</div>";
?>