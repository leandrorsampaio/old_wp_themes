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
            <br/>
            <div id="roteirosDados">
                <div id="roteirosDados_bilhetes">
                    <div id="roteirosDados_bilhetesNum">
                        <p><?php the_field('bilhetes_unitarios'); ?> </p>
                    </div>
                    <div id="roteirosDados_bilhetesText">
                        <?php
                        //testa se há mais de um bilhete unitário, para acrescentar o "s"
                        $bilhetes = get_field('bilhetes_unitarios');
                        if ($bilhetes == 1) {
                            ?>
                            <p>bilhete unit&aacute;rio</p>
                            <?php
                        } else {
                            ?>
                            <p>bilhetes unit&aacute;rios</p>
                        <?php } ?>
                    </div>
                </div>
                <div id="roteirosDados_calendario">
                    <div id="roteirosDados_dia">
                        <p><?php the_field('dia'); ?></p>
                    </div>
                    <div id="roteirosDados_hora">
                        <p><?php the_field('horario'); ?>h</p>
                    </div>
                </div>
                <?php
                //testa se há mais de um dia preenchido
                $dia2 = get_field('dia2');
                if ($dia2) {
                    ?>
                    <div id="roteirosDados_calendario">
                        <div id="roteirosDados_dia">
                            <p><?php the_field('dia2'); ?></p>
                        </div>
                        <div id="roteirosDados_hora">
                            <p><?php the_field('horario2'); ?>h</p>
                        </div>
                    </div>
                    <?
                } else {
                    
                }
                ?>
            </div>
            <div id="content_box_theContent">
                <?php the_content(); ?> 
            </div>
            <br/>
            <div id="content_box_itinerario">
                <?php the_field('itinerario'); ?>
            </div>
            <br/><br/>
            <p style="font-family: MuseoSans300Italic">Texto: S&atilde;o Paulo Turismo.</p>
        <?php endwhile; ?> 
    </div>    
</div>
<div id="aside">
    <?php include('sidebar-roteiros.php') ?>
</div>
<?php get_footer(); ?>