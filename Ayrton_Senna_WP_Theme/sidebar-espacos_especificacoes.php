<div id="theContent_espacos_thumb">
    <?php the_post_thumbnail('espacos_info'); ?>
</div>
<div id="theContent_espacos_descricao">
    <?php
    the_field('descricao');
    ?>
</div>
<div id="theContent_espacos_espTecnicas">
    <h2>Especifica&ccedil;&otilde;es T&eacute;cnicas</h2><br/>                    
    <?php the_field('especificacoes_tecnicas'); ?>
</div>
<div id="theContent_espacos_boxes">
    <div id="theContent_espacos_boxes_imagens">
        <h2>Imagens</h2>                 
        <?php the_field('imagens'); ?>
    </div>
    <div id="theContent_espacos_boxes_plantas">
        <h2>Plantas</h2>                 
        <?php the_field('plantas'); ?>
    </div>
    <div id="theContent_espacos_boxes_precos">
        <h2>Tabela de pre&ccedil;os</h2>                 
        <?php the_field('tabela_de_precos'); ?>
    </div>
</div>