<?php get_header(); ?>

<section id="main">
	<div id="slider">
			<div class="row full sli">
					<ul class="example-orbit" data-orbit data-options="pause_on_hover:false;animation:fade;slide_number:false">

						<?php
												$the_query = new WP_Query(array(
													'post_type' => 'slide',
													'showposts' => 3,
													'posts_per_page'  => -1,
													'order'       => 'DESC'
												));
						?>

										<!-- the loop -->
						<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
							<li>
										<?php the_post_thumbnail( 'slides'); ?>
							</li>
						<?php endwhile; ?>
						<!-- end of the loop -->
							<li>
									<img src="http://fakeimg.pl/1280x400/00CED1/FFF/?text=Slider">
							</li>
					</ul>
			</div>
	</div>
</section>

<?php get_footer(); ?>
