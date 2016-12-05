<?php
/**
 * The template for displaying the home page.
 *
 * Template Name: Home Page
 *
 * @package Narnoo Acccom Corporate
 */

get_header(); ?>
<!--Availability search Block -->
<?php echo do_shortcode('[availablity_form booking_link="https://app-apac.thebookingbutton.com/properties/comfortinnccdirect"]');?>
<!--End of Availability search Block -->
<!--The content from page editor-->
<?php while( have_posts() ) { the_post();   ?>
<div id="boxes">

		<?php echo the_content(); ?>

</div>
<?php } ?>
<!--End the content -->
<!--Availability search Block -->
<?php echo do_shortcode('[product_display]');?>
<!--End of Availability search Block -->
<!--Testimonial Block -->
<?php echo do_shortcode('[testimonial_display]');?>
<!--End Testimonial Block -->
<?php
get_footer();
