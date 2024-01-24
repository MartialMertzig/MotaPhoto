<footer>
            <!-- Affichage du menu du footer -->
            <div>
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu_footer',
                        'container' => false,
                        'menu_class' => 'menu',
                    ));
                ?>
            </div>
        </footer>