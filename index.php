<?php get_header(); ?>

<section>
    <!-- SLIDER -->
    <div class="row collapse full">
        <div class="large-12 columns">
              <ul class="example-orbit" data-orbit data-options="bullets:false;slide_number:false">
               <li class="active">
                <img src="<?php bloginfo('template_directory'); ?>/img/slider_1.png" alt="slide 1" />
									<div class="caption">
										<div class="row">
													<div class="large-6 columns">
																<h1 class="titulo_slider">Producción Audiovisual</h1>
																 <p class="texto_slider">
																	 Creativos, innovadores, transgresores, amantes de la Buena Mesa y que sin duda cada vez que nos confíen algún trabajo, ahí estaremos para cumplir tu  encargo. Sin dejar ningún rastro por más  difícil que sea, porque sellamos un compromiso.
																 </p>
													</div>
													<div class="large-6 columns">
														<style>.embed-container { position: relative; padding-bottom: 56.25%; height: 0; overflow: hidden; max-width: 100%; } .embed-container iframe, .embed-container object, .embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }</style><div class='embed-container'><iframe src='https://www.youtube.com/embed/PmY0RY1nswg' frameborder='0' allowfullscreen></iframe></div>
													</div>
										</div>
									</div>
               </li>
            </ul>
        </div>
    </div>

     <!-- QUIENES SOMOS -->
    <div class="row full collapse pbmnegro">
        <div class="large-6 columns quienes_somos">
            <h1 class="titulo_quienes_somos">Productora <br> Buenos Muchachos</h1>

            <p class="texto_quienes_somos">Productora Buenos Muchachos, es una empresa regional, de iniciativa privada, creada en diciembre de 2008 por un grupo de personas amantes de las comunicaciones, con ganas de presentar propuestas novedosas a la comunidad, incorporando altos estándares tecnológicos en los procesos de producción.</p>
        </div>

        <div class="large-6 columns quienes_somos">
            <img src="<?php bloginfo('template_directory'); ?>/img/img_quienes%20somos.png" alt="" class="img_quienes_somos">
        </div>

    </div>

     <!-- SERVICIOS -->
     <div class="row collapse servicios">
         <div class="large-12 columns text-center">

           <h1><spam>Nuestros</spam> Servicios</h1>

             <ul class="large-block-grid-3  medium-block-grid-3  small-block-grid-1 iconos">

                   <li>
                      <img src="<?php bloginfo('template_directory'); ?>/img/icon_cinema.png" alt="" class="icon_servicios">
                    <a href="#"><h4 class="texto_servicio">VIDEO <br> COORPORATIVO</h4></a>
                   </li>

                   <li>
                      <img src="<?php bloginfo('template_directory'); ?>/img/icon_publicidad.png" alt="" class="icon_servicios">
                        <a href="#"><h4 class="texto_servicio">PUBLICIDAD</h4></a>
                   </li>

                   <li>
                      <img src="<?php bloginfo('template_directory'); ?>/img/icon_video.png" alt="" class="icon_servicios">
                     <a href="#"> <h4 class="texto_servicio">OTRAS <br> PRESTACIONES</h4></a>
                   </li>

              </ul>
          </div>
      </div>

     <!-- PORTAFOLIO -->
     <div class="row full textura">
         <div class="large-12 columns text-center">
             <h1>Portafolio</h1>

             <div class="owl-carousel owl-theme">

                <div class="item-video" data-merge="2"><iframe width="460" height="315"     src='https://www.youtube.com/embed/iUxpou8nuhQ' frameborder='0' allowfullscreen></iframe><p class="texto_video">Spot Comercial Serrano Shell Punta Arenas</p></div>

                <div class="item-video" data-merge="2"><iframe width="460" height="315"     src="https://www.youtube.com/embed/wI3hQOZ9AM0" frameborder="0" allowfullscreen></iframe><p class="texto_video">Spot suzuki swift sport - Recasur dercocenter</p></div>

                <div class="item-video" data-merge="2"><iframe width="460"             height="315"src="https://www.youtube.com/embed/iUxpou8nuhQ" frameborder="0" allowfullscreen</iframe><p class="texto_video">Spot Comercial Serrano Shell Punta Arenas</p></div>

                <div class="item-video" data-merge="2"><iframe width="460" height="315"     src="https://www.youtube.com/embed/wI3hQOZ9AM0" frameborder="0" allowfullscreen></iframe><p class="texto_video">Spot suzuki swift sport - Recasur dercocenter</p></div>

                <div class="item-video" data-merge="2"><iframe width="460" height="315"     src="https://www.youtube.com/embed/iUxpou8nuhQ" frameborder="0" allowfullscreen></iframe><p class="texto_video">Spot Comercial Serrano Shell Punta Arenas</p></div>

                <div class="item-video" data-merge="2"><iframe width="460" height="315"     src="https://www.youtube.com/embed/wI3hQOZ9AM0" frameborder="0" allowfullscreen></iframe><p class="texto_video">Spot suzuki swift sport - Recasur dercocenter</p></div>
             </div>
         </div>
      </div>

     <!-- PROGRAMAS -->
     <div class="row collapse full">
         <div class="large-12 columns">
              <ul class="large-block-grid-2  medium-block-grid-2 small-block-grid-1">

								          <?php
								              $the_query = new WP_Query(array(
								                'post_type' => 'post',
								                'showposts' => 10,
								                'category_name' => 'programas',
								                'order'       => 'DESC'
								              ));
								          ?>

								          <!-- the loop -->
									<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
										<li class="item">
											 <div class="row full contenedor_programa">
													 <div class="large-5 medium-5 columns logo_programa">
															 	<?php the_post_thumbnail();?>
													 </div>

													 <div class="large-7 medium-7 columns texto_programas">
															<h3><?php the_title(); ?></h3>
															 <?php the_excerpt(); ?>
													 </div>
											 </div>
										</li>
									<?php endwhile; ?>
									<!-- end of the loop -->
