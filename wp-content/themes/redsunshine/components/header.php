<?php // Header Component ?>

<?php
    $logo = get_stylesheet_directory_uri() . '/images/logo.png';
    $nav_args = [
        'menu' => 'primary',
        'menu_class' => 'flex',
        'theme_location' => 'primary',
        'container' => '',
    ];
?>

<header id="headerTop">
    <div class="flex space-between">
        <div class=""></div>
        <a href="/">
            <img id="logo" src="<?= $logo; ?>" alt="Red Sunsine Bulletin Logo">
        </a>
        <div class=""></div>
    </div>
    <nav>
        <div class="container">
            <?php wp_nav_menu($nav_args); ?>
        </div>
    </nav>
</header>
