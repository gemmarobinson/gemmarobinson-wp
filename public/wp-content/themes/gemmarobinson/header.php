<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="<?php echo get_bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="alternate" href="<?php echo get_home_url(); ?>" hreflang="en-gb" />
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_home_url(); ?>/favicon.ico">
		<?php wp_head(); ?>
		<?php echo sixth_google_analytics('XXXXXXXXXX'); ?>
	</head>

	<body <?php body_class(); ?>>
	
		<header>
			<div class="container">
				<div class="row">
					<div class="col-6">
						<a href="<?php echo get_home_url(); ?>">
							<img 
								src="<?php echo get_image_path('logo.png'); ?>" 
								alt="<?php echo get_bloginfo('name'); ?> logo"
							/>
						</a>
					</div>
					<div class="col-6">
						<?php
							wp_nav_menu([
								'menu'              => 'Main Menu',
								'theme_location'    => 'Main Menu',
								'container_id' 		=> 'main-menu',
								'depth' 			=> 2,
								'walker' 			=> new SixthStory_Walker()
							]);
						?>
					</div>
				</div>
			</div>
		</header>