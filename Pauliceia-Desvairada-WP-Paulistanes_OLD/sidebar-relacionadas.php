<div id="internaContent_sidebar_palRelacionadas">
    <h2 id="internaContent_sidebar_title">
        Mais Palavras
    </h2>
    <div id="internaContent_sidebar_palRelacionadas_lista">
        <ul>
            <?
            //--------  Inicia a query e o loop
            $alfabeto = new WP_Query('posts_per_page=5&orderby=rand');
            while ($alfabeto->have_posts()) : $alfabeto->the_post();
                ?>
                <li>
                    <a href="<?php the_permalink(); ?>">
                        <div class="internaContent_sidebar_palRelacionadas_lista_imagem">
                            <?php
                            // Conta carecteres e exibe o Titulo
                            $contador = get_field('palavra_img');
                            if ((strlen($contador)) < 3) {
                                ?>
                                <img src="<?php bloginfo('template_url'); ?>/images/palavra-imagem-padrao.jpg" alt="Imagem indispon&iacute;vel" title="Imagem indispon&iacute;vel" />
                                <?php
                            } else {
                                ?>
                                <img src="<?php the_field('palavra_img'); ?>" alt="<?php the_field('palavra_credito'); ?>" title="<?php the_field('palavra_credito'); ?>" />
                                <?php
                            }
                            ?>
                        </div>
                        <div class="internaContent_sidebar_palRelacionadas_lista_texto">
                            <?php
                            // Conta carecteres e exibe o Titulo
                            $contador = get_the_title();
                            if ((strlen($contador)) < 13) {
                                $limitador = substr(get_the_title(), 0, 13);
                                echo $limitador;
                            } else {
                                $limitador = substr(get_the_title(), 0, 9);
                                echo $limitador . ' (...)';
                            }
                            ?>
                        </div>
                    </a>
                </li>
                <?php
            endwhile;
            wp_reset_query();
            ?>
        </ul>
    </div>
</div>