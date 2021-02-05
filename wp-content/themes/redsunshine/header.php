<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php bloginfo('name'); ?></title>
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Rubik:wght@300;500&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/0c83db96bd.js" crossorigin="anonymous"></script>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <?php include __DIR__ . '/components/header.php'; ?>
            <main role="main">
