<?php
	$template_directory_uri = get_template_directory_uri();  

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="<?= $template_directory_uri ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= $template_directory_uri ?>/style.css">

    <?php wp_head(); ?>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-secondary top-nav text-aileron py-0 py-lg-2">
			<div class="container">
				<div class="collapse navbar-collapse text-secondary fw-bold" id="top-nav-menu">
					<diV id="brand-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">test</a></diV>
					<?php
						wp_nav_menu( array( 
							'theme_location' => 'top-menu', 
							'container'      => '',
							'menu_class'     => 'navbar-nav m-auto',
							'fallback_cb'    => false,
							'walker'         => new Top_Nav_Menu_Walker(),
						) ); 
					?>
					<div class="border border-secondary text-end mx-3 position-relative" style="width: 150px">
						<?php get_search_form(); ?>
					</div>
					<span>
						<a class="link-secondary" href="<?= $fb_url ?>">
							<i class='fa fa-facebook-f mx-2'></i>
						</a>
					</span>
					<span>
						<a class="link-secondary" href="<?= $insta_url ?>">
							<i class='fa fa-instagram mx-2'></i>
						</a>
					</span>
					<span>
						<a class="link-secondary" href="<?= $tw_url ?>">
							<i class='fa fa-twitter mx-2'></i>
						</a>
					</span>
				</div>
			</div>
		</nav>
