<!doctype html>
<html <?php language_attributes(); ?>>

    <!-- Elements repris du theme hello elementor -->
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>Nathalie Mota</title>
        <?php wp_head(); ?>
    </head>

    <body>
        <header>
            <!-- Ajout d'un custom logo modifiable via le tableau de bord -->
            <div class="logo">
                <?php the_custom_logo() ?>
            </div>
            <!-- Appel du menu principal modifiable dans le tableau de bord -->
            <nav>
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu_header',
                    'container' => false,
                    'menu_class' => 'menu',
                ));
                ?>
            </nav>

            <!-- Modale -->
        </header>
        <div class="modale">
       <?php include(get_stylesheet_directory() . '/template-part/modale.php'); ?>
        </div>
</div>

