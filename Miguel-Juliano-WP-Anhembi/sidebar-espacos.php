<aside>
    <?php
    //chama os widgets para essa sidebar cadastrados no admin do WP 
    !dynamic_sidebar('espacos');
    ?>
</aside>
<script type="text/javascript" src="js/accordion_menu.js"></script>
<nav id="nav-main" role="navigation">
    <?php wp_nav_menu(array('theme_location' => 'espacos')); ?>
</nav>