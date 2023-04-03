<?php 



/**
 * Add our Customizer content
 */
function mytheme_customize_register( $wp_customize ) {
    $wp_customize->add_setting( 'sanad_logo', array(
        'type' => 'theme_mod',
        'transport' => 'postMessage',
    )  );
 
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'sanad_logo',
    array(
        'label' => __( 'Sanad Logo' ),
        'description' => esc_html__( 'This is Logo for to show on Scroll' ),
        'section' => 'title_tagline',
        'settings' => 'sanad_logo'
    )
    ) );


   
 };
 add_action( 'customize_register', 'mytheme_customize_register' );

// $wp_customize->add_setting( 'sanad_logo_2',
//    array(
//       'default' => '',
//       'transport' => 'refresh',
//       'sanitize_callback' => 'esc_url_raw'
//    )
// );
 
// $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'sanad_logo_2',
//    array(
//       'label' => __( 'Logo 2' ),
//       'description' => esc_html__( 'Logo to show on scroll' ),
//       'section' => 'title_tagline',
//       'button_labels' => array( // Optional.
//          'select' => __( 'Select Image' ),
//          'change' => __( 'Change Image' ),
//          'remove' => __( 'Remove' ),
//          'placeholder' => __( 'No image selected' ),
//          'frame_title' => __( 'Select Image' ),
//          'frame_button' => __( 'Choose Image' ),
//       )
//    )
// ) );

function my_sanitize_links( $value ) {
    $links = array();
    foreach ( (array) $value as $link ) {
        if ( isset( $link['text'] ) && isset( $link['url'] ) ) {
            $links[] = array(
                'text' => sanitize_text_field( $link['text'] ),
                'url' => esc_url_raw( $link['url'] ),
            );
        }
    }
    return $links;
}