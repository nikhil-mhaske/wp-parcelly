<?php
wp_head();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
</head>

<body>
    <header>
        <div class="logo">
            <?php if (has_custom_logo()) : ?>
                <div class="site-logo"><?php the_custom_logo(); ?></div>
            <?php else : ?>
                <h1 class="site-title"><?php bloginfo('name'); ?></h1>
            <?php endif; ?>
        </div>
        <div class="nav-items">
            <?php wp_nav_menu(array(
                'theme_location' => 'primary_menu',
                'menu_id' => 'primary-menu',
            )); ?>
        </div>
        <div class="menu-icon"><span class="dashicons dashicons-editor-aligncenter"></span></div>
        <div class="cancel-icon"><span class="dashicons dashicons-dismiss"></span></div>
    </header>