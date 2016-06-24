<?php include ('sidebar-programador.php'); ?>

<div id="contentSingle_serviceBar_breadcrumb">
    <a href="<?php bloginfo('url'); ?>">Home</a> »
    <?php
    $categoria = get_the_category();
    $nomeCat = $categoria[0]->cat_name;
    //------------------- IF IS SINGLE EVENTOS
    if ($eventos) {
        ?>
        <a href="<?php echo get_permalink($home_noticias); ?>">
            Eventos</a> » 
        <a href = "<?php echo $linkTerm; ?>"><?php echo $termEvento;
        ?></a>
        <?
        //------------------- IF IS SINGLE ESPA�OS
    } elseif ($espacos) {
        ?>
        <a href = "<?php echo get_permalink($home_espacos); ?>">
            Seu Evento Aqui</a> »
        <span id="breadNolink"><?php echo $termEspaco; ?></span>
        <?
        if (is_single(array($retao, $ferradura, $completa))) {
            ?>
            »  <a href="<?php echo get_permalink($pista_aux); ?>">
                Pista Auxiliar</a>
            <?php
        } elseif (is_single(array($arqui_A, $arqui_B, $arqui_C, $arqui_M))) {
            ?>
            » <a href = "<?php echo get_permalink($arquibancadas); ?>">
                Arquibancadas</a>
            <?php
        } else {
            
        }
    }
    //----------------- IF IS SINGLE GALERIAS
    elseif (is_singular('galeria')) {
        ?>
        <a href = "<?php echo get_permalink($conheca); ?>">
            <?php echo get_the_title($conheca); ?> »
        </a>
        <a href = "<?php echo get_permalink($galeria_home); ?>">
            Galerias de Fotos</a>
        <?php
    //
    //--------------- IF IS SINGLE NOTICIAS
    //
        } elseif (is_single($noticias)) {
        ?>
        <a href = "<?php echo get_permalink($home_noticias); ?>">
            Not&iacute;cias</a> »
        <a href = "<?php echo get_category_link($categoria); ?>">
            <?php echo $nomeCat; ?></a>
        <?
    }
    //--------------------- IF IS PAGE CONHE�A INTERLAGOS 
    elseif (is_page(array($historia, $kartodromo, $circuito))) {
        ?>
        <a href = "<?php echo get_permalink($conheca); ?>">
            <?php echo get_the_title($conheca);
            ?></a> 
        <?php
    } else {
        ?>
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        <?php
    }
    ?>
</div>