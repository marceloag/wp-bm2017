<?php get_header(); ?>

  <section id="main">
    <div class="row page">
      <div class="large-9 columns">

        <div class="ftimg">
          <img src="http://fakeimg.pl/1000x300/00CED1/FFF/?text=img+placeholder">
          <div class="captionpage">
          		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            	<h1><?php the_title(); ?></h1>
          </div>
        </div>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
      </div>
      <!-- /Noticias -->
      <div class="large-3 columns sidebar">
        <nav class="sidebarmenu">
		<?php wp_nav_menu( array('menu' => 'sidebarmenu','menu_class' => 'sidebarmenu', )); ?>
        </nav>
      </div>
      <!-- /SIDEBAR -->
    </div>
  </section>

<?php get_footer(); ?>
