<?php
if (is_singular(array('espacos', 'eventos', 'galeria')) || (is_page()) || (is_search())) {
    
} else {
    ?>
    <h1 class="contentInterna_miolo_theContent_date">S&atilde;o Paulo, 
        <?php the_date('j \d\e F \d\e Y'); ?> - Por:  <?php the_author() ?>
    </h1>
<? }
?>