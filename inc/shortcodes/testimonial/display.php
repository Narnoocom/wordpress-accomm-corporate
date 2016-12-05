<?php
$error_msg_prefix = __( 'Theme shortcode error: ', THETHEME_SLUG );
extract( shortcode_atts( array(
  'number'			 => 5,
  'bg_colour'    => 'true'
), $atts ) );
?>
<!--Testimonial Block -->
<div id="prefooter-first"
  <?php
  if($bg_colour == 'true'){
    echo ' style="background-color: #F9F9F9"';
  }
  ?>>
  <div class="row">
    <div id="prefooter-content">
      <div class="region region-prefooter-first">
        <div class="block block-views contextual-links-region">
          <div class="content">
            <div id="testimonials">
              <ul class="slides">
                <?php
                $args=array('post_per_page'=>$number,'post_type'=>'testimonial');
                $query=new wp_query($args);
                if($query->have_posts()):
                while($query->have_posts()): $query->the_post();
                //$src=wp_get_attachment_url(get_post_thumbnail_id(),'thumb')  ;  ?>
                <!--Testimonial Slide -->
                <li>
                  <div class="block-testiomonial-text-bg">
                    <div class="quote-testimonial-left"> <i class="icon-quote quote-icon-left"></i> </div>
                    <div class="block-testiomonial-text"><?php echo the_excerpt(); ?>
                      <div class="block-testiomonial-person"><?php echo the_title(); ?></div>
                    </div>
                    <div class="quote-testimonial-right"> <i class="icon-quote quote-icon-right"></i> </div>
                  </div>
                </li>
                <!--End of Testimonial Slide 1 -->
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
