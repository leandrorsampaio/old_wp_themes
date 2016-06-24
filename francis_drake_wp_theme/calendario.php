<?php
// pega a data de hoje
$today = date("m/j/Y");
/*
  $day01 = '06/01/2014';
  $day02 = '06/02/2014';
  $day03 = '06/03/2014';
  $day04 = '06/04/2014';
  $day05 = '06/05/2014';
  $day06 = '06/06/2014';
  $day07 = '06/07/2014';
  $day08 = '06/08/2014';
  $day09 = '06/09/2014';
  $day10 = '06/10/2014';
  $day11 = '06/11/2014';
  $day12 = '06/12/2014';
  $day13 = '06/13/2014';
  $day14 = '06/14/2014';
  $day15 = '06/15/2014';
  $day16 = '06/16/2014';
  $day17 = '06/17/2014';
  $day18 = '06/18/2014';
  $day19 = '06/19/2014';
  $day20 = '06/20/2014';
  $day21 = '06/21/2014';
  $day22 = '06/22/2014';
  $day23 = '06/23/2014';
  $day24 = '06/24/2014';
  $day25 = '06/25/2014';
  $day26 = '06/26/2014';
  $day27 = '06/27/2014';
  $day28 = '06/28/2014';
  $day29 = '06/29/2014';
  $day30 = '06/30/2014';
  $day31 = '07/01/2014';
  $day32 = '07/02/2014';
  $day33 = '07/03/2014';
  $day34 = '07/04/2014';
  $day35 = '07/05/2014';
  $day36 = '07/06/2014';
  $day37 = '07/07/2014';
  $day38 = '07/08/2014';
  $day39 = '07/09/2014';
  $day40 = '07/10/2014';
  $day41 = '07/11/2014';
  $day42 = '07/12/2014';
  $day43 = '07/13/2014';
  $day44 = '07/14/2014';
  $day45 = '07/15/2014';
  $day46 = '07/16/2014';
  $day47 = '07/17/2014';
  $day48 = '07/18/2014';
  $day49 = '07/19/2014';
  $day50 = '07/20/2014';
  $day51 = '07/21/2014';
  $day52 = '07/22/2014';
  $day53 = '07/23/2014';
  $day54 = '07/24/2014';
  $day55 = '07/25/2014';
  $day56 = '07/26/2014';
  $day57 = '07/27/2014';
  $day58 = '07/28/2014';
  $day59 = '07/29/2014';
  $day60 = '07/30/2014';
  $day61 = '07/31/2014';
 */
?>
<script type= "text/javascript">
    $(document).ready(function(){
        $('div.jflatTimeline').jflatTimeline({
            scroll : '2',    //max dates scrolling per arrow click
            width : '100%', //width; It can also be done with css. - .jflatTimeline{width : x%;}
            scrollingTime : '300' // scrolling time
        });
    })
</script>
<div class = "jflatTimeline">
    <div class = "timeline-wrap">
        <?php
        $args = array(
            'orderby' => 'rand',
            'posts_per_page' => -1,
        );
        //--------  Query Mais Palavras
        global $calendario;
        $calendario = new WP_Query($args);
        while ($calendario->have_posts()) : $calendario->the_post();
            $arrayfield = implode(', ', get_field('calendario_dias'));
            $arr_datas = explode(",", $arrayfield);
            foreach ($arr_datas as $chave => $valor) {
                // Mostra o dia atual
                if ($today == $valor) {
                    $stat = 'selected';
                } else {
                    $stat = ' ';
                }
                ?>
                <div class="event <?php echo $stat; ?>" data-date="<?php echo $valor; ?>">
                    <div class="layout2"> <!-- BEGIN 'LAYOUT2' -->
                        <div class="left">
                            <p class="categoria"><?php the_category(' '); ?></p>
                            <h3 class="title"><?php the_title(); ?></h3>
                            <div class="resumo">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        <div class="right">
                            <?php
                            if (get_field('calendario_imagem')) {
                                $valorImagem = get_field('calendario_imagem');
                                if (get_field('calendario_credito')) {
                                    $valorCredito = get_field('calendario_credito');
                                } else {
                                    $valorCredito = 'Divulga&ccedil;&atilde;o';
                                }
                                echo '<img src="' . $valorImagem . '" alt = "Imagem do Evento" />';
                                echo '<p class="creditos">Cr&eacute;dito: ' . $valorCredito . '</p>';
                            } else {
                                echo '<img src="' . get_bloginfo('template_directory') . '/images/bgImagensPadrao.gif" alt = "Imagem do Evento" />';
                            }
                            ?>
                        </div>
                        <div class="bottom">
                            <h4 class="servicos">Servi&ccedil;o:</h4>
                            <div class="bottom_servEsq">
                                <?php the_field('calendario_servicos_esquerda'); ?>
                            </div>
                            <div class="bottom_servDir">
                                <?php the_field('calendario_servicos_direita'); ?>
                                <a class="mapaLink" href="<?php the_field('calendario_mapa'); ?>">
                                    <img src="<?php bloginfo('template_directory'); ?>/images/maps.png" serc="Link do mapa" />
                                    <span>Veja o mapa</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div><!-- END EVENT -->
                <?php
            }
        endwhile;
        wp_reset_query();
        ?>
    </div>	
</div>