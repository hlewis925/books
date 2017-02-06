<?php
register_sidebar(array(
	'name'=> "Header Right Widget",
	'id' => 'socialnav-sidebar',
	'description' => 'The top bar',
	'before_widget' => '<div>',
	'after_widget' => '</div>'
));
register_sidebar(array(
	'name'=> "Right Sidebar",
	'id' => 'right-sidebar',
	'description' => 'The top bar',
	'before_widget' => '<div>',
	'after_widget' => '</div>'
));
register_sidebar(array(
	'name'=> "Second Right Sidebar",
	'id' => 'second-right-sidebar',
	'description' => 'The middle bar',
	'before_widget' => '<div>',
	'after_widget' => '</div>'
));
register_sidebar(array(
	'name'=> "Third Right Sidebar",
	'id' => 'third-right-sidebar',
	'description' => 'The bottom bar',
	'before_widget' => '<div>',
	'after_widget' => '</div>'
));
register_sidebar( array(
	'name' => 'Footer Sidebar 1',
	'id' => 'footer-sidebar-1',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );
register_sidebar( array(
	'name' => 'Footer Sidebar 2',
	'id' => 'footer-sidebar-2',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );
register_sidebar( array(
	'name' => 'Footer Sidebar 3',
	'id' => 'footer-sidebar-3',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );
register_sidebar( array(
	'name' => 'Content Sidebar 1',
	'id' => 'leftcontent-sidebar',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );

register_sidebar( array(
	'name' => 'Content Sidebar 2',
	'id' => 'middlecontent-sidebar',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );
register_sidebar( array(
	'name' => 'Content Sidebar 3',
	'id' => 'rightcontent-sidebar',
	'description' => 'Appears in the footer area',
	'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	'after_widget' => '</aside>',
	'before_title' => '<h3 class="widget-title">',
	'after_title' => '</h3>',
) );
$args = array(
	'default-color' => '#ECD7F4',
	'default-image' => '%1$s/images/background.jpg',
);
add_theme_support( 'custom-background', $args );
$args = array(
	'flex-width'    => true,
	'width'         => 960,
	'flex-height'    => true,
	'height'        => 250,
	'default-image' => get_template_directory_uri() . '/images/header.pgn',
);
global $wp_version;
if ( version_compare( $wp_version, '3.4', '>=' ) ) :
	add_theme_support( 'custom-header' );
else :
	add_custom_image_header( $wp_head_callback, $admin_head_callback );
endif;
add_theme_support( 'custom-header', $args );
?>
