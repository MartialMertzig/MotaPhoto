<?php include('header.php'); ?>
<style> <?php include ('style.css'); ?> </style>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
    <link rel="stylesheet" href="style.css">
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Bannière Photographe Event  -->
<section class="banner">
    <div class='TextBanner'>
        <p>PHOTOGRAPHE EVENT</p>
    </div>
    <div>
        <img class='ImgBanner' src="<?php echo get_theme_file_uri() . '/assets/images/nathalie-11.jpeg'; ?> " alt="Nathalie-Mota-Logo.png">
    </div>
</section>

<?php include('footer.php'); ?>