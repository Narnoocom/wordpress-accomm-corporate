<?php
/**
* The template for displaying contact us.
*
* Template Name: Contact Us Page
*
* @package Narnoo_Corp_Accom
*/

get_header(); ?>

<!--Content page-->
<?php if(have_posts()):while(have_posts()): the_post() ; ?>       <!--Blog item details-->
  <?php $map = get_post_meta( get_the_ID(), THETHEME_SLUG.'_googlemap', true ); ?>
  <?php if(!empty($map)){ ?>
    <div id="#contact-map-wrap">

      <iframe style="width:100%; border:0px;" height="350" class="map"
      src="<?php echo $map; ?>"
      ></iframe>

    </div>
    <?php } ?>
    <div id="content-wrap" class="row">
      <div id="content" class="twelve columns">
        <div class="region region-content">
          <div class="six columns">
            <h4 class='lead'> <?php echo the_title(); ?></h4>
            <?php echo the_content(); ?>
            <h4 class='lead'> Our Contact Details</h4>
            <ul class='contact-items'>
              <?php if(get_theme_mod( THETHEME_SLUG.'_address' )){ ?>
                <li><i class='icon-location'></i> <strong>Address: </strong><?php echo str_replace('<br/>',', ', get_theme_mod( THETHEME_SLUG.'_address' )) ; ?></li>
                <?php } ?>
                <?php if(get_theme_mod( THETHEME_SLUG.'_phone' )){ ?>
                  <li><i class='icon-phone'></i> <strong>Phone: </strong><?php echo get_theme_mod( THETHEME_SLUG.'_phone' ); ?></li>
                  <?php } ?>
                  <?php if(get_theme_mod( THETHEME_SLUG.'_email' )){ ?>
                    <li><i class='icon-mail'></i> <strong>Email: </strong><a href='mailto:<?php echo get_theme_mod( THETHEME_SLUG.'_email' ); ?>'><?php echo get_theme_mod( THETHEME_SLUG.'_email' ); ?></a></li>
                    <?php } ?>
                  </ul>
            </div>
            <div class="six columns">
                <div id="block-system-main" class="block block-system">
                  <div class="content">
                    <?php echo do_shortcode('[contact-form-7 id="104" title="Contact Us"]'); ?>
                  </div>
                </div>
              </div>
            </div>
              <!-- /.region -->
            </div>
          <?php endwhile; endif ; ?>
        </div>

        <?php get_footer(); ?>
