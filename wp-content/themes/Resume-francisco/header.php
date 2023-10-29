<!DOCTYPE html>

<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset') ?>"/>
		<meta content="width=device-width, initial-scale=1" name="viewport">
		<meta name="title" content="<?php wp_title(); ?>">
		<meta name="description" content="<?php bloginfo( 'description' ); ?>">
		<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
		<link rel="manifest" href="/site.webmanifest">
		<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff">
		<script src="https://kit.fontawesome.com/c83dc048cd.js" crossorigin="anonymous"></script>
		<script src="https://apis.google.com/js/platform.js"></script>
		<!-- scripts plugin head -->
		<?php wp_head(); ?>
		<?php if(get_field('activer_google_analytics', 'options') == 'actif'): ?>
			<?php if(get_field('urchin_tracker', 'options')): ?>
				<!-- Global site tag (gtag.js) - Google Analytics -->
				<script async src="https://www.googletagmanager.com/gtag/js?id=<?php the_field('urchin_tracker', 'options') ?>"></script>
				<script>
					window.dataLayer = window.dataLayer || [];
					function gtag(){dataLayer.push(arguments);}
					gtag('js', new Date());

					gtag('config', '<?php the_field('urchin_tracker', 'options') ?>');
				</script>
			<?php endif; ?>
		<?php endif; ?>
	</head>

	<body id="page-top">
		
	
		<header class="header" role="banner">
		
			<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="sideNav">
				<a class="navbar-brand js-scroll-trigger" href="#page-top">
					<span class="d-block d-lg-none">Francisco Rosales</span>
					<span class="d-none d-lg-block"><img class="img-fluid img-profile rounded-circle mx-auto mb-2" src="/wp-content/uploads/Image-Francisco-Rosales.jpeg" alt="Image Francisco" /></span>
				</a>
																
				<button class="navbar-toggler menu-button" type="button" data-toggle="collapse" data-target="#menu-top"
						aria-controls="menu-top" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
				</button>

				<div id="menu-top" class="collapse navbar-collapse">
				
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu_principal',
							'container'    => false,
							'menu_class'     => '',
							'fallback_cb'    => '__return_false',
							'items_wrap'     => '<ul class="navbar-nav ml-auto">%3$s</ul>',
							'depth'        => 2,
						'walker'       => new b4st_walker_nav_menu()
						) );
					?>
				</div>
			</div>	
		</nav><!-- navbar -->	
	</header>
	<main role="main" class="main">
