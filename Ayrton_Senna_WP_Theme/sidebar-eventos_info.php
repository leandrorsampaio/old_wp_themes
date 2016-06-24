        <div id="theContent_eventos_info">
            <div id="theContent_eventos_info_thumb">
                <?php the_post_thumbnail('eventos_info'); ?>
            </div>
            <?php
            //verifica se o campo de link está preenchido.
            //se estiver, aparece a imagem com o link
            $link = get_post_meta($post->ID, 'link_ingressos', true);
            if ($link) {
                ?>
                <div id="theContent_eventos_info_ingressos">
                    <a href="<?php echo $link; ?>" target="blank">
                        <img src="<?php bloginfo('template_url') ?>/images/ingressos.png">
                    </a>
                </div>
                <?
            } else {
                
            }
            ?>
            <div class="theContent_eventos_info_servico">
                <p><h2>Servi&ccedil;o 1:</h2> <?php the_field('servico_1'); ?></p> 
                <p><h2>Servi&ccedil;o 2:</h2> <?php the_field('servico_2'); ?></p> 
                <p><h2>Servi&ccedil;o 3:</h2> <?php the_field('servico_3'); ?></p> 
            </div>
        </div>