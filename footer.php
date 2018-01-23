<footer>
    <div class="row full">
        <div class="large-4 columns logo_header">
            <img src="<?php bloginfo('template_directory'); ?>/img/logo.png" alt="">
        </div>

        <div class="large-8 columns text-right texto_footer">
            <p>Productora Buenos Muchachos <br> Fono: (+56)(09)92801305</p>

                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/icon_facebook.png" alt="" class="facebook"></a>
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/icon_instagram.png" alt="" class="instagram"></a>
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/icon_twitter.png" alt="" class="twitter"></a>
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/icon_youtube.png" alt="" class="youtube"></a>

        </div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>

    <script src="<?php bloginfo('template_directory'); ?>/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/bower_components/foundation/js/foundation.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/app.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.min.js"></script>
		<script type="text/javascript">
		$(document).ready(function(){
			$(".owl-carousel").owlCarousel({
				items:6,
				autoplay:true,
				loop:true,
				autoplayTimeout:2500
			});
		});
		</script>

</body>

</html>
