<?php
/**
 * Onke Portfolio Theme Functions
 * 
 * This file contains the theme setup, enqueued scripts and styles,
 * and other theme functionality.
 */

// Theme Setup
function onke_theme_setup() {
    // Add theme support
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo' );
    add_theme_support( 'post-thumbnails' );
    
    // Register navigation menus
    register_nav_menus( array(
        'primary' => esc_html__( 'Primary Menu', 'onke-portfolio' ),
    ) );
}
add_action( 'after_setup_theme', 'onke_theme_setup' );

// Enqueue Styles and Scripts
function onke_enqueue_assets() {
    // Enqueue main stylesheet
    wp_enqueue_style( 'onke-style', get_stylesheet_uri(), array(), '1.0' );
    
    // Enqueue Google Fonts
    wp_enqueue_style( 'onke-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Inter:wght@400;500&family=Roboto:wght@500&display=swap', array(), null );
}
add_action( 'wp_enqueue_scripts', 'onke_enqueue_assets' );

// Custom Logo Support
function onke_custom_logo() {
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $html = sprintf(
        '<a href="%1$s" class="custom-logo-link">%2$s</a>',
        esc_url( home_url( '/' ) ),
        wp_get_attachment_image( $custom_logo_id, 'full' )
    );
    return $html;
}
