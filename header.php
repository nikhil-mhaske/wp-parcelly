<?php
wp_head();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parcelly</title>
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
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="tool.html">Calculate Shipping</a></li>
                <li><a href="#howto">How To</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#partners">Our Partners</a></li>
                <li><a href="#footer">Contact Us</a></li>
            </ul>
        </div>
        <div class="menu-icon"><i class="fa fa-bars"></i></div>
        <div class="cancel-icon"><i class="fa fa-close"></i></div>
    </header>