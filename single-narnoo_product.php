<?php
/**
* The template for displaying all single narnoo products posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*
* @package Business
*/


$product_id 		= get_post_meta(get_the_ID(), 'narnoo_product_id', true);
$booking_link		= get_post_meta(get_the_ID(), 'narnoo_product_booking', true);
$cache	 			= Narnoo_Operator_Helper::init_noo_cache();
$request 			= Narnoo_Operator_Helper::init_api();
$contentCheck		= New Narnoo_Operator_Helper;

if( !empty( $product_id ) ){

	if ( ! is_null( $request ) ) {

		if( !is_null( $cache ) ){

			$product_details = $cache->get('product_' . $product_id);

			if( empty($product_details) ){

				$product_details 	= $request->getProductDetails( $product_id );

				if($product_details->success){
					$cache->set('product_' . $product_id, $product_details, 43200);
				}

			}

		}

	}

}
//print_r($product_details);
get_header(); ?>
<?php  if(have_posts()):while(have_posts()): the_post() ; ?>
<!--Availability search Block -->
<?php echo do_shortcode('[availablity_form booking_link="'.$product_details->direct_booking.'"]');?>
<!--End of Availability search Block -->
<!--Content page-->
<div id="content-wrap" class="row">
	<div id="content" class="nine columns">
		<div class="region region-content">
			<div id="block-system-main" class="block block-system">
				<div class="content">
					<div id="node-123" class="node node-unit-description node-promoted node-full clearfix">
						<div id="slider" class="flexslider hide_ul">
							<ul class="slides">
								<?php foreach($product_details->gallery->image as $img){?>
									<li><img alt="" src="<?php echo $img->image_800_path; ?>" width="840" height="420" /></li>
								<?php } ?>
							</ul>
						</div>
						<div id="carousel" class="flexslider">
							<ul class="slides">
								<?php foreach($product_details->gallery->image as $img){?>
									<li><img alt="" src="<?php echo $img->image_800_path; ?>" width="840" height="420" /></li>
								<?php } ?>
							</ul>
						</div>
						<div class="row" id="accomodation-room">
							<div class="twelve columns" style="padding-right:10px;">
								<h3><?php echo the_title();?> </h3>
								<div style="border-top:1px solid #EAEAEA; padding-bottom:7px; margin-top:10px;"></div>
								<div class="field field-name-field-unit-description field-type-text-long field-label-above">
									<div class="field-label">Description:&nbsp;</div>
									<div class="field-items">
										<div class="field-item even"><?php echo the_content(); ?><br>
											<!--<br>
											<img alt="" src="images/hotel-facilities.png" />--></div>  <!--  <br> -->
										</div>

									</div>

								</div>
								<!-- <div id="split" class="five columns split">

								</div> -->
							</div>

						</div>
						<br />
					</div>
				</div>
				<!-- /.block -->

			</div>
			<!-- /.region -->
		</div>
		<?php endwhile; endif ; ?>
		<div id="sidebar" class="three columns split">
			<?php get_sidebar() ?>
		</div>
</div>
		<!--End of content -->
		<?php get_footer();
