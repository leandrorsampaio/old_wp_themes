<div id="contribuaBox">
    <h3>Contribua</h3>
    <div id="contribuaBox_balaobico">
        <img src="<?php bloginfo('template_url'); ?>/images/balaoBico-contribua.png" alt="Elemento decorativo" />
    </div>
    <div id="contribuaBox_wpComments">
        <h5>Se voc&ecirc; conhece alguma outra palavra t&iacute;pica, mande sua sugest&atilde;o pra gente.</h5>    
        <?php
        // MÓDULO CONTRIBUA
        $withcomments = "1";
        comments_template(); // Get wp-comments.php template 
        ?>
    </div>
</div>
<div id="contribuaBox_responsivel">
    <h3>Contribua</h3>
    <div id="contribuaBox_responsivel_balaobico1">
        <img src="<?php bloginfo('template_url'); ?>/images/balaoBico-menu.png" alt="Elemento decorativo" />
    </div>
    <div id="contribuaBox_responsivel_balaobico2">
        <img src="<?php bloginfo('template_url'); ?>/images/balaoBico-menu-2.png" alt="Elemento decorativo" />
    </div>
    <a href="<?php echo get_permalink(108); ?>">
        <div id="contribuaBox_responsivel_texto">
            <h4>Envie suas sugest&otilde;es de palavras</h4>
        </div>
    </a>
</div>