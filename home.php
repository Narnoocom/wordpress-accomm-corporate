<?php
/**
* The template for displaying blog pages.
*
* @link https://codex.wordpress.org/Template_Hierarchy#home
*
* @package Narnoo_Corp_Accom
*/

get_header(); ?>

<div id="content-wrap" class="row">
	<div id="content" class="nine columns">
		<div class="region region-content">
			<div id="block-system-main" class="block block-system">
				<div class="content">
					<?php

					if(have_posts()):while(have_posts()): the_post();

					$src=wp_get_attachment_url(get_post_thumbnail_id(),'thumb')  ;  ?>

					<div class="view-Blog">

						<h3> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h3>

						<div class="image photo full-width"> <a href="<?php the_permalink(); ?>"><img alt="" src="<?php echo $src ; ?>" width="840" height="420" /></a> </div>

						<p><?php echo substr(get_the_excerpt(),0,250) ; ?></p>

						<div class="blog-post-date"> <span> <i class="icon-calendar"></i><?php the_time('F j, Y');  ?></span> </div>
						<div class="blog-post-author"><?php the_author(); ?></div>
						<div class="split-blog-item"></div>

					</div>

				<?php endwhile;?>

				<div class="pageNation">
					<?php get_template_part('navigation');?>
				</div>
			<?php  endif; ?>
		</div>

	</div>
	<!-- /.block -->

</div>
<!-- /.region -->

</div>
<div id="sidebar" class="three columns">
	<?php get_sidebar(); ?>
</div>
</div>
<!--End of content -->

<!--Footer region-->

<?php get_footer(); ?>
