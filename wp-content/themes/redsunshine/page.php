<?php get_header(); ?>

<section id="templateStaticPage" class="container">
    <?php
    while (have_posts()) {
        the_post();
        include __DIR__ . '/layouts/staticPage.php';
    }
    ?>
</section>

<?php get_footer(); ?>
