<?php
// inclui o header
get_header();
//looping
while (have_posts()): the_post();
    // escolhe as cores
    include ('sidebar-escolheacor.php');
    // pega o id das paginas
    include ('sidebar-idspaginas.php')
    ?>
    <div id="noticias" style="color: <?php echo $cor1; ?>;">
        <div id="noticias_section-biliotecaSampa">
            <div id="noticias_section_head">
                <h1 id="noticias_section_head_title"><?php the_title(); ?></h1>
                <?php
                if ($menu == 1) {
                    include ('sidebar-submenu.php');
                } else {
                    
                }
                ?>
            </div>
            <div id="noticias_section_conteudo">
                <div id="page_section_conteudo">
                    <?php the_content(); ?>
                    <?php
                    include ('sidebar-samba.php');
                    ?>
                    <a href="<?php echo get_permalink(6497); ?>" style="font-size: 1.2em; font-size: 1.2em; width: 100%; display: block; float: left; margin: 40px 0px 30px;">Veja a biblioteca de sambas-enredo de 2014</a>
                    <a href="<?php echo get_permalink(8383); ?>" style="font-size: 1.2em; font-size: 1.2em; width: 100%; display: block; float: left; margin: 10px 0px 30px;">Veja a biblioteca de sambas-enredo de 2016</a>
                </div>
            </div>
        </div>
    </div>
<?php endwhile; ?>
<?php get_footer(); ?>