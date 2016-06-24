<?php get_header(); ?>
<div id="content">
    <div id="content_box">
        <?php while (have_posts()): the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <div class="head_social_share">
                <a name="fb_share" type="button_count" share_url="http://spturis.com/turismetro/conheca.php"
                   href="http://www.facebook.com/sharer.php">Compartilhar</a>
                <script src="http://static.ak.fbcdn.net/connect.php/js/FB.Share" type="text/javascript"></script>
            </div>
            <?php
            //#################################### IF IS HOME ROTEIROS
            if (is_page('roteiros-home')) {
                ?>
                <div id="roteiros_home_grande">
                    <?php
                    //todos os roteiros comuns
                    $roteiros = new WP_Query('post_type=roteiros');
                    if ($roteiros->have_posts()) {
                        while ($roteiros->have_posts()) : $roteiros->the_post();
                            ?>     
                            <a href="<?php the_permalink(); ?>"> 
                                <div class="roteiros_thumb">      
                        <div class="roteiros_thumbBG"></div>                                                                                                                                                                                          <!--                        <a href="<?php the_permalink(); ?>" style="background-image: url(<?php echo $url; ?>); width: 190px; height: 140px; display: table"><img src="<? //php get_field('imgOff')                                                                                                                             ?>"></a>-->
                                    <?php the_post_thumbnail(); ?>
                                    <div class="roteiros_thumbLabel">
                                        <div class="roteiros_thumbLabel_title"> 
                                            <?php the_title(); ?>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <?php
                        endwhile;
                    }
                    wp_reset_query();
                    ?>
                    <?php
                    //roteiro especial
                    $roteirosEsp = new WP_Query('post_type=roteirosesp&posts_per_page=1');
                    if ($roteirosEsp->have_posts()) {
                        while ($roteirosEsp->have_posts()) : $roteirosEsp->the_post();
                            ?>                             
                            <style>
                                .roteiros_thumbBG_esp {
                                    width: 190px;
                                    height: 140px;
                                    float: left;
                                    position: absolute;
                                    text-decoration: none;
                                    display: block;
                                }
                                .roteiros_thumbBG_esp:hover {
                                    background-image: url(<?php the_field('imgOn'); ?>);
                                    float: left;
                                    width: 190px;
                                    height: 140px;
                                }
                            </style>                                                                                                                                                                              <!--                        <a href="<?php the_permalink(); ?>" style="background-image: url(<?php echo $url; ?>); width: 190px; height: 140px; display: table"><img src="<? //php get_field('imgOff')                                        ?>"></a>-->
                            <a href="<?php the_permalink(); ?>"> 
                                <div class="roteiros_thumb">      
                    <div class="roteiros_thumbBG_esp"></div>                                                                                                                                                                                          <!--                        <a href="<?php the_permalink(); ?>" style="background-image: url(<?php echo $url; ?>); width: 190px; height: 140px; display: table"><img src="<? //php get_field('imgOff')                                                                                                                             ?>"></a>-->
                                    <img src="<?php the_field('imgOff') ?>">
                                </div>
                            </a>                      
                            <?php
                        endwhile;
                    }
                    wp_reset_query();
                    ?>
                </div>
                <!-- Versão Responsiva Home dos Roteiros -->
                <div id="content_index600">
                    <div id="content_index600_roteiros">
                        <?php
                        //todos os roteiros comuns
                        $roteiros = new WP_Query('post_type=roteiros');
                        if ($roteiros->have_posts()) {
                            while ($roteiros->have_posts()) : $roteiros->the_post();
                                ?>     
                                <a href="<?php the_permalink(); ?>"> 
                                    <div class="roteiros_thumb">                                                                                                                                                                                        <!--                        <a href="<?php the_permalink(); ?>" style="background-image: url(<?php echo $url; ?>); width: 190px; height: 140px; display: table"><img src="<? //php get_field('imgOff')                                                                                                                          ?>"></a>-->
                                        <?php the_post_thumbnail(); ?>
                                        <div class="roteiros_thumbLabel_HomeRoteiros">
                                            <div class="roteiros_thumbLabel_title"> 
                                                <?php the_title(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <?php
                            endwhile;
                        }
                        wp_reset_query();
                        ?>
                        <?php
                        //roteiro especial
                        $roteirosEsp = new WP_Query('post_type=roteirosesp&posts_per_page=1');
                        if ($roteirosEsp->have_posts()) {
                            while ($roteirosEsp->have_posts()) : $roteirosEsp->the_post();
                                ?>                                                                                                                                                                                                          <!--                        <a href="<?php the_permalink(); ?>" style="background-image: url(<?php echo $url; ?>); width: 190px; height: 140px; display: table"><img src="<? //php get_field('imgOff')                          ?>"></a>-->
                                <a href="<?php the_permalink(); ?>"> 
                                    <div class="roteiros_thumb">                                                                                                                                                                                           <!--                        <a href="<?php the_permalink(); ?>" style="background-image: url(<?php echo $url; ?>); width: 190px; height: 140px; display: table"><img src="<? //php get_field('imgOff')                                                                                                                          ?>"></a>-->
                                        <img src="<?php the_field('imgOff') ?>">
                                    </div>
                                </a>                      
                                <?php
                            endwhile;
                        }
                        wp_reset_query();
                        ?>
                    </div>
                </div>
                <?php
                //#################################### IF FALE CONOSCO
            } elseif (is_page('fale-conosco')) {
                ?> 
                <div id="faleConosco_form">
                    <iframe src="http://spturis.com.br/sistemas/mailer_turismetro/form.php" frameBorder=0 width=510 height=347 scrolling='no' allowtransparency='true'></iframe>
                </div>
                <p><?php the_field('talk_obs'); ?></p>
                <?php
                //#################################### IF DIAS E HORARIOS
            } elseif (is_page('dias-e-horarios')) {
                the_content();
                ?>
                <div id="horarios_tabela">
                    <div class="horarios_tabela_title">
                        <p> Roteiros e Hor&aacute;rios</p>
                    </div>
                    <div class="horarios_tabela_coluna">
                        <!--- Coluna: Roteiros ---->
                        <div class="horarios_tabela_linha1">
                            <p>Roteiro</p>
                        </div>
                        <div class="horarios_tabela_linhaPar">
                            <p><?php the_field('nome_1'); ?></p>
                        </div>
                        <div class="horarios_tabela_linhaImpar">
                            <p><?php the_field('nome_2'); ?></p>
                        </div>
                        <div class="horarios_tabela_linhaPar">
                            <p><?php the_field('nome_3'); ?></p>
                        </div>
                        <div class="horarios_tabela_linhaImpar">
                            <p><?php the_field('nome_4'); ?></p>
                        </div>
                        <div class="horarios_tabela_linhaPar">
                            <p><?php the_field('nome_5'); ?></p>
                        </div>
                        <?php
                        //vai testar se os campos de Roteiros Especiais estão preenchidos.               
                        $roteiro_especial1 = get_field('nome_esp1');
                        $roteiro_especial2 = get_field('nome_esp2');
                        $roteiro_especial3 = get_field('nome_esp3');

                        //Se sim, vai adicioná-los à tabela.
                        if ($roteiro_especial1) {
                            ?>
                            <div class="horarios_tabela_linhaImpar">
                                <p><?php the_field('nome_esp1'); ?></p>
                            </div>
                            <?php
                        } if ($roteiro_especial2) {
                            ?>
                            <div class="horarios_tabela_linhaPar">
                                <p><?php the_field('nome_esp2'); ?></p>
                            </div>
                            <?php
                        } if ($roteiro_especial3) {
                            ?>
                            <div class = "horarios_tabela_linhaImpar">
                                <p><?php the_field('nome_esp3'); ?></p>
                            </div>
                            <?
                        } else {
                            
                        }
                        ?>
                    </div>
                    <div class="horarios_tabela_coluna">
                        <!--- Coluna: Dias ---->
                        <div class="horarios_tabela_linha1">
                            <p>Dia</p>
                        </div>
                        <div class="horarios_tabela_linhaPar">
                            <p>  <?php the_field('dia_1'); ?></p>
                        </div>
                        <div class="horarios_tabela_linhaImpar">
                            <p>  <?php the_field('dia_2'); ?></p>
                        </div>
                        <div class="horarios_tabela_linhaPar">
                            <p>  <?php the_field('dia_3'); ?></p>
                        </div>
                        <div class="horarios_tabela_linhaImpar">
                            <p>  <?php the_field('dia_4'); ?></p>
                        </div>
                        <div class="horarios_tabela_linhaPar">
                            <p>  <?php the_field('dia_5'); ?></p>
                        </div>
                        <?php
                        if ($roteiro_especial1) {
                            ?>
                            <div class="horarios_tabela_linhaImpar">
                                <p><?php the_field('dia_esp1'); ?></p>
                            </div>
                            <?php
                        } if ($roteiro_especial2) {
                            ?>
                            <div class="horarios_tabela_linhaPar">
                                <p><?php the_field('dia_esp2'); ?></p>
                            </div>
                            <?php
                        } if ($roteiro_especial3) {
                            ?>
                            <div class = "horarios_tabela_linhaImpar">
                                <p><?php the_field('dia_esp3'); ?></p>
                            </div>
                            <?
                        } else {
                            
                        }
                        ?>
                    </div>
                    <div class="horarios_tabela_coluna">
                        <!--- Coluna: Horários ---->
                        <div class="horarios_tabela_linha1">
                            <p> Hor&aacute;rio</p>
                        </div>
                        <div class="horarios_tabela_linhaPar">
                            <p> <?php the_field('horario_1'); ?></p>
                        </div>
                        <div class="horarios_tabela_linhaImpar">
                            <p> <?php the_field('horario_2'); ?></p>
                        </div>
                        <div class="horarios_tabela_linhaPar">
                            <p> <?php the_field('horario_3'); ?></p>
                        </div>
                        <div class="horarios_tabela_linhaImpar">
                            <p> <?php the_field('horario_4'); ?></p>
                        </div>
                        <div class="horarios_tabela_linhaPar">
                            <p> <?php the_field('horario_5'); ?></p>
                        </div>
                        <?php
                        if ($roteiro_especial1) {
                            ?>
                            <div class="horarios_tabela_linhaImpar">
                                <p><?php the_field('horario_esp1'); ?></p>
                            </div>
                            <?php
                        } if ($roteiro_especial2) {
                            ?>
                            <div class="horarios_tabela_linhaPar">
                                <p><?php the_field('horario_esp2'); ?></p>
                            </div>
                            <?php
                        } if ($roteiro_especial3) {
                            ?>
                            <div class = "horarios_tabela_linhaImpar">
                                <p><?php the_field('horario_esp3'); ?></p>
                            </div>
                            <?
                        } else {
                            
                        }
                        ?>
                    </div>
                </div>
                <i><?php the_field('obs') ?></i>
                <?php
            } else {
                the_content();
            }
            ?>
        <?php endwhile; ?>  
    </div>
</div>
<?php
//#################################### IF HOME DOS ROTEIROS
if (is_page('roteiros-home')) {
    ?>
    <div id="aside">
        <?php include('sidebar-roteiros.php') ?>
    </div>
    <?php
}
?>
<?php get_footer(); ?>