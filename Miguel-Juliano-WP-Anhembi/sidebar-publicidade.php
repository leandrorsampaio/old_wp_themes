<aside id="publicidade">
    <?php
    //chama os widgets para essa sidebar cadastrados no admin do WP 
    //!dynamic_sidebar('publicidade');
    if (is_page(array(561, 154, 7431, 1699, 148, 1561, 152))) {
        ?>
        <p>Publicidade:</p>
        <script language='JavaScript' type='text/javascript' src='http://www.spturis.com/openads/adx.js'></script>
        <script language='JavaScript' type='text/javascript'>
            <!--
           if (!document.phpAds_used)
                document.phpAds_used = ',';
            phpAds_random = new String(Math.random());
            phpAds_random = phpAds_random.substring(2, 11);

            document.write("<" + "script language='JavaScript' type='text/javascript' src='");
            document.write("http://www.spturis.com/openads/adjs.php?n=" + phpAds_random);
            document.write("&amp;what=zone:39");
            document.write("&amp;exclude=" + document.phpAds_used);
            if (document.referrer)
                document.write("&amp;referer=" + escape(document.referrer));
            document.write("'><" + "/script>");
            //-->
        </script><noscript><a href='http://www.spturis.com/openads/adclick.php?n=a1da0e93' target='_blank'><img src='http://www.spturis.com/openads/adview.php?what=zone:39&amp;n=a1da0e93' border='0' alt=''></a></noscript>
        <?php
    } elseif (is_single(array(11381, 11379, 11377, 11339))) {
        // DO NOTHING
    } else {
        ?>
        <p>Publicidade:</p>
        <script language='JavaScript' type='text/javascript' src='http://www.spturis.com/openads/adx.js'></script>
        <script language='JavaScript' type='text/javascript'>
            <!--
           if (!document.phpAds_used)
                document.phpAds_used = ',';
            phpAds_random = new String(Math.random());
            phpAds_random = phpAds_random.substring(2, 11);

            document.write("<" + "script language='JavaScript' type='text/javascript' src='");
            document.write("http://www.spturis.com/openads/adjs.php?n=" + phpAds_random);
            document.write("&amp;what=zone:38");
            document.write("&amp;exclude=" + document.phpAds_used);
            if (document.referrer)
                document.write("&amp;referer=" + escape(document.referrer));
            document.write("'><" + "/script>");
            //-->
        </script><noscript><a href='http://www.spturis.com/openads/adclick.php?n=a2dbeadf' target='_blank'><img src='http://www.spturis.com/openads/adview.php?what=zone:38&amp;n=a2dbeadf' border='0' alt=''></a></noscript>
        <?php
    }
    ?>
</aside>