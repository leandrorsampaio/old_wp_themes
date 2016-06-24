<?php
$padraoTable = 'cellpadding="0" cellspacing="0" border="0" align="center"';
$padraoStyle = 'border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;';
$padraoStyleInterna = 'width: 100%; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; margin: 0 auto;';
//
//
$cssNoUnderline = 'text-decoration: none; ';
$cssNoBorder = 'border: 0; ';
$cssImgBorderZero = 'style="border:0;"';
$cssImgBorderZero_margin = 'style="border:0; margin-left: 10px;"';
//
//
$cssFonte = 'font-family: century gothic, arial, sans-serif; font-weight: lighter; ';
$cssFonte_bold = 'font-family: century gothic, arial, sans-serif; font-weight: bold; ';
$cssAlinhaDireita = 'text-align: right; ';
$cssAlinhaEsquerda = 'text-align: left; ';
$cssAlinhaCentro = 'text-align: center; ';
$cssCinzaBg = 'background-color: #F4F4F4; ';
$cssVerdeBg = '#72BE44; ';
$cssVerdeBg_2 = 'background-color: #72BE44; ';
$cssVerde = 'color: #72BE44; ';
$cssPreto = 'color: #333333; ';
$cssBranco = 'color: #ffffff; ';
$cssMargemTexto = 'margin-left: 10px; margin-right: 10px; ';
//
$catMarcadores = '<p style="display: block;
    margin-left: 10px;
    margin-right: 10px;
    text-align: left;
    color: #fff;
    font-family: century gothic, arial, sans-serif;
    font-weight: lighter;
    font-size: 11px;
    text-transform: uppercase;
    text-decoration: none;"><span style="background-color: #72BE44; padding: 3px 5px 3px 5px;">';

