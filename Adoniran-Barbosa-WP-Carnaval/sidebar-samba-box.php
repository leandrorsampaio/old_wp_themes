<div id="samba" style="border-color: <?php echo $cor1; ?>;"> 
    <div id="samba_boxTitle" style="background-color: <?php echo $cor1; ?>;">
        <h3 id="samba_boxTitle_text" style="color: <?php echo $cor2; ?>;"><?php echo $titulobox; ?></h3>
    </div>
    <div id="samba_bandeiraThumb">
        <?php
        // Puxa a imagem da Taxonomia
        $terms = wp_get_object_terms($post->ID, 'escolasrelacionadas');
        if (!empty($terms)) :
            $escolarelacionada = array();
            foreach ($terms as $term) {
                $escolarelacionada = $term->slug;
            }
        endif;
        $pastatema = get_bloginfo('stylesheet_directory');
        echo '<img id="samba_bandeiraThumb_img" src="' . $pastatema . '/images/bandeiras/' . $escolarelacionada . '.jpg" alt="Bandeira ' . $escolarelacionada . '" />';
        ?>
    </div>
    <div id="samba_autor">
        <h3 id="samba_autor_escolaNome"><?php echo $titulo; ?></h3>    
        <h4 id="samba_autor_autorNome" title="<?php echo $autordosamba; ?>">Autores: <?php echo $autordosamba; ?></h4>
    </div>
    <div id="samba_titulo">
        <h2 title="<?php echo $titulosamba; ?>"><?php echo $titulosamba; ?></h2>
    </div>
    <div id="samba_letra">
        <?php echo $letrasamba; ?>
    </div>
    <div id="samba_audio">
        <?php
        if ($url_audio) {
            ?>
            <audio controls preload="none">
                <source src="<?php echo $url_audio ?>" type="audio/mpeg">
                <!-- <source src="horse.ogg" type="audio/ogg"> -->
                <embed src="<?php echo $url_audio ?>">
            </audio>
            <?php
        } else
            echo '<p>&Aacute;udio n&atilde;o dispon&iacute;vel</p>';
        ?>
    </div>
</div>