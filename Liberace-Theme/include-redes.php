<div class="interna_content_article">
    <article>
        <?php the_content(); ?>
        <div id="social_links">
            <?php the_field('social_links'); ?>
        </div>
        <div id="facebook">
            <div id="fb-root"></div>
            <script>
                //-------------------------- FACE CIDADE
                (function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
                    fjs.parentNode.insertBefore(js, fjs);
                }(document, 'script', 'facebook-jssdk'));</script>
            <div class="fb-like-box" data-href="https://www.facebook.com/TurismoemSP" data-width="304" data-height="600" data-show-faces="false" data-stream="true" data-header="true"></div>
        </div>
        <!--------------------- TWITTER CIDADE --->
        <div id="twitter">
            <a class="twitter-timeline" href="https://twitter.com/TurismoSaoPaulo" data-widget-id="326458859424194560">Tweets by @TurismoSaoPaulo</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>


        </div>
    </article>
</div>