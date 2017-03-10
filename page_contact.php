<?php
/*
 * Template Name: Contact
 */
get_header(); ?>

	<div class="container">
		<?php while( have_posts() ): the_post(); ?>
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<h1><?php the_title(); ?></h1>
				<div class="page_container">
					
					<div class="content">
						<?php the_content(); ?>
						<h3>Telephone</h3>
						<div class="phone-mobile">
							<a href="tel:+15023384404"><?php the_field("phone_number");
							?></a>
						</div>
						<div class="phone-number">
							<?php the_field("phone_number");?>
						</div>
						
						<h3>Social</h3>
						<div class="icon_container">

						<?php while (have_rows("contact_information", "option")):the_row(); ?>
							<?php while (have_rows("social_media_links")):the_row(); ?>
								<?php
									$site = get_sub_field("site");
								?>
								<a href="<?php the_sub_field("url") ?>" target="_blank" class="social-icon social-<?php echo sanitize_title( $site ); ?>" title="On <?php the_sub_field( "site" ); ?>"><i class="fa fa-<?php echo sanitize_title( $site ); ?>" aria-hidden="true"></i></a>
							<?php endwhile; ?>		
						<?php endwhile; ?>
						</div>
						
					</div>
					<div class="form">
						<?php $gravity_form = get_field("gravity_form_shortcode");
						echo do_shortcode($gravity_form); ?>
					</div>
				</div>
			</article>
		<?php endwhile; ?>
	</div>

<?php get_footer();