<div class="content_block block-1x">
    <div class="tabcordion cspTabs cspTabs-azul">
        <ul class="nav nav-tabs cspTabs_ul cspTabs_ul-azul">
            <?php
            $contador1 = 1;
            $argsHistoria = array(
                'post_type' => 'historia',
                'posts_per_page' => -1
            );
            //
            global $queryHistoria1;
            $queryHistoria1 = new WP_Query($argsHistoria);
            while ($queryHistoria1->have_posts()) : $queryHistoria1->the_post();
                //
                if ($contador1 == 1) {
                    $active = ' active';
                } else {
                    $active = ' ';
                }
                //
                $historiaID = get_the_ID();
                $historiaTITLE = get_field_object($lang_title, $historiaID);
                echo '<li class="' . $active . '"><a data-target=".' . $historiaID . '">' . $historiaTITLE['value'] . '</a></li>';
                //
                $contador1 = $contador1 + 1;
            endwhile;
            wp_reset_query();
            ?>
        </ul>
        <div class="tab-content cspTabs_containers">
            <?php
            $contador2 = 1;
            global $queryHistoria2;
            $queryHistoria2 = new WP_Query($argsHistoria);
            while ($queryHistoria2->have_posts()) : $queryHistoria2->the_post();
                //
                if ($contador2 == 1) {
                    $active = ' active';
                } else {
                    $active = ' ';
                }
                //
                $historiaID = get_the_ID();
                $historiaCONTENT = get_field_object($lang_content, $historiaID);
                $historiaTITLE = get_field_object($lang_title, $historiaID);
                //
                echo '<div class="tab-content-item ' . $historiaID . ' ' . $active . ' cspTabs_containers_item_noBoarder">';
                echo '<div class="wpWysiwyg wpWysiwyg-azul">';
                //
                //echo '<h1>' . $historiaTITLE['value'] . '</h1>';
                echo $historiaCONTENT['value'];
                //
                echo '</div>';
                echo '</div>';
                //
                $contador2 = $contador2 + 1;
            endwhile;
            wp_reset_query();
            ?>
        </div>
    </div>
</div>