<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Narnoo_Corp_Accom
 */

get_header(); ?>

<div id="content-wrap" class="row">

  <div id="content" class="nine columns">

    <div class="region region-content">

      <div id="block-system-main" class="block block-system">

        <div class="content">

          <?php if(have_posts()):while(have_posts()): the_post() ; ?>       <!--Blog item details-->

            <div class="view-Blog">

              <div class="image photo full-width"> <img alt="" src="<?php  echo $thumbnails = wp_get_attachment_url(get_post_thumbnail_id()); ?>" width="840" height="420" title="" /> </div>

              <?php the_content(); ?>

            </div>
          <?php endwhile; endif ; ?>
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
<?php get_footer(); ?>
