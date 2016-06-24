<?php
$css_amarelo = 'background-color:#F7931D;';
$padraoTable = 'cellpadding="0" cellspacing="0" border="0" align="center"';
$padraoStyle = 'border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; text-decoration:none;';
$padraoTexto = 'color:#fff; text-decoration:none; font-family: arial, sans-serif; display: block; width: 100%;';
$padraoLink = 'color:#fff; text-decoration:none; font-family: arial, sans-serif; display: block; width: 100%;';
$padraoImg = 'border:0; display:block; margin: 0 auto; text-decoration:none;';
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>Autodr&oacute;mo de Interlagos</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <?php
    //
    //
    //
    //
    //
    //
    ?>
    <body style="border: 0; padding: 0; margin: 0; background-color: #000;">
        <table <?php echo $padraoTable; ?>
            style="<?php echo $padraoStyle; ?>
            width:100%;
            background-color: #000;
            ">
            <tbody>
                <tr style="width:100%;">
                    <td style="width:100%;">
                        <?php
                        //
                        //
                        //
                        //
                        //
                        //
                        ?>
                        <table <?php echo $padraoTable; ?>
                            style="
                            <?php echo $padraoStyle; ?>
                            margin: 0 auto;
                            width: 600px;
                            background-color: #000;
                            ">
                            <tbody>
                                <tr style="height: 15px; width: 600px;">
                                    <td></td>
                                </tr>
                                <tr style="height: 130px">
                                    <td>
                                        <?php
                                        //
                                        //
                                        //
                                        //
                                        //
                                        //
                                        ?>
                                        <table <?php echo $padraoTable; ?>
                                            style="width: 100%; height: 130px; <?php echo $padraoStyle . $css_amarelo; ?>">
                                            <tbody>
                                                <tr>
                                                    <td style="width: 3%; height: 130px;"></td>
                                                    <td style="width: 47%; height: 130px;">
                                                        <a href="http://www.autodromodeinterlagos.com.br" target="_blank" style="<?php echo $padraoLink; ?>">
                                                            <img src="<?php echo get_bloginfo('template_url'); ?>/images/interlagos_logo.jpg" alt="Logo Aut&oacute;dromo" style="<?php echo $padraoImg; ?>" />
                                                        </a>
                                                    </td>
                                                    <td style="width: 47%; height: 130px;">
                                                        <h1 style="
                                                        <?php echo $padraoTexto; ?>
                                                            margin: 0;
                                                            padding: 0;
                                                            font-size: 18px;
                                                            text-align: right;
                                                            font-weight: normal;
                                                            margin-top: 7px;
                                                            ">
                                                            Boletim Informativo
                                                        </h1>
                                                        <h2 style="
                                                        <?php echo $padraoTexto; ?>
                                                            margin: 0;
                                                            padding: 0;
                                                            font-size: 13px;
                                                            text-align: right;
                                                            font-weight: normal;
                                                            margin-top: 7px;
                                                            ">
                                                                <?php echo get_field('interlagos_edicao'); ?>
                                                        </h2>
                                                    </td>
                                                    <td style="width: 3%; height: 130px;"></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <?php
                                        //
                                        //
                                        //
                                        //
                                        //
                                        //
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height:5px; width: 600px;"></td>
                                </tr>
                                <tr style="height: 150px">
                                    <td>
                                        <a href="<?php echo get_field('interlagos_principal_link'); ?>" target="_blank" style="<?php echo $padraoLink; ?>">
                                            <img src="<?php echo get_field('interlagos_principal_img'); ?>" alt="Not&iacute;cia Principal" style="<?php echo $padraoImg; ?>" />
                                        </a>    
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php
                                        //
                                        //
                                        //
                                        //
                                        //
                                        //
                                        ?>
                                        <?php

                                        ////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                        //
                                        // BLOCOS DE NOTICIAS
                                        // 
                                        ////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                        //
                                        function noticiasBlocos($numero, $padraoTable_func, $padraoStyle_func, $padraoTexto_func, $padraoLink_func, $padraoImg_func) {
                                            //
                                            if ($numero == 1) {
                                                $numeroItem = '1';
                                            } elseif ($numero == 2) {
                                                $numeroItem = '2';
                                            } elseif ($numero == 3) {
                                                $numeroItem = '3';
                                            } elseif ($numero == 4) {
                                                $numeroItem = '4';
                                            } elseif ($numero == 5) {
                                                $numeroItem = '5';
                                            } elseif ($numero == 6) {
                                                $numeroItem = '6';
                                            } elseif ($numero == 7) {
                                                $numeroItem = '7';
                                            } elseif ($numero == 8) {
                                                $numeroItem = '8';
                                            }
                                            //
                                            // VARS
                                            $padraoTable = $padraoTable_func;
                                            $padraoStyle = $padraoStyle_func;
                                            $padraoTexto = $padraoTexto_func;
                                            $padraoLink = $padraoLink_func;
                                            $padraoImg = $padraoImg_func;
                                            //
                                            // MONTA TABELA
                                            $tableNews = '<table ' . $padraoTable . 'style="' . $padraoStyle . 'margin: 0 auto; width: 600px;"><tbody>';
                                            $tableNews .= '<tr style="width: 600px; height: 5px;"><td></td><td></td><td></td></tr>';
                                            $tableNews .= '<tr style="width: 600px; height: 150px;">';
                                            $tableNews .= '<td style="width: 300px; height: 150px;">';
                                            $tableNews .= '<a href="' . get_field('interlagos_' . $numeroItem . '_link') . '" target="_blank" style="' . $padraoLink . '">';
                                            $tableNews .= '<img src="' . get_field('interlagos_' . $numeroItem . '_img') . '" alt="Not&iacute;cia Destaque" style="width: 100%;' . $padraoImg . '" />';
                                            $tableNews .= '</a></td>';
                                            $tableNews .= '<td style="width: 5px; height: 150px;"></td>';
                                            $tableNews .= '<td style="width: 15px; height: 150px; background-color:#F7931D;"></td>';
                                            $tableNews .= '<td style="width: 270px; height: 150px; background-color:#F7931D;">';
                                            $tableNews .= '<a href="' . get_field('interlagos_' . $numeroItem . '_link') . '" target="_blank" style="' . $padraoLink . '">';
                                            $tableNews .= '<p style="margin: 0; font-size: 16px; text-align:left; font-weight: bold;' . $padraoTexto . '">' . get_field('interlagos_' . $numeroItem . '_data') . '</p>';
                                            $tableNews .= '</a>';
                                            $tableNews .= '<a href="' . get_field('interlagos_' . $numeroItem . '_link') . '" target="_blank" style="' . $padraoLink . '">';
                                            $tableNews .= '<p style="margin: 0; padding: 10px 0 20px 0; font-size: 20px; text-align:left;' . $padraoTexto . '">' . get_field('interlagos_' . $numeroItem . '_titleV2') . '</p>';
                                            $tableNews .= '</a>';
                                            $tableNews .= '<a href="' . get_field('interlagos_' . $numeroItem . '_link') . '" target="_blank" style="' . $padraoLink . '">';
                                            $tableNews .= '<p style="margin: 0; font-size: 12px; text-align:left;' . $padraoTexto . '">' . get_field('interlagos_' . $numeroItem . '_resumo') . '</p>';
                                            $tableNews .= '</a></td>';
                                            $tableNews .= '<td style="width: 10px; height: 150px; background-color:#F7931D;"></td>';
                                            $tableNews .= '</tr>';
                                            $tableNews .= '</tbody></table>';
                                            //
                                            return $tableNews;
                                        }

                                        //
                                        $interlagos_radio = get_field('interlagos_radio');
                                        //
                                        if ($interlagos_radio == 1 || $interlagos_radio == 2 || $interlagos_radio == 3 ||
                                                $interlagos_radio == 4 || $interlagos_radio == 5 || $interlagos_radio == 6 ||
                                                $interlagos_radio == 7 || $interlagos_radio == 8) {
                                            echo noticiasBlocos(1, $padraoTable, $padraoStyle, $padraoTexto, $padraoLink, $padraoImg);
                                        }
                                        if ($interlagos_radio == 2 || $interlagos_radio == 3 ||
                                                $interlagos_radio == 4 || $interlagos_radio == 5 || $interlagos_radio == 6 ||
                                                $interlagos_radio == 7 || $interlagos_radio == 8) {
                                            echo noticiasBlocos(2, $padraoTable, $padraoStyle, $padraoTexto, $padraoLink, $padraoImg);
                                        }
                                        if ($interlagos_radio == 3 || $interlagos_radio == 4 ||
                                                $interlagos_radio == 5 || $interlagos_radio == 6 ||
                                                $interlagos_radio == 7 || $interlagos_radio == 8) {
                                            echo noticiasBlocos(3, $padraoTable, $padraoStyle, $padraoTexto, $padraoLink, $padraoImg);
                                        }
                                        if ($interlagos_radio == 4 || $interlagos_radio == 5 || $interlagos_radio == 6 ||
                                                $interlagos_radio == 7 || $interlagos_radio == 8) {
                                            echo noticiasBlocos(4, $padraoTable, $padraoStyle, $padraoTexto, $padraoLink, $padraoImg);
                                        }
                                        if ($interlagos_radio == 5 || $interlagos_radio == 6 ||
                                                $interlagos_radio == 7 || $interlagos_radio == 8) {
                                            echo noticiasBlocos(5, $padraoTable, $padraoStyle, $padraoTexto, $padraoLink, $padraoImg);
                                        }
                                        if ($interlagos_radio == 6 || $interlagos_radio == 7 || $interlagos_radio == 8) {
                                            echo noticiasBlocos(6, $padraoTable, $padraoStyle, $padraoTexto, $padraoLink, $padraoImg);
                                        }
                                        if ($interlagos_radio == 7 || $interlagos_radio == 8) {
                                            echo noticiasBlocos(7, $padraoTable, $padraoStyle, $padraoTexto, $padraoLink, $padraoImg);
                                        }
                                        if ($interlagos_radio == 8) {
                                            echo noticiasBlocos(8, $padraoTable, $padraoStyle, $padraoTexto, $padraoLink, $padraoImg);
                                        }
                                        ?>
                                        <?php
                                        //
                                        //
                                        //
                                        //
                                        //
                                        //
                                        ?>
                                    </td>
                                </tr>
                                <?php
                                //
                                //
                                //
                                //
                                //
                                //
                                ?>
                                <tr>
                                    <td style="height:5px; width: 600px;"></td>
                                </tr>
                                <tr>
                                    <td style="width: 600px; <?php echo $css_amarelo; ?>">
                                        <table style="width:600px; <?php echo $padraoStyle; ?>" <?php echo $padraoTable; ?>>
                                            <tr>
                                                <td style="width:15%;"></td>
                                                <td style="width:70%;">
                                                    <a href="http://www.autodromodeinterlagos.com.br/wp1/receba-novidades/" target="_blank" style="margin: 0 auto; border: 0; text-align: center; font-size: 19px; <?php echo $padraoLink; ?>">
                                                        RECEBA NOSSAS NEWS
                                                    </a>
                                                </td>
                                                <td style="width:15%;"></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height:5px; width: 600px;"></td>
                                </tr>
                                <tr>
                                    <td>
                                        <?php
                                        //
                                        //
                                        //
                                        //
                                        //
                                        //
                                        ?>
                                        <table style="width:600px; <?php echo $padraoStyle; ?>" <?php echo $padraoTable; ?>>
                                            <tr>
                                                <td style="width:115px; height: 235px; margin: 0;">
                                                    <table style="width:115px; height: 235px; <?php echo $padraoStyle; ?>" <?php echo $padraoTable; ?>>
                                                        <tr>
                                                            <td style="width:115px; height: 115px; background-color:#F7931D;">
                                                                <a href="http://www.autodromodeinterlagos.com.br/wp1/conheca-interlagos/" target="_blank" style="border: 0; color:#fff;">
                                                                    <img style="height: 42px; width: 48px; display:block; margin: 0 0 0 50px; border: 0;" src="<?php echo get_bloginfo('template_url'); ?>/images/icone-conheca.png" alt="Conhe&ccedil;a Interlagos" title="Conheça Interlagos" />
                                                                </a>
                                                                <h4 style="font-size:14px; color:#fff; font-weight:bold; letter-spacing:1px; margin: 5px 0 0 10px; <?php echo $padraoTexto; ?>">
                                                                    <a href="http://www.autodromodeinterlagos.com.br/wp1/conheca-interlagos/" target="_blank" style="<?php echo $padraoTexto; ?>">Conhe&ccedil;a<br/>Interlagos</a>
                                                                </h4>         
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width:115px; height: 5px; background-color:#000; margin: 0;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width:115px; height: 115px; background-color:#F7931D;">
                                                                <a href="https://www.facebook.com/autodromodeinterlagos" target="_blank" style="border: 0; color:#fff;">
                                                                    <img style="height: 55px; width: 55px; display:block; margin: 0 auto; border: 0;" src="<?php echo get_bloginfo('template_url'); ?>/images/icone-facebook.png" alt="Facebook Interlagos" title="Facebook Interlagos" />
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <!-- Separador -->
                                                <td style="width:5px; height: 235px; margin: 0;"></td>
                                                <td style="width:115px; height: 235px; margin: 0;">
                                                    <table style="width:115px; height: 235px; <?php echo $padraoStyle; ?>"  <?php echo $padraoTable; ?>>
                                                        <tr>
                                                            <td style="width:115px; height: 115px; background-color:#F7931D;">
                                                                <a href="http://www.autodromodeinterlagos.com.br/wp1/seu-evento-aqui/" target="_blank" style="border: 0; color:#fff;">
                                                                    <img style="height: 46px; width: 31px; display:block; margin: 0 0 0 60px; border: 0;" src="<?php echo get_bloginfo('template_url'); ?>/images/icone-evento.png" alt="Seu Evento Aqui" title="Seu Evento Aqui" />
                                                                </a>
                                                                <h4 style="font-size:14px; color:#fff; font-weight:bold; letter-spacing:1px; margin: 5px 0 0 10px; <?php echo $padraoTexto; ?>">
                                                                    <a href="http://www.autodromodeinterlagos.com.br/wp1/seu-evento-aqui/" target="_blank" style="<?php echo $padraoTexto; ?>">Seu evento<br/>aqui</a>
                                                                </h4>         
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width:115px; height: 5px; background-color:#000; margin: 0;"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width:115px; height: 115px; background-color:#F7931D;">
                                                                <a href="https://twitter.com/InterlagosTrack" target="_blank" style="border: 0; color:#fff;">
                                                                    <img style="height: 56px; width: 56px; display:block; margin: 0 auto; border: 0;" src="<?php echo get_bloginfo('template_url'); ?>/images/icone-twitter.png" alt="Twitter Interlagos" title="Twitter Interlagos" />
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                                <!-- Separador -->
                                                <td style="width:5px; height: 235px; margin: 0;"></td>
                                                <td style="width:355px; height: 235px; margin: 0; background-color:#F7931D;">
                                                    <!-- 
                                                    ##########################################
                                                    ##########################################
                                                    ##########################################
                                                    #
                                                    Área dos logos e expediente (footer)
                                                    #
                                                    ##########################################
                                                    ##########################################
                                                    ##########################################
                                                    -->
                                                    <table style="width:345px; height: 235px;<?php echo $padraoStyle; ?>"  <?php echo $padraoTable; ?>>
                                                        <tr>
                                                            <td style="width:345px; height: 78px;" valign="top">
                                                                <table style="width:260px; height: 78px; margin: 0 auto; margin-top: 25px;<?php echo $padraoStyle; ?>"  <?php echo $padraoTable; ?>>
                                                                    <tr>
                                                                        <td style="height: 78px; width: 68px;">
                                                                            <a href="http://www.cidadedesaopaulo.com/" target="_blank" style="border: 0; color:#fff;">
                                                                                <img style="height: 53px; width: 68px; display:block; border: 0;" src="<?php echo get_bloginfo('template_url'); ?>/images/logo-saopaulo.png" alt="Logo Cidade de São Paulo" title="Logo Cidade de São Paulo" />
                                                                            </a>
                                                                        </td>
                                                                        <td style="height: 78px; width: 15px;"></td>
                                                                        <td style="height: 78px; width: 1px; background-color: #fff;"></td>
                                                                        <td style="height: 78px; width: 15px;"></td>
                                                                        <td style="height: 78px; width: 70px;">
                                                                            <a href="http://spturis.com/" target="_blank" style="border: 0; color:#fff;">
                                                                                <img style="height: 48px; width: 70px; display:block; border: 0;" src="<?php echo get_bloginfo('template_url'); ?>/images/logo-spturis.png" alt="Logo Spturis" title="Logo Spturis" />     
                                                                            </a>
                                                                        </td>
                                                                        <td style="height: 78px; width: 15px;"></td>
                                                                        <td style="height: 78px; width: 6px;">
                                                                            <a href="http://www.capital.sp.gov.br/" target="_blank" style="border: 0; color:#fff;">
                                                                                <img style="height: 61px; width: 78px; display:block; border: 0;" src="<?php echo get_bloginfo('template_url'); ?>/images/logo-prefeitura.png" alt="Logo Prefeitura" title="Logo Prefeitura" />
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        <!-- separador -->
                                                        <tr>
                                                            <td style="width:345px; height: 15px;" valign="top"></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="width:345px; height: 100px; text-align:center; font-size:11px; color:#fff; font-weight:normal; letter-spacing:1px; <?php echo $padraoTexto; ?>" valign="top">
                                                                <span style=" margin: 5px 25px 10px 35px;">
                                                                    <?php echo get_field('newsletter_expediente'); ?>
                                                                </span>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </td>
                                            </tr>
                                        </table>
                                        <?php
                                        //
                                        //
                                        //
                                        //
                                        //
                                        //
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="height:30px; width: 600px;"></td>
                                </tr>
                            </tbody>
                        </table>
                        <?php
                        //
                        //
                        //
                        //
                        //
                        //
                        ?>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>