//
$cssFontTitle = 'font-size: 22px; ';
$cssUppercase = 'text-transform: uppercase; ';
$cssTitlepadrao = $cssAlinhaEsquerda . $cssVerde . $cssFonte . $cssFontTitle . $cssUppercase . 'float: left; margin-bottom: 5px; margin-top: 5px;';
$cssTitlepadrao2 = $cssAlinhaEsquerda . $cssVerde . $cssFonte . 'font-size: 18px; ' . $cssUppercase . 'float: left; margin-bottom: 5px; margin-top: 5px;';
$cssTitlepadrao3 = $cssAlinhaCentro . $cssVerde . $cssFonte . 'font-size: 45px; ' . $cssUppercase;
$cssTitlepadrao4 = $cssVerde . $cssFonte . 'font-size: 18px; ' . $cssUppercase;
$cssTitlepadrao5 = $cssAlinhaCentro . $cssVerde . $cssFonte_bold . $cssUppercase . 'font-size: 25px;';
$cssTitlepadrao6 = $cssAlinhaCentro . $cssBranco . $cssFonte . 'font-size: 50px; ' . $cssUppercase . ' display:block; margin: 20px 0 50px 0;';
$cssSombra = 'display:block; -webkit-box-shadow: 0 0 15px 1px rgba(0,0,0,0.3); box-shadow: 0 0 15px 1px rgba(0,0,0,0.3);';
//
//
$linhaTrSeparadoraSmall = '<tr style="width: 100%; height:15px;' . $cssCinzaBg . '"><td></td></tr>';
$linhaTrSeparadoraSmall_h15_td1x = '<tr style="width: 100%; height:15px;"><td></td></tr>'; //$linhaTrSeparadoraSmall2
$linhaTrSeparadoraSmall_h15_td2x = '<tr style="width: 100%; height:15px;"><td></td><td></td></tr>';
//
//
$testeArrayCss = array(
    'padraoTable' => $padraoTable,
    'padraoStyle' => $padraoStyle,
    'padraoStyleInterna' => $padraoStyleInterna,
    'linhaTrSeparadoraSmall_h15_td1x' => $linhaTrSeparadoraSmall_h15_td1x,
    'linhaTrSeparadoraSmall_h15_td2x' => $linhaTrSeparadoraSmall_h15_td2x,
    //
    'cssNoUnderline' => $cssNoUnderline,
    'cssNoBorder' => $cssNoBorder,
    'cssImgBorderZero' => $cssImgBorderZero,
    'cssImgBorderZero_margin' => $cssImgBorderZero_margin,
    'cssFonte' => $cssFonte,
    'cssAlinhaDireita' => $cssAlinhaDireita,
    'cssAlinhaEsquerda' => $cssAlinhaEsquerda,
    'cssAlinhaCentro' => $cssAlinhaCentro,
    'cssCinzaBg' => $cssCinzaBg,
    'cssVerdeBg' => $cssVerdeBg,
    'cssVerde' => $cssVerde,
    'cssPreto' => $cssPreto,
    'cssBranco' => $cssBranco,
    'cssMargemTexto' => $cssMargemTexto,
    'cssFontTitle' => $cssFontTitle,
    'cssUppercase' => $cssUppercase,
    'cssTitlepadrao' => $cssTitlepadrao,
    'cssTitlepadrao2' => $cssTitlepadrao2,
    'cssTitlepadrao3' => $cssTitlepadrao3,
    'cssTitlepadrao4' => $cssTitlepadrao4,
    'cssSombra' => $cssSombra,
    //
    'catMarcadores' => $catMarcadores
);
//
//
$linhaTr = 'width: 100%;';
$linhaTrSeparadora = '<tr style="width: 100%; height:45px;"><td>&nbsp;</td></tr>';
//
$linhaTrSeparadoraBig = '<tr style="width: 100%; height:50px;"><td>&nbsp;</td></tr>';
$separadorTd = '<td style="width: 20px;">&nbsp;</td>';
$separadorTdSmall = '<td style="width: 15px;">&nbsp;</td>';
$separadorTdBig = '<td style="width: 30px;">&nbsp;</td>';
$passeiolinhaextra = '<tr>' . $separadorTdBig . '<td style="width: 580px; height: 30px;">' . $separadorTdBig . '</tr>';
//
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>Imprensa - Turismo em S&atilde;o Paulo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body style="border: 0; padding: 0; margin: 0; background-color: #ccc;">
        <table 
        <?php echo $padraoTable; ?>
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
                                <?php echo $linhaTrSeparadoraSmall_h15_td1x; ?>
                                <tr>
                                    <td>
                                        <p style="text-align: right; <?php echo $cssTitlepadrao4; ?>"><?php echo get_field('spempauta_data'); ?></p>
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
                                        <table <?php echo $padraoTable; ?> style="
                                        <?php echo $padraoStyleInterna . $cssVerdeBg_2 . 'display: block; height: 165px; background-image: url(' . get_bloginfo('template_url') . '/images/300_pattern_VERDE.png);'; ?>
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
                                                            font-size: 55px;
                                                            color: #123F6D;
                                                            float: left;
                                                            display: table;
                                                            margin: 0;
                                                            line-height: 45px;
                                                            padding: 0;
                                                            margin-top: 20px;
                                                            <?php echo $cssFonte_bold; ?>">SP EM PAUTA</h1>
                                                        <h2 style="
                                                            font-size: 30px;
                                                            margin-top: 10px;
                                                            color: #fff;
                                                            float: left;
                                                            display: block;
                                                            line-height: 25px;
                                                            padding: 0;
                                                            <?php echo $cssFonte_bold; ?>">COMUNICA&Ccedil;&Atilde;O SPTURIS</h2>
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
                                <tr>
                                    <td>
                                        <?php
                                        ////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                        //
                                        // DESTAQUES PRINCIPAIS
                                        // 
                                        ////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                        //
                                        // Quantidade de Itens Escolhidos pelo usuario
                                        $destprincipais_pergunta = get_field('destprincipais_pergunta');

                                        //
                                        // Funcao que monta o HTML
                                        function destprincipais($destprincipais_item, $CSSvars) {
                                            //
                                            // CSS Vars - Monta as variaveis com os nomes corretos
                                            foreach ($CSSvars as $chave => $valor) {
                                                $$chave = $valor;
                                            }
                                            //
                                            // Testa Custon Fields
                                            $destprincipais_testa = $destprincipais_item;
                                            if ($destprincipais_testa == 1) {
                                                $destprincipais_cat = 'destprincipais_1_cat';
                                                $destprincipais_titulo = 'destprincipais_1_titulo';
                                                $destprincipais_resumo = 'destprincipais_1_resumo';
                                                $destprincipais_imagem = 'destprincipais_1_imagem';
                                                $destprincipais_link = 'destprincipais_1_link';
                                            } elseif ($destprincipais_testa == 2) {
                                                $destprincipais_cat = 'destprincipais_2_cat';
                                                $destprincipais_titulo = 'destprincipais_2_titulo';
                                                $destprincipais_resumo = 'destprincipais_2_resumo';
                                                $destprincipais_imagem = 'destprincipais_2_imagem';
                                                $destprincipais_link = 'destprincipais_2_link';
                                            } elseif ($destprincipais_testa == 3) {
                                                $destprincipais_cat = 'destprincipais_3_cat';
                                                $destprincipais_titulo = 'destprincipais_3_titulo';
                                                $destprincipais_resumo = 'destprincipais_3_resumo';
                                                $destprincipais_imagem = 'destprincipais_3_imagem';
                                                $destprincipais_link = 'destprincipais_3_link';
                                            }
                                            // Monta tabela
                                            $destaqueHtml = '<table ' . $padraoTable . 'style="' . $cssCinzaBg . $padraoStyleInterna . '">';
                                            $destaqueHtml .= '<tbody>';
                                            $destaqueHtml .= $linhaTrSeparadoraSmall_h15_td2x;
                                            $destaqueHtml .= '<tr>';
                                            $destaqueHtml .= '<td style="width: 40%;">';
                                            $destaqueHtml .= $catMarcadores . get_field($destprincipais_cat) . '</span></p>';
                                            $destaqueHtml .= '<p style="display:block;' . $cssMargemTexto . '">'
                                                    . '<a href="' . get_field($destprincipais_link) . '" target="_blank" style="display:block;' . $cssTitlepadrao . $cssNoUnderline . $cssNoBorder . '">'
                                                    . get_field($destprincipais_titulo) . '</a></p>';
                                            $destaqueHtml .= '<p style="font-size: 14px;' . $cssPreto . $cssMargemTexto . $cssAlinhaLeft . $cssFonte . $cssNoUnderline . '">' . get_field($destprincipais_resumo) . '</p>';
                                            $destaqueHtml .= '</td>';
                                            $destaqueHtml .= '<td style="width: 60%;">';
                                            $destaqueHtml .= '<a style="' . $cssNoUnderline . $cssNoBorder . '" href="' . get_field($destprincipais_link) . '" target="_blank">';
                                            $destaqueHtml .= '<img src="' . get_field($destprincipais_imagem) . '" alt="' . get_field($destprincipais_titulo) . '" ' . $cssImgBorderZero . '/>';
                                            $destaqueHtml .= '</a>';
                                            $destaqueHtml .= '</td>';
                                            $destaqueHtml .= '</tr>';
                                            $destaqueHtml .= $linhaTrSeparadoraSmall_h15_td2x;
                                            $destaqueHtml .= '<tr style="width: 100%; border-bottom: 1px dashed #72BE44;">';
                                            $destaqueHtml .= '<td></td>';
                                            $destaqueHtml .= '<td></td>';
                                            $destaqueHtml .= '</tr>';
                                            $destaqueHtml .= '</tbody>';
                                            $destaqueHtml .= '</table>';
                                            // Retorna
                                            return $destaqueHtml;
                                        }

                                        //
                                        // Testa e Imprime os intens em tela
                                        if ($destprincipais_pergunta == 1 || $destprincipais_pergunta == 2 || $destprincipais_pergunta == 3) {
                                            echo destprincipais(1, $testeArrayCss);
                                        }
                                        if ($destprincipais_pergunta == 2 || $destprincipais_pergunta == 3) {
                                            echo destprincipais(2, $testeArrayCss);
                                        }
                                        if ($destprincipais_pergunta == 3) {
                                            echo destprincipais(3, $testeArrayCss);
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
                                        // DESTAQUES SECUNDARIOS
                                        //
                                        ////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                        //
                                        // Quantidade de Itens Escolhidos pelo usuario
                                        $destsecundarios_pergunta = get_field('destsecundarios_pergunta');

                                        //
                                        // Funcao que monta o HTML
                                        function destsecundarios($destsecundarios_item, $CSSvars) {
                                            //
                                            // CSS Vars - Monta as variaveis com os nomes corretos
                                            foreach ($CSSvars as $chave => $valor) {
                                                $$chave = $valor;
                                            }
                                            //
                                            // Testa Custon Fields
                                            $destsecundarios_testa = $destsecundarios_item;
                                            if ($destsecundarios_testa == 1) {
                                                $destsecundarios_cat = 'destsecundarios_1_cat';
                                                $destsecundarios_titulo = 'destsecundarios_1_title';
                                                $destsecundarios_resumo = 'destsecundarios_1_resumo';
                                                $destsecundarios_imagem = 'destsecundarios_1_imagem';
                                                $destsecundarios_link = 'destsecundarios_1_link';
                                            } elseif ($destsecundarios_testa == 2) {
                                                $destsecundarios_cat = 'destsecundarios_2_cat';
                                                $destsecundarios_titulo = 'destsecundarios_2_title';
                                                $destsecundarios_resumo = 'destsecundarios_2_resumo';
                                                $destsecundarios_imagem = 'destsecundarios_2_imagem';
                                                $destsecundarios_link = 'destsecundarios_2_link';
                                            } elseif ($destsecundarios_testa == 3) {
                                                $destsecundarios_cat = 'destsecundarios_3_cat';
                                                $destsecundarios_titulo = 'destsecundarios_3_title';
                                                $destsecundarios_resumo = 'destsecundarios_3_resumo';
                                                $destsecundarios_imagem = 'destsecundarios_3_imagem';
                                                $destsecundarios_link = 'destsecundarios_3_link';
                                            } elseif ($destsecundarios_testa == 4) {
                                                $destsecundarios_cat = 'destsecundarios_4_cat';
                                                $destsecundarios_titulo = 'destsecundarios_4_title';
                                                $destsecundarios_resumo = 'destsecundarios_4_resumo';
                                                $destsecundarios_imagem = 'destsecundarios_4_imagem';
                                                $destsecundarios_link = 'destsecundarios_4_link';
                                            } elseif ($destsecundarios_testa == 5) {
                                                $destsecundarios_cat = 'destsecundarios_5_cat';
                                                $destsecundarios_titulo = 'destsecundarios_5_title';
                                                $destsecundarios_resumo = 'destsecundarios_5_resumo';
                                                $destsecundarios_imagem = 'destsecundarios_5_imagem';
                                                $destsecundarios_link = 'destsecundarios_5_link';
                                            } elseif ($destsecundarios_testa == 6) {
                                                $destsecundarios_cat = 'destsecundarios_6_cat';
                                                $destsecundarios_titulo = 'destsecundarios_6_title';
                                                $destsecundarios_resumo = 'destsecundarios_6_resumo';
                                                $destsecundarios_imagem = 'destsecundarios_6_imagem';
                                                $destsecundarios_link = 'destsecundarios_6_link';
                                            } elseif ($destsecundarios_testa == 7) {
                                                $destsecundarios_cat = 'destsecundarios_7_cat';
                                                $destsecundarios_titulo = 'destsecundarios_7_title';
                                                $destsecundarios_resumo = 'destsecundarios_7_resumo';
                                                $destsecundarios_imagem = 'destsecundarios_7_imagem';
                                                $destsecundarios_link = 'destsecundarios_7_link';
                                            } elseif ($destsecundarios_testa == 8) {
                                                $destsecundarios_cat = 'destsecundarios_8_cat';
                                                $destsecundarios_titulo = 'destsecundarios_8_title';
                                                $destsecundarios_resumo = 'destsecundarios_8_resumo';
                                                $destsecundarios_imagem = 'destsecundarios_8_imagem';
                                                $destsecundarios_link = 'destsecundarios_8_link';
                                            }
                                            //
                                            // Monta tabela
                                            $destaqueSecHtml = '<table ' . $padraoTable . ' style="' . $cssCinzaBg . $padraoStyleInterna . '">';
                                            $destaqueSecHtml .= '<tbody>';
                                            $destaqueSecHtml .= $linhaTrSeparadoraSmall_h15_td2x;
                                            $destaqueSecHtml .= '<tr>';
                                            $destaqueSecHtml .= '<td style="width: 40%;">';
                                            $destaqueSecHtml .= '<a style="' . $cssNoUnderline . $cssNoBorder . '" href="' . get_field($destsecundarios_link) . '" target="_blank">';
                                            $destaqueSecHtml .= '<img src="' . get_field($destsecundarios_imagem) . '" alt="' . get_field($destsecundarios_titulo) . '" ' . $cssImgBorderZero_margin . '/>';
                                            $destaqueSecHtml .= '</a>';
                                            $destaqueSecHtml .= '</td>';
                                            $destaqueSecHtml .= '<td style="width: 60%;">';
                                            $destaqueSecHtml .= $catMarcadores . get_field($destsecundarios_cat) . '</span></p>';
                                            $destaqueSecHtml .= '<p style="display:block;' . $cssMargemTexto . '">'
                                                    . '<a href="' . get_field($destsecundarios_link) . '" target="_blank" style="display:block;' . $cssTitlepadrao2 . $cssNoUnderline . $cssNoBorder . '">'
                                                    . get_field($destsecundarios_titulo) . '</a></p>';
                                            $destaqueSecHtml .= '<p style="font-size: 12px;' . $cssPreto . $cssMargemTexto . $cssAlinhaLeft . $cssFonte . $cssNoUnderline . '">' . get_field($destsecundarios_resumo) . '</p>';
                                            $destaqueSecHtml .= '</td>';
                                            $destaqueSecHtml .= '</tr>';
                                            $destaqueSecHtml .= $linhaTrSeparadoraSmall_h15_td2x;
                                            $destaqueSecHtml .= '</tbody>';
                                            $destaqueSecHtml .= '</table>';
                                            //
                                            return $destaqueSecHtml;
                                        }

                                        //
                                        // Testa e Imprime os intens em tela
                                        if ($destsecundarios_pergunta == 1 || $destsecundarios_pergunta == 2 || $destsecundarios_pergunta == 3 ||
                                                $destsecundarios_pergunta == 4 || $destsecundarios_pergunta == 5 || $destsecundarios_pergunta == 6 ||
                                                $destsecundarios_pergunta == 7 || $destsecundarios_pergunta == 8) {
                                            echo destsecundarios(1, $testeArrayCss);
                                        }
                                        if ($destsecundarios_pergunta == 2 || $destsecundarios_pergunta == 3 ||
                                                $destsecundarios_pergunta == 4 || $destsecundarios_pergunta == 5 || $destsecundarios_pergunta == 6 ||
                                                $destsecundarios_pergunta == 7 || $destsecundarios_pergunta == 8) {
                                            echo destsecundarios(2, $testeArrayCss);
                                        }
                                        if ($destsecundarios_pergunta == 3 || $destsecundarios_pergunta == 4 ||
                                                $destsecundarios_pergunta == 5 || $destsecundarios_pergunta == 6 ||
                                                $destsecundarios_pergunta == 7 || $destsecundarios_pergunta == 8) {
                                            echo destsecundarios(3, $testeArrayCss);
                                        }
                                        if ($destsecundarios_pergunta == 4 || $destsecundarios_pergunta == 5 || $destsecundarios_pergunta == 6 ||
                                                $destsecundarios_pergunta == 7 || $destsecundarios_pergunta == 8) {
                                            echo destsecundarios(4, $testeArrayCss);
                                        }
                                        if ($destsecundarios_pergunta == 5 || $destsecundarios_pergunta == 6 ||
                                                $destsecundarios_pergunta == 7 || $destsecundarios_pergunta == 8) {
                                            echo destsecundarios(5, $testeArrayCss);
                                        }
                                        if ($destsecundarios_pergunta == 6 || $destsecundarios_pergunta == 7 || $destsecundarios_pergunta == 8) {
                                            echo destsecundarios(6, $testeArrayCss);
                                        }
                                        if ($destsecundarios_pergunta == 7 || $destsecundarios_pergunta == 8) {
                                            echo destsecundarios(7, $testeArrayCss);
                                        }
                                        if ($destsecundarios_pergunta == 8) {
                                            echo destsecundarios(8, $testeArrayCss);
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
                                <?php echo $linhaTrSeparadoraSmall; ?>
                                <?php echo $linhaTrSeparadoraSmall; ?>
                                <tr style="<?php echo $linhaTr . $cssCinzaBg; ?>">
                                    <td>
                                        <h1 style="<?php echo $cssTitlepadrao5; ?>">CALEND&Aacute;RIO DE EVENTOS</h1>
                                    </td>
                                </tr>
                                <?php
                                $respostaField = get_field('newsletter_acontece_pergunta');
                                $boxInicioLinha = '<table ' . $padraoTable . ' ><tr><td style="width: 32px;">&nbsp;</td>';
                                $boxAgendaAbre = '<td style="width: 140px;"><table ' . $padraoTable . ' style=" background-color: #ffffff; height:130px;">
                                                    <tr style="height: 20px;">
                                                        <td style="width: 10px;">&nbsp;</td>
                                                        <td style="width: 120px;">&nbsp;</td>
                                                        <td style="width: 10px;">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 10px;">&nbsp;</td>
                                                        <td style="width: 120px;">';
                                $boxAgendaAbreNO = '<td style="width: 140px;"><table ' . $padraoTable . ' style=" background-color: #F4F4F4; height:130px;">
                                                    <tr style="height: 20px;">
                                                        <td style="width: 10px;">&nbsp;</td>
                                                        <td style="width: 120px;">&nbsp;</td>
                                                        <td style="width: 10px;">&nbsp;</td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 10px;">&nbsp;</td>
                                                        <td style="width: 120px;">';

                                $boxAgendaFecha = '</td>
                                                        <td style="width: 10px;">&nbsp;</td>
                                                    </tr>
                                                    <tr style="height: 20px;">
                                                        <td style="width: 10px;">&nbsp;</td>
                                                        <td style="width: 120px;">&nbsp;</td>
                                                        <td style="width: 10px;">&nbsp;</td>
                                                    </tr>
                                                </table>
                                                </td>';
                                $boxSeparator = '<td style="width: 5px; ">&nbsp;</td>';

                                $boxFimLinha = '<td style="width: 33px;">&nbsp;</td></tr></table>';

                                $boxDataNo = '<p style=" font-size: 27px; color: #333333;
                                                    margin-left: 5px;
                                                    margin-right: 5px;
                                                    font-family: century gothic, arial, sans-serif;
                                                    font-weight: bolder;
                                                    text-decoration: none;
                                                    text-align: center;
                                                    margin-top: 0;
                                                    margin-bottom: 0;">&nbsp;</p>';
                                $boxNameNO = '<a style="font-size: 14px;
                                                            color: #333333;
                                                            margin-left: 5px;
                                                            margin-right: 5px;
                                                            font-family: century gothic, arial, sans-serif;
                                                            text-decoration: none;
                                                            text-align: center;
                                                            margin-top: 10px;
                                                            margin-bottom: 0;
                                                            display: block;" href="#"><p >&nbsp;</p></a>';
                                $boxDataYesAbre = '';
                                $boxDataYesFecha = '';
                                $boxNameYesAbre = '';
                                $boxNameYesFecha = '';
                                $cssBoxData = '<p style=" font-size: 24px; color: #333333;
                                                    margin-left: 1px;
                                                    margin-right: 1px;
                                                    font-family: century gothic, arial, sans-serif;
                                                    font-weight: bolder;
                                                    text-decoration: none;
                                                    text-align: center;
                                                    margin-top: 0;
                                                    margin-bottom: 0;">';
                                $cssBoxLink = '<a style="font-size: 14px;
                                                            color: #333333;
                                                            margin-left: 5px;
                                                            margin-right: 5px;
                                                            font-family: century gothic, arial, sans-serif;
                                                            text-decoration: none;
                                                            text-align: center;
                                                            margin-top: 10px;
                                                            margin-bottom: 0;
                                                            display: block;" target="_blank" href=" ';
                                ?>
                                <?php
                                if ($respostaField == 1 | $respostaField == 2 | $respostaField == 3 | $respostaField == 4 |
                                        $respostaField == 5 | $respostaField == 6 | $respostaField == 7 | $respostaField == 8 |
                                        $respostaField == 9 | $respostaField == 10 | $respostaField == 11 | $respostaField == 12) {
                                    ?> 
                                    <?php echo $linhaTrSeparadoraSmall; ?>
                                    <tr style="<?php echo $cssCinzaBg . $linhaTr; ?>">
                                        <td>
                                            <?php
                                            echo $boxInicioLinha;
                                            // BOX 1
                                            if (get_field('newsletter_acontece1_data')) {
                                                echo $boxAgendaAbre;
                                                echo $cssBoxData . get_field('newsletter_acontece1_data') . '</p>';
                                                echo $cssBoxLink . get_field('newsletter_acontece1_link') . '">' . get_field('newsletter_acontece1_nome') . '</a>';
                                            } else {
                                                echo $boxAgendaAbreNO;
                                                echo $boxDataNo;
                                                echo $boxNameNO;
                                            }
                                            echo $boxAgendaFecha;
                                            echo $boxSeparator;
                                            // BOX 2
                                            if (get_field('newsletter_acontece2_data')) {
                                                echo $boxAgendaAbre;
                                                echo $cssBoxData . get_field('newsletter_acontece2_data') . '</p>';
                                                echo $cssBoxLink . get_field('newsletter_acontece2_link') . '">' . get_field('newsletter_acontece2_nome') . '</a>';
                                            } else {
                                                echo $boxAgendaAbreNO;
                                                echo $boxDataNo;
                                                echo $boxNameNO;
                                            }
                                            echo $boxAgendaFecha;
                                            echo $boxSeparator;
                                            // BOX 3
                                            if (get_field('newsletter_acontece3_data')) {
                                                echo $boxAgendaAbre;
                                                echo $cssBoxData . get_field('newsletter_acontece3_data') . '</p>';
                                                echo $cssBoxLink . get_field('newsletter_acontece3_link') . '">' . get_field('newsletter_acontece3_nome') . '</a>';
                                            } else {
                                                echo $boxAgendaAbreNO;
                                                echo $boxDataNo;
                                                echo $boxNameNO;
                                            }
                                            echo $boxAgendaFecha;
                                            echo $boxSeparator;
                                            // BOX 4
                                            if (get_field('newsletter_acontece4_data')) {
                                                echo $boxAgendaAbre;
                                                echo $cssBoxData . get_field('newsletter_acontece4_data') . '</p>';
                                                echo $cssBoxLink . get_field('newsletter_acontece4_link') . '">' . get_field('newsletter_acontece4_nome') . '</a>';
                                            } else {
                                                echo $boxAgendaAbreNO;
                                                echo $boxDataNo;
                                                echo $boxNameNO;
                                            }
                                            echo $boxAgendaFecha;
                                            echo $boxFimLinha;
                                            ?>
                                        </td>
                                    </tr>
                                    <?php
                                } // IF da Linha
                                ?>
                                <?php
                                if ($respostaField == 5 | $respostaField == 6 | $respostaField == 7 | $respostaField == 8 |
                                        $respostaField == 9 | $respostaField == 10 | $respostaField == 11 | $respostaField == 12) {
                                    ?> 
                                    <?php echo $linhaTrSeparadoraSmall; ?>
                                    <tr style="<?php echo $cssCinzaBg . $linhaTr; ?>">
                                        <td style="<?php echo $boxApagalinha2; ?>">
                                            <?php
                                            echo $boxInicioLinha;
                                            // BOX 5
                                            if (get_field('newsletter_acontece5_data')) {
                                                echo $boxAgendaAbre;
                                                echo $cssBoxData . get_field('newsletter_acontece5_data') . '</p>';
                                                echo $cssBoxLink . get_field('newsletter_acontece5_link') . '">' . get_field('newsletter_acontece5_nome') . '</a>';
                                            } else {
                                                echo $boxAgendaAbreNO;
                                                echo $boxDataNo;
                                                echo $boxNameNO;
                                            }
                                            echo $boxAgendaFecha;
                                            echo $boxSeparator;
                                            // BOX 6
                                            if (get_field('newsletter_acontece6_data')) {
                                                echo $boxAgendaAbre;
                                                echo $cssBoxData . get_field('newsletter_acontece6_data') . '</p>';
                                                echo $cssBoxLink . get_field('newsletter_acontece6_link') . '">' . get_field('newsletter_acontece6_nome') . '</a>';
                                            } else {
                                                echo $boxAgendaAbreNO;
                                                echo $boxDataNo;
                                                echo $boxNameNO;
                                            }
                                            echo $boxAgendaFecha;
                                            echo $boxSeparator;
                                            // BOX 7
                                            if (get_field('newsletter_acontece7_data')) {
                                                echo $boxAgendaAbre;
                                                echo $cssBoxData . get_field('newsletter_acontece7_data') . '</p>';
                                                echo $cssBoxLink . get_field('newsletter_acontece7_link') . '">' . get_field('newsletter_acontece7_nome') . '</a>';
                                            } else {
                                                echo $boxAgendaAbreNO;
                                                echo $boxDataNo;
                                                echo $boxNameNO;
                                            }
                                            echo $boxAgendaFecha;
                                            echo $boxSeparator;
                                            // BOX 8
                                            if (get_field('newsletter_acontece8_data')) {
                                                echo $boxAgendaAbre;
                                                echo $cssBoxData . get_field('newsletter_acontece8_data') . '</p>';
                                                echo $cssBoxLink . get_field('newsletter_acontece8_link') . '">' . get_field('newsletter_acontece8_nome') . '</a>';
                                            } else {
                                                echo $boxAgendaAbreNO;
                                                echo $boxDataNo;
                                                echo $boxNameNO;
                                            }
                                            echo $boxAgendaFecha;
                                            echo $boxFimLinha;
                                            ?>
                                        </td>
                                    </tr>
                                    <?php
                                } // IF da Linha
                                ?>
                                <?php
                                if ($respostaField == 9 | $respostaField == 10 | $respostaField == 11 | $respostaField == 12) {
                                    ?> 
                                    <?php echo $linhaTrSeparadoraSmall; ?>
                                    <tr style="<?php echo $cssCinzaBg . $linhaTr; ?>">
                                        <td style="<?php echo $boxApagalinha3; ?>">
                                            <?php
                                            echo $boxInicioLinha;
                                            // BOX 9
                                            if (get_field('newsletter_acontece9_data')) {
                                                echo $boxAgendaAbre;
                                                echo $cssBoxData . get_field('newsletter_acontece9_data') . '</p>';
                                                echo $cssBoxLink . get_field('newsletter_acontece9_link') . '">' . get_field('newsletter_acontece9_nome') . '</a>';
                                            } else {
                                                echo $boxAgendaAbreNO;
                                                echo $boxDataNo;
                                                echo $boxNameNO;
                                            }
                                            echo $boxAgendaFecha;
                                            echo $boxSeparator;
                                            // BOX 10
                                            if (get_field('newsletter_acontece10_data')) {
                                                echo $boxAgendaAbre;
                                                echo $cssBoxData . get_field('newsletter_acontece10_data') . '</p>';
                                                echo $cssBoxLink . get_field('newsletter_acontece10_link') . '">' . get_field('newsletter_acontece10_nome') . '</a>';
                                            } else {
                                                echo $boxAgendaAbreNO;
                                                echo $boxDataNo;
                                                echo $boxNameNO;
                                            }
                                            echo $boxAgendaFecha;
                                            echo $boxSeparator;
                                            // BOX 11
                                            if (get_field('newsletter_acontece11_data')) {
                                                echo $boxAgendaAbre;
                                                echo $cssBoxData . get_field('newsletter_acontece11_data') . '</p>';
                                                echo $cssBoxLink . get_field('newsletter_acontece11_link') . '">' . get_field('newsletter_acontece11_nome') . '</a>';
                                            } else {
                                                echo $boxAgendaAbreNO;
                                                echo $boxDataNo;
                                                echo $boxNameNO;
                                            }
                                            echo $boxAgendaFecha;
                                            echo $boxSeparator;
                                            // BOX 12
                                            if (get_field('newsletter_acontece12_data')) {
                                                echo $boxAgendaAbre;
                                                echo $cssBoxData . get_field('newsletter_acontece12_data') . '</p>';
                                                echo $cssBoxLink . get_field('newsletter_acontece12_link') . '">' . get_field('newsletter_acontece12_nome') . '</a>';
                                            } else {
                                                echo $boxAgendaAbreNO;
                                                echo $boxDataNo;
                                                echo $boxNameNO;
                                            }
                                            echo $boxAgendaFecha;
                                            echo $boxFimLinha;
                                            ?>
                                        </td>
                                    </tr>
                                    <?php echo $linhaTrSeparadoraSmall; ?>
                                    <?php
                                } // IF da Linha
                                ?>
                                <?php
                                //
                                //
                                //
                                //
                                //
                                //
                                ?>    
                                <?php echo $linhaTrSeparadoraSmall; ?>
                                <tr>
                                    <td>

                                        <table <?php echo $padraoTable; ?> style="width: 100%; <?php echo $cssCinzaBg; ?>">
                                            <tr style="height: 30px;">
                                                <td style="width: 3%;">&nbsp;</td>
                                                <td style="width: 94%;">&nbsp;</td>
                                                <td style="width: 3%;">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 3%;">&nbsp;</td>
                                                <td style="width: 94%;">
                                                    <h1 style="<?php echo $cssTitlepadrao5; ?>">SIGA-NOS E TENHA AS MELHORES DICAS</h1>
                                                </td>
                                                <td style="width: 3%;">&nbsp;</td>
                                            </tr>
                                            <tr style="height: 15px;">
                                                <td style="width: 3%;">&nbsp;</td>
                                                <td style="width: 94%;">&nbsp;</td>
                                                <td style="width: 3%;">&nbsp;</td>
                                            </tr>
                                        </table>
                                        <?php
                                        $cssLogoSocial = 'display: block; width: 50px; height: 50px; background-color: #ccc; margin: 0 auto; margin-bottom: 5px;';
                                        $linksSociais = 'font-size: 11px; color: #333333; font-family: century gothic, arial, sans-serif; text-decoration: none; text-align: center; display: block; margin: 0;';
                                        ?>    
                                        <table <?php echo $padraoTable; ?> style="<?php echo $cssCinzaBg; ?>">
                                            <tr>
                                                <td style="width: 3%;">&nbsp;</td>
                                                <td style="width: 21.25%">
                                                    <img src="<?php echo get_bloginfo('template_url'); ?>/images/logo_facebook.gif" style="<?php echo $cssLogoSocial; ?>" alt="Logo Facebook" />
                                                </td>
                                                <td style="width: 3%;">&nbsp;</td>
                                                <td style="width: 21.25%">
                                                    <img src="<?php echo get_bloginfo('template_url'); ?>/images/logo_twitter.gif" style="<?php echo $cssLogoSocial; ?>" alt="Logo Twitter" />
                                                </td>
                                                <td style="width: 3%;">&nbsp;</td>
                                                <td style="width: 21.25%">
                                                    <img src="<?php echo get_bloginfo('template_url'); ?>/images/logo_youtube.gif" style="<?php echo $cssLogoSocial; ?>" alt="logo Youtube" />
                                                </td>
                                                <td style="width: 3%;">&nbsp;</td>
                                                <td style="width: 21.25%">
                                                    <img src="<?php echo get_bloginfo('template_url'); ?>/images/logo_linkedin.gif" style="<?php echo $cssLogoSocial; ?>" alt="Logo Linkedin" />
                                                </td>
                                                <td style="width: 3%;">&nbsp;</td>
                                            </tr>
                                            <tr>
                                                <td style="width: 3%;">&nbsp;</td>
                                                <td style="width: 21.25%">
                                                    <a href="https://www.facebook.com/AnhembiParque" target="blank" style="<?php echo $linksSociais; ?>">Anhembi</a>
                                                    <a href="https://www.facebook.com/TurismoemSP" target="blank" style="<?php echo $linksSociais; ?>">Cidade de S&atilde;o Paulo</a>
                                                    <a href="https://www.facebook.com/autodromodeinterlagos" target="blank" style="<?php echo $linksSociais; ?>">Interlagos</a>
                                                    <a href="https://www.facebook.com/experiencesaopaulo" target="blank" style="<?php echo $linksSociais; ?>">Experience S&atilde;o Paulo</a>
                                                    <a href="https://www.facebook.com/spturis" target="blank" style="<?php echo $linksSociais; ?>">SPTuris</a>
                                                    <a href="https://www.facebook.com/observatoriodeturismoeeventos" target="blank" style="<?php echo $linksSociais; ?>">OTE</a>
                                                </td>
                                                <td style="width: 3%;">&nbsp;</td>
                                                <td style="width: 21.25%">
                                                    <a href="https://twitter.com/anhembiparque" target="blank" style="<?php echo $linksSociais; ?>">Anhembi</a>
                                                    <a href="https://twitter.com/turismosaopaulo" target="blank" style="<?php echo $linksSociais; ?>">Cidade de S&atilde;o Paulo</a>
                                                    <a href="https://twitter.com/InterlagosTrack" target="blank" style="<?php echo $linksSociais; ?>">Aut&oacute;dromo de Interlagos</a>
                                                    <p style="<?php echo $linksSociais; ?>">&nbsp;</p>
                                                    <p style="<?php echo $linksSociais; ?>">&nbsp;</p>
                                                    <p style="<?php echo $linksSociais; ?>">&nbsp;</p>
                                                </td>
                                                <td style="width: 3%;">&nbsp;</td>
                                                <td style="width: 21.25%">
                                                    <a href="https://www.youtube.com/user/anhembiparque" target="blank" style="<?php echo $linksSociais; ?>">Anhembi</a>
                                                    <a href="https://www.youtube.com/user/spturis" target="blank" style="<?php echo $linksSociais; ?>">Cidade de S&atilde;o Paulo</a>
                                                    <p style="<?php echo $linksSociais; ?>">&nbsp;</p>
                                                    <p style="<?php echo $linksSociais; ?>">&nbsp;</p>
                                                    <p style="<?php echo $linksSociais; ?>">&nbsp;</p>
                                                    <p style="<?php echo $linksSociais; ?>">&nbsp;</p>
                                                </td>
                                                <td style="width: 3%;">&nbsp;</td>
                                                <td style="width: 21.25%">
                                                    <a href="https://www.linkedin.com/company/s-o-paulo-turismo-s.a.?trk=tyah&trkInfo=idx%3A1-1-1%2CtarId%3A1425652122649%2Ctas%3Asao+paulo+turismo" target="blank" style="<?php echo $linksSociais; ?>">SPTuris</a>
                                                    <p style="<?php echo $linksSociais; ?>">&nbsp;</p>
                                                    <p style="<?php echo $linksSociais; ?>">&nbsp;</p>
                                                    <p style="<?php echo $linksSociais; ?>">&nbsp;</p>
                                                    <p style="<?php echo $linksSociais; ?>">&nbsp;</p>
                                                    <p style="<?php echo $linksSociais; ?>">&nbsp;</p>
                                                </td>
                                                <td style="width: 3%;">&nbsp;</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <?php echo $linhaTrSeparadoraSmall; ?>
                                <?php echo $linhaTrSeparadoraSmall; ?>
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
                                <?php echo $linhaTrSeparadoraSmall2; ?>
                                <tr style="background-color: <?php echo $cssVerdeBg; ?>;">
                                    <td>
                                        <a href="http://imprensa.spturis.com.br" style="<?php echo $cssNoBorder . $cssNoUnderline . $cssBranco; ?>">
                                            <h2 style="<?php echo $cssTitlepadrao6; ?>">IMPRENSA.SPTURIS.COM</h2>
                                        </a>
                                    </td>
                                </tr>
                                <?php echo $linhaTrSeparadoraSmall2; ?>
                                <?php
                                //
                                //
                                //
                                //
                                //
                                //
                                ?>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </body>
</html>  