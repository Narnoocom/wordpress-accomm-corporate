<?php
/*
*
* @description: Adds custom elements to the theme customizer
*
*/
function the_theme_customizer( $wp_customize ) {
  /*
  *
  * @description: Add a custom logo to the theme
  *
  */
  $wp_customize->add_section( THETHEME_SLUG.'_logo_section' , array(
      'title'       => __( 'Logo', THETHEME_SLUG ),
      'priority'    => 30,
      'description' => 'Upload a logo for your site!',
  ) );
  $wp_customize->add_setting( THETHEME_SLUG.'_logo' );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, THETHEME_SLUG.'_logo', array(
      'label'    => __( 'Logo', THETHEME_SLUG ),
      'section'  => THETHEME_SLUG.'_logo_section',
      'settings' => THETHEME_SLUG.'_logo',
  ) ) );

  /*
  *
  * @description: Add a custom background image to the theme
  *
  */
  $wp_customize->add_section( THETHEME_SLUG.'_bg_section' , array(
      'title'       => __( 'Background Image', THETHEME_SLUG ),
      'priority'    => 30,
      'description' => 'Upload a background image for your sites!',
  ) );
  $wp_customize->add_setting( THETHEME_SLUG.'_bg' );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, THETHEME_SLUG.'_bg', array(
      'label'    => __( 'Background Image', THETHEME_SLUG ),
      'section'  => THETHEME_SLUG.'_bg_section',
      'settings' => THETHEME_SLUG.'_bg',
  ) ) );

  /*
  *
  * @description: Add a custom background image to the theme
  *
  */
  $wp_customize->add_section( THETHEME_SLUG.'_header_img_section' , array(
      'title'       => __( 'Page Header Image', THETHEME_SLUG ),
      'priority'    => 30,
      'description' => 'Upload an image for your sites header!',
  ) );
  $wp_customize->add_setting( THETHEME_SLUG.'_header_img' );
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, THETHEME_SLUG.'_header_img', array(
      'label'    => __( 'Header Image', THETHEME_SLUG ),
      'section'  => THETHEME_SLUG.'_header_img_section',
      'settings' => THETHEME_SLUG.'_header_img',
  ) ) );
  /*
  *
  * @description: Add a custom business details to the theme
  *
  */
  $wp_customize->add_section( THETHEME_SLUG.'_phone_section' , array(
      'title'       => __( 'Business Contact Details', THETHEME_SLUG ),
      'priority'    => 30,
      'description' => 'Store your contact details!',
  ) );
  $wp_customize->add_setting( THETHEME_SLUG.'_phone' );
  $wp_customize->add_control( THETHEME_SLUG.'_phone_id',
	array(
		'label'    => __( 'Business phone', THETHEME_SLUG ),
		'section'  => THETHEME_SLUG.'_phone_section',
		'settings' => THETHEME_SLUG.'_phone',
		'type'     => 'text'
	) );
  $wp_customize->add_setting( THETHEME_SLUG.'_email' );
  $wp_customize->add_control( THETHEME_SLUG.'_email_id',
	array(
		'label'    => __( 'Business email', THETHEME_SLUG ),
		'section'  => THETHEME_SLUG.'_phone_section',
		'settings' => THETHEME_SLUG.'_email',
		'type'     => 'text'
	) );
  $wp_customize->add_setting( THETHEME_SLUG.'_address' );
  $wp_customize->add_control( THETHEME_SLUG.'_address_id',
	array(
		'label'    => __( 'Business Address', THETHEME_SLUG ),
		'section'  => THETHEME_SLUG.'_phone_section',
		'settings' => THETHEME_SLUG.'_address',
		'type'     => 'textarea'
	) );

  /*
  *
  * @description: Add footer information to the theme
  *
  */
  $wp_customize->add_section( THETHEME_SLUG.'_footer_section' , array(
      'title'       => __( 'Footer Privacy information', THETHEME_SLUG ),
      'priority'    => 30,
      'description' => 'Add a privacy link to your footer!',
  ) );
  $wp_customize->add_setting( THETHEME_SLUG.'_footer' );
  $wp_customize->add_control( THETHEME_SLUG.'_footer_id',
	array(
		'label'    => __( 'Website Footer', THETHEME_SLUG ),
		'section'  => THETHEME_SLUG.'_footer_section',
		'settings' => THETHEME_SLUG.'_footer',
		'type'     => 'textarea'
	) );

  /*
  *
  * @description: Add Google Analytics information to the theme
  *
  */
  $wp_customize->add_section( THETHEME_SLUG.'_ga_section' , array(
      'title'       => __( 'Google Analytics Code', THETHEME_SLUG),
      'priority'    => 30,
      'description' => 'Add a your Google Analytics code to your website!',
  ) );
  $wp_customize->add_setting( THETHEME_SLUG.'_ga' );
  $wp_customize->add_control( THETHEME_SLUG.'_ga_id',
	array(
		'label'    => __( 'Googla Analytics Code', THETHEME_SLUG ),
		'section'  => THETHEME_SLUG.'_ga_section',
		'settings' => THETHEME_SLUG.'_ga',
		'type'     => 'text'
	) );


}
/******************************************************************************
WEBSITE COLOUR CUSTOMIZER SAME FOR MOST SITES THEME_SLUG
/******************************************************************************/
add_action( 'customize_register', 'the_theme_customizer' );

//Set up menu item
function theme_colour_customise( $wp_customize ){
  $wp_customize->add_section( 'custom_colours_section' , array(
    'title'       => __( 'Customise Website Colours', THETHEME_SLUG ),
    'priority'    => 30,
    'description' => 'Customise the colours used in this website!',
   ) );
   $colour_array = array('primary','secondary','tertiary','footer_text');
   foreach ($colour_array as $colour) {
   $wp_customize->add_setting( $colour.'_custom_colour' );
   $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, $colour.'_color', array(
      	'label'        => __( ucwords(str_replace('_',' ',$colour)).' Colour', THETHEME_SLUG ),
      	'section'    => 'custom_colours_section',
      	'settings'   => $colour.'_custom_colour',
      ) ) );
    }

}
add_action( 'customize_register', 'theme_colour_customise' );
/******************************************************************************
SOCIAL MEDIA CUSTOMIZER SAME FOR MOST SITES THEME_SLUG
/******************************************************************************/

function theme_customizer_social_links( $wp_customize ){
  $socials_array = array('facebook','instagram','youtube','twitter','gooleplus','tripadvisor');

  /********** DONT NEED TO ADJUST FROM HERE **********************/
  $wp_customize->add_section( 'social_links_section' , array(
    'title'       => __( 'Business Social Media Links', THETHEME_SLUG ),
    'priority'    => 30,
    'description' => 'Store your social media links!',
   ) );
  foreach ($socials_array as $item) {
      $wp_customize->add_setting( $item.'_social_link' );
      $wp_customize->add_control( $item.'_id',
      array(
        'label'    => __( 'Your '.ucwords( $item ).' Link', THETHEME_SLUG ),
        'section'  => 'social_links_section',
        'settings' => $item.'_social_link',
        'type'     => 'text'
        ) );
    }
}
add_action( 'customize_register', 'theme_customizer_social_links' );
