<?php get_header(); ?>

<section id="templateArticle" class="container">
    <?php
    while (have_posts()) {
        the_post();
        include __DIR__ . '/layouts/article.php';
    }
    ?>
</main>

<?php get_footer(); ?>
