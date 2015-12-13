<?php get_header(); ?>

  <section id="main">
    <div class="row page">
      <div class="large-10 large-centered columns">

        <div class="ftimg">
          <div class="captionpage">
          		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            	<h2><?php the_title(); ?></h2>
          </div>
        </div>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
      </div>
      <!-- /Noticias -->
      <!-- /SIDEBAR -->
    </div>
  </section>

<?php get_footer(); ?>
