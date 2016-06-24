<?php
if (is_single()) {
    get_sidebar('relacionadas');
} elseif (is_page('prefacio')) {
    
} else {
    get_sidebar('destaque');
    get_sidebar('gastronomia');
}
get_sidebar('padrao');
?>
