<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name');?></title>
    <?php wp_head();?>
</head>
<body>
    <!-- Navbar Start -->
    <nav>
        <div class="container">
            <header>
                <?php the_custom_logo(); ?>
                <div class="header-text">
                    <h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name')?></a></h1>
                    <p><?php bloginfo('description')?></p>
                </div>
            </header>
            <div class="navbar">
                <?php
                $args = array('theme_location' => 'main_menu');
                wp_nav_menu($args);
                ?>
            </div>
            <div class="clear"></div>
        </div>
    </nav>
    <!-- Navbar Stop -->

    
