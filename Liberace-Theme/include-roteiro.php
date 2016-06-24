<!----------------------------- ROTEIRO DE UMA SEMANA - COM AJAX (MAIOR QUE 540PX) --->
<div id="interna_content_roteiro">
    <div id="divFora">
        <?php
        //------ Define as classes CSS para cada dia da semana
        $contador = 1;
        $args = array(
            'post_type' => $tipo_post,
            'posts_per_page' => $numberPosts,
            'idioma' => $idioma,
        );
        $roteiro = new WP_Query($args);
        if ($roteiro->have_posts()) {
            while ($roteiro->have_posts()) : $roteiro->the_post();
                ?>
                <div id="divDentro<?php echo $contador; ?>">
                    <div class="interna_content_section_direita cor<?php echo $contador; ?>">
                        <h5 class="dia<?php echo $contador; ?> roteirotitulo"><?php the_title(); ?></h5>
                        <?php the_content(); ?>
                        <div class="roteiroServicosColuna">
                            <?php the_field('servicos_1'); ?>
                        </div>
                        <div class="roteiroServicosColuna">
                            <?php the_field('servicos_2'); ?>
                        </div>
                        <div class="roteiroServicosColuna">
                            <?php the_field('servicos_3'); ?>
                        </div>
                    </div>
                </div>
                <?php
                $contador++;
            endwhile;
        }
        wp_reset_query();
        if ($idioma == 'pt') {
            ?>
            <script>
                var aba = new JTabControl("divFora", 750, 300);
                aba.addTab("divDentro1", "<span class='dia1'>Segunda</span>");
                aba.addTab("divDentro2", "<span class='dia2'>Ter&ccedil;a</span>");
                aba.addTab("divDentro3", "<span class='dia3'>Quarta</span>");
                aba.addTab("divDentro4", "<span class='dia4'>Quinta</span>");
                aba.addTab("divDentro5", "<span class='dia5'>Sexta</span>");
                aba.addTab("divDentro6", "<span class='dia6'>S&aacute;bado</span>");
                aba.addTab("divDentro7", "<span class='dia7'>Domingo</span>");
                aba.addTab("divDentro8", "<span class='servico'>SERVI&Ccedil;OS E ENDERE&Ccedil;OS</span>");
                aba.addTab("divDentro9", "<span class='servico2'>DOWNLOAD</span>");
            </script>
            <?php
        } else {
            ?>
            <script>
                var aba = new JTabControl("divFora", 750, 300);
                aba.addTab("divDentro1", "<span class='dia1'>Monday</span>");
                aba.addTab("divDentro2", "<span class='dia2'>Tuesday</span>");
                aba.addTab("divDentro3", "<span class='dia3'>Wednesday</span>");
                aba.addTab("divDentro4", "<span class='dia4'>Thursday</span>");
                aba.addTab("divDentro5", "<span class='dia5'>Friday</span>");
                aba.addTab("divDentro6", "<span class='dia6'>Saturday</span>");
                aba.addTab("divDentro7", "<span class='dia7'>Sunday</span>");
                aba.addTab("divDentro8", "<span class='servico'>ADDRESSES</span>");
                aba.addTab("divDentro9", "<span class='servico2'><br>DOWNLOAD</span>");
            </script>
        <?php }
        ?>
    </div>
</div>
<!----------------------------- ROTEIRO MOBILE - SEM AJAX (MENOR QUE 540PX) --->
<div id="interna_content_roteiroMob">
    <div class="interna_content_section_direita">
        <div id="roteiroMob_anchorLinks">
            <?php
            if ($idioma == 'pt') {
                ?>
                <div class="roteiroMob_anchorLinks_item segunda"><a class="smoothScroll" id="topo" href="#roteirodia1">2&ordf;</a></div>
                <div class="roteiroMob_anchorLinks_item terca"><a class="smoothScroll" href="#roteirodia2">3&ordf;</a></div>
                <div class="roteiroMob_anchorLinks_item quarta"> <a class="smoothScroll" href="#roteirodia3">4&ordf;</a></div>
                <div class="roteiroMob_anchorLinks_item quinta"><a class="smoothScroll" href="#roteirodia4">5&ordf;</a></div>
                <div class="roteiroMob_anchorLinks_item sexta"> <a class="smoothScroll" href="#roteirodia5">6&ordf;</a></div>
                <div class="roteiroMob_anchorLinks_item sabado"> <a class="smoothScroll" href="#roteirodia6">S&aacute;b</a></div>
                <div class="roteiroMob_anchorLinks_item domingo"><a class="smoothScroll" href="#roteirodia7">Dom</a></div>
                <?php
            } else {
                ?>
                <div class="roteiroMob_anchorLinks_item segunda"><a class="smoothScroll" id="topo" href="#roteirodia1">Mon</a></div>
                <div class="roteiroMob_anchorLinks_item terca"><a class="smoothScroll" href="#roteirodia2">Tue</a></div>
                <div class="roteiroMob_anchorLinks_item quarta"> <a class="smoothScroll" href="#roteirodia3">Wed</a></div>
                <div class="roteiroMob_anchorLinks_item quinta"><a class="smoothScroll" href="#roteirodia4">Thu</a></div>
                <div class="roteiroMob_anchorLinks_item sexta"> <a class="smoothScroll" href="#roteirodia5">Fri</a></div>
                <div class="roteiroMob_anchorLinks_item sabado"> <a class="smoothScroll" href="#roteirodia6">Sat</a></div>
                <div class="roteiroMob_anchorLinks_item domingo"><a class="smoothScroll" href="#roteirodia7">Sun</a></div>
                <?php
            }
            ?>

        </div>
        <?php
        $contador = 1;
        $args = array(
            'post_type' => $tipo_post,
            'posts_per_page' => $numberPosts,
            'idioma' => $idioma,
            'post__not_in' => array(122, 123) //exceto 'Servicos e Endereços' e 'Downloads'
        );
        $eventos = new WP_Query($args);
        if ($eventos->have_posts()) {
            while ($eventos->have_posts()) : $eventos->the_post();
                ?>

                <a id="roteirodia<?php echo $contador; ?>"><h1 class="dia<?php echo $contador; ?> roteirotitulo"><?php the_title(); ?></h1></a>
                <?php the_content(); ?>
                <a class="smoothScroll" href="#topo"><span class="back_top"></span></a>

                <?php
                $contador++;
            endwhile;
        }
        wp_reset_query();
        ?>

        <div class="roteiroMob_link servicos">
            <a href="<?php echo get_permalink(122); ?>">Servi&ccedil;os e Endere&ccedil;os</a>
        </div>
        <div class="roteiroMob_link downloads">
            <a href="<?php echo get_permalink(123); ?>">Downloads</a>
        </div>

    </div>
</div>