<!--
                  <li class="item">
                     <div class="row full contenedor_programa">
                         <div class="large-5 medium-5 columns logo_programa">
                             <img src="<?php bloginfo('template_directory'); ?>/img/logo_se_vende.png" alt="">
                         </div>

                         <div class="large-7 medium-7 columns texto_programas">
                            <h3>Se Vende</h3>
                             <p>Como vendedor o como auspiciador, nuestros clientes cuentan con una vitrina permanente, para mostrar sus productos o servicios. Este Programa <a href="#">[…]</a></p>
                         </div>
                     </div>
                  </li>

                  <li class="item">
                     <div class="row full contenedor_programa">
                         <div class="large-5 medium-5 columns logo_programa">
                             <img src="<?php bloginfo('template_directory'); ?>/img/logo_buena_mesa.png" alt="">
                         </div>

                         <div class="large-7 medium-7 columns texto_programas">
                            <h3>Buena Mesa</h3>
                             <p>Con la conducción del reconocido Chef Sebastián, se exhiben distintas preparaciones culinarias para el deleite de los paladares magallánicos. Con <a href="#">[…]</a></p>
                         </div>
                     </div>
                  </li>

                  <li class="item">
                     <div class="row full contenedor_programa">
                         <div class="large-5 medium-5 columns logo_programa">
                             <img src="<?php bloginfo('template_directory'); ?>/img/logo_tiempo.png" alt="">
                         </div>

                         <div class="large-7 medium-7 columns texto_programas">
                            <h3>El Tiempo</h3>
                             <p>Primer programa regional en exhibir, con la técnica Chroma Key, el pronóstico del tiempo en la región. Con la conducción <a href="#">[…]</a></p>
                         </div>
                     </div>
                  </li>

                  <li class="item">
                     <div class="row full contenedor_programa">
                         <div class="large-5 medium-5 columns logo_programa">
                             <img src="<?php bloginfo('template_directory'); ?>/img/logo_rally.png" alt="">
                         </div>

                         <div class="large-7 medium-7 columns texto_programas">
                            <h3>Hablemos de Rally</h3>
                             <p>Programa de televisión, con la conducción de Pedro Maldonado y Yakov Masle, dedicado a la cobertura del rally regional, espacio <a href="#">[…]</a></p>
                         </div>
                     </div>
                  </li> -->

              </ul>
         </div>
      </div>

     <!-- CLIENTES -->
     <div class="row full">
        <div class="large-12 columns text-center">
            <h1><spam>Nuestros</spam> Clientes</h1>

								    <div class="large-10 columns large-centered logos_publicidad">
								            <div class="owl-carousel owl-theme">
															          <?php
								              $the_query = new WP_Query(array(
								                'post_type' => 'post',
								                'showposts' => 10,
								                'category_name' => 'clientes',
								                'order'       => 'DESC'
								              ));
								     ?>

								          <!-- the loop -->
									<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
										 <div class="logos">
										 		<?php the_post_thumbnail( 'full'); ?>
										 </div>
									<?php endwhile; ?>
									<!-- end of the loop -->
                <div class="logos"> <img src="<?php bloginfo('template_directory'); ?>/img/logo_tv_red.png" alt=""> </div>
                <div class="logos"> <img src="<?php bloginfo('template_directory'); ?>/img/logo_chile_crece.png" alt=""> </div>
                <div class="logos"> <img src="<?php bloginfo('template_directory'); ?>/img/logo_dap.png" alt=""> </div>
                <div class="logos"> <img src="<?php bloginfo('template_directory'); ?>/img/logo_gobierno.png" alt=""> </div>
                <div class="logos"> <img src="<?php bloginfo('template_directory'); ?>/img/logo_recasur.png" alt=""> </div>
                <div class="logos"> <img src="<?php bloginfo('template_directory'); ?>/img/logo_hoteles.png" alt=""> </div>
                <div class="logos"> <img src="<?php bloginfo('template_directory'); ?>/img/logo_udemagallanes.png" alt=""> </div>
            </div>
          </div>
        </div>
    </div>

     <!-- CONTACTO -->
     <div class="row full collapse contacto">
         <div class="large-6 columns textura_contacto">
             <h1 class="titulo_contacto">Contáctanos</h1>
               <div class="input">
                  <input type="text" placeholder="*Nombre..." />
                  <input type="text" placeholder="*Número de contacto..." />
                  <input type="text" placeholder="*Email..." />
                  <textarea placeholder="*Mensaje..."></textarea>
                  <a href=""><button>Enviar</button></a>
               </div>


          </div>

         <div class="large-6 columns">
            <div class="embed-container">
             <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2392.7009827544653!2d-70.9111969842431!3d-53.15146077993863!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xbdb264811cf315e3%3A0xd951bac43d1a6eb0!2sAngamos+175%2C+Punta+Arenas%2C+Regi%C3%B3n+de+Magallanes+y+de+la+Ant%C3%A1rtica+Chilena!5e0!3m2!1ses!2scl!4v1516716946545" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
         </div>
     </div>
</section>


<?php get_footer(); ?>
