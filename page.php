<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Narnoo_Corp_Accom
 */

get_header(); ?>

<!--Content page-->
<div id="content-wrap" class="row">
	<div id="content" class="nine columns">


			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</div>
	<div id="sidebar" class="three columns">
	<?php get_sidebar(); ?>
	</div>
	</div>
	<!--End of content -->
	<?php get_footer(); ?>
