<?php
	get_header();

// Récupération de l'identifiant de la photo (nom) dans l'URL
$slug = get_query_var('photographies');

// Construction des critères de recherche
$args = [
    'post_type' => 'photographies',
    'name' => $slug,
    'posts_per_page' => 1
];

// Requête auprès de la base de données wordpress pour récupérer la photo correspondante
$custom_query = new WP_Query($args);

if ($custom_query->have_posts()) :
    while ($custom_query->have_posts()) : $custom_query->the_post();

	$reference = get_field('reference');
	$type = get_field('type');
	$categories = wp_get_post_terms(get_the_ID(), 'categorie');
	$formats = wp_get_post_terms(get_the_ID(), 'formats');
?>

<div class="...">
		<!-- Zone gauche - Informations photos -->
		<div class="...">
			<div class="...">
				<h2><?php echo the_title();?></h2>
				<p>RÉFÉRENCE : <span id="..."><?php echo $reference;?></span></p>
				<p>CATÉGORIE : 
					<?php foreach ($categories as $categorie) {
                        echo esc_html($categorie->name);
                    } ?>
				</p>
				<p>FORMAT : 
					<?php foreach ($formats as $format) {
                        echo esc_html($format->name);
                    }
                    ?>
				</p>
				<p>TYPE : <?php echo $type;?></p>
				<p>ANNÉE : <?php echo the_date('Y');?></p>
			</div>
		</div>
		<!-- Zone droite - La photo -->
		<div class="...">
			<div class="...">
				<?php the_content();?>
			</div>
		</div>
	</div>