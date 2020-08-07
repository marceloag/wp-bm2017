<?php get_header(); ?>

<?php
/*
Template Name: Portafolio
*/
?>

  <section id="main">
    <div class="row page">
      <div class="large-12 large-centered columns">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<!-- <h1><?php the_title() ?></h1> -->

          <div class="registros">
            <h1> Registros Audiovisuales </h1>
            <ul class="large-block-grid-3">
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
                      <div class="flex-video">
                        <?php the_content();?>
                      </div>
                    </li>
                    <?php endwhile; ?>
            </ul>
          </div>

          <div class="circuito">
            <h1> Circuito Cerrado </h1>
            <ul class="large-block-grid-3">
                            <?php
                                $the_query = new WP_Query(array(
                                  'post_type' => 'post',
                                  'showposts' => 10, 
                                  'category_name' => 'circuito',
                                  'orderby'     => 'meta_value_num',
                                  'order'       => 'DESC'
                                ));
                            ?>
                            
                            <!-- the loop -->
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <li>
                      <div class="flex-video">
                        <?php the_content();?>
                      </div>
                    </li>
                    <?php endwhile; ?>
            </ul>
          </div>

          <div class="registros">
            <h1> Spots Publicitarios </h1>
            <ul class="large-block-grid-3">
                            <?php
                                $the_query = new WP_Query(array(
                                  'post_type' => 'spots',
                                  'showposts' => 10, 
                                  'category_name' => 'registros',
                                  'orderby'     => 'meta_value_num',
                                  'order'       => 'DESC'
                                ));
                            ?>
                            
                            <!-- the loop -->
                    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
                    <li>
                      <div class="flex-video">
                        <?php the_content();?>
                      </div>
                    </li>
                    <?php endwhile; ?>
            </ul>
          </div>

				<?php endwhile; endif; ?>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>