<?php
// Capturando os dados dos custon fields
$facebook = get_field('facebook');
$twitter = get_field('twitter');
$youtube = get_field('youtube');
$instagram = get_field('instagram');
$pinterest = get_field('pinterest');
$flickr = get_field('flickr');
$foursquare = get_field('foursquare');
$gplus = get_field('gplus');
$outra = get_field('outra');

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

// Verificando se o campo esta preenchido ou em branco
if ((strlen($contador_facebook)) > 3) {
    $contador_facebook = 1;
} else {
    $contador_facebook = 0;
}
if ((strlen($contador_twitter)) > 3) {
    $contador_twitter = 1;
} else {
    $contador_twitter = 0;
}
if ((strlen($contador_youtube)) > 3) {
    $contador_youtube = 1;
} else {
    $contador_youtube = 0;
}
if ((strlen($contador_instagram)) > 3) {
    $contador_instagram = 1;
} else {
    $contador_instagram = 0;
}
if ((strlen($contador_pinterest)) > 3) {
    $contador_pinterest = 1;
} else {
    $contador_pinterest = 0;
}
if ((strlen($contador_flickr)) > 3) {
    $contador_flickr = 1;
} else {
    $contador_flickr = 0;
}
if ((strlen($contador_foursquare)) > 3) {
    $contador_foursquare = 1;
} else {
    $contador_foursquare = 0;
}
if ((strlen($contador_gplus)) > 3) {
    $contador_gplus = 1;
} else {
    $contador_gplus = 0;
}
if ((strlen($contador_outra)) > 3) {
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
    <a href="<?php echo $facebook; ?>" target="_blank">
        <img src="<?php bloginfo('template_directory'); ?>/images/social_facebook.png" alt="" />
    </a>
    <?php
} else {
    
}
if ($contador_twitter == 1) {
    ?> 
    <a href="<?php echo $twitter; ?>" target="_blank">
        <img src="<?php bloginfo('template_directory'); ?>/images/social_twitter.png" alt="" />
    </a>
    <?php
} else {
    
}
if ($contador_youtube == 1) {
    ?> 
    <a href="<?php echo $youtube; ?>" target="_blank">
        <img src="<?php bloginfo('template_directory'); ?>/images/social_youtube.png" alt="" />
    </a>
    <?php
} else {
    
}
if ($contador_instagram == 1) {
    ?> 
    <a href="<?php echo $instagram; ?>" target="_blank">
        <img src="<?php bloginfo('template_directory'); ?>/images/social_instagram.png" alt="" />
    </a>
    <?php
} else {
    
}
if ($contador_pinterest == 1) {
    ?> 
    <a href="<?php echo $pinterest; ?>" target="_blank">
        <img src="<?php bloginfo('template_directory'); ?>/images/social_pinterest.png" alt="" />
    </a>
    <?php
} else {
    
}
if ($contador_flickr == 1) {
    ?> 
    <a href="<?php echo $flickr; ?>" target="_blank">
        <img src="<?php bloginfo('template_directory'); ?>/images/social_flickr.png" alt="" />
    </a>
    <?php
} else {
    
}
if ($contador_foursquare == 1) {
    ?> 
    <a href="<?php echo $foursquare; ?>" target="_blank">
        <img src="<?php bloginfo('template_directory'); ?>/images/social_foursquare.png" alt="" />
    </a>
    <?php
} else {
    
}
if ($contador_gplus == 1) {
    ?> 
    <a href="<?php echo $gplus; ?>" target="_blank">
        <img src="<?php bloginfo('template_directory'); ?>/images/social_gplus.png" alt="" />
    </a>
    <?php
} else {
    
}
if ($contador_outra == 1) {
    ?> 
    <a href="<?php echo $outra; ?>" target="_blank">
        <img src="<?php bloginfo('template_directory'); ?>/images/social_outra.png" alt="" />
    </a>
    <?php
} else {
    
}
?>
</div>