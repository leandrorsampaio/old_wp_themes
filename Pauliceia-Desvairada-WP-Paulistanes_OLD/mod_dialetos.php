<?php
// MÓDULO DIALETOS DA CIDADE
// CHAMADA NA HOME
?>
<div class="index_content_boxDialetos_carrossel_lista">

    <ul id="carousel" class="elastislide-list">
        <?php
        //--------  Query Dialetos
        global $dialetos;
        $dialetos = new WP_Query('post_type=dialetos&orderby=rand&posts_per_page=-1');
        while ($dialetos->have_posts()) : $dialetos->the_post();
            ?>
            <li>
                <a class="dialetos_imagem" href="<?php echo bloginfo('url') . '/?page_id=15'; ?>">
                    <img src="<?php the_field('regiao_img'); ?>" alt="<?php the_field('regiao_creditos'); ?>" title="<?php the_field('regiao_creditos'); ?>" />
                </a>
            </li>
            <?php
        endwhile;
        wp_reset_query();
        ?>
    </ul>
    <!-- End Elastislide Carousel -->
    <script type="text/javascript">
        $( '#carousel' ).elastislide();
    </script>      
</div>




