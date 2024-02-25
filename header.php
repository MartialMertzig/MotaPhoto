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
    <nav id="site-navigation" class="main-navigation">
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false">
            <span class="line line1"></span>
            <span class="line line2"></span>
            <span class="line line3"></span>
        </button>
        <div class="main_pages">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'menu_header',
                'container'      => false,
                'menu_class'     => 'menu',
            ));
            ?>
        </div>
    </nav>

    <!-- Donner un nom à la div et l'appeler dans le JS -->
    <div class="full-screen-menu full-screen-menu-open">
        <ul>
            <li><a href="#accueil">ACCUEIL</a></li>
            <li><a href="#apropos">A PROPOS</a></li>
            <li><a href="#contact">CONTACT</a></li>
        </ul>
    </div>

    <!-- Modale -->
</header>
        <div class="modale">
       <?php include(get_stylesheet_directory() . '/template-part/modale.php'); ?>
        </div>
    </body>
</div>

