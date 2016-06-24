<?php

if (wp_is_mobile() && is_single(831)) {
    // Exbile Layout home mobile
    include 'index_mobile.php';
} else {
    // Inclue internas
    include 'internas.php';
}
?>