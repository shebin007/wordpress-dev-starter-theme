<?php 
/**
 * 
 * This is the extension for wordpress Improving
 * In Built Functionalities Wordpress To Acheive Greater Capabilities
 * 
 */
/**
 * SVG Support
 */
add_filter( 'upload_mimes', function() {
	$mimes = [
	  'svg' => 'image/svg+xml',
	  'jpg|jpeg' => 'image/jpeg',
	  'png' => 'image/png',
	];
	return $mimes;
  });

/**
 * This webp support not working further debugging needed 
 */
// // Add WebP mime type
// function add_webp_mime_type( $mimes ) {
//     $mimes['webp'] = 'image/webp';
//     return $mimes;
// }
// add_filter( 'mime_types', 'add_webp_mime_type' );

// // Add WebP support to WordPress media
// function add_webp_to_upload_mimes( $mime_types ) {
//     $mime_types['webp'] = 'image/webp';
//     return $mime_types;
// }
// add_filter( 'upload_mimes', 'add_webp_to_upload_mimes', 10, 1 );

// // Enable WebP images in WordPress media
// function enable_webp_in_wordpress( $html, $attachment_id, $attachment ) {
//     $mime_type = get_post_mime_type( $attachment_id );
//     if ( 'image/webp' === $mime_type ) {
//         $html = str_replace( '<img', '<img decoding="async" loading="lazy"', $html );
//     }
//     return $html;
// }
// add_filter( 'wp_get_attachment_image_attributes', 'enable_webp_in_wordpress', 10, 3 );

/**
 * For Validating  the menu uses icon menu or not
 * 
 */

// class Custom_Walker_Nav_Menu extends Walker_Nav_Menu {
//     function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
//         $classes = empty( $item->classes ) ? array() : (array) $item->classes;
//         $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter( $classes ), $item ) );
//         $class_names .= in_array('menu-item-has-children', $item->classes) ? ' has-sub-menu' : '';

//         $menu_icon = get_field('menu_icon', $item->ID);

//         if ( $menu_icon  ) {
//             $class_names .= ' icon';
//         }

//         $output .= '<li class="' . esc_attr( $class_names ) . '">';
//         $output .= '<a href="' . esc_attr( $item->url ) . '"><div class="footer-menu-img" style="background-image:url('.$menu_icon.')"></div>' . esc_html( $item->title ) . '</a>';

//        return $output;
//     }
// }

// function add_custom_walker_to_menu( $args ) {
//     $args['walker'] = new Custom_Walker_Nav_Menu();
//     return $args;
// }

// add_filter( 'wp_nav_menu_args', 'add_custom_walker_to_menu' );