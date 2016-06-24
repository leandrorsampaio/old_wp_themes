<?php
get_header();
//começa a query dos posts contagem regressiva
$countdown = new WP_Query('post_type=countdown&orderby=rand&posts_per_page=1');
if ($countdown->have_posts()) {
    while ($countdown->have_posts()) : $countdown->the_post();
//
//seta as variáveis
        $mes = get_field('mes');
        $dia = get_field('dia');
        $ano = get_field('ano');
        $inicio_contagem = get_field('inicio');
        $evento = get_the_title();
        $link = get_field('link');
//transforma os meses em inglês para manter a configuração original no strotime
        if ($mes == 1) {
            $mes_ingles = "January";
        } elseif ($mes == 2) {
            $mes_ingles = "February";
        } elseif ($mes == 3) {
            $mes_ingles = "March";
        } elseif ($mes == 4) {
            $mes_ingles = "April";
        } elseif ($mes == 5) {
            $mes_ingles = "May";
        } elseif ($mes == 6) {
            $mes_ingles = "June";
        } elseif ($mes == 7) {
            $mes_ingles = "July";
        } elseif ($mes == 8) {
            $mes_ingles = "August";
        } elseif ($mes == 9) {
            $mes_ingles = "September";
        } elseif ($mes == 10) {
            $mes_ingles = "October";
        } elseif ($mes == 11) {
            $mes_ingles = "November";
        } elseif ($mes == 12) {
            $mes_ingles = "December";
        } else {
            
        }
//monta a contagem regressiva
        $data = strtotime("$mes_ingles $dia $ano");
        // o dia final MENOS o dia atual
        $restante = $data - time();
        //24h x 60min x 60 segundos = 86400
        $dias_restantes = intval($restante / 86400 + 1);
        //determina o início da contagem: se a qtdade de dias restantes for MAIOR que a contagem, nao aparece.
        if ($dias_restantes > $inicio_contagem) {
            
        } else {
            //se faltarem 3 dias ou mais pro evento
            if ($dias_restantes >= 3) {
                ?>
                <div id="contentInterna_aside_countdown">
                    <h1 style="margin: 6px 0 9px 0; text-align: center">
                        <a id="contentInterna_aside_countdown_h1" href="<?php echo $link ?>">
                            <?php echo $evento; ?></a>
                    </h1>
                    <h2 id="contentInterna_aside_countdown_h2">Faltam</h2>
                    <div id="contentInterna_aside_countdownTime">
                        <h3 id="contentInterna_aside_countdown_h3"><?php echo $dias_restantes; ?></h3>     
                        <h4 id="contentInterna_aside_countdown_h4">dias</h4>
                    </div>
                </div>
                <?
                //se faltarem 2 dias pro evento
            } elseif ($dias_restantes == 2) {
                ?>
                <div id="contentInterna_aside_countdown">
                    <h1 style="margin: 6px 0 9px 0; text-align: center">
                        <a id="contentInterna_aside_countdown_h1" href="<?php echo $link ?>">
                            <?php echo $evento; ?></a>
                    </h1>
                    <h2 id="contentInterna_aside_countdown_h2">Faltam apenas</h2>
                    <div id="contentInterna_aside_countdownTime">
                        <h3 id="contentInterna_aside_countdown_h3">48</h3>     
                        <h4 id="contentInterna_aside_countdown_h4">horas</h4>
                    </div>
                </div>
                <?php
                //se faltar 1 dia pro evento
            } elseif ($dias_restantes == 1) {
                ?>
                <div id="contentInterna_aside_countdown">
                    <h1 style="margin: 6px 0 9px 0; text-align: center">
                        <a id="contentInterna_aside_countdown_h1" href="<?php echo $link ?>">
                            <?php echo $evento; ?></a>
                    </h1>
                    <h2 id="contentInterna_aside_countdown_h2">Faltam apenas</h2>
                    <div id="contentInterna_aside_countdownTime">
                        <h3 id="contentInterna_aside_countdown_h3">24</h3>     
                        <h4 id="contentInterna_aside_countdown_h4">horas</h4>
                    </div>
                </div>
                <?php
                //se for o dia do evento
            } elseif ($dias_restantes == 0) {
                ?>
                <div id="contentInterna_aside_countdown">
                    <h1 style="margin: 6px 0 9px 0; text-align: center">
                        <a id="contentInterna_aside_countdown_h1" href="<?php echo $link ?>">
                            <?php echo $evento; ?></a>
                    </h1>
                    <h4 id="contentInterna_aside_countdown_h4_hoje">&Eacute hoje!</h4>
                </div>
                <?php
            } else {
                
            }
        }
    endwhile;
}
wp_reset_query();
?>

