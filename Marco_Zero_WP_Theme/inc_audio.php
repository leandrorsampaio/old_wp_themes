<?php
// Verifica se existe conteudo nos campos
if ((strlen($audio_pt)) > 3) {
    $audio_pt_existe = 1;
} else {
    $audio_pt_existe = 0;
}
if ((strlen($audio_en)) > 3) {
    $audio_en_existe = 1;
} else {
    $audio_en_existe = 0;
}
if ((strlen($audio_es)) > 3) {
    $audio_es_existe = 1;
} else {
    $audio_es_existe = 0;
}
// Verifica se existe algum aldio. Se existir mostra botao. 
$existe_audio = $audio_pt_existe + $audio_en_existe + $audio_en_existe;
if ($existe_audio != 0) {
    ?>   
    <li><span class="drop"><img src="<?php bloginfo('template_url') ?>/images/audio.png">&aacute;udio</span>
        <div class="megamenu_fullwidth">
            <div class="fullwidth_content">
                <div id="divFora">
                    <?php
                    if ($audio_pt_existe == 1) {
                        ?>
                        <div id="divDentro1">
                            <div class="audioNome"><?php echo $titulo_pt; ?></div>
                            <audio controls>
                                <source src="<?php echo $audio_pt ?>" type="audio/mpeg">
                                <embed src="<?php echo $audio_pt ?>">
                            </audio>
                        </div>
                        <?php
                    } else {
                        
                    }
                    if ($audio_en_existe == 1) {
                        ?>
                        <div id="divDentro2">
                            <div class="audioNome"><?php echo $titulo_en; ?></div>
                            <audio controls>
                                <source src="<?php echo $audio_en ?>" type="audio/mpeg">
                                <embed src="<?php echo $audio_en ?>">
                            </audio>
                        </div>
                        <?php
                    } else {
                        
                    }
                    if ($audio_es_existe == 1) {
                        ?>
                        <div id="divDentro3">
                            <div class="audioNome"><?php echo $titulo_es; ?></div>
                            <audio controls>
                                <source src="<?php echo $audio_es ?>" type="audio/mpeg">
                                <embed src="<?php echo $audio_es ?>">
                            </audio>
                        </div>
                        <?php
                    } else {
                        
                    }
                    ?>
                </div>
                <script>
                    var aba = new JTabControl("divFora",500,300);
                    aba.addTab("divDentro1", "POR");
                    aba.addTab("divDentro2", "ENG");
                    aba.addTab("divDentro3", "ESP");
                </script>

            </div>
        </div>
    </li>
    <?php
} else {
    
}
?>
