<div class="accordion" id="accordion2">
    <?php include('sidebar-idioma.php'); ?>
    <div class="accordion-group">
        <div class="accordion-heading">
            <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                <img src="<?php bloginfo('template_url'); ?>/images/arrow_down.png"/>
            </a>
        </div>
        <div id="collapseOne" class="accordion-body collapse">
            <div class="accordion-inner">
                <ul>
                    <li id="menuCollapse_link1">
                        <?php
                        if ($idioma == 'pt') {
                            echo '<a href="';
                            echo get_permalink(15) . '"';
                            echo '">';
                            echo 'Cultura';
                            echo '</a>';
                        } else {
                            echo '<a href="';
                            echo get_permalink(208) . '"';
                            echo '">';
                            echo 'Culture';
                            echo '</a>';
                        }
                        ?>
                    </li>
                    <li id="menuCollapse_link2">
                        <?php
                        if ($idioma == 'pt') {
                            echo '<a href="';
                            echo get_permalink(31) . '"';
                            echo '">';
                            echo 'Compras';
                            echo '</a>';
                        } else {
                            echo '<a href="';
                            echo get_permalink(207) . '"';
                            echo '">';
                            echo 'Shopping';
                            echo '</a>';
                        }
                        ?>
                    </li>
                    <li id="menuCollapse_link3">  
                        <?php
                        if ($idioma == 'pt') {
                            echo '<a href="';
                            echo get_permalink(33) . '"';
                            echo '">';
                            echo 'Gastronomia';
                            echo '</a>';
                        } else {
                            echo '<a href="';
                            echo get_permalink(212) . '"';
                            echo '">';
                            echo 'Gastronomy';
                            echo '</a>';
                        }
                        ?>
                    </li>
                    <li id="menuCollapse_link4">
                        <?php
                        if ($idioma == 'pt') {
                            echo '<a href="';
                            echo get_permalink(35) . '"';
                            echo '">';
                            echo 'Noite';
                            echo '</a>';
                        } else {
                            echo '<a href="';
                            echo get_permalink(213) . '"';
                            echo '">';
                            echo 'Night';
                            echo '</a>';
                        }
                        ?>
                    </li>
                    <li id="menuCollapse_link5">     
                        <?php
                        if ($idioma == 'pt') {
                            echo '<a href="';
                            echo get_permalink(37) . '"';
                            echo '">';
                            echo 'Eventos';
                            echo '</a>';
                        } else {
                            echo '<a href="';
                            echo get_permalink(337) . '"';
                            echo '">';
                            echo 'Events';
                            echo '</a>';
                        }
                        ?>
                    </li>
                    <li id="menuCollapse_link6">
                        <?php
                        if ($idioma == 'pt') {
                            echo '<a href="';
                            echo get_permalink(39) . '"';
                            echo '">';
                            echo 'Top 10';
                            echo '</a>';
                        } else {
                            echo '<a href="';
                            echo get_permalink(215) . '"';
                            echo '">';
                            echo 'Top 10';
                            echo '</a>';
                        }
                        ?>
                    </li>
                    <li id="menuCollapse_link7">
                        <?php
                        if ($idioma == 'pt') {
                            echo '<a href="';
                            echo get_permalink(50) . '"';
                            echo '">';
                            echo 'Divers&atilde;o';
                            echo '</a>';
                        } else {
                            echo '<a href="';
                            echo get_permalink(209) . '"';
                            echo '">';
                            echo 'Joy & Fun';
                            echo '</a>';
                        }
                        ?></li>
                    <li id="menuCollapse_link8">
                        <?php
                        if ($idioma == 'pt') {
                            echo '<a href="';
                            echo get_permalink(148) . '"';
                            echo '">';
                            echo 'Facebook/Twitter';
                            echo '</a>';
                        } else {
                            echo '<a href="';
                            echo get_permalink(211) . '"';
                            echo '">';
                            echo 'Facebook/Twitter';
                            echo '</a>';
                        }
                        ?>
                    </li>
                    <li id="menuCollapse_link9"> 
                        <?php
                        if ($idioma == 'pt') {
                            echo '<a href="';
                            echo get_permalink(52) . '"';
                            echo '">';
                            echo 'Roteiro de uma semana';
                            echo '</a>';
                        } else {
                            echo '<a href="';
                            echo get_permalink(214) . '"';
                            echo '">';
                            echo 'Onw week in S&atilde;o Paulo';
                            echo '</a>';
                        }
                        ?></li>
                </ul>
            </div>
        </div>
    </div>
</div>


