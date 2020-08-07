<?php
/*
Template Name: Portafolio
*/
?>

  <section id="main">
    <div class="row page">
      <div class="large-10 large-centered columns">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h1><?php the_title() ?></h1>

          <div class="registros">
            <ul class="large-block-grid-4">
                            <?php
                                $the_query = new WP_Query(array(
                                  'post_type' => 'post',
                                  'showposts' => 10, 
                                  'category_name' => 'registros',
                                  'orderby'     => 'meta_value_num',
                                  'order'       => 'DESC'
                                ));
                            ?>
                            
                            <!-- the loop -->
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <li>
                      <?php the_content();?>
                    </li>
                    <?php endwhile; ?>
            </ul>
          </div>

				<?php endwhile; endif; ?>
      </div>
    </div>
  </section>