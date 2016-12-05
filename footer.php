<?php
/**
* The template for displaying the footer.
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package Narnoo_Corp_Accom
*/

?>
<!--Footer region-->
<div id="footer">
	<div id="background-footer-overlay">
		<div class="row">
			<div class="twelve columns">
				<?php if ( is_active_sidebar( 'footer-one-widget' ) ){ ?>
					 <?php dynamic_sidebar( 'footer-one-widget' ); ?>
				<?php } ?>
				<?php if ( is_active_sidebar( 'footer-two-widget' ) ){ ?>
					<?php dynamic_sidebar( 'footer-two-widget' ); ?>
			 <?php } ?>
			 <?php if ( is_active_sidebar( 'footer-three-widget' ) ){ ?>
 				<?php dynamic_sidebar( 'footer-three-widget' ); ?>
 		 <?php } ?>
				</div>
			</div>
			<div class="footer-overlay"></div>
		</div>
	</div>
	<div class="copyright" id="copyright">
		<div class="row">
			<div class="twelve columns">
				<div class="region region-copyright">
					<div id="block-block-9" class="block block-block contextual-links-region">
						<div class="content">
							<div class="left">
								<h6> <strong class="left"><?php echo ucwords( bloginfo('name') ); ?></strong> <br />
									Copyright © <?php echo date('Y'); ?> <?php echo ucwords( bloginfo('name') ); ?></h6>
								</div>
								</div>
						</div>
						<!-- /.block -->
					</div>
					<!-- /.region -->
				</div>
			</div>
		</div>
	</div><!-- #content -->

	<?php wp_footer(); ?>
	<div class="row"></div>
	<script type="text/javascript">
	//Revolution Slider settings
	var tpj = jQuery;
	tpj.noConflict();
	tpj(document).ready(function() {
		if (tpj.fn.cssOriginal != undefined)
		tpj.fn.css = tpj.fn.cssOriginal;
		tpj('.fullwidthbanner').revolution({

			startheight: 420,
			onHoverStop: 'on',
			delay: 9000,
			shuffle: 'off',
			touchenabled: 'on',
			navigationType: 'none',
			fullWidth: 'on',
			fullScreen: 'off',
			lazyLoad: 'off',
			shadow: 0


		});
	});

	//Datepicker settings
	var picker1 = new Pikaday({
		field: document.getElementById('rooms-start-date'),
		firstDay: 1,
		format: 'DD/MM/YYYY',
		minDate: moment().subtract({
			days: 0
		}).toDate(),
		yearRange: [2000, 2020],
		onSelect: function() {
			var date = document.createTextNode(this.getMoment().format('Do MMMM YYYY') + ' ');
		}
	});

	var picker2 = new Pikaday({
		field: document.getElementById('rooms-end-date'),
		firstDay: 1,
		format: 'DD/MM/YYYY',
		minDate: moment().subtract({
			days: 0
		}).toDate(),
		yearRange: [2000, 2020],
		onSelect: function() {
			var date = document.createTextNode(this.getMoment().format('Do MMMM YYYY') + ' ');
		}
	});
	</script>
	<script type="text/javascript">
	jQuery(document).ready(function() {
		jQuery('#invite').ketchup().submit(function() {
			if (jQuery(this).ketchup('isValid')) {
				var action = jQuery(this).attr('action');
				jQuery.ajax({
					url: action,
					type: 'POST',
					data: {
						email: jQuery('#address').val()

					},
					success: function(data){
						jQuery('#result').html(data).css('color', 'green');
					},
					error: function() {
						jQuery('#result').html('Sorry, an error occurred.').css('color', 'red');
					}
				});
			}
			return false;
		});
	});
	</script>
</body>
</html>
