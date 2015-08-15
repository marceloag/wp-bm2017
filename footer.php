<footer>
    <div class="row">
      <div class="large-10 columns large-centered" style="text-align:center;">
        <?php wp_nav_menu( array( 'theme_location' => 'footer' , 'menu_class' => 'footer') ); ?>
      </div>
    </div>
</footer>

<?php wp_footer(); ?>
	
    <script src="<?php bloginfo('template_directory'); ?>/bower_components/jquery/dist/jquery.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/bower_components/foundation/js/foundation.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/app.js"></script>
	
</body>

</html>
