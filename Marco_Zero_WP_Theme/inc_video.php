<?php
// Verifica se existe conteudo nos campos
if ((strlen($video_pt)) > 3) {
    $video_pt_existe = 1;
} else {
    $video_pt_existe = 0;
}
if ((strlen($video_en)) > 3) {
    $video_en_existe = 1;
} else {
    $video_en_existe = 0;
}
if ((strlen($video_es)) > 3) {
    $video_es_existe = 1;
} else {
    $video_es_existe = 0;
}
// Verifica se existe algum video. Se existir mostra botao. 
$existe_video = $video_pt_existe + $video_en_existe + $video_en_existe;
if ($existe_video != 0) {
    ?>
    <li><span class="drop"><img src="<?php bloginfo('template_url') ?>/images/video.png">v&iacute;deo</span>
        <div class="megamenu_fullwidth">
            <div class="fullwidth_content">
                <div id="AdivFora">
                    <?php
                    if ($video_pt_existe == 1) {
                        ?>
                        <div id="AdivDentro1">
                            <?php echo $video_pt; ?>
                        </div>
                        <?php
                    } else {
                        
                    }
                    if ($video_en_existe == 1) {
                        ?>
                        <div id="AdivDentro2">
                            <?php echo $video_en; ?>
                        </div>
                        <?php
                    } else {
                        
                    }
                    if ($video_es_existe == 1) {
                        ?>
                        <div id="AdivDentro3">
                            <?php echo $video_es; ?>
                        </div>
                        <?php
                    } else {
                        
                    }
                    ?>
                </div>
                <script>
                    var aba = new JTabControl("AdivFora",500,300);
        	
                    aba.addTab("AdivDentro1", "POR");
                    aba.addTab("AdivDentro2", "ENG");
                    aba.addTab("AdivDentro3", "ESP");

                </script>

            </div>
        </div>
    </li>
    <?php
} else {
    
}
?>
