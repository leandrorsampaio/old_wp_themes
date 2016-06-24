





<div class="content_block block-1x">
    <div class="content_block_box box-30y atrativosHeader">




                <?php
                global $catDB;
                global $nomeDB;
                //
                //
                if ($_GET['nomeDB']) {
                    $nomeDB = $_GET['nomeDB'];
                } else {
                    $nomeDB = 'nada';
                }
                if ($_GET['catDB']) {
                    $catDB = $_GET['catDB'];
                } else {
                    $catDB = 'nada';
                }
                //
                //
                $nomeDB_link = '&nomeDB=' . $nomeDB;
                $catDB_link = '&catDB=' . $catDB;
                ?>



                <div class="atrativosBusca">

                    <h4 class="atrativosBusca_title">O que quer visitar?</h4>
                    
                    <form class="atrativosBusca_form" role="search" method="get" id="DB_atrativos" action="<?php echo $getPermalink . $idiomaURL . $nomeDB_link . $catDB_link; ?>">

                        
                        <p class="atrativosBusca_form_label">Busca</p>
                        <input class="atrativosBusca_form_nome" type="text" value="Nome de um local" name="nomeDB" maxlenght="30" onclick="this.value = ''"/>

                        <p class="atrativosBusca_form_label">Categoria</p>
                        <select class="atrativosBusca_form_select" name="catDB">
                            <option value="nada">Selecione...</option>
                            <option value="catDB_10">Cinema e Literatura</option>
                            <option value="catDB_08">Congressos</option>
                            <option value="catDB_15">Especial</option>
                            <option value="catDB_13">Esportes</option>
                            <option value="catDB_09">Exposi&ccedil;&otilde;es</option>
                            <option value="catDB_07">Feiras e Neg&oacute;cios</option>
                            <option value="catDB_16">Gastronomia</option>
                            <option value="catDB_14">Infantil</option>
                            <option value="catDB_12">M&uacute;sica e Shows</option>
                            <option value="catDB_11">Teatro e Dan&ccedil;a</option>
                        </select>



                        <input class="atrativosBusca_form_btn" type="submit" value="OK" />

                    </form>

                </div>


    </div>
</div>



<?php
$contador = 1;
$argsAtrativos = array(
    'post_type' => 'atrativos',
    'posts_per_page' => -1
);
//
global $queryAtrativos;
$queryAtrativos = new WP_Query($argsAtrativos);
while ($queryAtrativos->have_posts()) : $queryAtrativos->the_post();
    //
    $wpFildBanco = get_field('atrativos_id');
    $jsonFunc = bancoDeDados($wpFildBanco, $nomeDB, $catDB);
    //
    if ($contador == 1) {
        $classeLast = 'block-first';
    } elseif ($contador == 2) {
        $classeLast = ' ';
    } elseif ($contador == 3) {
        $classeLast = 'block-last';
    }


    /*
      $errors = array_filter($json);

      if (!empty($errors)) {
      echo 'CHEEEEIO';
      } else {
      echo 'VAZIOOOOO';
      }


      if (count($json) > 0) {
      echo 'Error';
      } else {
      echo 'No Error';
      }

      echo 'CONTA: ' . $obj_evento->eve_id;

     *   
     */
    ?>



    <div class="content_block block-3x lpgAtrativos <?php echo $classeLast; ?>">
        <a href="<?php echo get_permalink(); ?>" class="content_block_box lpgAtrativos_box">
            <?php
            $resultCard = cardsDB($jsonFunc);
            echo $resultCard;
            ?>
        </a>
    </div>
    <?php
    //
    if ($contador == 3) {
        $contador = 1;
    } else {
        $contador = $contador + 1;
    }
endwhile;
wp_reset_query();
?>