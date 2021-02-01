<?php get_header(); ?>

<main id="templateStaticPage">
    <?php
    while (have_posts()):
        the_post();
        include __DIR__ . '/components/staticPage.php';
    endwhile;
    ?>
</main>

<?php get_footer(); ?>
