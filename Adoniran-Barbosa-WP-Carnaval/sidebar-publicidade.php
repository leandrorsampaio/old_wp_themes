<!--<div id="aside_boxPublicidade">
    <p id="aside_boxPublicidade_title">Publicidade</p>
    <div id="aside_boxPublicidade_OpenAds">
        <script language='JavaScript' type='text/javascript' src='http://www.spturis.com/openads/adx.js'></script>
        <script language='JavaScript' type='text/javascript'>
            
            if (!document.phpAds_used) document.phpAds_used = ',';
            phpAds_random = new String (Math.random()); phpAds_random = phpAds_random.substring(2,11);
   
            document.write ("<" + "script language='JavaScript' type='text/javascript' src='");
            document.write ("http://www.spturis.com/openads/adjs.php?n=" + phpAds_random);
            document.write ("&amp;what=zone:34");
            document.write ("&amp;exclude=" + document.phpAds_used);
            if (document.referrer)
                document.write ("&amp;referer=" + escape(document.referrer));
            document.write ("'><" + "/script>");
            //
        </script><noscript><a href='http://www.spturis.com/openads/adclick.php?n=a5a2ded6' target='_blank'><img src='http://www.spturis.com/openads/adview.php?what=zone:34&amp;n=a5a2ded6' border='0' alt=''></a></noscript>
    </div>
</div>    -->
<?php
//chama os widgets para essa sidebar cadastrados no admin do WP 
!dynamic_sidebar('publicidade');
?>
<a class="bannerIngressos" href="http://www.ingressosligasp.com.br/" target="_blank">
    <img src="<?php bloginfo('stylesheet_directory'); ?>/images/compre-banner.gif" alt="Comprar Ingressos Carnaval 2014" />
</a>
<!--
<div>
    <h5 style="text-align: center; font-size: 25px;">INGRESSOS</h5>
    <h6 style="text-align: center; font-size: 20px; margin: 10px 0 25px 0;">Em breve mais onforma&ccedil;&otilde;es</h6>
</div>
-->