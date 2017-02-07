<?php 
/**
 * Sets up the WordPress core custom header and custom background features.
 **/
 function add_custom_background( $wp_head_callback = '', $admin_head_callback = '', $admin_preview_callback = '' ) {
    _deprecated_function( __FUNCTION__, '3.4', 'add_theme_support( \'custom-background\', $args )' );
    $args = array();
    if ( $wp_head_callback )
        $args['wp-head-callback'] = $wp_head_callback;
    if ( $admin_head_callback )
        $args['admin-head-callback'] = $admin_head_callback;
    if ( $admin_preview_callback )
        $args['admin-preview-callback'] = $admin_preview_callback;
    return add_theme_support( 'custom-background', $args );
}
function add_custom_image_header( $wp_head_callback, $admin_head_callback, $admin_preview_callback = '' ) {
    _deprecated_function( __FUNCTION__, '3.4', 'add_theme_support( \'custom-header\', $args )' );
    $args = array(
        'wp-head-callback'    => $wp_head_callback,
        'admin-head-callback' => $admin_head_callback,
    );
    if ( $admin_preview_callback )
        $args['admin-preview-callback'] = $admin_preview_callback;
    return add_theme_support( 'custom-header', $args );
}
function add_theme_page( $page_title, $menu_title, $capability, $menu_slug, $function = '' ) {
    return add_submenu_page( 'themes.php', $page_title, $menu_title, $capability, $menu_slug, $function );
}
/*
	Color Schemes
*/
function books_get_color_schemes() {
	/**
	 * Filter the color schemes registered for use with Books theme.
	 *
	 */
	return apply_filters( 'books_color_schemes', array(
		'default' => array(
			'label'  => __( 'Default', 'books' ),
			'colors' => array(
				'#1a1a1a',
				'#ffffff',
				'#007acc',
				'#1a1a1a',
				'#686868',
			),
		),
		'dark' => array(
			'label'  => __( 'Dark', 'books' ),
			'colors' => array(
				'#262626',
				'#1a1a1a',
				'#9adffd',
				'#e5e5e5',
				'#c1c1c1',
			),
		),
		'gray' => array(
			'label'  => __( 'Gray', 'books' ),
			'colors' => array(
				'#616a73',
				'#4d545c',
				'#c7c7c7',
				'#f2f2f2',
				'#f2f2f2',
			),
		),
		'red' => array(
			'label'  => __( 'Red', 'books' ),
			'colors' => array(
				'#ffffff',
				'#ff675f',
				'#640c1f',
				'#402b30',
				'#402b30',
			),
		),
		'yellow' => array(
			'label'  => __( 'Yellow', 'books' ),
			'colors' => array(
				'#3b3721',
				'#ffef8e',
				'#774e24',
				'#3b3721',
				'#5b4d3e',
			),
		),
	) );
}

if ( ! function_exists( 'books_get_color_scheme' ) ) :
/**
 * Retrieves the current books color scheme.
 */
function books_get_color_scheme() {
	$color_scheme_option = get_theme_mod( 'color_scheme', 'default' );
	$color_schemes       = books_get_color_schemes();

	if ( array_key_exists( $color_scheme_option, $color_schemes ) ) {
		return $color_schemes[ $color_scheme_option ]['colors'];
	}

	return $color_schemes['default']['colors'];
}
endif; // twentysixteen_get_color_scheme

if ( ! function_exists( 'books_get_color_scheme_choices' ) ) :
/**
 * Retrieves an array of color scheme choices registered for books.
 */
function books_get_color_scheme_choices() {
	$color_schemes                = books_get_color_schemes();
	$color_scheme_control_options = array();

	foreach ( $color_schemes as $color_scheme => $value ) {
		$color_scheme_control_options[ $color_scheme ] = $value['label'];
	}

	return $color_scheme_control_options;
}
endif; // books_get_color_scheme_choices


if ( ! function_exists( 'books_sanitize_color_scheme' ) ) :
/**
 * Handles sanitization for books scheme.
 */
function books_sanitize_color_scheme( $value ) {
	$color_schemes = books_get_color_scheme_choices();

	if ( ! array_key_exists( $value, $color_schemes ) ) {
		return 'default';
	}

	return $value;
}
endif;
?>

