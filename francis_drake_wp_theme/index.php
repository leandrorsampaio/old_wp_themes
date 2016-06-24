<?php get_header(); ?>
<main class="miolo">
    <aside class="asideMobile">
        <section class="ofertas">
            <?php include ('ofertasMobile.php'); ?>
        </section>
    </aside>
    <aside class="asideDesktop">
        <section class="ofertas">
            <?php include ('ofertas.php'); ?>
        </section>
        <section class="banners">
            <?php include ('banners.php'); ?>
        </section>
    </aside>
    <article class="calendario">
        <?php include ('calendario.php'); ?>
    </article>
    <aside class="asideMobile">
        <section class="banners">
            <?php include ('banners.php'); ?>
        </section>
    </aside>
</main>
<?php get_footer(); ?>