<?php get_header(); ?>

<section id="templateHome" class="container">
    <div class="grid thirds">
        <?php
        while (have_posts()) {
            the_post();
            include __DIR__ . '/components/card.php';
        }
        ?>
    </div>
</section>

<?php get_footer(); ?>
