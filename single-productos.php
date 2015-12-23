<?php get_header(); ?>

<div class="row">
	<div class="row">
		<div class="large-12 columns large-centered">
			<div class="large-7 columns">
				<!-- <?php the_post_thumbnail("producto"); ?> -->
			<ul class="example-orbit" data-orbit data-options="slide_number:false;pause_on_hover:false;timer_speed: 4000">
				<?php
	              	$attachments = get_children(array('post_parent' => $post->ID,
	                                      'post_status' => 'inherit',
	                                      'post_type' => 'attachment',
	                                      'post_mime_type' => 'image',
	                                      'order' => 'ASC',
	                                      'orderby' => 'menu_order ID'));

	              	foreach($attachments as $att_id => $attachment) {
	                  $full_img_url = wp_get_attachment_image($attachment->ID, "full");
	                  $metaatt= wp_get_attachment( $attachment->ID );
	                  ?>
	                  <li>
	                      <?php echo $full_img_url;?>
	                  </li>
	                 <?php
	              	}
        		?>

			</ul>

			</div>
			<div class="large-5 columns">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<h3><?php the_title(); ?></h3>
				<div class="codigosingle">
						Código: <?php the_field("codigo"); ?><br>
				</div>
				<?php the_content(); ?>
				<div class="row collapse cat">
					<div class="sin <?php the_category_unlinked(); ?>">
						<div class="row collapse">
							<div class="large-6 columns">
								<div class="precio pfull small-text-center large-text-left">
									$ <?php the_field("precio"); ?>
								</div>
							</div>
							<div class="large-6 columns">
								<a data-reveal-id="pago" class="button tiny alert comprar cfull">
									<i  class="fa fa-cart-plus"></i>  Comprar
								</a>
							</div>
						</div>
					</div>
				</div>

			<?php endwhile; endif; ?>
			</div>
		</div>	
	</div>

<div id="pago" class="reveal-modal" data-reveal aria-labelledby="Pago" aria-hidden="true" role="dialog">
  <h2 id="firstModalTitle">FORMAS DE PAGO:</h2>
  <ul>
  	<li>A través de Webpay.cl <div class="alert">Disponible desde la próxima semana</div></li>
  	<li>Mediante transferencia electrónica:<br>
		María Carolina Fernández Olivo<br>
		RUT. 10.069.078-0<br>
		Banco de Crédito e Inversiones<br>
		Cta.Cte. 87015463<br>
		Email ventas@fibrasycolores.cl<br></li>
  </ul>
  <p>En ambos casos enviar correo a ventas@fibrasycolores.cl informando la realización del pago e indicando el N° de Pedido correspondiente,  a fin de proceder  al despacho de la mercadería.</p>	

  <h2>DESPACHO:</h2>
  
	<p><b>Dentro de Punta Arenas</b> (radio urbano)  Sin costo adicional, plazo máximo 24 horas.</p>
	<p><b>Despacho fuera  de Punta Arenas</b>:  Los despachos fuera de Punta Arenas se realizan a través de transporte externo que el cliente defina (Chilexpress, Correos de Chile, Turbus cargo, Pullman Cargo)</p>

	<p>El pago del  envío es por cargo del cliente, el cual debe ser cancelado al recibir el producto.</p>

  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>

</div>

<?php get_footer(); ?>