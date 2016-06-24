<?php

// Funcao Escolhe a Cor
function escolheCor($varCor) {
    //
    $escolherCor = $varCor;
    //
    // CORES
    $vermelho = '#cc1c1e';
    $rosa = '#ad005d';
    $laranja = '#f15a22';
    $amarelo = '#faa41a';
    $verde_claro = '#0095a9';
    $verde_escuro = '#008c4c';
    $azul_claro = '#354da1';
    $azul_escuro = '#1e2358';
    $roxo = '#642165';
    $branco = '#fff';
    //
    if ($escolherCor == 'vermelho') {
        $cor = $vermelho;
    } elseif ($escolherCor == 'rosa') {
        $cor = $rosa;
    } elseif ($escolherCor == 'laranja') {
        $cor = $laranja;
    } elseif ($escolherCor == 'amarelo') {
        $cor = $amarelo;
    } elseif ($escolherCor == 'verde_claro') {
        $cor = $verde_claro;
    } elseif ($escolherCor == 'verde_escuro') {
        $cor = $verde_escuro;
    } elseif ($escolherCor == 'azul_claro') {
        $cor = $azul_claro;
    } elseif ($escolherCor == 'azul_escuro') {
        $cor = $azul_escuro;
    } elseif ($escolherCor == 'roxo') {
        $cor = $roxo;
    } else {
        $cor = $branco;
    }
    return $cor;
}

