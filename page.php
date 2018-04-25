<?php get_header(); ?>

  <section id="main">
    <div class="row page">
      <div class="large-10 large-centered columns">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
