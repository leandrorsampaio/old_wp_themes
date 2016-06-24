<?php
//Sidebar Programador
include('sidebar-programador.php');
include('sidebar-idioma.php');
?>
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
                        <h1 id="fittext-Z1"><span class="tipo1">S&atilde;o<br/></span><span class="tipo1">Paulo<br/></span><span class="tipo5"><br/></span><span class="tipo2">LGBT<br/></span><span class="tipo2">Guide</span></h1>
                    </a>
                </header>
            </li>
            <li class="Z2-slider tipo3x1 alturabox">
                <?php get_sidebar('slider'); ?>
            </li>
            <li class="A1-cultura tipo1x1 alturabox">
                <a href=" <?php echo get_permalink(208); ?>" class="tipoLink" alt="Masp. Photo: Jos&eacute; Cordeiro|SP Turis" title="Photo: Jos&eacute; Cordeiro|SP Turis">
                    <p id="fittext-A1">Cul<br/>ture</p>
                </a>
            </li>
            <li class="A2-compras tipo1x1 alturabox">
                <a href="<?php echo get_permalink(207); ?>" class="tipoLink" alt="Masp Fair. Photo: Caio Pimenta|SP Turis" title="Photo: Caio Pimenta|SP Turis">
                    <p id="fittext-A2">Shop<br/>ping</p>
                </a>
            </li>
            <li class="A3-gastronomia tipo1x1 alturabox">
                <a href="<?php echo get_permalink(212); ?>" class="tipoLink" alt="City Market. Photo: Jos&eacute; Cordeiro|SP Turis" title="Photo: Jos&eacute; Cordeiro|SP Turis">
                    <p id="fittext-A3">Gas<br/>tro<br/>nomy</p>
                </a>
            </li>
            <li class="A4-noite tipo1x1 alturabox">
                <a href="<?php echo get_permalink(213); ?>" class="tipoLink" alt="Couple at Avenida Paulista. Photo: Jose&eacute; Cordeiro|SP Turis" title="Photo: Jos&eacute; Cordeiro|SP Turis">
                    <p id="fittext-A4">Nig<br/>ht</p>
                </a>
            </li>
            <li class="B1-eventos tipo1x1 alturabox">
                <a href="<?php echo get_permalink(337); ?>" class="tipoLink" alt="Couple holding hands. Photo: Jos&eacute; Cordeiro|SP Turis" title="Photo: Jos&eacute; Cordeiro|SP Turis">
                    <p id="fittext-B1">Even<br/>ts</p>
                </a>
            </li>
            <li class="B2-top10 tipo1x1 alturabox">
                <a href="<?php echo get_permalink(215); ?>" class="tipoLink"alt="Couple. Photo: Lucas Kiler|SP Turis" title="Photo: Lucas Kiler|SP Turis">
                    <p id="fittext-B2">Top<br/>10</p>
                </a>
            </li>
            <li class="B3-diversao tipo1x1 alturabox">
                <a href="<?php echo get_permalink(209); ?>" class="tipoLink" alt="Skol Sensation. Photo: Caio Pimenta|SP Turis" title="Photo: Caio Pimenta|SP Turis">
                    <p id="fittext-B3">Joy &<br/>Fun</p>
                </a>
            </li>
            <li class="B4-social tipo1x1 alturabox">
                <a href="<?php echo get_permalink(211); ?>" class="tipoLink" alt="Couple holding hands. Photo: Jos&eacute; Cordeiro|SP Turis" title="Photo: Jos&eacute; Cordeiro|SP Turis">
                    <p id="fittext-B4">Face <span>/</span>
                        <br/>
                        Twit<br/>ter</p></a>
            </li>
            <li class="C1-roteiro tipo2x1 alturabox">
                <a href="<?php echo get_permalink(214); ?>" class="tipoLink" alt="Batman's Alley. Photo: Caio Pimenta|SP Turis" title="Photo: Caio Pimenta|SP Turis">
                    <p id="fittext-C1"><span>One<br/></span><span>week</span> <span>in<br/></span><span>S&atilde;o Paulo</span></p>
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