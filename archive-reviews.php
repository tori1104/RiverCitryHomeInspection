<?php get_header(); ?>

<div class="container">
	<article class="hentry">
		<div class="title_container">
			<h1>Reviews</h1>
			<a class="bc" href="<?php echo home_url( 'leave-a-review' ); ?>">leave a review</a>
		</div>
				
		<div class="page_content">
		</div>

		<?php while( have_posts() ): the_post(); ?>
			<div class="review_container">
				<div class="review">
					<span class="quotes">
					</span>
					
					<div class="review_content">
						<?php the_content()?>
					</div>
					
					<div class="title_box">
						<div class="review_title">
							<?php the_title()?>
						</div>
					</div>
				</div>
			</div>
		<?php endwhile; ?>

		<div class="links">
			<?php
				echo paginate_links( array(
					'prev_text' => 'Recent',
					'next_text' => 'Older',
					'type' => 'list'
				) );
			?>
		</div>
	</article>
</div>

<?php get_footer();