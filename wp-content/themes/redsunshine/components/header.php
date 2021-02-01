<?php
    $logo = get_stylesheet_directory_uri() . '/images/logo.png';
?>

<header id="headerTop">
    <div class="flex">
        <a href="/">
            <img src="<?= $logo; ?>" alt="Red Sunsine Bulletin Logo">
        </a>
    </div>
    <?php
        wp_nav_menu([
            'theme_location' => 'primary',
            'container' => 'nav'
        ]);
    ?>
</header>
