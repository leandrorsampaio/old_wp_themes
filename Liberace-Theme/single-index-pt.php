<?php get_header(); ?>
<script>
    var tamanhoTotal = $(window).height();
    var y = (tamanhoTotal * 97) / 100;
    var alturabox = y / 4;
    document.write("<div class='home' style='height:" + y + "px; width:" + y + "px;'>");
    document.write("<style>.alturabox { height:" + alturabox + "px; }</style>");
</script>
<nav>
    <div class="home_nav">
        <ul class="home_nav_ul">
            <li class="Z1-header tipo1x1 alturabox">
                <header>
                    <a href="<?php echo home_url(); ?>">
                        <h1 id="fittext-Z1"><span class="tipo1">S&atilde;o<br/></span><span class="tipo1">Paulo<br/></span><span class="tipo5"><br/></span><span class="tipo2">Guia<br/></span><span class="tipo2">LGBT</span></h1>
                    </a>
                </header>
            </li>
            <li class="Z2-slider tipo3x1 alturabox">
                <?php get_sidebar('slider'); ?>
            </li>
            <li class="A1-cultura tipo1x1 alturabox">
                <a href=" <?php echo get_permalink(15); ?>" class="tipoLink" alt="Masp. Foto: Jos&eacute; Cordeiro|SP Turis" title="Foto: Jos&eacute; Cordeiro|SP Turis">
                    <p id="fittext-A1">Cul<br/>tura</p>
                </a>
            </li>
            <li class="A2-compras tipo1x1 alturabox">
                <a href="<?php echo get_permalink(31); ?>" class="tipoLink" alt="Feira Masp. Foto: Caio Pimenta|SP Turis" title="Foto: Caio Pimenta|SP Turis">
                    <p id="fittext-A2">Com<br/>pras</p>
                </a>
            </li>
            <li class="A3-gastronomia tipo1x1 alturabox">
                <a href="<?php echo get_permalink(33); ?>" class="tipoLink" alt="Mercad&atilde;o. Foto: Jos&eacute; Cordeiro|SP Turis" title="Foto: Jos&eacute; Cordeiro|SP Turis">
                    <p id="fittext-A3">Gas<br/>tro<br/>nomia</p>
                </a>
            </li>
            <li class="A4-noite tipo1x1 alturabox">
                <a href="<?php echo get_permalink(35); ?>" class="tipoLink" alt="Casal na Avenida Paulista. Foto: Jose&eacute; Cordeiro|SP Turis" title="Foto: Jos&eacute; Cordeiro|SP Turis">
                    <p id="fittext-A4">Noi<br/>te</p>
                </a>
            </li>
            <li class="B1-eventos tipo1x1 alturabox">
                <a href="<?php echo get_permalink(37); ?>" class="tipoLink" alt="Casal de m&atilde;os dadas. Foto: Jos&eacute; Cordeiro|SP Turis" title="Foto: Jos&eacute; Cordeiro|SP Turis">
                    <p id="fittext-B1">Even<br/>tos</p>
                </a>
            </li>
            <li class="B2-top10 tipo1x1 alturabox">
                <a href="<?php echo get_permalink(39); ?>" class="tipoLink"alt="Casal. Foto: Lucas Kiler|SP Turis" title="Foto: Lucas Kiler|SP Turis">
                    <p id="fittext-B2">Top<br/>10</p>
                </a>
            </li>
            <li class="B3-diversao tipo1x1 alturabox">
                <a href="<?php echo get_permalink(50); ?>" class="tipoLink" alt="Skol Sensation. Foto: Caio Pimenta|SP Turis" title="Foto: Caio Pimenta|SP Turis">
                    <p id="fittext-B3">Diver<br/>s&atilde;o</p>
                </a>
            </li>
            <li class="B4-social tipo1x1 alturabox">
                <a href="<?php echo get_permalink(148); ?>" class="tipoLink" alt="Casal de m&atilde;os dadas. Foto: Jos&eacute; Cordeiro|SP Turis" title="Foto: Jos&eacute; Cordeiro|SP Turis">
                    <p id="fittext-B4">Face <span>/</span>
                        <br/>
                        Twit<br/>ter</p></a>
            </li>
            <li class="C1-roteiro tipo2x1 alturabox">
                <a href="<?php echo get_permalink(52); ?>" class="tipoLink" alt="Beco do Batman. Foto: Caio Pimenta|SP Turis" title="Foto: Caio Pimenta|SP Turis">
                    <p id="fittext-C1"><span>Roteiro<br/></span><span>de</span> <span>uma<br/></span><span>semana</span></p>
                </a>
            </li>
            <script>
                var fechaDiv = "</div>";
                document.write(fechaDiv);
            </script>
            <script src="<?php bloginfo('template_url') ?>/js/jquery.fittext.js"></script>
            <script type="text/javascript">
                $("#fittext-Z1").fitText(0.35);
                $("#fittext-Z2").fitText(0.3);
                $("#fittext-A1").fitText(0.3);
                $("#fittext-A2").fitText(0.3);
                $("#fittext-A3").fitText(0.36);
                $("#fittext-A4").fitText(0.235);
                $("#fittext-B1").fitText(0.3);
                $("#fittext-B2").fitText(0.23);
                $("#fittext-B3").fitText(0.31);
                $("#fittext-B4").fitText(0.35);
                $("#fittext-C1").fitText(0.61);
            </script>
            <?php get_footer(); ?>