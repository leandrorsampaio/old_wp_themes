<!--
<div class="content_block block-4x-3 block-first">
    <div class="content_block_box">
        <div class="layoutpadrao_text wpWysiwyg wpWysiwyg-vermelho">
<?php echo get_field($content_theContent); ?>
        </div>
    </div>
</div>
<div class="content_block block-3x block-last">
    <div class="content_block_box">
<?php
// Sidebar
include ($sidebarInclude);
?>
    </div>
</div>
-->






<?php
$wpFildBanco2 = get_field('atrativos_id');

$json = bancoDeDados($wpFildBanco2);

// se há resultado:
foreach ($json as $obj_evento) {
    ?>    

    <div class="content_block block-4x-3 block-first">
        <div class="content_block_box">




            <article class="atrativoMain">
                <?php
                if (get_field('atrativos_img')) {
                    $atrativoMain_headerBG = get_field('atrativos_img');
                    $atrativoMain_headerCredito = '<p class="atrativoMain_header_credito">' . get_field('atrativos_creditos') . '<p>';
                } else {
                    $atrativoMain_headerBG = get_bloginfo('template_url') . '/images/600_pattern_VERMELHO.png';
                    $atrativoMain_headerCredito = '';
                }
                ?>
                <a href="#">
                    <div class="atrativoMain_header" style="background-image: url(<?php echo $atrativoMain_headerBG; ?>);">
                        <p class="atrativoMain_header_credito"><?php echo $atrativoMain_headerCredito; ?></p>
                        <div class="atrativosVerFotos">
                            <p>VER + FOTOS</p>
                        </div>
                    </div>
                </a>
                <div class="atrativoMain_content wpWysiwyg">
                    <?php
                    if ($idioma == 3) {
                        $eve_desc = 'eve_descricao_es';
                    } elseif ($idioma == 2) {
                        $eve_desc = 'eve_descricao_en';
                    } else {
                        $eve_desc = 'eve_descricao_br';
                    }
                    echo $obj_evento->$eve_desc;
                    ?>
                </div>
                <div class="atrativoMain_galeria ">

                </div>
            </article>




        </div>
    </div>        
    <div class="content_block block-3x block-last">
        <div class="content_block_box">


            <aside class="atrativoSidebar wpWysiwyg-branco">

                <h1>
                    <?php
                    echo "CATEGORIA " . $catText = categoriasDB($obj_evento->cat_id);
                    ?>
                </h1>

                <p>
                    <?php
                    echo $obj_evento->loc_endereco . ', ' . $obj_evento->loc_numero . '</br>Bairro: ' . $obj_evento->loc_bairro . ' - Regi&atilde;o ' . $obj_evento->loc_zona;
                    ?>

                    <?php
                    echo $obj_evento->eve_telefones;
                    ?>

                    <?php
                    echo $obj_evento->eve_telefones1;
                    ?>

                    <?php
                    echo $obj_evento->eve_celulares;
                    ?>

                    <?php
                    echo $obj_evento->eve_email;
                    ?>

                    <?php
                    echo $obj_evento->eve_audiencia;
                    ?>

                    <?php
                    echo $obj_evento->eve_capacidade;
                    ?>

                    <?php
                    echo $obj_evento->eve_bilheteria;
                    ?>

                    <?php
                    if ($idioma == 3) {
                        $eve_website = 'eve_website_es';
                    } elseif ($idioma == 2) {
                        $eve_website = 'eve_website_en';
                    } else {
                        $eve_website = 'eve_website_br';
                    }
                    echo $obj_evento->$eve_website;
                    ?>

                    <?php
                    if ($idioma == 3) {
                        $eve_horario = 'eve_horario_es';
                    } elseif ($idioma == 2) {
                        $eve_horario = 'eve_horario_en';
                    } else {
                        $eve_horario = 'eve_horario_br';
                    }
                    echo $obj_evento->$eve_horario;
                    ?>

                    <!--LOCAL-->
                    <?php
                    if ($idioma == 3) {
                        $loc_nome = 'loc_nome_es';
                    } elseif ($idioma == 2) {
                        $loc_nome = 'loc_nome_en';
                    } else {
                        $loc_nome = 'loc_nome_br';
                    }
                    echo $obj_evento->$loc_nome;
                    ?>
                </p>

            </aside>


        </div>




        <div class="content_block_box">

            <?php
            $cont = 0;
            foreach ($json as $obj_evento) {

                if ($cont == 50) {
                    //nada    
                } else {
                    echo '<aside class="atrativoAqui wpWysiwyg-branco">';
                    echo '<h1>AQUI VOC&Ecirc; ENCONTRA:</h1>';
                    if ($eve_acessibilidade == 0) {
                        echo '<div class="atrativosIconeBox">';
                        echo '<img class="atrativosIcone" src="' . get_bloginfo('template_url') . '/images/acessibilidade_vermelho.png" alt="Acessibilidade" />';
                        echo '</div>';
                    } else {
                        //nada  
                    }
                    if ($eve_estacionamento == 0) {
                        echo '<div class="atrativosIconeBox">';
                        echo '<img class="atrativosIcone" src="' . get_bloginfo('template_url') . '/images/estacionamento_vermelho.png" alt="Estacionamento" />';
                        echo '</div>';
                    } else {
                        //nada  
                    }
                    if ($eve_desconto == 0) {
                        echo '<div class="atrativosIconeBox">';
                        echo '<img class="atrativosIcone" src="' . get_bloginfo('template_url') . '/images/desconto_vermelho.png" alt="Desconto" />';
                        echo '</div>';
                    } else {
                        //nada  
                    }
                    echo '</aside>';
                }
                $cont++;
            }
            ?>


            <div class="content_block_box">


                <aside class="atrativoArredores">

                    <h1>
                        VER ARREDORES
                    </h1>

                </aside>

            </div>


        </div>



    </div>






    <div class="content_block block-2x block-first">
        <div class="content_block_box">
            <h5 class="atrativosBoxTitle">Acontece aqui</h5>
            <div class="atrativoAcontece">

            </div>
        </div>
    </div>


    <div class="content_block block-2x block-last">
        <div class="content_block_box">
            <h5 class="atrativosBoxTitle">Veja o que os viajantes dizem</h5>
            <div class="atrativoComents">

            </div>
        </div>
    </div>




    <div class="content_block block-1x">
        <div class="content_block_box">
            <h5 class="atrativosBoxTitle">Conhe&ccedil;a Tamb&eacute;m</h5>
            <div class="atrativoReadmore">

            </div>

        </div>
    </div>








    <?php
}
?>


