<div class="interna_topo_nav">
    <?php include('sidebar-idioma.php'); ?>
    <nav>
        <ul>
            <li class="A1-cultura tipoInterno1">
                <?php
                if ($idioma == 'pt') {
                    echo '<a href="';
                    echo get_permalink(15) . '"';
                    echo 'class="tipoLinkInterno">';
                    echo '<p>Cul<br/>tura</p>';
                    echo '</a>';
                } else {
                    echo '<a href="';
                    echo get_permalink(208) . '"';
                    echo 'class="tipoLinkInterno">';
                    echo '<p>Cul<br/>ture</p>';
                    echo '</a>';
                }
                ?>
            </li>
            <li class="A2-compras tipoInterno1">
                <?php
                if ($idioma == 'pt') {
                    echo '<a href="';
                    echo get_permalink(31) . '"';
                    echo 'class="tipoLinkInterno">';
                    echo '<p>Com<br/>pras</p>';
                    echo '</a>';
                } else {
                    echo '<a href="';
                    echo get_permalink(207) . '"';
                    echo 'class="tipoLinkInterno">';
                    echo '<p>shop<br/>ping<p>';
                    echo '</a>';
                }
                ?>
            </li>
            <li class="A3-gastronomia tipoInterno1">
                <?php
                if ($idioma == 'pt') {
                    echo '<a href="';
                    echo get_permalink(33) . '"';
                    echo 'class="tipoLinkInterno">';
                    echo '<p>Gas<br/>tro<br/>nomia</p>';
                    echo '</a>';
                } else {
                    echo '<a href="';
                    echo get_permalink(212) . '"';
                    echo 'class="tipoLinkInterno">';
                    echo '<p>Gas<br/>tro<br/>nomy</p>';
                    echo '</a>';
                }
                ?>                  
            </li>
            <li class="A4-noite tipoInterno1">
                <?php
                if ($idioma == 'pt') {
                    echo '<a href="';
                    echo get_permalink(35) . '"';
                    echo 'class="tipoLinkInterno">';
                    echo '<p>Noi<br/>te</p>';
                    echo '</a>';
                } else {
                    echo '<a href="';
                    echo get_permalink(213) . '"';
                    echo 'class="tipoLinkInterno">';
                    echo '<p>Ni<br/>ght</p>';
                    echo '</a>';
                }
                ?>    
            </li>
            <li class="B1-eventos tipoInterno1">
                <?php
                if ($idioma == 'pt') {
                    echo '<a href="';
                    echo get_permalink(37) . '"';
                    echo 'class="tipoLinkInterno">';
                    echo '<p>Even<br/>tos</p>';
                    echo '</a>';
                } else {
                    echo '<a href="';
                    echo get_permalink(337) . '"';
                    echo 'class="tipoLinkInterno">';
                    echo '<p>Even<br/>ts</p>';
                    echo '</a>';
                }
                ?>  
            </li>
            <li class="B2-top10 tipoInterno1">
                <?php
                if ($idioma == 'pt') {
                    echo '<a href="';
                    echo get_permalink(39) . '"';
                    echo 'class="tipoLinkInterno">';
                    echo '<p>Top<br/>10</p>';
                    echo '</a>';
                } else {
                    echo '<a href="';
                    echo get_permalink(215) . '"';
                    echo 'class="tipoLinkInterno">';
                    echo '<p>Top<br/>10</p>';
                    echo '</a>';
                }
                ?>  
            </li>
            <li class="B3-diversao tipoInterno1">
                <?php
                if ($idioma == 'pt') {
                    echo '<a href="';
                    echo get_permalink(50) . '"';
                    echo 'class="tipoLinkInterno">';
                    echo '<p>Diver<br/>s&atilde;o</p>';
                    echo '</a>';
                } else {
                    echo '<a href="';
                    echo get_permalink(209) . '"';
                    echo 'class="tipoLinkInterno">';
                    echo '<p>Joy &<br/>Fun</p>';
                    echo '</a>';
                }
                ?> 
            </li>
            <li class="C1-roteiro tipoInterno2">
                <?php
                if ($idioma == 'pt') {
                    echo '<a href="';
                    echo get_permalink(52) . '"';
                    echo 'class="tipoLinkInterno">';
                    echo '<p>Roteiro<br/>de uma<br/>semana</p>';
                    echo '</a>';
                } else {
                    echo '<a href="';
                    echo get_permalink(214) . '"';
                    echo 'class="tipoLinkInterno">';
                    echo '<p>One<br/>week in<br/>S&atilde;o Paulo</p>';
                    echo '</a>';
                }
                ?>
            </li>
        </ul>
    </nav>
</div>
