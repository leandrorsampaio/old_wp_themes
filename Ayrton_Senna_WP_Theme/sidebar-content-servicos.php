<?php
if (is_page('404')) {
    
} else {
    ?>
    <div id="contentInterna_miolo_serviceBar_actions">
        <a href="javascript:window.print();">
            <img src="<?php bloginfo('template_url') ?>/images/print.png">
        </a>
        <a href="<?php bloginfo('url'); ?>/wp-content/plugins/post2pdf-converter/post2pdf-converter-pdf-maker.php?id=<?php the_ID(); ?>">
            <img src="<?php bloginfo('template_url'); ?>/images/pdf.png">
        </a>
        <!--<a href="http://#"><img src="<?php bloginfo('template_url') ?>/images/mail.png"></a>-->
        <!--
        <script>
            function openWin()
            {
                myWindow=window.open('http://spturis.com/sistemas/mailer_interlagos/mailer_noticia_form.php','','width=500,height=500');
                myWindow.focus();
            }
        </script>
        <form action="http://spturis.com/sistemas/mailer_interlagos/mailer_noticia_form.php" name="telecomForm" method="post">
            <input  type="text" name="page_link" value="<?php the_title(); ?>" />
            <input type="text" name="page_title" value="<?php the_permalink(); ?>" />
            <input type="button" value="Open window" onclick="openWin()" />
        </form>
        -->
    </div> 
    <div id="contentInterna_miolo_serviceBar_acess">
        <!-- Texto: -->
        <!-- 
             <a href="javascript:void(0);" onclick="javascript:body.style.fontSize='0.9em'"> 
             <img src="<?php bloginfo('template_url') ?>/images/acess_small.png">
             </a> | 
             <a href="javascript:void(0);" onclick="javascript:body.style.fontSize='1em'"> 
             <img src="<?php bloginfo('template_url') ?>/images/acess_medium.png">
             </a> |
             <a href="javascript:void(0);" onclick="javascript:body.style.fontSize='1.2em'">           
             <img src="<?php bloginfo('template_url') ?>/images/acess_large.png">
             </a>
        -->
        <!-- 
             <a id="jfontsize-minus" class="jfontsize-button" href="#">A-</a>
             <a id="jfontsize-default" class="jfontsize-button" href="#">A</a>
             <a id="jfontsize-plus" class="jfontsize-button" href="#">A+</a>
        -->
    </div>
<?php }
?>

