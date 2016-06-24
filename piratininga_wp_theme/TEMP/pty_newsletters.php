<?php
$padraoTable = 'cellpadding="0" cellspacing="0" border="0" align="center"';
$padraoStyle = 'border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;';
$padraoStyleInterna = 'width: 100%; border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt; margin: 0 auto; background-color: #fff;';
$linhaTr = 'width: 100%;';
$linhaTrSeparadora = '<tr style="width: 100%; height:45px;"><td>&nbsp;</td></tr>';
$linhaTrSeparadoraSmall = '<tr style="width: 100%; height:5px;"><td></td></tr>';
$linhaTrSeparadoraSmall2 = '<tr style="width: 100%; height:15px;"><td></td></tr>';
$linhaTrSeparadoraBig = '<tr style="width: 100%; height:50px;"><td>&nbsp;</td></tr>';
$separadorTd = '<td style="width: 20px;">&nbsp;</td>';
$separadorTdSmall = '<td style="width: 15px;">&nbsp;</td>';
$separadorTdBig = '<td style="width: 30px;">&nbsp;</td>';
$passeiolinhaextra = '<tr>' . $separadorTdBig . '<td style="width: 580px; height: 30px;">' . $separadorTdBig . '</tr>';
//
//
$cssFonte = 'font-family: century gothic, arial, sans-serif; font-weight: lighter; ';
$cssAlinhaDireita = 'text-align: right; ';
$cssAlinhaEsquerda = 'text-align: left; ';
$cssAlinhaCentro = 'text-align: center; ';
$cssCinzaBg = '#F4F4F4; ';
$cssAzul = 'color: #003E6C; ';
$cssPreto = 'color: #333333; ';
$cssBranco = 'color: #ffffff; ';
$cssMargemTexto = 'margin-left: 10px; margin-right: 10px; ';
$cssNoUnderline = 'text-decoration: none; ';
$cssNoBorder = 'border: 0; ';
$cssFontTitle = 'font-size: 35px; ';
$cssUppercase = 'text-transform: uppercase; ';
$cssTitlepadrao = $cssAlinhaCentro . $cssAzul . $cssFonte . $cssFontTitle . $cssUppercase;
$cssTitlepadrao2 = $cssAlinhaCentro . $cssAzul . $cssFonte . 'font-size: 25px; ' . $cssUppercase;
$cssTitlepadrao3 = $cssAlinhaCentro . 'color: #ffffff; ' . $cssFonte . 'font-size: 45px; ' . $cssUppercase;
$cssSombra = 'display:block; -webkit-box-shadow: 0 0 15px 1px rgba(0,0,0,0.3); box-shadow: 0 0 15px 1px rgba(0,0,0,0.3);';
$cssImgBorderZero = 'style="border:0;"';
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>Newslleter da cidade de S&atilde;o Paulo</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <?php
    $corFundo = get_field('newsletter_bg');
    if ($corFundo == 'amarelo') {
        $corHexa = '#FBB814';
        $logoCSP = get_bloginfo('template_url') . '/images/newsletter_logocsp_amarelo.png';
        $bgGeral = 'newsletter_bg_amarelo';
    } elseif ($corFundo == 'vermelho') {
        $corHexa = '#e30613';
        $logoCSP = get_bloginfo('template_url') . '/images/newsletter_logocsp_vermelho.png';
        $bgGeral = 'newsletter_bg_vermelho';
    } elseif ($corFundo == 'verde') {
        $corHexa = '#65BB46';
        $logoCSP = get_bloginfo('template_url') . '/images/newsletter_logocsp_verde.png';
        $bgGeral = 'newsletter_bg_verde';
    } else {
        $corHexa = '#133F6B';
        $logoCSP = get_bloginfo('template_url') . '/images/newsletter_logocsp_azul.png';
        $bgGeral = 'newsletter_bg_azul';
    }
    ?>
    <body style="border: 0; padding: 0; margin: 0;">
        <table <?php echo $padraoTable; ?>
            style="width:100%; background-color: <?php echo $corHexa; ?>; background-image: url(<?php echo get_bloginfo('template_url'); ?>/images/<?php echo $bgGeral; ?>.gif);"
            >
            <tbody>
                <tr style="width:100%; background-color: <?php echo $corHexa; ?>; background-image: url(<?php echo get_bloginfo('template_url'); ?>/images/<?php echo $bgGeral; ?>.gif);">
                    <td style="width:100%; background-color: <?php echo $corHexa; ?>; background-image: url(<?php echo get_bloginfo('template_url'); ?>/images/<?php echo $bgGeral; ?>.gif);">
                        <table <?php echo $padraoTable; ?>
                            style="
                            <?php echo $padraoStyle; ?>
                            margin: 0 auto;
                            width: 640px;
                            background-color: <?php echo $corHexa; ?>;
                            ">
                            <tbody>
                                <?php echo $linhaTrSeparadoraSmall2; ?>
                                <tr>
                                    <td>
                                        <table <?php echo $padraoTable; ?>>
                                            <tr>
                                                <?php echo $separadorTdBig; ?>
                                                <td style="width: 290px">
                                                    <a href="http://www.cidadedesaopaulo.com" target="_blank">
                                                        <img src="<?php echo $logoCSP; ?>" alt="Cidade de S&atilde;o Paulo" <?php echo $cssImgBorderZero; ?> />
                                                    </a>
                                                </td>
                                                <td style="width: 290px">
                                                    <p style="font-size: 11px; color:#fff; <?php echo $cssFonte . $cssAlinhaDireita; ?>">ESTA NEWSLETTER, COM AS MELHORES DICAS DE<br/>S&Atilde;O PAULO, &Eacute; ENVIADA QUINZENALMENTE.</p>
                                                    <h1 style="font-size: 24px; color:#fff; font-weight:lighter; <?php echo $cssFonte . $cssAlinhaDireita; ?>"><?php the_field('newsletter_data'); ?></h1>
                                                </td>
                                                <?php echo $separadorTdBig; ?>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                                <?php echo $linhaTrSeparadoraSmall2; ?>
                                <tr>
                                    <td>
                                        <table <?php echo $padraoTable; ?>
                                            style="
                                            <?php echo $padraoStyle; ?>
                                            margin: 0 auto;
                                            width: 640px;
                                            background-color: <?php echo $cssCinzaBg; ?>;
                                            <?php echo $cssSombra; ?>
                                            ">
                                            <tbody>
                                                <tr style="<?php echo $linhaTr; ?>">
                                                    <td>
                                                        <a href="<?php the_field('newsletter_imagemprincipal_link'); ?>" target="_blank">
                                                            <img src="<?php the_field('newsletter_imagemprincipal_img'); ?>" alt="Destaque principal" <?php echo $cssImgBorderZero; ?> />
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php echo $linhaTrSeparadora; ?>
                                                <tr style="<?php echo $linhaTr; ?>">
                                                    <td>
                                                        <table <?php echo $padraoTable; ?>>
                                                            <tr>
                                                                <?php echo $separadorTd; ?>
                                                                <td style=" width: 290px; background-color: #fff;">
                                                                    <a style="<?php echo $cssNoUnderline . $cssNoBorder; ?>" href="<?php the_field('newsletter_destaque1_link'); ?>" target="_blank">
                                                                        <img src="<?php the_field('newsletter_destaque1_img'); ?>" alt="<?php the_field('newsletter_destaque1_titulo'); ?>" <?php echo $cssImgBorderZero; ?> />
                                                                    </a>
                                                                    <a style="<?php echo $cssNoUnderline . $cssNoBorder . $cssAzul; ?>" href="<?php the_field('newsletter_destaque1_link'); ?>" target="_blank">
                                                                        <h2 style="font-size: 22px; <?php echo $cssAzul . $cssMargemTexto . $cssAlinhaLeft . $cssFonte . $cssNoUnderline; ?>"><?php the_field('newsletter_destaque1_titulo'); ?></h2>
                                                                    </a>
                                                                    <p style="font-size: 14px; <?php echo $cssPreto . $cssMargemTexto . $cssAlinhaLeft . $cssFonte . $cssNoUnderline; ?>"><?php the_field('newsletter_destaque1_texto'); ?></p>
                                                                </td>
                                                                <?php echo $separadorTd; ?>
                                                                <td style=" width: 290px; background-color: #fff;">
                                                                    <a style="<?php echo $cssNoUnderline . $cssNoBorder; ?>" href="<?php the_field('newsletter_destaque2_link'); ?>" target="_blank">
                                                                        <img src="<?php the_field('newsletter_destaque2_img'); ?>" alt="<?php the_field('newsletter_destaque2_titulo'); ?>" <?php echo $cssImgBorderZero; ?> />
                                                                    </a>
                                                                    <a style="<?php echo $cssNoUnderline . $cssNoBorder . $cssAzul; ?>" href="<?php the_field('newsletter_destaque2_link'); ?>" target="_blank">
                                                                        <h2 style="font-size: 22px; <?php echo $cssAzul . $cssMargemTexto . $cssAlinhaLeft . $cssFonte . $cssNoUnderline; ?>"><?php the_field('newsletter_destaque2_titulo'); ?></h2>
                                                                    </a>
                                                                    <p style="font-size: 14px; <?php echo $cssPreto . $cssMargemTexto . $cssAlinhaLeft . $cssFonte . $cssNoUnderline; ?>"><?php the_field('newsletter_destaque2_texto'); ?></p>
                                                                </td>
                                                                <?php echo $separadorTd; ?>
                                                            </tr>
                                                            <tr>
                                                                <?php echo $separadorTd; ?>
                                                                <td style=" width: 290px; background-color: #fff;">&nbsp;</td>
                                                                <?php echo $separadorTd; ?>
                                                                <td style=" width: 290px; background-color: #fff;">&nbsp;</td>
                                                                <?php echo $separadorTd; ?>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <?php echo $linhaTrSeparadoraBig; ?>
                                                <tr style="<?php echo $linhaTr; ?>">
                                                    <td>
                                                        <h1 style="<?php echo $cssTitlepadrao; ?>">Atra&ccedil;&otilde;es da Cidade</h1>
                                                    </td>
                                                </tr>
                                                <?php echo $linhaTrSeparadoraSmall2; ?>
                                                <tr style="<?php echo $linhaTr; ?>">
                                                    <td>
                                                        <table <?php echo $padraoTable; ?>>
                                                            <tr>
                                                                <?php echo $separadorTd; ?>
                                                                <td style=" width: 190px; background-color: #fff;">
                                                                    <a style="<?php echo $cssNoUnderline . $cssNoBorder; ?>" href="<?php the_field('newsletter_destaque3_link'); ?>" target="_blank">
                                                                        <img src="<?php the_field('newsletter_destaque3_img'); ?>" alt="<?php the_field('newsletter_destaque3_titulo'); ?>" <?php echo $cssImgBorderZero; ?> />
                                                                    </a>
                                                                    <a style="<?php echo $cssNoUnderline . $cssNoBorder . $cssAzul; ?>" href="<?php the_field('newsletter_destaque3_link'); ?>" target="_blank">
                                                                        <h2 style="font-size: 22px; <?php echo $cssAzul . $cssMargemTexto . $cssAlinhaLeft . $cssFonte . $cssNoUnderline; ?>"><?php the_field('newsletter_destaque3_titulo'); ?></h2>
                                                                    </a>
                                                                    <p style="font-size: 14px; <?php echo $cssPreto . $cssMargemTexto . $cssAlinhaLeft . $cssFonte . $cssNoUnderline; ?>"><?php the_field('newsletter_destaque3_texto'); ?></p>
                                                                </td>
                                                                <?php echo $separadorTdSmall; ?>
                                                                <td style=" width: 190px; background-color: #fff;">
                                                                    <a style="<?php echo $cssNoUnderline . $cssNoBorder; ?>" href="<?php the_field('newsletter_destaque4_link'); ?>" target="_blank">
                                                                        <img src="<?php the_field('newsletter_destaque4_img'); ?>" alt="<?php the_field('newsletter_destaque4_titulo'); ?>" <?php echo $cssImgBorderZero; ?> />
                                                                    </a>
                                                                    <a style="<?php echo $cssNoUnderline . $cssNoBorder . $cssAzul; ?>" href="<?php the_field('newsletter_destaque4_link'); ?>" target="_blank">
                                                                        <h2 style="font-size: 22px; <?php echo $cssAzul . $cssMargemTexto . $cssAlinhaLeft . $cssFonte . $cssNoUnderline; ?>"><?php the_field('newsletter_destaque4_titulo'); ?></h2>
                                                                    </a>
                                                                    <p style="font-size: 14px; <?php echo $cssPreto . $cssMargemTexto . $cssAlinhaLeft . $cssFonte . $cssNoUnderline; ?>"><?php the_field('newsletter_destaque4_texto'); ?></p>
                                                                </td>
                                                                <?php echo $separadorTdSmall; ?>
                                                                <td style=" width: 190px; background-color: #fff;">
                                                                    <a style="<?php echo $cssNoUnderline . $cssNoBorder; ?>" href="<?php the_field('newsletter_destaque5_link'); ?>" target="_blank">
                                                                        <img src="<?php the_field('newsletter_destaque5_img'); ?>" alt="<?php the_field('newsletter_destaque5_titulo'); ?>" <?php echo $cssImgBorderZero; ?> />
                                                                    </a>
                                                                    <a style="<?php echo $cssNoUnderline . $cssNoBorder . $cssAzul; ?>" href="<?php the_field('newsletter_destaque5_link'); ?>" target="_blank">
                                                                        <h2 style="font-size: 22px; <?php echo $cssAzul . $cssMargemTexto . $cssAlinhaLeft . $cssFonte . $cssNoUnderline; ?>"><?php the_field('newsletter_destaque5_titulo'); ?></h2>
                                                                    </a>
                                                                    <p style="font-size: 14px; <?php echo $cssPreto . $cssMargemTexto . $cssAlinhaLeft . $cssFonte . $cssNoUnderline; ?>"><?php the_field('newsletter_destaque5_texto'); ?></p>
                                                                </td>
                                                                <?php echo $separadorTd; ?>
                                                            </tr>
                                                            <tr>
                                                                <?php echo $separadorTd; ?>
                                                                <td style=" width: 190px; background-color: #fff;"></td>
                                                                <?php echo $separadorTdSmall; ?>
                                                                <td style=" width: 190px; background-color: #fff;"></td>
                                                                <?php echo $separadorTdSmall; ?>
                                                                <td style=" width: 190px; background-color: #fff;"></td>
                                                                <?php echo $separadorTd; ?>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <?php echo $linhaTrSeparadoraBig; ?>
                                                <tr style="<?php echo $linhaTr; ?>">
                                                    <td>
                                                        <h1 style="<?php echo $cssTitlepadrao; ?>">Passeio Imperd&iacute;vel</h1>
                                                    </td>
                                                </tr>
                                                <?php echo $linhaTrSeparadoraSmall2; ?>
                                                <tr style="background-color: #ffffff; <?php echo $linhaTr; ?>">
                                                    <td>
                                                        <a href="<?php the_field('newsletter_passeio_link'); ?>" target="_blank">
                                                            <img src="<?php the_field('newsletter_passeio_imagem'); ?>" alt="Passeio Imperd&iacute;vel" <?php echo $cssImgBorderZero; ?> />
                                                        </a>
                                                        <table <?php echo $padraoTable; ?>>
                                                            <?php echo $passeiolinhaextra; ?>
                                                            <tr>
                                                                <?php echo $separadorTdBig; ?>
                                                                <td style="width: 580px">
                                                                    <p style="font-size: 18px; line-height: 28px; <?php echo $cssPreto . $cssMargemTexto . $cssAlinhaCentro . $cssFonte . $cssNoUnderline; ?>"><?php the_field('newsletter_passeio_texto'); ?></p>
                                                                </td>
                                                                <?php echo $separadorTdBig; ?>
                                                            </tr>
                                                            <?php echo $passeiolinhaextra; ?>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <?php echo $linhaTrSeparadoraBig; ?>
                                                <tr style="<?php echo $linhaTr; ?>">
                                                    <td>
                                                        <h1 style="<?php echo $cssTitlepadrao; ?>">#Sigaasdicas</h1>
                                                    </td>
                                                </tr>
                                                <?php echo $linhaTrSeparadoraSmall2; ?>
                                                <tr style="<?php echo $linhaTr; ?>">
                                                    <td>
                                                        <table <?php echo $padraoTable; ?>>
                                                            <tr>
                                                                <?php echo $separadorTd; ?>
                                                                <td style=" width: 190px; background-color: #fff;">
                                                                    <a style="<?php echo $cssNoUnderline . $cssNoBorder; ?>" href="<?php the_field('newsletter_parceiro1_link'); ?>" target="_blank">
                                                                        <img src="<?php the_field('newsletter_parceiro1_imagem'); ?>" alt="<?php the_field('newsletter_parceiro1_nome'); ?>" <?php echo $cssImgBorderZero; ?> />
                                                                    </a>
                                                                    <a style="<?php echo $cssNoUnderline . $cssNoBorder . $cssAzul; ?>" href="<?php the_field('newsletter_parceiro1_link'); ?>" target="_blank">
                                                                        <h2 style="font-size: 22px; <?php echo $cssAzul . $cssMargemTexto . $cssAlinhaCentro . $cssFonte . $cssNoUnderline; ?>"><?php the_field('newsletter_parceiro1_nome'); ?></h2>
                                                                    </a>
                                                                </td>
                                                                <?php echo $separadorTdSmall; ?>
                                                                <td style=" width: 190px; background-color: #fff;">
                                                                    <a style="<?php echo $cssNoUnderline . $cssNoBorder; ?>" href="<?php the_field('newsletter_parceiro2_link'); ?>" target="_blank">
                                                                        <img src="<?php the_field('newsletter_parceiro2_imagem'); ?>" alt="<?php the_field('newsletter_parceiro2_nome'); ?>" <?php echo $cssImgBorderZero; ?> />
                                                                    </a>
                                                                    <a style="<?php echo $cssNoUnderline . $cssNoBorder . $cssAzul; ?>" href="<?php the_field('newsletter_parceiro2_link'); ?>" target="_blank">
                                                                        <h2 style="font-size: 22px; <?php echo $cssAzul . $cssMargemTexto . $cssAlinhaCentro . $cssFonte . $cssNoUnderline; ?>"><?php the_field('newsletter_parceiro2_nome'); ?></h2>
                                                                    </a>
                                                                </td>
                                                                <?php echo $separadorTdSmall; ?>
                                                                <td style=" width: 190px; background-color: #fff;">
                                                                    <a style="<?php echo $cssNoUnderline . $cssNoBorder; ?>" href="<?php the_field('newsletter_parceiro3_link'); ?>" target="_blank">
                                                                        <img src="<?php the_field('newsletter_parceiro3_imagem'); ?>" alt="<?php the_field('newsletter_parceiro3_nome'); ?>" <?php echo $cssImgBorderZero; ?> />
                                                                    </a>
                                                                    <a style="<?php echo $cssNoUnderline . $cssNoBorder . $cssAzul; ?>" href="<?php the_field('newsletter_parceiro3_link'); ?>" target="_blank">
                                                                        <h2 style="font-size: 22px; <?php echo $cssAzul . $cssMargemTexto . $cssAlinhaCentro . $cssFonte . $cssNoUnderline; ?>"><?php the_field('newsletter_parceiro3_nome'); ?></h2>
                                                                    </a>
                                                                </td>
                                                                <?php echo $separadorTd; ?>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <?php echo $linhaTrSeparadoraBig; ?>
                                                <tr style="<?php echo $linhaTr; ?>">
                                                    <td>
                                                        <h1 style="<?php echo $cssTitlepadrao; ?>">ACONTECE</h1>
                                                    </td>
                                                </tr>
                                                <?php echo $linhaTrSeparadoraSmall2; ?>
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
                                                $boxSeparator = '<td style="width: 5px;">&nbsp;</td>';

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
                                                    <tr style="<?php echo $linhaTr; ?>">
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
                                                    <tr style="<?php echo $linhaTr; ?>">
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
                                                    <tr style="<?php echo $linhaTr; ?>">
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
                                                    <?php
                                                } // IF da Linha
                                                ?>
                                                <?php echo $linhaTrSeparadoraBig; ?>
                                                <tr style="<?php echo $linhaTr; ?>">
                                                    <td>
                                                        <table <?php echo $padraoTable; ?>>
                                                            <tr>
                                                                <?php echo $separadorTdBig; ?>
                                                                <td style="width: 250px">
                                                                    <h1 style="<?php echo $cssTitlepadrao2; ?>">SIGA-NOS E TENHA AS MELHORES DICAS</h1>
                                                                </td>
                                                                <?php echo $separadorTdBig; ?>
                                                                <td style="width: 300px">
                                                                    <img usemap="#Map" style=" border: 0; display: block; margin-bottom: 15px;" src="<?php echo get_bloginfo('template_url'); ?>/images/newsletter_socialicons.png" alt="Redes Sociais" />
                                                                    <map name="Map" id="Map">
                                                                        <area shape="rect" coords="14,2,56,39" href="https://twitter.com/turismosaopaulo" target="_blank" />
                                                                        <area shape="rect" coords="70,1,110,39" href="https://www.facebook.com/TurismoemSP" target="_blank" />
                                                                        <area shape="rect" coords="123,0,168,43" href="https://www.facebook.com/experiencesaopaulo" target="_blank" />
                                                                        <area shape="rect" coords="180,2,291,39" href="https://www.youtube.com/user/spturis" target="_blank" />
                                                                    </map>
                                                                </td>
                                                                <?php echo $separadorTdBig; ?>
                                                            </tr>
                                                        </table>
                                                    </td>
                                                </tr>
                                                <?php echo $linhaTrSeparadora; ?>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>                                 
                                <?php echo $linhaTrSeparadoraSmall2; ?>
                                <tr>
                                    <td>
                                        <table <?php echo $padraoTable; ?>
                                            style="
                                            <?php echo $padraoStyle; ?>
                                            margin: 0 auto;
                                            width: 640px;
                                            background-color: <?php echo $cssCinzaBg; ?>;
                                            <?php echo $cssSombra; ?>
                                            ">
                                            <tbody>
                                                <tr>
                                                    <?php echo $separadorTdBig; ?>
                                                    <td style="width: 350px">&nbsp;</td>
                                                    <?php echo $separadorTdBig; ?>
                                                    <td style="width: 200px">&nbsp;</td>
                                                    <?php echo $separadorTdBig; ?>
                                                </tr>
                                                <tr>
                                                    <?php echo $separadorTdBig; ?>
                                                    <td style="width: 350px">
                                                        <img src="<?php echo get_bloginfo('template_url'); ?>/images/newsletter_assinatura.png" alt="Cidade de S&atilde;o Paulo" usemap="#Map2" <?php echo $cssImgBorderZero; ?> />
                                                        <map name="Map2" id="Map2">
                                                            <area shape="rect" coords="2,-3,100,74" href="http://www.cidadedesaopaulo.com/" target="_blank" />
                                                            <area shape="rect" coords="137,5,231,77" href="http://spturis.com/" target="_blank" />
                                                            <area shape="rect" coords="245,1,350,72" href="http://www.capital.sp.gov.br/" target="_blank" />
                                                        </map>
                                                    </td>
                                                    <?php echo $separadorTdBig; ?>
                                                    <td style="width: 200px; font-size: 11px; margin-top: 0; margin-bottom: 0; <?php echo $cssAlinhaDireita . $cssFonte . $cssNoUnderline . $cssPreto . $cssMargemTexto; ?>">
                                                        <?php the_field('newsletter_expediente'); ?>
                                                    </td>
                                                    <?php echo $separadorTdBig; ?>
                                                </tr>
                                                <tr>
                                                    <?php echo $separadorTdBig; ?>
                                                    <td style="width: 350px">&nbsp;</td>
                                                    <?php echo $separadorTdBig; ?>
                                                    <td style="width: 200px">&nbsp;</td>
                                                    <?php echo $separadorTdBig; ?>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </td>
                                </tr>
                                <?php echo $linhaTrSeparadoraSmall2; ?>
                                <tr>
                                    <td>
                                        <a href="http://www.cidadedesaopaulo.com" style="<?php echo $cssNoBorder . $cssNoUnderline . $cssBranco; ?>" >
                                            <h2 style="<?php echo $cssTitlepadrao3 . $cssBranco; ?>">CIDADEDESAOPAULO.COM</h2>
                                        </a>
                                    </td>
                                </tr>
                                <?php echo $linhaTrSeparadoraSmall2; ?>
                            </tbody>
                        </table>
                    </td>
                </tr>
        </table>
    </body>
</html>  