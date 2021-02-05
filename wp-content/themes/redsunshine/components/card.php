<?php
    $thumb_url = get_the_post_thumbnail_url();
?>

<article id="card-<?php the_ID(); ?>" data-id="<?php the_ID(); ?>" class="card">
    <header>
        <a href="<?php the_permalink(); ?>">
            <h2><?php the_title(); ?></h2>
        </a>
    </header>
    <a href="<?php the_permalink(); ?>">
        <figure
            class="thumbnail"
            style="background: url('<?= $thumb_url; ?>') center; background-size: cover;">
        </figure>
    </a>
    <div class="snippet">
        <?php the_excerpt(); ?>
    </div>
    <footer>
        <a href="<?php the_permalink(); ?>">
            <i class="far fa-clock"></i>
            <span><?php the_date(); ?></span>
        </a>
    </footer>
</article>
