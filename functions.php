<?php
        // Translations can be filed in the /languages/ directory
    load_theme_textdomain( 'html5reset', TEMPLATEPATH . '/languages' );
 
        $locale = get_locale();
        $locale_file = TEMPLATEPATH . "/languages/$locale.php";
        if ( is_readable($locale_file) )
            require_once($locale_file);
	
	// Add RSS links to <head> section
	automatic_feed_links();

	// Clean up the <head>
	function removeHeadLinks() {
    	remove_action('wp_head', 'rsd_link');
    	remove_action('wp_head', 'wlwmanifest_link');
    }
    add_action('init', 'removeHeadLinks');
    remove_action('wp_head', 'wp_generator');
    
    if (function_exists('register_sidebar')) {
    	register_sidebar(array(
    		'name' => __('Sidebar Widgets','html5reset' ),
    		'id'   => 'sidebar-widgets',
    		'description'   => __( 'These are widgets for the sidebar.','html5reset' ),
    		'before_widget' => '<div id="%1$s" class="widget %2$s">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h2>',
    		'after_title'   => '</h2>'
    	));
    }
    function custom_excerpt_length( $length ) {
	return 20;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

    // CUSTOM THUMBNAILS

    if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 150, 150, true );
    }

    if ( function_exists( 'add_image_size' ) ) { 
        add_image_size( 'slides', 715, 354,true );
        add_image_size( 'producto', 700, 400,true );
    }

    // Custom Menu Places
    function register_my_menus() {
      register_nav_menus(
        array(
          'mainmenu' => __( 'mainmenu' ),
          'footer' => __( 'footer' )
        )
      );
    }

    add_action( 'init', 'register_my_menus' );
    
    add_theme_support( 'post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'audio', 'chat', 'video')); // Add 3.1 post format theme support.

    function any_ptype_on_cat($request) {
    if ( isset($request['category_name']) )
        $request['post_type'] = 'any';

    return $request;
    }
    add_filter('request', 'any_ptype_on_cat');

?>