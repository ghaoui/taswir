<?php

function awesome_script_enqueue() {
    wp_enqueue_style('roboto', 'https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i', array(), '3.3.6', 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '3.3.6', 'all');
    wp_enqueue_style('uikit', get_template_directory_uri() . '/css/uikit.min.css', array(), '3.3.6', 'all');
    wp_enqueue_style('uikit_css_slideshow', get_template_directory_uri() . '/css/slideshow.min.css', array(), '3.3.6', 'all');
    wp_enqueue_style('uikit_css_slider', get_template_directory_uri() . '/css/slider.min.css', array(), '3.3.6', 'all');
    wp_enqueue_style('jquery-ui_css', get_template_directory_uri() . '/css/jquery-ui.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('sticky_css', get_template_directory_uri() . '/css/sticky.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('hover_css', get_template_directory_uri() . '/css/hover-min.css', array(), '1.0.0', 'all');
      wp_enqueue_style('accordion_css', get_template_directory_uri() . '/css/accordion.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', array(), '1.0.0', 'all');
    
    //wp_enqueue_script('my_jquery', get_template_directory_uri() . '/js/jquery-1.12.4.min.js', array(), '1.12.4', true);
    wp_enqueue_script('bootstrapjs', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.3.6', true);
    wp_enqueue_script('UiKit_js', get_template_directory_uri() . '/js/uikit.min.js', array(), '1.0.0', true);
    wp_enqueue_script('UiKit_slideshow', get_template_directory_uri() . '/js/slideshow.min.js', array(), '1.0.0', true);
    wp_enqueue_script('UiKit_slideshow_fx', get_template_directory_uri() . '/js/slideshow-fx.min.js', array(), '1.0.0', true);
    wp_enqueue_script('UiKit_slider_js', get_template_directory_uri() . '/js/slider.min.js', array(), '1.0.0', true);
    wp_enqueue_script('UiKit_slideset_js', get_template_directory_uri() . '/js/slideset.min.js', array(), '1.0.0', true);
    wp_enqueue_script('countdown', get_template_directory_uri() . '/js/jquery.countdown.min.js', array(), '1.0.0', true);
    wp_enqueue_script('validate', get_template_directory_uri() . '/js/jquery.validate.min.js', array(), '1.0.0', true);
    wp_enqueue_script('jquery-ui', get_template_directory_uri() . '/js/jquery-ui.min.js', array(), '1.0.0', true);
    wp_enqueue_script('sticky_js', get_template_directory_uri() . '/js/sticky.min.js', array(), '1.0.0', true);
    wp_enqueue_script('velocity_js', get_template_directory_uri() . '/js/velocity.min.js', array(), '1.0.0', true);
    wp_enqueue_script('velocity_ui_js', get_template_directory_uri() . '/js/velocity.ui.min.js', array(), '1.0.0', true);
    //wp_enqueue_script('parallax_js', get_template_directory_uri() . '/js/jquery.parallax-1.1.3.js', array(), '1.0.0', true);
    wp_enqueue_script('lightbox_js', get_template_directory_uri() . '/js/lightbox.min.js', array(), '1.0.0', true);
    wp_enqueue_script('tilt_js', get_template_directory_uri() . '/js/tilt.js', array(), '1.0.0', true);
    wp_enqueue_script('accordion_js', get_template_directory_uri() . '/js/accordion.min.js', array(), '1.0.0', true);
    
    wp_enqueue_script('myscript_js', get_template_directory_uri() . '/js/script.js', array(), '1', true);
   // wp_enqueue_script('maps', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyDS23LOuwI9Ar-5m08oB9qf8kqXw4PbEOs&callback=initMap', array(), '1', true);
    wp_localize_script('myscript_js', 'ajaxurl', admin_url( 'admin-ajax.php' ));
}
add_action( 'wp_enqueue_scripts', 'awesome_script_enqueue');

/*
	==========================================
	 Activate menus
	==========================================
*/

function awesome_theme_setup() {
	
	add_theme_support('menus');	
	register_nav_menu('topmenu', 'Top menu');
}

add_action('init', 'awesome_theme_setup');


function create_post_type() {
	register_post_type( 'edito',
		array(
		  'labels' => array(
		    'name' => __( 'EDITOS' )
		  ),
		  'public' => true		  
		)
	);
        register_post_type( 'actualite',
		array(
		  'labels' => array(
		    'name' => __( 'A la Une' )
		  ),
		  'public' => true,
		  'supports' => array('title', 'editor'),
		)
	);
        register_post_type( 'peac',
		array(
		  'labels' => array(
		    'name' => __( 'P.E.A.C' )
		  ),
		  'public' => true,
		  'supports' => array('title', 'editor', 'thumbnail'),
		)
	);
        register_post_type( 'link',
		array(
		  'labels' => array(
		    'name' => __( 'LIENS' )
		  ),
		  'public' => true,
		  'supports' => array('title'),
		)
	);
        register_post_type( 'project',
		array(
		  'labels' => array(
		    'name' => __( 'PROJETS' )
		  ),
		  'public' => true,
		  'supports' => array('title','editor'),
		)
	);
        register_post_type( 'production',
		array(
		  'labels' => array(
		    'name' => __( 'TASWIR PRODUCTIONS' )
		  ),
		  'public' => true,
		  'supports' => array('title','editor'),
                  'has_archive' => true
		)
	);
        register_post_type( 'conference',
		array(
		  'labels' => array(
		    'name' => __( 'CONFERENCE CINEMA' )
		  ),
		  'public' => true,
		  'supports' => array('title','editor'),
                  'has_archive' => true
		)
	);
        register_post_type( 'affiche',
		array(
		  'labels' => array(
		    'name' => __( 'L\'AFFICHE' )
		  ),
		  'public' => true,
		  'supports' => array('title','editor'),
                  'has_archive' => true
		)
	);
        register_post_type( 'ateliers',
		array(
		  'labels' => array(
		    'name' => __( 'ATELIERS' )
		  ),
		  'public' => true,
		  'supports' => array('title','editor'),
                  'has_archive' => true
		)
	);
}
add_action( 'init', 'create_post_type' );

add_theme_support( 'post-thumbnails', array( 'page', 'post', 'peac') );
//set_post_thumbnail_size( 300, 300 );

/*ajax perform*/
add_action( 'wp_ajax_remove_cart', 'remove_cart' );
add_action( 'wp_ajax_nopriv_remove_cart', 'remove_cart' );


function remove_cart() {
	$id = $_POST['id'];
        $myCart = $_SESSION['myCart'];
        unset($myCart[$id]);
        $_SESSION['myCart'] = $myCart;
        echo count($_SESSION['myCart']);
	die();
}

function site_router(){     
    $root = str_replace('index.php', '', $_SERVER['SCRIPT_NAME']);
    $url = str_replace($root, '', $_SERVER['REQUEST_URI']);
    $url = explode('/', $url);
    if(count($url) == 1 && $url[0] == 'logout'){
        wp_logout();
        header('Location: '.$root);
        die();
    }
}
add_action('send_headers', 'site_router');



function excerpt($limit) {
 $excerpt = explode(' ', get_the_excerpt(), $limit);
 if (count($excerpt)>=$limit) {
 array_pop($excerpt);
 $excerpt = implode(" ",$excerpt).'...';
 } else {
 $excerpt = implode(" ",$excerpt);
 }
 $excerpt = preg_replace('`[[^]]*]`','',$excerpt);
 return $excerpt;
}

/*add_action( 'pre_get_posts', function ( $q ) 
{
    if (    !is_admin() // VERY important, targets only front end queries
         && $q->is_main_query() // VERY important, targets only main query
         && $q->is_category() // Which post type archive page to target
    ) {

        $q->set( 'meta_key', 'deals_terminer' );
        $q->set( 'meta_value', 'non' );
        // Rest of your arguments to set
    }
});
*/
/*function monprefixe_session_start() {
   if ( ! session_id() ) {
      @session_start();
   }
}
 
add_action( 'init', 'monprefixe_session_start', 1 );

function monprefixe_detruire_toutes_variables_session() {
   if ( isset( $_COOKIE[session_name()] ) ) {
      session_unset();   // détruit les variables de session 
      session_destroy();
   }
}
 
add_action( 'wp_logout', 'monprefixe_detruire_toutes_variables_session' );*/

function add_taxonomies_to_pages() {
 //register_taxonomy_for_object_type( 'post_tag', 'page' );
 register_taxonomy_for_object_type( 'category', 'page' );
 }
add_action( 'init', 'add_taxonomies_to_pages' );