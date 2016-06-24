<?php
$cssCinzaBg = 'background-color: #F4F4F4; ';
$cssVerdeBg = 'background-color: #72BE44; ';
$cssVerde = 'color: #72BE44; ';
$cssPreto = 'color: #333333; ';
$cssUppercase = 'text-transform: uppercase; ';
//
$cssFonte = 'font-family: century gothic, arial, sans-serif; font-weight: lighter; text-decoration:none; ';
$cssFonte_bold = 'font-family: century gothic, arial, sans-serif; font-weight: bold; text-decoration:none; ';
//
$padraoTable = 'cellpadding="0" cellspacing="0" border="0" align="center"';
$padraoStyle = 'border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;';
$padraoStyleInterna = 'width: 100%; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; margin: 0 auto;';
$padraoImage = 'border: 0; width: 100%; display: block;';
$padraoLink = 'text-decoration:none; border:0;';
//
$cssTitle = $cssVerde . $cssFonte_bold . $cssUppercase;
$cssTitle_2 = $cssPreto . $cssFonte_bold . $cssUppercase;
//
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>Imprensa - Turismo em S&atilde;o Paulo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body style="border: 0; padding: 0; margin: 0; background-color: #fff;">
        <table <?php echo $padraoTable; ?>
            style="<?php echo $padraoStyle; ?>
            width:100%;
            background-color: #fff;">
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
                            width: 640px;
                            background-color: #fff;
                            ">
                            <tbody>
                                <tr style="height: 15px">
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>
                                        <p style="text-align: right; font-size: 18px; <?php echo $cssVerde . $cssFonte . $cssUppercase; ?>"><?php echo get_field('internacionalpress_data'); ?></p>
                                    </td>
                                </tr>
                                <tr style="height: 5px">
                                    <td></td>
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
                                        <table <?php echo $padraoTable; ?> style="
                                        <?php echo $padraoStyleInterna . $cssVerdeBg . 'display: block; height: 165px; background-image: url(' . get_bloginfo('template_url') . '/images/300_pattern_VERDE.png);'; ?>
                                                                           ">
                                            <tbody>
                                                <tr style="height: 20px;">
                                                    <td style="width: 3%;"></td>
                                                    <td style="width: 32%;"></td>
                                                    <td style="width: 62%;"></td>
                                                    <td style="width: 3%;"></td>
                                                </tr>
                                                <tr>
                                                    <td style="width: 5%;"></td>
                                                    <td style="width: 32%;">
                                                        <span style=" border: 0;
                                                              display: block;
                                                              width: 143px;
                                                              border-right: 1px solid #fff;
                                                              padding: 0 24px 0 0;">
                                                            <a style="<?php echo $padraoLink; ?>" href="http://www.cidadedesaopaulo.com/sp/" target="_blank">
                                                                <img src="<?php echo get_bloginfo('template_url'); ?>/images/internacionalpress_logo.png" alt="S&atilde;o Paulo"  style="<?php echo $padraoImage; ?>" />
                                                            </a>
                                                        </span>
                                                    </td>
                                                    <td style="width: 62%;">
                                                        <h1 style="
                                                            font-size: 65px;
                                                            color: #123F6D;
                                                            float: left;
                                                            display: table;
                                                            margin: 0;
                                                            line-height: 45px;
                                                            padding: 0;
                                                            margin-top: 20px;
                                                            <?php echo $cssFonte_bold; ?>">SAO PAULO</h1>
                                                        <h2 style="
                                                            font-size: 32px;
                                                            margin-top: 10px;
                                                            color: #fff;
                                                            float: left;
                                                            display: block;
                                                            line-height: 25px;
                                                            padding: 0;
                                                            <?php echo $cssFonte_bold; ?>">NEWS & PRESS RELEASES</h2>
                                                    </td>
                                                    <td style="width: 3%;"></td>
                                                </tr>
                                                <tr style="height: 15px;">
                                                    <td style="width: 3%;"></td>
                                                    <td style="width: 32%;"></td>
                                                    <td style="width: 62%;"></td>
                                                    <td style="width: 3%;"></td>
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
                                <tr style="<?php echo $cssCinzaBg; ?>">
                                    <td>
                                        <?php

                                        ////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                        //
                                        // BLOCOS DE NOTICIAS
                                        // 
                                        ////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                        //
                                        function noticiasBlocos($numero) {
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
                                            $padraoImage = 'border: 0; width: 100%; display: block;';
                                            $cssFonte = 'font-family: century gothic, arial, sans-serif; font-weight: lighter; text-decoration:none; ';
                                            $cssFonte_bold = 'font-family: century gothic, arial, sans-serif; font-weight: bold; text-decoration:none; ';
                                            $cssVerde = 'color: #72BE44; ';
                                            $cssPreto = 'color: #333333; ';
                                            //
                                            $tableNews = '<table><tbody>';
                                            $tableNews .= '<tr style="height: 15px;"><td style="width: 3%;"></td><td style="width: 94%;"></td><td style="width: 3%;"></td></tr>';
                                            $tableNews .= '<tr><td style="width: 3%;"></td><td style="width: 94%;">';
                                            // IMAGEM TOPO
                                            $tableNews .= '<a href="' . get_field('internacionalpress_link_en_' . $numeroItem) . '" target="_blank">';
                                            $tableNews .= '<img src="' . get_field('internacionalpress_img_' . $numeroItem) . '" alt="' . get_field('internacionalpress_link_en_' . $numeroItem) . '" style="' . $padraoImage . '" />';
                                            $tableNews .= '</a>';
                                            // 
                                            $tableNews .= '</td><td style="width: 3%;"></td></tr><tr><td style="width: 3%;"></td><td style="width: 94%;"><table><tbody><tr><td style="width:48%;">';
                                            // TITULO ES
                                            $tableNews .= '<a href="' . get_field('internacionalpress_link_es_' . $numeroItem) . '" target="_blnak" style="width: 100%; font-size: 20px;display: block;margin: 10px 0 5px 0;' . $cssFonte_bold . $cssVerde . '">';
                                            $tableNews .= get_field('internacionalpress_title_es_' . $numeroItem);
                                            $tableNews .= '</a></br>';
                                            // RESUMO ES
                                            $tableNews .= '<a href="' . get_field('internacionalpress_link_es_' . $numeroItem) . '" target="_blnak" style="width: 100%; font-size: 14px;display: block;' . $cssFonte . $cssPreto . '">';
                                            $tableNews .= get_field('internacionalpress_text_es_' . $numeroItem);
                                            $tableNews .= '</a>';
                                            //
                                            $tableNews .= '</td><td style="width:4%;"></td><td style="width:48%;">';
                                            // TITULO EN
                                            $tableNews .= '<a href="' . get_field('internacionalpress_link_en_' . $numeroItem) . '" target="_blnak" style="width: 100%; font-size: 20px;display: block;margin: 10px 0 5px 0;' . $cssFonte_bold . $cssVerde . '">';
                                            $tableNews .= get_field('internacionalpress_title_en_' . $numeroItem);
                                            $tableNews .= '</a></br>';
                                            // RESUMO EN
                                            $tableNews .= '<a href="' . get_field('internacionalpress_link_en_' . $numeroItem) . '" target="_blnak" style="width: 100%; font-size: 14px; display: block;' . $cssFonte . $cssPreto . '">';
                                            $tableNews .= get_field('internacionalpress_text_en_' . $numeroItem);
                                            $tableNews .= '</a>';
                                            //
                                            $tableNews .= '</td></tr></tbody></table></td><td style="width: 3%;"></td></tr>';
                                            $tableNews .= '<tr style="height: 15px;"><td style="width: 3%;"></td><td style="width: 94%;"></td><td style="width: 3%;"></td></tr>';
                                            $tableNews .= '<tr style="height: 1px;"><td style="width: 3%;"></td><td style="width: 94%; border-bottom: 1px dashed #72BE44;"></td><td style="width: 3%;"></td></tr>';
                                            $tableNews .= '</tbody></table>';
                                            //
                                            return $tableNews;
                                        }

                                        //
                                        $internacionalpress_numero = get_field('internacionalpress_numero');
                                        //
                                        if ($internacionalpress_numero == 1 || $internacionalpress_numero == 2 || $internacionalpress_numero == 3 ||
                                                $internacionalpress_numero == 4 || $internacionalpress_numero == 5 || $internacionalpress_numero == 6 ||
                                                $internacionalpress_numero == 7 || $internacionalpress_numero == 8) {
                                            echo noticiasBlocos(1);
                                        }
                                        if ($internacionalpress_numero == 2 || $internacionalpress_numero == 3 ||
                                                $internacionalpress_numero == 4 || $internacionalpress_numero == 5 || $internacionalpress_numero == 6 ||
                                                $internacionalpress_numero == 7 || $internacionalpress_numero == 8) {
                                            echo noticiasBlocos(2);
                                        }
                                        if ($internacionalpress_numero == 3 || $internacionalpress_numero == 4 ||
                                                $internacionalpress_numero == 5 || $internacionalpress_numero == 6 ||
                                                $internacionalpress_numero == 7 || $internacionalpress_numero == 8) {
                                            echo noticiasBlocos(3);
                                        }
                                        if ($internacionalpress_numero == 4 || $internacionalpress_numero == 5 || $internacionalpress_numero == 6 ||
                                                $internacionalpress_numero == 7 || $internacionalpress_numero == 8) {
                                            echo noticiasBlocos(4);
                                        }
                                        if ($internacionalpress_numero == 5 || $internacionalpress_numero == 6 ||
                                                $internacionalpress_numero == 7 || $internacionalpress_numero == 8) {
                                            echo noticiasBlocos(5);
                                        }
                                        if ($internacionalpress_numero == 6 || $internacionalpress_numero == 7 || $internacionalpress_numero == 8) {
                                            echo noticiasBlocos(6);
                                        }
                                        if ($internacionalpress_numero == 7 || $internacionalpress_numero == 8) {
                                            echo noticiasBlocos(7);
                                        }
                                        if ($internacionalpress_numero == 8) {
                                            echo noticiasBlocos(8);
                                        }
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
                                <tr style="height: 20px; <?php echo $cssCinzaBg; ?>">
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>
                                        <table <?php echo $padraoTable; ?> style="width: 100%; <?php echo $cssCinzaBg; ?>">
                                            <tr>
                                                <td style="width: 50%;">
                                                    <h1 style="font-size: 22px; text-align: center; line-height: 20px; padding: 14px 0 0 0;<?php echo $cssTitle_2; ?>">SIGUENOS | FOLLOW US</h1>
                                                </td>
                                                <td style="width: 50%;">
                                                    <img usemap="#Map" style=" border: 0; display: block; margin-bottom: 15px; margin: 0 auto;" src="<?php echo get_bloginfo('template_url'); ?>/images/internacionalpress_social.png" alt="Sociais Networks" />
                                                    <map name="Map" id="Map">
                                                        <area shape="rect" coords="1,1,48,41" href="https://www.facebook.com/experiencesaopaulo" target="_blank" />
                                                        <area shape="rect" coords="57,2,161,39" href="https://www.youtube.com/user/spturis" target="_blank" />
                                                    </map>
                                                </td>
                                            </tr>
                                        </table>

                                    </td>
                                </tr>
                                <tr style="height: 20px; <?php echo $cssCinzaBg; ?>">
                                    <td></td>
                                </tr>
                                <?php
                                //
                                //
                                //
                                //
                                //
                                //
                                ?>
                                <tr style="height: 30px;">
                                    <td></td>
                                </tr>
                                <tr>
                                    <td>
                                        <table <?php echo $padraoTable; ?> style="<?php echo $padraoStyleInterna; ?>">
                                            <tbody>
                                                <tr>
                                                    <td style="width: 8%;"></td>
                                                    <td style="width: 92%;">


                                                        <a style="text-decoration:none;
                                                           display: block;
                                                           float: left;"
                                                           href="http://www.cidadedesaopaulo.com">
                                                            <img src="<?php echo get_bloginfo('template_url'); ?>/images/cidade.png" style="border:0;" alt="Logo Cidade de São Paulo" />
                                                        </a>
                                                        <a style="text-decoration:none;
                                                           display: block;
                                                           float: left;
                                                           margin: 10px 0 0 0;"
                                                           href="http://www.autodromodeinterlagos.com.br/">
                                                            <img src="<?php echo get_bloginfo('template_url'); ?>/images/autodromo_newlogo.png" style="border:0;" alt="Logo Autódromo de Interlagos" />
                                                        </a>
                                                        <a style="text-decoration:none;
                                                           display: block;
                                                           float: left;
                                                           margin: 16px 0 0 0;"
                                                           href="http://www.anhembi.com.br/">
                                                            <img src="<?php echo get_bloginfo('template_url'); ?>/images/anhembi.png" style="border:0;" alt="Logo Anhembi" />
                                                        </a>
                                                        <a style="text-decoration:none;
                                                           display: block;
                                                           float: left;
                                                           margin: 6px 0 0 0;"
                                                           href="http://www.spturis.com/">
                                                            <img src="<?php echo get_bloginfo('template_url'); ?>/images/spturis.png" style="border:0;" alt="Logo SPTuris" />
                                                        </a>
                                                        <a style="text-decoration:none;
                                                           border:0;
                                                           display: block;
                                                           float: left;
                                                           margin: 7px 0 0 0;"
                                                           href="http://www.prefeitura.sp.gov.br/portal/a_cidade/turismo/">
                                                            <img src="<?php echo get_bloginfo('template_url'); ?>/images/prefeitura.png" style="border:0;" alt="Logo Prefeitura de São Paulo | Turismo" />
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                                <tr style="height: 30px;">
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="width: 100%; font-size: 11px; margin-top: 0; margin-bottom: 0; text-align: center; <?php echo $cssFonte . $cssPreto; ?>">
                                        <?php echo get_field('newsletter_expediente'); ?>
                                    </td>
                                </tr>
                                <tr style="height: 30px;">
                                    <td></td>
                                </tr>
                                <?php
                                //
                                //
                                //
                                //
                                //
                                //
                                ?>
                                <tr style="height: 40px; <?php echo $cssVerdeBg; ?>;">
                                    <td></td>
                                </tr>
                                <tr style="<?php echo $cssVerdeBg; ?>;">
                                    <td>
                                        <a href="http://imprensa.spturis.com.br" style="color: #fff; <?php echo $padraoLink; ?>">
                                            <h2 style="color: #fff; font-size: 52px; text-align: center; <?php echo $cssFonte . $cssUppercase ?>">IMPRENSA.SPTURIS.COM</h2>
                                        </a>
                                    </td>
                                </tr>
                                <tr style="height: 60px; <?php echo $cssVerdeBg; ?>;">
                                    <td></td>
                                </tr>
                                <?php
                                //
                                //
                                //
                                //
                                //
                                //
                                ?>
                                <tr style="height: 30px;">
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>