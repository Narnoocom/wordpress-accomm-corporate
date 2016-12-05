<?php
/**
 * The template for displaying all single posts.
 *
 * Template Name: Full Width Page
 *
 * @package Narnoo_Corp_Accom
 */

get_header(); ?>

<div id="content-wrap" class="row">

  <div id="content" class="12 columns">

    <div class="region region-content">

      <div id="block-system-main" class="block block-system">

        <div class="content">

          <?php if(have_posts()):while(have_posts()): the_post() ; ?>       <!--Blog item details-->

            <div class="view-Blog">
              <?php
              $thumbnails = wp_get_attachment_url(get_post_thumbnail_id());
              if( !empty($thumbnails) ){
              ?>
              <div class="image photo full-width"> <img alt="" src="<?php  echo $thumbnails; ?>" width="840" height="420" title="" /> </div>
              <?php } ?>
              <?php the_content(); ?>

            </div>
          <?php endwhile; endif ; ?>
        </div>

      </div>

      <!-- /.block -->

    </div>

    <!-- /.region -->

  </div>
</div>
<!--End of content -->
<?php get_footer(); ?>
