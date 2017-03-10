<?php get_header(); ?>

	<?php while( have_posts() ): the_post(); ?>

		<div class="hero-home">
			<div class="hero-img" style="background-image:url(<?php
					$hero_img = get_field('msw_default_hero_image');
					echo $hero_img[ 'url' ];
				?>);">
				<div class="hero_slider_container container">
					<?php while( have_rows( 'msw_default_hero_slider' ) ) : the_row(); ?>
						<div class="hero_slider">
							<div class="hero_header_text">
								<?php the_sub_field( 'hero_header_text' ); ?>
							</div>
							<div class="hero_sub_text">
								<?php the_sub_field( 'hero_sub_text' ); ?>
							</div>
							
							<?php if( get_sub_field( "hero_button") ): ?>
							<div class="hero_button">
								<a href="<?php the_sub_field("button_link");?>" target="_blank">
									<?php the_sub_field("hero_button");?>
									
								</a>
							</div>
							<?php endif; ?>
						</div>
					<?php endwhile; ?>
				</div>
			</div>
			<div class="svg-hero">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 55" width="1024" height="55" preserveAspectRatio="xMidYMax meet">
				<path d="M0 50 L716.8 0 L1024 50 V55 H0 Z"></path>
			</div>
		</div>
		<section class="banner-review-section">
			<div class="about-section">
				<div class="container">
					<div class="about-content">
						<div class="about_header">
							<?php the_field( 'about_header' ); ?>
						</div>
						<div class="about_text">
							<?php the_field( 'about_text' ); ?>
						</div>
						<div class="signature_image">
							<img src="<?php
								$signature_image = get_field( 'signature_image' );
								echo $signature_image[ 'url' ];
							?>">
						</div>
						<div class="about_rchi_button">
							<button><?php
								the_field( 'about_rchi_button' );
							?></button>
						</div>
					</div>
					<div class="about-image">
						<img src="<?php
							$about_image = get_field( 'about_image' );
							echo $about_image[ 'url' ];
						?>">
					</div>
				</div>
			</div>
			<div class="review-container">
				<div class="review-inner">
					<!-- <div class="svg-review-media">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 55" width="1024" height="55" preserveAspectRatio="xMidYMax meet">
						<path d="M0 50 L716.8 0 L1024 50 V55 H0 Z"></path>
					</div> -->
					<div class="svg-review">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 685 55" width="685" height="55" preserveAspectRatio="xMidYMid meet">
						<path d="M0 50 L685 0 V55 H0 Z"></path>
					</div>
					<div class="quotes"></div>
					<div class="review-left">
						<?php while( have_rows( 'reviews' ) ) : the_row(); ?>
							<div class="review-home">
								<?php $review = get_sub_field( 'review' ); ?>
								
								<div class="quote">
									<?php echo $review->post_content; ?>
								</div>
								<div class="author-container">
									<div class="dash">
									</div>
									<div class="author">
										<?php echo $review->post_title; ?>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
					<a href="<?php echo home_url( 'leave-a-review' ); ?>" class="leave-review-container" style="background-image:url(<?php
							$leavereview = get_field( 'review_button_image' );
							echo $leavereview[ 'url' ];
						?>);">
						<div class="leave-review-svg-top">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 339 55" width="339" height="55" preserveAspectRatio="xMidYMin meet">
							<path d="M0 0 H339 V55 L0 5 Z"></path>
						</div>
						<div class="leave-review">
							Leave A Review
						</div>
						<span class="overlay"></span>
					</a>
				</div>
			</div>
			<div class="about-bottom-svg">
				<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 55" width="1024" height="55" preserveAspectRatio="xMidYMax meet">
				<path d="M0 50 L716.8 0 L1024 50 V55 H0 Z"></path>
			</div>
		</section>
	<?php endwhile; ?>

<?php get_footer();