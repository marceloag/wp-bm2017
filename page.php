<?php get_header(); ?>

  <section id="main">
    <div class="row page">
      <div class="large-10 large-centered columns">
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
      </div>
    </div>
  </section>

<?php get_footer(); ?>
