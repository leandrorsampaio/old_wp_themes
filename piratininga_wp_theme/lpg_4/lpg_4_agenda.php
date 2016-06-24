<div class="content_block block-1x">
    <div class="homeAgenda">
        <div class="catsBoxes">
            <a class="catsBoxes_item"></a>
            <a class="catsBoxes_item"></a>
            <a class="catsBoxes_item"></a>
            <a class="catsBoxes_item"></a>
            <a class="catsBoxes_item"></a>
            <a class="catsBoxes_item"></a>
            <a class="catsBoxes_item"></a>
            <a class="catsBoxes_item"></a>
        </div>
        <div class="agendaBusca">
            <form>
                <div class="agendaBusca_exemplo1">
                    <p>Teste: </p>
                    <input type="text" value="Teste" />
                </div>
                <div class="agendaBusca_exemplo1">
                    <p>Teste: </p>
                    <input type="text" value="Teste" />
                </div>
                <div class="agendaBusca_exemplo1">
                    <p>Teste: </p>
                    <input type="text" value="Teste" />
                </div>
                <div class="agendaBusca_exemplo1">
                    <p>Teste: </p>
                    <input type="text" value="Teste" />
                </div>
            </form>
        </div>
        <div class="homeAgenda_cards">
            <h2 class="homeAgenda_cards_title">Julho de 2015</h2>
            <?php
            $argsTOPMES = array(
                'post_type' => array('novidades', 'agenda'),
                'posts_per_page' => 20,
                'orderby' => 'rand'
            );
            //
            global $queryTOPMES;
            $queryTOPMES = new WP_Query($argsTOPMES);
            while ($queryTOPMES->have_posts()) : $queryTOPMES->the_post();
                //
                $topMesID = get_the_ID();
                $topMesTITLE = get_field_object($lang_title, $topMesID);
                //
                echo '<a href="' . get_permalink() . '" class="cardAgenda_item">';
                echo '<div class="cardAgenda_item_img"' .
                ' style="background-image: url(' . get_field('chamadasAcontece_img') . ');">'
                . '</div>';
                echo '<div class="cardAgenda_item_content">';
                echo '<h5>' . $topMesTITLE['value'] . '</h5>';
                echo '<p>Categoria</p>';
                echo '</div>';
                echo '</a>';
            //
            endwhile;
            wp_reset_query();
            ?>            
        </div>



    </div>
</div>