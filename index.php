<?php get_header(); ?>

<div class="restoftheworld">

  <section id="slider">
      <div class="row full sli">
          <ul class="example-orbit" data-orbit data-options="pause_on_hover:false;animation:fade;slide_number:false">

            <?php
                        $the_query = new WP_Query(array(
                          'post_type' => 'slide',
                          'showposts' => 10, 
                          'posts_per_page'  => -1,
                          'order'       => 'DESC'
                        ));
            ?>
                    
                    <!-- the loop -->
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <li class="c<?php the_field("categoria"); ?> sli">
              <div class="large-5 columns desc">
                    <h1><?php the_title(); ?></h1>
                    <span class="categoria">Articulos de Lana</span>
                    <?php the_content(); ?>
              </div>
              <div class="large-7 columns">
                  <?php the_post_thumbnail("slides");?>
              </div>
            </li>
            <?php endwhile; ?>
            <!-- end of the loop -->
          </ul>
      </div>
  </section>


  <section id="productos">
      <div class="row">
          <ul class="large-block-grid-4">

          <?php
              $the_query = new WP_Query(array(
                'post_type' => 'productos',
                'showposts' => 12, 
                'posts_per_page'  => 8,
                'orderby'     => 'rand',
              ));
          ?>
          
          <!-- the loop -->
          <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
              <li>
                  <div class="producto <?php the_category_unlinked(); ?>">
                      <a href=" <?php the_permalink(); ?> ">
                        <?php the_post_thumbnail("producto"); ?>
                      </a>
                      <div class="info text-center">
                        <div class="titulop">
                          <?php the_title(); ?>
                        </div> 
                          <div class="precio">$25.000</div>
                      </div>
                  </div>
              </li>
          <?php endwhile; ?>
          <!-- end of the loop -->
          </ul>
      </div>
  </section>



<?php get_footer(); ?>
