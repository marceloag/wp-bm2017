<?php get_header(); ?>

<div class="row">
	<div class="row">
		<div class="large-12 columns large-centered">
			<div class="large-7 columns">
				<!-- <?php the_post_thumbnail("producto"); ?> -->
			<ul class="example-orbit" data-orbit data-options="slide_number:false">
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
				<?php the_content(); ?>
				<a data-reveal-id="pago" class="button tiny alert comprar">
					<i  class="fa fa-cart-plus"></i>  Comprar
				</a>
			<?php endwhile; endif; ?>
			</div>
		</div>	
	</div>

<div id="pago" class="reveal-modal" data-reveal aria-labelledby="Pago" aria-hidden="true" role="dialog">
  <h2 id="firstModalTitle">Pago</h2>
  <p>Reveal makes these very easy to summon and dismiss. The close button is simply an anchor with a unicode character icon and a class of <code>close-reveal-modal</code>. Clicking anywhere outside the modal will also dismiss it.</p>
  <p>Finally, if your modal summons another Reveal modal, the plugin will handle that for you gracefully.</p>
  <p><a href="#" data-reveal-id="secondModal" class="secondary button">Second Modal...</a></p>
  <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>

</div>

<?php get_footer(); ?>