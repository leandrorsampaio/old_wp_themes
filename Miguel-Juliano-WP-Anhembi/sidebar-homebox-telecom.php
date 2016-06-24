<aside id="content_bloco3_boxTelecom_Sidebar">
    <a class="content_bloco3_boxX_Sidebar_titleLink" href="<?php echo get_permalink(509); ?>">
        <h3 id="content_bloco3_boxTelecom_Sidebar_title">
            <?php
            $id = 509;
            $post = get_page($id);
            echo $post->post_title;
            ?>
        </h3>
    </a>
    <?php
    //chama os widgets para essa sidebar cadastrados no admin do WP
    !dynamic_sidebar('homebox-telecom');
    ?>
</aside>
