<?php
    // Récupération des informations de la photo
    $titre_post = get_the_title();
    $titre_nettoye = sanitize_title($titre_post);
    $lien_post = '/photographies/'. $titre_nettoye;
    $photo_post = get_the_content();
    $date_post = get_the_date('Y');
    $reference_photo = get_field('references');

    // Récupération du format de la photo et stockage pour filtrage
    $formats = get_the_terms(get_the_ID(), 'formats');
        if ($formats && !is_wp_error($formats)) {
            $noms_formats = array();
            foreach ($formats as $format) {
                $noms_formats[] = $format->name;
            }
            $liste_formats = join(', ', $noms_formats);
        }

    // Récupération de la catégorie de la photo et stockage pour filtrage
    $categories = get_the_terms(get_the_ID(), 'photocategories');
        if ($categories && !is_wp_error($categories)) {
            $noms_categories = array();
            foreach ($categories as $categorie) {
                $noms_categories[] = $categorie->name;
            }
            $liste_categories = join(', ', $noms_categories);
        }
?>

<!-- Affichage du bloc photo -->
<div class="blocPhoto">
    <div class="lienPost">
        <?php echo $lien_post; ?>
    </div>
    <?php echo $photo_post; ?>
    <div class="iconPhoto">
        <div class="photoInfos">
            <div class="full-screen">
                <i class="fa-solid fa-expand full-screen" style="color: #000000;"></i>
            </div>
            <div class="">
                <i class="fa-regular fa-eye oeil" style="color: #000000;"></i>
            </div>
            <div class="refCatPhoto">
                <div class="reference-photo">
                    <?php echo $reference_photo ?>
                </div>
                <div class="reference-photo">
                    <?php echo $liste_categories; ?>
                </div>
            </div>
        </div>
    </div>
</div>