//
$padraoTable = 'cellpadding="0" cellspacing="0" border="0" align="center"';
$padraoStyle = 'border-collapse:collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;';
$padraoTexto = 'text-decoration:none; font-family: arial, sans-serif; text-align: center; display: block; width: 100%; color:#666;';
$padraoLink = 'text-decoration:none; font-family: arial, sans-serif; text-align: center; display: block; width: 100%;';
$padraoImg = 'border:0; display:block; margin: 0 auto;';
$linhaPontilhada = '<p style="width: 95%;display: block;height: 1px;margin: 0 auto;border-bottom: 1px dashed #666;"></p>';
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
        <title>SPTuris e Voc&ecirc;</title>
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
    <body style="border: 0; padding: 0; margin: 0; background-color: <?php echo escolheCor(get_field('voce_corbg')); ?>;">
        <table <?php echo $padraoTable; ?>
            style="<?php echo $padraoStyle; ?>
            width:100%;
            background-color: <?php echo escolheCor(get_field('voce_corbg')); ?>;
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
                            background-color: <?php echo escolheCor(get_field('voce_corbg')); ?>;
                            ">
                            <tbody>
                                <tr style="height: 15px">
                                    <td></td>
                                </tr>
                                <tr style="height: 138px">
                                    <td>
                                        <a href="http://voce.spturis.com.br/wp-content/uploads/2015/03/turorial2.pdf" target="_blank" style="<?php echo $padraoLink; ?>">
                                            <img style="<?php echo $padraoImg; ?>" src="<?php echo get_bloginfo('template_url'); ?>/images/voce_header.gif" alt="SPTuris e Voce" />
                                        </a>
                                    </td>
                                </tr>
                                <tr style="height: 35px">
                                    <td style="background-color: <?php echo escolheCor(get_field('voce_corbg_info')); ?>;">
                                        <p style="<?php echo $padraoTexto; ?> font-size: 14px; text-transform: uppercase; color: #fff; font-weight: bold;">
                                            INFORMA&Ccedil;&Atilde;O AOS COLABORADORES - <?php echo get_field('voce_header'); ?>
                                        </p>
                                    </td>
                                </tr>   
                                <tr>
                                    <td style="background-color: #fff;">
                                        <a href="<?php echo get_field('voce_destaque1_link'); ?>" target="_blank" style="<?php echo $padraoLink; ?>">
                                            <img src="<?php echo get_field('voce_destaque1_img'); ?>" alt="<?php echo get_field('voce_destaque1_titulo'); ?>" />
                                        </a>
                                        <a href="<?php echo get_field('voce_destaque1_link'); ?>" style="<?php echo $padraoTexto; ?> font-weight: bold; font-size: 22px; padding: 15px 0 30px 0;
                                           color: <?php echo escolheCor(get_field('voce_destaque1_cor')); ?>;
                                           ">
                                               <?php echo get_field('voce_destaque1_titulo'); ?> 
                                        </a>
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
                                    <td style="background-color: #fff;">
                                        <?php echo $linhaPontilhada; ?>
                                    </td>
                                </tr>
                                <tr style="height: 35px; background-color: #fff;">
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
                                <tr>
                                    <td style="background-color: #fff;">
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
                                            background-color: #fff;
                                            ">
                                            <tbody>
                                                <tr>
                                                    <td style="width:50px;"></td>
                                                    <td style="width:225px;">
                                                        <a href="<?php echo get_field('voce_linha2_n1_link'); ?>" target="_blank" style="<?php echo $padraoLink; ?>">
                                                            <img src="<?php echo get_field('voce_linha2_n1_img'); ?>" alt="<?php echo get_field('voce_linha2_n1_titulo'); ?>" style="<?php echo $padraoImg; ?>" />
                                                        </a>
                                                        <a href="<?php echo get_field('voce_linha2_n1_link'); ?>" style="<?php echo $padraoTexto; ?> font-weight: bold; font-size: 22px; padding: 15px 0 30px 0;
                                                           color: <?php echo escolheCor(get_field('voce_linha2_n1_cor')); ?>;
                                                           ">
                                                               <?php echo get_field('voce_linha2_n1_titulo'); ?> 
                                                        </a>
                                                    </td>
                                                    <td style="width:50px;"></td>
                                                    <td style="width:225px;">
                                                        <a href="<?php echo get_field('voce_linha2_n2_link'); ?>" target="_blank" style="<?php echo $padraoLink; ?>">
                                                            <img src="<?php echo get_field('voce_linha2_n2_img'); ?>" alt="<?php echo get_field('voce_linha2_n2_titulo'); ?>" style="<?php echo $padraoImg; ?>" />
                                                        </a>
                                                        <a href="<?php echo get_field('voce_linha2_n2_link'); ?>" style="<?php echo $padraoTexto; ?> font-weight: bold; font-size: 22px; padding: 15px 0 30px 0;
                                                           color: <?php echo escolheCor(get_field('voce_linha2_n2_cor')); ?>;
                                                           ">
                                                               <?php echo get_field('voce_linha2_n2_titulo'); ?> 
                                                        </a>                                                               
                                                    </td>
                                                    <td style="width:50px;"></td>
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
                                <tr style="height: 15px; background-color: #fff;">
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="background-color: #fff;">
                                        <?php echo $linhaPontilhada; ?>
                                    </td>
                                </tr>
                                <tr style="height: 35px; background-color: #fff;">
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="background-color: #fff;">
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
                                            background-color: #fff;
                                            ">
                                            <tbody>
                                                <tr>
                                                    <td style="width:20px;"></td>
                                                    <td style="width:125px;">
                                                        <a href="<?php echo get_field('voce_linha2_n3_link'); ?>" target="_blank" style="<?php echo $padraoLink; ?>">
                                                            <img src="<?php echo get_field('voce_linha2_n3_img'); ?>" alt="<?php echo get_field('voce_linha2_n3_titulo'); ?>" style="<?php echo $padraoImg; ?>" />
                                                        </a>
                                                        <a href="<?php echo get_field('voce_linha2_n3_link'); ?>" style="<?php echo $padraoTexto; ?>
                                                           font-size: 15px; font-weight: bold; padding: 10px 0 10px 0;
                                                           color: <?php echo escolheCor(get_field('voce_linha2_n3_cor')); ?>;
                                                           ">
                                                               <?php echo get_field('voce_linha2_n3_titulo'); ?> 
                                                        </a>
                                                    </td>
                                                    <td style="width:20px;"></td>
                                                    <td style="width:125px;">
                                                        <a href="<?php echo get_field('voce_linha2_n4_link'); ?>" target="_blank" style="<?php echo $padraoLink; ?>">
                                                            <img src="<?php echo get_field('voce_linha2_n4_img'); ?>" alt="<?php echo get_field('voce_linha2_n4_titulo'); ?>" style="<?php echo $padraoImg; ?>" />
                                                        </a>
                                                        <a href="<?php echo get_field('voce_linha2_n4_link'); ?>" style="<?php echo $padraoTexto; ?>
                                                           font-size: 15px; font-weight: bold; padding: 10px 0 10px 0;
                                                           color: <?php echo escolheCor(get_field('voce_linha2_n4_cor')); ?>;
                                                           ">
                                                               <?php echo get_field('voce_linha2_n4_titulo'); ?>
                                                        </a>   
                                                    </td>
                                                    <td style="width:20px;"></td>
                                                    <td style="width:125px;">
                                                        <a href="<?php echo get_field('voce_linha2_n5_link'); ?>" target="_blank" style="<?php echo $padraoLink; ?>">
                                                            <img src="<?php echo get_field('voce_linha2_n5_img'); ?>" alt="<?php echo get_field('voce_linha2_n5_titulo'); ?>" style="<?php echo $padraoImg; ?>" />
                                                        </a>
                                                        <a href="<?php echo get_field('voce_linha2_n5_link'); ?>" style="<?php echo $padraoTexto; ?>
                                                           font-size: 15px; font-weight: bold; padding: 10px 0 10px 0;
                                                           color: <?php echo escolheCor(get_field('voce_linha2_n5_cor')); ?>;
                                                           ">
                                                               <?php echo get_field('voce_linha2_n5_titulo'); ?> 
                                                        </a>
                                                    </td>
                                                    <td style="width:20px;"></td>
                                                    <td style="width:125px;">
                                                        <a href="<?php echo get_field('voce_linha2_n6_link'); ?>" target="_blank" style="<?php echo $padraoLink; ?>">
                                                            <img src="<?php echo get_field('voce_linha2_n6_img'); ?>" alt="<?php echo get_field('voce_linha2_n6_titulo'); ?>" style="<?php echo $padraoImg; ?>" />
                                                        </a>
                                                        <a href="<?php echo get_field('voce_linha2_n6_link'); ?>" style="<?php echo $padraoTexto; ?>
                                                           font-size: 15px; font-weight: bold; padding: 10px 0 10px 0;
                                                           color: <?php echo escolheCor(get_field('voce_linha2_n6_cor')); ?>;
                                                           ">
                                                               <?php echo get_field('voce_linha2_n6_titulo'); ?>  
                                                        </a>
                                                    </td>
                                                    <td style="width:20px;"></td>
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
                                <tr style="height: 15px; background-color: #fff;">
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="background-color: #fff;">
                                        <?php echo $linhaPontilhada; ?>
                                    </td>
                                </tr>
                                <tr style="height: 35px; background-color: #fff;">
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="background-color: #fff;">
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
                                            background-color: #fff;
                                            ">
                                            <tbody>
                                                <tr>
                                                    <td style="width:20px;"></td>
                                                    <td style="width:280px;">
                                                        <a href="<?php echo get_field('voce_linha2_r1_link'); ?>" target="_blank" style="<?php echo $padraoLink; ?>">
                                                            <img src="<?php echo get_field('voce_linha2_r1_img'); ?>" alt="Destaque" style="<?php echo $padraoImg; ?>" />
                                                        </a>
                                                    </td>
                                                    <td style="width:280px;">
                                                        <a href="<?php echo get_field('voce_linha2_r2_link'); ?>" target="_blank" style="<?php echo $padraoLink; ?>">
                                                            <img src="<?php echo get_field('voce_linha2_r2_img'); ?>" alt="Destaque" style="<?php echo $padraoImg; ?>" />
                                                        </a>
                                                    </td>
                                                    <td style="width:20px;"></td>
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
                                <tr style="height: 30px; background-color: #fff;">
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="background-color: #fff;">
                                        <?php echo $linhaPontilhada; ?>
                                    </td>
                                </tr>
                                <tr style="height: 30px; background-color: #fff;">
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
                                <tr style="background-color: #fff; color: <?php echo escolheCor(get_field('voce_corbg')); ?>;">
                                    <td>
                                        <p style="<?php echo $padraoTexto; ?> font-size: 25px; color:#666;">
                                            SIGA-NOS E TENHA AS MELHORES DICAS                                                
                                        </p>
                                    </td>
                                </tr>
                                <tr style="height: 30px; background-color: #fff;">
                                    <td></td>
                                </tr>
                                <tr style="background-color: #fff;">
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
                                        $cssLogoSocial = 'display: block; width: 50px; height: 50px; background-color: #ccc; margin: 0 auto; margin-bottom: 5px;';
                                        $linksSociais = 'font-size: 11px; color: #333333; text-align:center; font-family: century gothic, arial, sans-serif; text-decoration: none; display: block; margin: 0 auto;';
                                        ?>    
                                        <table <?php echo $padraoTable; ?> style="background-color: #fff;">
                                            <tbody>
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
                                                        <p style="<?php echo $padraoTexto; ?> text-align:left;">
                                                            <a href="https://www.facebook.com/AnhembiParque" target="blank" style="<?php echo $linksSociais; ?>">Anhembi</a>
                                                            <a href="https://www.facebook.com/TurismoemSP" target="blank" style="<?php echo $linksSociais; ?>">Cidade de S&atilde;o Paulo</a>
                                                            <a href="https://www.facebook.com/autodromodeinterlagos" target="blank" style="<?php echo $linksSociais; ?>">Interlagos</a>
                                                            <a href="https://www.facebook.com/experiencesaopaulo" target="blank" style="<?php echo $linksSociais; ?>">Experience S&atilde;o Paulo</a>
                                                            <a href="https://www.facebook.com/spturis" target="blank" style="<?php echo $linksSociais; ?>">SPTuris</a>
                                                            <a href="https://www.facebook.com/observatoriodeturismoeeventos" target="blank" style="<?php echo $linksSociais; ?>">OTE</a>
                                                        <p>
                                                    </td>
                                                    <td style="width: 3%;">&nbsp;</td>
                                                    <td style="width: 21.25%">
                                                        <p style="<?php echo $padraoTexto; ?> text-align:left;">
                                                            <a href="https://twitter.com/anhembiparque" target="blank" style="<?php echo $linksSociais; ?>">Anhembi</a>
                                                            <a href="https://twitter.com/turismosaopaulo" target="blank" style="<?php echo $linksSociais; ?>">Cidade de S&atilde;o Paulo</a>
                                                            <a href="https://twitter.com/InterlagosTrack" target="blank" style="<?php echo $linksSociais; ?>">Aut&oacute;dromo de Interlagos</a>
                                                        </p>
                                                        <p style="<?php echo $linksSociais; ?>">&nbsp;</p>
                                                        <p style="<?php echo $linksSociais; ?>">&nbsp;</p>
                                                        <p style="<?php echo $linksSociais; ?>">&nbsp;</p>
                                                    </td>
                                                    <td style="width: 3%;">&nbsp;</td>
                                                    <td style="width: 21.25%">
                                                        <p style="<?php echo $padraoTexto; ?> text-align:left;">
                                                            <a href="https://www.youtube.com/user/anhembiparque" target="blank" style="<?php echo $linksSociais; ?>">Anhembi</a>
                                                            <a href="https://www.youtube.com/user/spturis" target="blank" style="<?php echo $linksSociais; ?>">Cidade de S&atilde;o Paulo</a>
                                                        </p>
                                                        <p style="<?php echo $linksSociais; ?>">&nbsp;</p>
                                                        <p style="<?php echo $linksSociais; ?>">&nbsp;</p>
                                                        <p style="<?php echo $linksSociais; ?>">&nbsp;</p>
                                                        <p style="<?php echo $linksSociais; ?>">&nbsp;</p>
                                                    </td>
                                                    <td style="width: 3%;">&nbsp;</td>
                                                    <td style="width: 21.25%">
                                                        <p style="<?php echo $padraoTexto; ?> text-align:left;">
                                                            <a href="https://www.linkedin.com/company/s-o-paulo-turismo-s.a.?trk=tyah&trkInfo=idx%3A1-1-1%2CtarId%3A1425652122649%2Ctas%3Asao+paulo+turismo" target="blank" style="<?php echo $linksSociais; ?>">SPTuris</a>
                                                        </p>
                                                        <p style="<?php echo $linksSociais; ?>">&nbsp;</p>
                                                        <p style="<?php echo $linksSociais; ?>">&nbsp;</p>
                                                        <p style="<?php echo $linksSociais; ?>">&nbsp;</p>
                                                        <p style="<?php echo $linksSociais; ?>">&nbsp;</p>
                                                        <p style="<?php echo $linksSociais; ?>">&nbsp;</p>
                                                    </td>
                                                    <td style="width: 3%;">&nbsp;</td>
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
                                <tr style="height: 30px; background-color: #fff;">
                                    <td></td>
                                </tr>
                                <tr>
                                    <td style="background-color: #fff;">
                                        <?php echo $linhaPontilhada; ?>
                                    </td>
                                </tr>
                                <tr style="height: 30px; background-color: #fff;">
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
                                        <table <?php echo $padraoTable; ?> style="background-color:#fff; width: 100%">
                                            <tbody>
                                                <tr>
                                                    <td style="width: 3%;"></td>
                                                    <td style="width: 94%;">
                                                        <a style="text-decoration:none;
                                                           display: block;
                                                           float: left;"
                                                           href="http://www.cidadedesaopaulo.com">
                                                            <img src="<?php echo get_bloginfo('template_url'); ?>/images/cidade.png" style="border:0;" alt="Logo Cidade de S&atilde;o Paulo" />
                                                        </a>
                                                        <a style="text-decoration:none;
                                                           display: block;
                                                           float: left;
                                                           margin: 10px 0 0 0;"
                                                           href="http://www.autodromodeinterlagos.com.br/">
                                                            <img src="<?php echo get_bloginfo('template_url'); ?>/images/autodromo_newlogo.png" style="border:0;" alt="Logo Aut&oacute;dromo de Interlagos" />
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
                                <tr style="height: 30px; background-color: #fff;">
                                    <td></td>
                                </tr>
                                <tr style="background-color: #fff;">
                                    <td style="<?php echo $padraoTexto; ?> font-size: 11px;">
                                        <?php echo get_field('newsletter_expediente'); ?>
                                    </td>
                                </tr>
                                <tr style="height: 45px; background-color: #fff;">
                                    <td></td>
                                </tr>
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