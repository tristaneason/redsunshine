<?php get_header(); ?>

<main id="templateHome">
    <?php
    while (have_posts()):
        the_post();
        include __DIR__ . '/components/card.php';
    endwhile;
    ?>
</main>

<?php get_footer(); ?>
