<article id="card-<?php the_ID(); ?>" data-id="<?php the_ID(); ?>" class="card">
    <header>
        <a href="<?php the_permalink(); ?>">
            <h2><?php the_title(); ?></h2>
        </a>
    </header>
    <figure class="thumbnail">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(); ?>
        </a>
    </figure>
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
