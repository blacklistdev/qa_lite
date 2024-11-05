<!DOCTYPE html>
<html <?php language_attributes(); ?>

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head(); 
	?>
</head>
<body <?php body_class(); ?>>
 <?php $header_logo = get_field('header_logo', 'option'); ?>
     <header class="header-qulight" id="QUheader">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container">
                <a class="navbar-brand" href="<?php echo site_url(); ?>">
                    <img src="<?php echo $header_logo['url']; ?>" alt="<?php echo $header_logo['alt']; ?>" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
						<?php
							wp_nav_menu(array(
								'theme_location' => 'header-menu', // Change to your menu location
								'class' => '',
								'fallback_cb' => false,
								'container'       => false,
								'items_wrap' => '<ul class="navbar-nav ms-auto mb-2 mb-lg-0">%3$s</ul>',
							));
						?>
                       
                </div>
            </div>
        </nav>
    </header>