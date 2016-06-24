<!--?php /* Template name: Compras e Licitacoes */ ?-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" style="margin-top: 0 !important; background: #fff !important;">
    <head>
        <meta http-equiv="Content-Type" content="text/html; <?php bloginfo('charset') ?>" />
        <link rel="stylesheet"  type="text/css" media="all" href="<?php bloginfo('stylesheet_directory'); ?>/licitacoesSPTuris.css" />
        <?php wp_head(); ?>
        <!-- Google Analytics Imprensa SPTuris -->
        <script type="text/javascript">
            var _gaq = _gaq || [];
            _gaq.push(['_setAccount', 'UA-30648521-1']);
            _gaq.push(['_trackPageview']);
            (function() {
                var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
            })();
        </script>
    </head>
    <body style="background: #fff !important;">
        <script type="text/javascript">
            // VALIDA FORM
            $(document).ready(function () {

                $('form').each(function () {
                    $(this).validate({
                        submitHandler: function (form) { // for demo
                            alert('Campo obrigatório.');
                            return false;
                        }
                    });
                });

            });
        </script>
        <div class="licitacoes">
            <?php
            $tipoFinalizada = 0;
            $contatorFunction = 1;
            //--------  Query da Fase ZERO
            global $fase;
            if (is_page(9526)) {
                // Pregao eletronico
                $fase = new WP_Query(array(
                            'post_type' => 'licitacoes',
                            'posts_per_page' => '-1',
                            'tipolicitacoes' => 'pregao-eletronico',
                            'finalizadaslicitacoes' => 'ativa',
                        ));
            } elseif (is_page(9664)) {
                // Tomada de precos
                $fase = new WP_Query(array(
                            'post_type' => 'licitacoes',
                            'posts_per_page' => '-1',
                            'tipolicitacoes' => 'tomada-de-precos',
                            'finalizadaslicitacoes' => 'ativa',
                        ));
            } elseif (is_page(9665)) {
                // Convite
                $fase = new WP_Query(array(
                            'post_type' => 'licitacoes',
                            'posts_per_page' => '-1',
                            'tipolicitacoes' => 'convite',
                            'finalizadaslicitacoes' => 'ativa',
                        ));
            } elseif (is_page(9666)) {
                // Concorrencia
                $fase = new WP_Query(array(
                            'post_type' => 'licitacoes',
                            'posts_per_page' => '-1',
                            'tipolicitacoes' => 'concorrencia',
                            'finalizadaslicitacoes' => 'ativa',
                        ));
            } elseif (is_page(9670)) {
                // Editais Finalizados
                $tipoFinalizada = 1;
                $fase = new WP_Query(array(
                            'post_type' => 'licitacoes',
                            'posts_per_page' => '-1',
                            'finalizadaslicitacoes' => 'finalizada',
                        ));
            } else {
                
            }
            if ($fase->have_posts()) :
                //Use a While loop to show the results
                while ($fase->have_posts()) : $fase->the_post();
                    ?>
                    <div class="licitacoes_item">
                        <div class="licitacoes_item_ifos">
                            <p><b><?php the_title(); ?></b></p>
                            <?php
                            if ($tipoFinalizada == 0) {
                                
                            } else {
                                echo '<p><b><a href="' . get_field('licitacoes_arquivo') . '" target="_blank">Download do Edital</a></p>';
                                echo 'teste' . get_field('licitacoes_arquivo');
                            }
                            ?>
                            <p><b>Processo:</b> <?php the_field('licitacoes_processo'); ?></p>
                            <p><b>Objeto:</b> <?php the_field('licitacoes_objeto'); ?></p>
                            <p><b>Sess&atilde;o:</b> <?php the_field('licitacoes_sessao'); ?></p>
                            <?php
                            // verifica se ha obs
                            if (get_field('licitacoes_obs')) {
                                echo '<div><p class="obsTitle"><b>Observa&ccedil;&atilde;o:</b></p>' . get_field('licitacoes_obs') . '</div>';
                            } else {
                                
                            }
                            ?>
                        </div>
                        <?php
                        if ($tipoFinalizada == 0) {
                            ?>
                            <div class="licitacoes_item_form">
                                <div id="msg"></div>
                                <form action="http://spturis.com/v7/emails/sistema_wp_2014/envia_email.php" name="f" method="post" >
                                    <input type="hidden" value="<?php the_title(); ?>" name="titulo" />
                                    <input type="hidden" value="<?php the_field('licitacoes_processo'); ?>" name="processo" />
                                    <input type="hidden" value="<?php the_field('licitacoes_objeto'); ?>" name="objeto" />
                                    <input type="hidden" value="<?php the_field('licitacoes_sessao'); ?>" name="sessao" />
                                    <input type="hidden" value="<?php the_field('licitacoes_arquivo'); ?>" name="arquivo" />
                                    <?php
                                    // verifica se ha obs
                                    /*
                                    if (get_field('licitacoes_obs')) {
                                        echo '<input type="hidden" value="' . the_field('licitacoes_obs') . '" name="obs" />';
                                    } else {
                                        echo '<input type="hidden" value=" " name="obs" />';
                                    }
                                     * */
                                    ?>
                                    <p id="empresa">Empresa:</p>
                                    <input class="inputstxt" type="text" name="e" required="required" />
                                    <p id="email">Email:</p>
                                    <input class="inputstxt" type="text" name="m" required="required" />
                                    <input id="btn" type="submit" value="Receber Edital" />
                                    <label name="msg"></label>
                                </form>

                            </div>
                            <?php
                        } else {
                            
                        }
                        ?>
                    </div>
                    <?php
                    $contatorFunction = $contatorFunction + 1;
                endwhile;
            else:
                // Não não houver resultado printa a mensagem
                echo '<p>No momento n&atilde;o h&aacute; editais.</p>';
            endif;
            wp_reset_query();
            ?>
        </div>
    </body>
</html>