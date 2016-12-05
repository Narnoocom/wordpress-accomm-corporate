<?php
$error_msg_prefix = __( 'Theme shortcode error: ', THETHEME_SLUG );
extract( shortcode_atts( array(
  'title'        => 'Room Types',
  'type'         => 'narnoo_product',
  'number'			 => 5
), $atts ) );
?>
<!--Carousel Slider -->
<div id="content-bottom">
  <div class="row">
    <div>
      <div class="region region-content-bottom">
        <div id="block-views-aba6fc0651a70555fe194f16d93de3d1" class="block block-views contextual-links-region">
          <h2> <span><?php echo $title; ?></span> </h2>
          <div class="content">
            <div id="accomodation-slider">
              <ul class="slides">
                <?php
                $args=array('post_per_page'=>$number,'post_type'=>$type);
                $query=new wp_query($args);
                if($query->have_posts()):
                  while($query->have_posts()): $query->the_post();
                    $src=wp_get_attachment_url(get_post_thumbnail_id(),'thumb')  ;  ?>
                <li>
                  <div class="accomodation-carousel-item" style="margin-bottom:10px; position:relative;"> <a href="<?php the_permalink(); ?>"> <img alt="" src="<?php echo $src ; ?>"  /> </a>
                    <div class="title"> <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </div>
                    <?php
                    $starting_price = get_post_meta( 'narnoo_min_price', true );
                    $average_price  = get_post_meta( 'narnoo_avg_price', true );
                    if(!empty($starting_price) || !empty($average_price) ){
                    ?>
                    <div class="price">$XXX
                      <div class='starting-from'>Starting from</div>
                    </div>
                    <?php } ?>
                    <div class="title_bg"></div>
                  </div>
                </li>

                <?php
                  endwhile;
                endif;
              ?>
            </ul>
          </div>
        </div>
      </div>
      <!-- /.block -->
    </div>
    <!-- /.region -->
  </div>
</div>
</div>

<!--End of Carousel Slider -->
