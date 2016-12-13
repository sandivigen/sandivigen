<?php
// Register Sidebar
function header_sidebar() {
 
	$args = array(
		'id'            => 'sidebar-header',
		'name'          => __( 'Header sidebar', 'header_striped' ),
		// 'description'   => __( 'Header Sidebar', 'striped' ),
		'class'         => 'striped-widget',
		'before_title'  => '<span class="sidebar-header-widgettitle">',
		'after_title'   => '</span>',
		'before_widget' => '<div id="%2$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );
 
}
 
// Hook into the 'widgets_init' action
add_action( 'widgets_init', 'header_sidebar' );

function striped_sidebar() {
 
	$args = array(
		'id'            => 'sidebar-left',
		'name'          => __( 'Sidebar', 'striped' ),
		'description'   => __( 'Left Sidebar', 'striped' ),
		'class'         => 'striped-widget',
		// 'before_title'  => '<h2 class="widgettitle">',
		// 'after_title'   => '</h2>',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );
 
}
 
// Hook into the 'widgets_init' action
add_action( 'widgets_init', 'striped_sidebar' );


// Register Custom Navigation Walker (Bootstrap 3.0)
require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Navigation Menu', 'sandivigen' ),
) );