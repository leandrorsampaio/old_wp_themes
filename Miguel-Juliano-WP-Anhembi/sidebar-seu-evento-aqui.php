<aside>
    <?php
    //chama os widgets para essa sidebar cadastrados no admin do WP 
    !dynamic_sidebar('seu-evento-aqui');
    ?>
</aside>
<div class="contentEsquerda_servicos_box">
    <h1 class="sidebar_seuEventoAqui_text">
        Criamos para voc&ecirc; uma sele&ccedil;&atilde;o das melhores op&ccedil;&otilde;es de espa&ccedil;o para seu evento:
    </h1>
    <h2 class="sidebar_seuEventoAqui_title">
        <a class="sidebar_seuEventoAqui_title_link" href="<?php echo get_permalink(2215); ?>">
            <?php echo get_the_title(2215); ?>
        </a> 
    </h2>
    <h2 class="sidebar_seuEventoAqui_title">
        <a class="sidebar_seuEventoAqui_title_link" href="<?php echo get_permalink(2303); ?>">
            <?php echo get_the_title(2303); ?>
        </a> 
    </h2>
    <h2 class="sidebar_seuEventoAqui_title">
        <a class="sidebar_seuEventoAqui_title_link" href="<?php echo get_permalink(2302); ?>">
            <?php echo get_the_title(2302); ?>
        </a> 
    </h2>
</div>