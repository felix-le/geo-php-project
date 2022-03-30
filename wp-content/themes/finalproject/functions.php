<?php
add_theme_support( 'menus' );

register_nav_menus(array(
  'top-menu' => __('Top Menu', 'theme')
));
add_theme_support('post-thumbnails');
function add_class_li( $classes, $item, $args ) {
  if(isset($args->li_class)) {
    $classes[] = $args->li_class;
  }

  if(isset($args->active_class) && in_array('current-menu-item', $classes)) {
    $classes[] = $args->active_class;
  }
  return $classes;
}

add_filter('nav_menu_css_class', 'add_class_li', 10, 3);

function add_anchor_class( $attr, $item, $args ) {
  if(isset($args->a_class)) {
    $attr['class'] = $args->a_class;
  }
  return $attr;
}

add_filter('nav_menu_link_attributes', 'add_anchor_class', 10, 3);

// Menus
register_nav_menus(
  array(
    'top-menu' => __( 'Top Menu', 'theme' ),
    'mobile-menu' => __( 'Mobile Menu', 'theme' ),
    'footer-menu' => __( 'Footer Menu', 'theme' )
  )
);


// custom Image size

add_image_size('blog-large', 800, 400, false);
add_image_size('blog-small', 800, 400, true);


// Pet custom post type
 
function my_pet_post_type(){

	$args = array(

		'labels'=> array(
			'name' => 'Pets',
			'singular_name' => 'Pet'
		),
		'hierarchical' =>true,
		'public' =>true,
		'has_archive' => true,
		'supports' => array('title',   'editor', 'custom-fields', 'thumbnail' ),
		// 'rewrite' => array ('slug' => 'cars' )
    'menu_icon' => 'dashicons-pets',
	);



	register_post_type('pets', $args);
}

add_action('init', 'my_pet_post_type');

// tag

function my_pet_taxonomy(){

		$args = array(

			'labels' => array(
					'name' => 'Tags',
					'singular_name' => 'Tag',
			),

			'public' => true,
			'hierarchical' => true,

	);


	register_taxonomy('tags', array('pets'), $args);
}
add_action('init', 'my_pet_taxonomy');

// shortcode

function signal_shortcode(){
	return '<h3 class="color:orange;">Felix Le</h3>';
}

add_shortcode('signal_shortcode', 'signal_shortcode');