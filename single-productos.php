<?php get_header(); ?>

<div class="row">
	<div class="large-10 columns large-centered">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<h3><?php the_title(); ?></h3>

		<?php the_content(); ?>
	<?php endwhile; endif; ?>
	</div>

</div>

<?php get_footer(); ?>