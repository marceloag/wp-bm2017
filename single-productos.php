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
	                  $full_img_url = wp_get_attachment_image($attachment->ID, "producto");
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
				<div class="codigo">
						<?php the_field("codigo"); ?>
				</div>
				<?php the_content(); ?>
				<div class="row collapse">
					<div class="precio">
							$ <?php the_field("precio"); ?>
					</div>
				</div>
				<a data-reveal-id="pago" class="button tiny alert comprar">
					<i  class="fa fa-cart-plus"></i>  Comprar
				</a>
			<?php endwhile; endif; ?>
			</div>
		</div>	
	</div>

<div id="pago" class="reveal-modal" data-reveal aria-labelledby="Pago" aria-hidden="true" role="dialog">
  <h2 id="firstModalTitle">FORMAS DE PAGO:</h2>
  <ul>
  	<li>A través de Webpay.cl</li>
  	<li>Mediante transferencia electrónica:<br>
		María Carolina Fernández Olivo<br>
		RUT. 10.069.078-0<br>
		Banco de Crédito e Inversiones<br>
		Cta.Cte. 86015463<br>
		Email ventas@fibrasycolores.cl<br></li>
  </ul>
  <p>En ambos casos enviar correo a ventas@fibrasycolores.cl informando la realización del pago e indicando el N° de Pedido correspondiente,  a fin de proceder  al despacho de la mercadería.</p>	

  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>

</div>

<?php get_footer(); ?>