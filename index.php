<?php get_header(); ?>

<div class="row">
	<div class="large-8 columns">
		<ul data-orbit>
			<li><img src="http://fakeimg.pl/960x500/00CED1/FFF/?text=Slide+01"></li>
			<li><img src="http://fakeimg.pl/960x500/00CED1/FFF/?text=Slide+02"></li>
			<li><img src="http://fakeimg.pl/960x500/00CED1/FFF/?text=Slide+03"></li>
		</ul>
			<div class="row">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article <?php post_class() ?> id="post-<?php the_ID(); ?>" class="row">

						<div class="large-3 columns"> 
							 <?php the_post_thumbnail();?>
						</div>
						<div class="entry large-9 columns">
							<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
								<?php the_excerpt(); ?>
							<small><?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?></small>
						</div>

					</article>

				<?php endwhile; ?>

				<?php else : ?>

					<h2>Not Found</h2>

				<?php endif; ?>
			</div>
	</div>

	<?php get_sidebar(); ?>

</div>


<?php get_footer(); ?>
