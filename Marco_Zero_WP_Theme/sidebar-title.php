<div id="section_content_title_logo">
    <a href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_url') ?>/images/marca_sp.png"></a>
</div>
<div id="section_content_title_texto">
    <?php 
    if (is_front_page()) {
    	 echo '<h1>Categorias</h1>';
    } else {
    	?>
    		<h1><?php the_title(); ?></h1>	
    	<?php
    }
    ?>
</div>