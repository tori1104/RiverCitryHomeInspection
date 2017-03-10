<!DOCTYPE html>
<html lang="en-US" class="no-js">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
		<!--[if lt IE 9]>
			<script src="//oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body <?php body_class(); ?>>
		<?php if( 'ocn' == get_field( 'menu_type', 'option' ) ): ?>
			<div id="ocn">
				<div id="ocn-inner">
					<div id="ocn-top">
						<a href="<?php echo home_url(); ?>" title="<?php bloginfo( 'name' ); ?>" id="ocn-brand">
							<img src="<?php the_field( 'site_logo', 'option' ); ?>" alt="<?php bloginfo( 'name' ); ?>" class="logo">
						</a>
						<button class="nav-toggle" type="button" id="ocn-close">
							<span></span>
						</button>
					</div>
					<?php wp_nav_menu( array(
						'container' => 'nav',
						'container_id' => 'ocn-nav-primary',
						'theme_location' => 'primary'
					) ); ?>
					<div class="phone-mobile">
						<a href="tel:+15023384404">(502) 338-4404</a>
					</div>
				</div>
			</div>
		<?php endif; ?>




		<?php if (has_post_thumbnail() ) {
			$feat_image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full', true );
			$feat_image = $feat_image[0];
		} else {
			$feat_image = get_field( 'msw_default_navigation_image', 'option' );
		} ?>

		<header class="site-header" <?php if( !is_front_page() ): ?>style="background-image:url('<?php echo $feat_image; ?>') !important;"<?php endif; ?>>
			<div class="inner container">
				<div class="left">
					<a href="<?php echo home_url(); ?>" title="<?php bloginfo( 'name' ); ?>" class="brand">
						<img src="<?php the_field( 'site_logo', 'option' ); ?>" alt="<?php bloginfo( 'name' ); ?>">
					</a>
				</div>
				<div class="right-ocn">
					<button class="hamburger nav-toggle" type="button" id="nav-toggle">
						<span class=""></span>
						
				</button>
				</div>
				<div class="right">
					<div class="nav-right">
						<?php
							wp_nav_menu( array(
								'container' => 'nav',
								'container_id' => 'large-nav-primary',
								'theme_location' => 'primary'
							) );
						?>	
					</div>
				</div>
				<div class="nav-bc">
					<?php
						if( function_exists( 'yoast_breadcrumb' ) ){
							yoast_breadcrumb( '<p id="breadcrumbs">', '</p>' );
						}
					?>
				</div>
			</div>

			<?php
				if( 'dropdown' == get_field( 'menu_type', 'option' ) ){
					wp_nav_menu( array(
						'container' => 'nav',
						'container_id' => 'dropdown-nav-primary',
						'theme_location' => 'primary'
					) );
				}
			?>
			
		</header>
		