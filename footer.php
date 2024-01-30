<footer>
            <!-- Menu secondaire -->
            <div>
                <?php
                    wp_nav_menu(array(
                        'theme_location' => 'menu_footer',
                        'container' => false,
                        'menu_class' => 'menu',
                    ));
                ?>
            </div>

            <div class="lightbox">
                <div class="lightbox-fermeture">
                    <i class="fa-solid fa-xmark" style="color: #000000;"></i>
                </div>
                <div class="lightbox-affichage">
                    <img class='' src='/assets/images/Overlay.png'; ?> "/>
                </div>
                <div class="lightbox-fleches">
                    <div class="precedente">
                        <i class="fa-solid fa-arrow-left-long" style="color: #000000;"></i>
                        <div class="lightbox-precedente">Précédente</div>
                    </div>
                    <div class="suivante">
                        <div class="lightbox-suivante">Suivante</div>
                        <i class="fa-solid fa-arrow-right-long" style="color: #000000;"></i>
                    </div>
                </div>
                <div class="informations-photo">
                    <div class="reference-photo"></div>
                    <div class="categorie-photo"></div>
                </div>
            </div>

        </footer>