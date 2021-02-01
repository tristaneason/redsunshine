<?php get_header(); ?>

<main id="templateArticle">
    <?php
    while (have_posts()):
        the_post();
        include __DIR__ . '/components/article.php';
    endwhile;
    ?>
</main>

<?php get_footer(); ?>
