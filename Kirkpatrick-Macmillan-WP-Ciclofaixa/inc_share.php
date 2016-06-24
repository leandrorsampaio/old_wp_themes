<div class="share">
    <div class="share_face shareWraper">
        <!-- facebook sdk -->
        <div id="fb-root"></div>
        <script>
            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/pt_BR/sdk.js#xfbml=1&appId=368756706613402&version=v2.0";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script>
        <!-- facebook sdk -->
        <div class="fb-share-button" data-href="<?php echo get_permalink(); ?>" data-layout="button"></div>
    </div>
    <div class="share_twitter shareWraper">
        <a href="https://twitter.com/share" class="twitter-share-button" data-via="turismosaopaulo" data-count="none">Tweet</a>
        <script>
            !function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                if (!d.getElementById(id)) {
                    js = d.createElement(s);
                    js.id = id;
                    js.src = p + '://platform.twitter.com/widgets.js';
                    fjs.parentNode.insertBefore(js, fjs);
                }
            }(document, 'script', 'twitter-wjs');
        </script>
    </div>
    <div class="share_google shareWraper">
        <!-- Posicione esta tag no cabeçalho ou imediatamente antes da tag de fechamento do corpo. -->
        <script src="https://apis.google.com/js/platform.js" async defer>
            {
                lang: 'pt-BR'
            }
        </script>
        <!-- Posicione esta tag onde você deseja que o botão compartilhar apareça. -->
        <div class="g-plus" data-action="share" data-annotation="none"></div>
    </div>
    <div class="share_pinterest shareWraper">
        <a href="//www.pinterest.com/pin/create/button/" data-pin-do="buttonBookmark" >
            <img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" />
        </a>
        <!-- Please call pinit.js only once per page -->
        <script type="text/javascript" async src="//assets.pinterest.com/js/pinit.js"></script>
    </div>
    <div class="share_tumblr shareWraper">
        <a href="http://www.tumblr.com/share" title="Share on Tumblr" style="display:inline-block; text-indent:-9999px; overflow:hidden; width:61px; height:20px; background:url('http://platform.tumblr.com/v1/share_2.png') top left no-repeat transparent;">Share on Tumblr</a>
    </div>
</div>
