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
    <div id="noticias" style="color: <?php echo $cor1; ?>; width: 1024px;">
        <div id="noticias_section" style="width: 95%;">
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
                    <?php
                    the_content();
                    ?>
                    <br/>
                    <iframe src="http://kratos.txtcontrol.com.br/cred/Carnaval.aspx" style="width:100%; height: 1000px;"></iframe>
                </div>
            </div>
            <?php
            include ('sidebar-servicebar.php');
            ?>
        </div>
    </div>
<?php endwhile; ?>
<?php get_footer(); ?>