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
                <label>
                    <img class="burgerLine-1" src="<?php echo get_theme_file_uri() . '/assets/images/vector.png'; ?>" alt=""/>
                    <img class="burgerLine-2" src="<?php echo get_theme_file_uri() . '/assets/images/vector.png'; ?>" alt=""/>
                    <img class="burgerLine-3" src="<?php echo get_theme_file_uri() . '/assets/images/vector.png'; ?>" alt=""/>
                </label>
                <div class="main_pages">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'menu_header',
                    'container' => false,
                    'menu_class' => 'menu',
                ));
                ?>
                </div>
            </nav>

            <!-- Modale -->
        </header>
        <div class="modale">
       <?php include(get_stylesheet_directory() . '/template-part/modale.php'); ?>
        </div>
</div>

