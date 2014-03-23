<?php get_header(); ?>

<section id="slider">
  <div class="row">
    <ul class="example-orbit" data-orbit>
      <li>
        <img src="http://placehold.it/1000x300/A92B48/fff" alt="slide 1" />
        <div class="orbit-caption">
          Caption One.
        </div>
      </li>
      <li>
        <img src="http://placehold.it/1000x300/EE964D/fff" alt="slide 2" />
        <div class="orbit-caption">
          Caption Two.
        </div>
      </li>
      <li>
        <img src="http://placehold.it/1000x300/FDC43D/fff" alt="slide 3" />
        <div class="orbit-caption">
          Caption Three.
        </div>
      </li>
    </ul>
  </div>    
</section>


<section id="main">
  <div class="row">
    
    <div class="large-8 columns">
        <div class="large-3 columns">
          <img src="http://fakeimg.pl/350x200/00CED1/FFF/?text=img+placeholder">
        </div>
        <div class="large-9 columns">
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <h1><?php the_title(); ?></h1>
          <p><?php the_content();?></p>
        <?php endwhile; endif; ?>
        </div>
    </div>

    <div class="large-4 columns">
      <?php get_sidebar(); ?>
    </div>

  </div>
</section>

<?php get_footer(); ?>
