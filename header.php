<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Narnoo_Corp_Accom
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
<?php
	print_r(get_theme_mod( 'custom-background' ));
?>
<!-- Google Web Fonts -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700&amp;subset=latin,cyrillic,latin-ext,vietnamese,greek,greek-ext,cyrillic-ext" rel="stylesheet" type="text/css">
<?php if(get_theme_mod( 'primary_custom_colour' )){ ?>
<style>
#header_line {
	background-color: <?php echo get_theme_mod( 'primary_custom_colour' ); ?>;
}
#navigation #main-menu > ul ul li {
	background-color: <?php echo get_theme_mod( 'primary_custom_colour' ); ?>;
}
#background-footer-overlay {
	background-color: <?php echo get_theme_mod( 'primary_custom_colour' ); ?>;
}
#content-top {
	background-color: <?php echo get_theme_mod( 'primary_custom_colour' ); ?>;
}
</style>
<?php }else{ ?>
<style>
#navigation #main-menu > ul ul li {
	background-color: #242A31;
}
#header_line {
	background-color: #242A31;
}
#background-footer-overlay {
	background-color: #242A31;
}
#content-top {
	background-color: #242A31;
}
</style>
<?php } ?>
<?php if(get_theme_mod( 'tertiary_custom_colour' )){ ?>
<style>
#footer {
	border-top: 5px solid <?php echo get_theme_mod( 'tertiary_custom_colour' ); ?>;
}
</style>
<?php }else{ ?>
<style>
#footer {
	border-top: 5px solid #B39D28;
}
</style>
<?php } ?>
<?php if(get_theme_mod( 'footer_text_custom_colour' )){ ?>
<style>
#footer, #footer h1, #footer h2, #footer h3, #footer h4, #footer h5, #footer h6, #footer h1 a, #footer h2 a, #footer h3 a, #footer h4 a, #footer h5 a, #footer h6 a, #footer a {
	color: <?php echo get_theme_mod( 'footer_text_custom_colour' ); ?>;
}
</style>
<?php }else{ ?>
<style>
#footer, #footer h1, #footer h2, #footer h3, #footer h4, #footer h5, #footer h6, #footer h1 a, #footer h2 a, #footer h3 a, #footer h4 a, #footer h5 a, #footer h6 a, #footer a {
	color: #ffffff;
}
</style>
<?php } ?>
<?php if(get_theme_mod( THETHEME_SLUG.'_bg' )){ ?>
<style>
body {
	background: url('<?php echo get_theme_mod( THETHEME_SLUG.'_bg' );?>') no-repeat center center fixed;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
}
</style>
<?php } ?>
<?php if(get_theme_mod( THETHEME_SLUG.'_header_img' )){ ?>
<style>
#pre-content {
	background-image: url('<?php echo get_theme_mod( THETHEME_SLUG.'_header_img' ); ?>');
	background-repeat: repeat;
	background-position: right;
}
</style>
<?php } ?>
</head>

<body  <?php body_class() ?>>
<div id="layout-mode" class="<?php if(is_front_page()){ echo 'wide'; } else { echo 'boxed';  } ?>"><!-- Use classes Wide: wide, Boxed: boxed content-->
	<div id="header" class="container">
    <div id="header_line" class="container header_line">
      <!-- features top -->
      <div class="row">
        <div class="six columns right">
					<?php if(get_theme_mod( THETHEME_SLUG.'_phone' )){ ?>
          <!-- Phone number -->
          <ul><li class="right"> <i class='icon-phone'></i><?php echo get_theme_mod( THETHEME_SLUG.'_phone' ); ?></li></ul>
          <!-- End of Phone number -->
					<?php } ?>
          <!-- Social Icons -->
          <div class="social_icons">
            <ul>
							<?php if(get_theme_mod( 'facebook_social_link' )){ ?>
              <li class="right"> <a href="<?php echo get_theme_mod( 'facebook_social_link' ) ?>" target="_blank"> <img alt="" src="<?php bloginfo('template_url') ; ?>/images/facebook.png" /> </a> </li>
							<?php } ?>
							<?php if(get_theme_mod( 'twitter_social_link' )){ ?>
              <li class="right"> <a href="<?php echo get_theme_mod( 'twitter_social_link' ) ?>" target="_blank"> <img alt="" src="<?php bloginfo('template_url') ; ?>/images/twitter.png" /> </a> </li>
							<?php } ?>
							<?php if(get_theme_mod( 'linkedin_social_link' )){ ?>
              <li class="right"> <a href="<?php echo get_theme_mod( 'linkedin_social_link' ) ?>" target="_blank"> <img alt="" src="<?php bloginfo('template_url') ; ?>/images/linkedin.png" /> </a> </li>
							<?php } ?>
							<?php if(get_theme_mod( 'twitter_social_link' )){ ?>
              <li class="right"> <a href="<?php echo get_theme_mod( 'gooleplus_social_link' ) ?>" target="_blank" rel="me"> <img alt="" src="<?php bloginfo('template_url') ; ?>/images/googleplus.png" /> </a> </li>
							<?php } ?>
							<?php if(get_theme_mod( 'twitter_social_link' )){ ?>
              <li class="right"> <a href="<?php echo get_theme_mod( 'youtube_social_link' ) ?>" target="_blank" rel="me"> <img alt="" src="<?php bloginfo('template_url') ; ?>/images/youtube.png" /> </a> </li>
							<?php } ?>
            </ul>
          </div>
          <!-- end of Social Icons -->
        </div>
      </div>
      <!-- end .features top -->
    </div>
    <div class="row">
			<?php if(get_theme_mod( THETHEME_SLUG.'_logo' )){ ?>
      <div id="logo" class="four columns logo">
        <!-- logo & slogan -->
        <a href="<?php bloginfo('url'); ?>" title="Home"> <img alt="logo business" src="<?php echo get_theme_mod( THETHEME_SLUG.'_logo' ); ?>" /> </a>
        <!-- end. logo & slogan -->
      </div>
			<?php } ?>
      <div class="eight columns">
        <!--Site menu-->

        <nav id="navigation" role="navigation">
          <div id="main-menu">
            <?php wp_nav_menu( array( 'theme_location' => 'primary',  'container' => false ) ); ?>
          </div>
        </nav>
        <!--end of Site menu-->
      </div>
    </div>
  </div>
	<?php if( is_front_page() ){ ?>
	  <!--Revolution Slider-->
	<div style="height:auto;overflow:hidden">
		<?php echo do_shortcode('[rev_slider alias="home"]'); ?>
	</div>
		<!--#Revolution Slider-->
	<?php } ?>

	<?php if(!is_front_page()){ ?>
		<!--Page title & breadcrumb-->
		<div id="pre-content">
			<div class="row">
				<!--start breadcrumb  YOAST BREADCRUMBS
				<div id="breadcrumb">
					<div class="breadcrumb"> <span class="crumbs"> <a href="../index.html">Home</a> </span> <span class="crumbs-current"> <span class="crumbs-arrow">></span>Blog</span> </div>
				</div>
				 end breadcrumb -->
				<div class="page-title"><?php the_title();?></div>
			</div>
			<div class="pre-content-overlay"></div>
		</div>
		<!--end of Page title & breadcrumb-->
		<?php } ?>
