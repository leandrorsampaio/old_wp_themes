<div id="nav_label" class="wrap">
    <ul id="nav_lista">
        <li class="nav_lista_item"><a href="<?php echo get_permalink(17); ?>"><?php echo $title_categorias; ?></a></li>
        <li class="nav_lista_item"><a href="<?php echo get_permalink(19); ?>"><?php echo $title_mapa; ?></a></li>
    </ul>
    <?php
    if (!is_user_logged_in()) {
        echo '<p>' . $title_aviso . '</p>';
    }
    ?>
</div>