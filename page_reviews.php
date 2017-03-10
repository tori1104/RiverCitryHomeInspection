<?php
/*
 * Template Name: Reviews
 */
get_header(); ?>

	<div class="container">
		<?php while( have_posts() ): the_post(); ?>
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
				<div class="title_container">
					<h1><?php the_title(); ?></h1>
					<a class="bc" href="<?php echo home_url( 'leave-a-review' ); ?>">leave a review</a>
				</div>
				
				<div class="page_content">
					<?php the_content(); ?>
				</div>

				<?php 
				$reviews = get_posts(array(
					"nopaging" => true,
					"post_type" => "reviews"
					));

				if ($reviews){
					foreach ($reviews as $review){
						?>
						<div class="review_container">
							<div class="review">
								<span class="quotes">
								</span>
								
								<div class="review_content">
									<?php echo $review->post_content;?>
								</div>
								
								<div class="title_box">
									<div class="review_title">
										<?php echo $review->post_title;?>
									</div>
								</div>
							</div>
						</div>
						<?php 
					}
				}	
				?>

				<div class="breadcrumbs_container">
					<a class="recent" href="#">Recent</a>
					<a class="pagination" href="#">pagination</a>
					<a class="older" href="#">Older</a>
				</div>
			</article>
		<?php endwhile; ?>
	</div>

<?php get_footer();