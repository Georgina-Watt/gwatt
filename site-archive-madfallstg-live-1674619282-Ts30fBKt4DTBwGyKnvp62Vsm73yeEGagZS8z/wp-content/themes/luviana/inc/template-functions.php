<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Luviana
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 *
 * @return array
 */
function luviana_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	if ( is_singular( 'page' ) && has_post_thumbnail() ) {
		$classes[] = 'page-has-post-thumbnail';
		$classes[] = 'absolute-menu';
	}

	if( is_singular( 'mphb_room_type' ) && has_post_thumbnail() && 'bg-image' === luviana_get_room_type_header_layout() ) {
		$classes[] = 'page-has-post-thumbnail';
		$classes[] = 'absolute-menu';
	}

	if ( is_page_template( 'template-front-page.php' ) && ( luviana_front_page_has_child() || luviana_fp_video_enabled() ) ) {
		$classes[] = 'absolute-menu';
	}

	if ( is_home() && get_theme_mod( 'luviana_blog_layout', '' ) !== '' ) {
		$classes[] = 'blog-layout-' . get_theme_mod( 'luviana_blog_layout', '' );
	}

	if ( get_theme_mod( 'luviana_site_layout', '' ) == 'wide' ) {
		$classes[] = 'wide-site-layout';
	}

	if ( luviana_sticky_menu_enabled() ) {
		$classes[] = 'sticky-menu-enabled';
	}

	return array_unique( $classes );
}

add_filter( 'body_class', 'luviana_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function luviana_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}

add_action( 'wp_head', 'luviana_pingback_header' );

function luviana_comment_form_default_fields( $fields ) {

	unset( $fields['url'] );

	return $fields;

}

add_filter( 'comment_form_default_fields', 'luviana_comment_form_default_fields' );

function luviana_read_more_link( $link ) {
	if ( ! is_singular() ) {
		return '<p class="more-tag-wrapper">' . $link . '</p>';
	}

	return $link;
}

add_filter( 'the_content_more_link', 'luviana_read_more_link' );

function luviana_front_page_has_child() {

	$query = new WP_Query( array(
		'post_type'      => 'page',
		'posts_per_page' => 1,
		'post_parent'    => get_the_ID(),
		'post_status'    => 'publish'
	) );

	return $query->have_posts();

}

add_filter( 'luviana_site_header_classes', 'luviana_site_header_classes_filter' );
function luviana_site_header_classes_filter( $classes ) {

	if ( has_nav_menu( 'menu-1' ) ) {
		$classes .= ' has-primary-menu';
	}

	if ( has_nav_menu( 'menu-2' ) ) {
		$classes .= ' has-socials-menu';
	}

	return $classes;
}

add_filter( 'luviana_site_header_container_classes', 'luviana_site_header_container_classes_filter' );
function luviana_site_header_container_classes_filter( $classes ) {

	$sticky_enabled = luviana_sticky_menu_enabled();
	$sticky_on_scroll = luviana_sticky_menu_on_scroll_enabled();

	if ( $sticky_enabled ) {
		$classes .= 'sticky-enabled ';
	}

	if ( $sticky_enabled && $sticky_on_scroll ) {
		$classes .= 'sticky-on-scroll ';
	}

	if ( $sticky_enabled && ! $sticky_on_scroll ) {
		$classes .= 'sticky-always ';
	}

	return $classes;
}

function luviana_fp_video_enabled() {

	$video_enabled = get_theme_mod( 'luviana_fp_enable_video', false );
	$video_id      = get_theme_mod( 'luviana_fp_video', false );

	return apply_filters( 'luviana_enable_fp_video', $video_enabled && $video_id, get_the_ID() );
}

function luviana_fp_enable_title_fit() {
	return get_theme_mod( 'luviana_fp_slider_enable_title_fit', true );
}

function luviana_show_entry_header_image() {

	$show = get_theme_mod( 'luviana_show_entry_header_image', true );

	return apply_filters('luviana_show_entry_header_image', $show, get_the_ID());
}

function luviana_get_room_type_header_layout() {
	return get_theme_mod('luviana_room_type_header_layout', '');
}

function luviana_sticky_menu_enabled() {
    return (bool) get_theme_mod('luviana_sticky_menu', false);
}

function luviana_sticky_menu_on_scroll_enabled() {
    return (bool) get_theme_mod('luviana_sticky_menu_on_scroll', true);
}

function luviana_back_to_top_button_enabled() {
	return (bool) get_theme_mod('luviana_back_to_top_button', false);
}