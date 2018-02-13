<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title(); ?></title>
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">


	<?php wp_head(); ?>
</head>

<body>

	<header id="header">
		<div class="container-fluid">
			<div class="row">
				<div class="col-3">
					<a href="tel:999-999-999">
						<img class="phone-icon img-fluid"src="<?php echo get_template_directory_uri(); ?>/images/phoneIconGrad@2x.png" alt="Call Treefix: 999-999-999" title="Call Treefix: 999-999-999">
					</a>
				</div><!-- col -->	

				<div class="col-6">
					<a class="logo" href="<?php echo get_site_url(); ?>">
						<img class="img-fluid"src="<?php echo get_template_directory_uri(); ?>/images/logo@2x.png" alt="Treefix" title="Treefix">
					</a>
				</div><!-- col -->	

				<div class="col-3">
					<div id="nav-icon" class="float-right">
						<span></span>
						<span></span>
						<span></span>
						<span></span>
					</div>
				</div><!-- col -->	
			</div><!-- row -->
		</div>
	</header>
	<section class="home-banner">
		<a href="#" class="tab-cta">
			Get a Free <br>Tree Health Check
		</a>
	</section>
<?php
			wp_nav_menu( array(
				'theme_location' => 'Primary',
				'menu_id' => 'Primary Menu',
				'menu_class' => 'nav',
			));
		?>
<div id="page" class="site">
	<div id="content" class="site-content">