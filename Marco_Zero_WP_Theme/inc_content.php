<!---------------- Título ------------->
<div id="section_content_title" class="wrap">
    <?php get_sidebar('title'); ?>
</div>
<div class="breadcrumb" itemprop="breadcrumb">
        <a class="hiddenSpellError" href="<?php bloginfo('url'); ?>"><?php echo $title_monumentos; ?></a> &raquo;
        <?php 
            $category = get_the_category(); 
            if($category[0]){
            echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a>';
            }
        ?>
    </div>
<article>
    <!---------------- Descricao  ------------->
    <div id="article_description" class="box">
        <?php get_sidebar('description'); ?>
    </div>
    <div class="section_contentContainer">
        <div class="section_contentContainer_title">
            <div class="article_title70 title" style="width: 50%;">
                <?php echo $title_informacoes; ?>
            </div>
            <div class="article_title30 title">
                <?php echo $title_siga; ?>
            </div>
        </div>
        <div class="section_contentContainer_miolo">
            <!---------------- + INFORMACOES  ------------->  
            <div id="section_contentContainer_miolo_info">
                 <?php get_sidebar('info'); ?>
            </div>
            <!---------------- SIGA - Redes Sociais  ------------->
            <div id="section_contentContainer_miolo_social">
                 <?php include("sidebar-social.php"); ?>
            </div>            
            <img class="section_contentContainer_miolo_bg" src="<?php bloginfo('template_url') ?>/images/bg_boxes1.png" alt="" />
        </div>
    </div>
    <div class="section_contentContainer">
        <div class="section_contentContainer_title">
            <div class="article_title50 title">
                <?php echo $title_porperto; ?>
            </div>
            <div class="article_title50 title" style="margin: 0 2% 0 0;">
                <?php echo $title_vejamais; ?>
            </div>
        </div>
        <div class="section_contentContainer_miolo">
            <!---------------- Veja Mais  ------------->
            <div id="section_contentContainer_miolo_vejaMais">
                 <?php get_sidebar('local');  ?>
            </div>
            <!---------------- + POR PERTO  ------------->
            <div id="section_contentContainer_miolo_porPerto">
                 <?php get_sidebar('category');  ?>
            </div>            
            <img class="section_contentContainer_miolo_bg" src="<?php bloginfo('template_url') ?>/images/bg_boxes2.png" alt="" />
        </div>
    </div>
    <!---------------- COMO CHEGAR  ------------->
    <div id="article_comoChegar" class="box">
        <?php //get_sidebar('comoChegar');  ?>
    </div>
</article>
