<?php
//Id das escolas
include ('sidebar-idescolas.php');

// inclui o header
get_header();

//looping
while (have_posts()): the_post();

// escolhe as cores
    include ('sidebar-escolheacor.php');
    ?>
    <div id="noticias" style="color: <?php echo $cor1; ?>;">
        <div id="noticias_section">
            <div id="noticias_section_head">
                <p id="noticias_section_head_data"><?php the_date('l, j \d\e F \d\e Y'); ?></p>
                <h1 id="noticias_section_head_title"><?php the_title(); ?></h1>
                <!--
                <div id="noticias_section_head_relacionadas">
                    <?php foreach (get_the_category() as $cat) : ?>
                        <?php if ($cat) { ?>
                            <h4 id="noticias_section_head_relacionadas_title">Escola(s) Relacionada(s):</h4>
                            <div id="noticias_section_head_relacionadas_bandeiras">
                                <img class="noticias_section_head_relacionadas_bandeiras_item_img" src="<?php echo z_taxonomy_image_url($cat->term_id); ?>" alt="Categoria Icone" />
                            </div>
                            <?php
                        } else {
                            
                        }
                        ?>
                    <?php endforeach; ?>
                </div>
                -->
                <div id="noticias_section_head_social">
                    <div id="noticias_section_head_social_face">
                        <div id="fb-root"></div>
                        <script>(function(d, s, id) {
                            var js, fjs = d.getElementsByTagName(s)[0];
                            if (d.getElementById(id)) return;
                            js = d.createElement(s); js.id = id;
                            js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1";
                            fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));</script>
                        <div class="fb-like" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false" data-action="recommend"></div>
                    </div>
                    <div id="noticias_section_head_social_gplus">
                        <!-- Place this tag where you want the +1 button to render. -->
                        <div class="g-plusone" data-size="medium" data-annotation="none"></div>
                        <!-- Place this tag after the last +1 button tag. -->
                        <script type="text/javascript">
                        (function() {
                            var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                            po.src = 'https://apis.google.com/js/plusone.js';
                            var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                        })();
                        </script>
                    </div>
                    <div id="noticias_section_head_social_twitter">
                        <a href="https://twitter.com/share" class="twitter-share-button" data-text="Veja a página da minha escola de samba no site do carnaval de sp" data-via="turismosaopaulo" data-lang="pt" data-count="none" data-hashtags="carnavalsp">Tweetar</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                    </div>
                </div>
            </div>
            <div id="noticias_section_conteudo">
                <?php the_content(); ?>
            </div>
            <?php
            include ('sidebar-servicebar.php');
            ?>
            <!-- Leia Mais -->
            <?php
            include ('sidebar-leiamais.php');
            ?>
            <!-- Leia Mais -->
        </div>
        <!-- Aside -->
        <div id="aside">
            <?php
            include ('sidebar-publicidade.php');
            include ('sidebar-maisnoticias.php');
            ?>
        </div>
        <!-- Aside -->
    </div>
<?php endwhile; ?>
<?php get_footer(); ?>