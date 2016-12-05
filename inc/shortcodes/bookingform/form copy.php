<?php
$error_msg_prefix = __( 'Booking form shortcode error: ', THETHEME_SLUG );
extract( shortcode_atts( array(
	'booking_link' => false,
	'method'			=> 'GET'
), $atts ) );
?>

<?php if(!empty($booking_link)){?>
<div id="content-top">
	<div class="row">
		<div>
			<div class="region region-content-top">
				<div id="block-rooms-booking-manager-rooms-availability-search" class="block block-rooms-booking-manager contextual-links-region">
					<h2> <span>Availability Search</span> </h2>
					<div class="content">
						<form action="<?php echo $booking_link; ?>" method="<?php echo $method; ?>" id="rooms-booking-availability-search-form" accept-charset="UTF-8">
							<div>
								<div class="start-date">
									<div class="container-inline-date">
										<div class="form-item form-type-date-popup form-item-rooms-start-date">
											<label>Arrival Date</label>
											<div id="edit-rooms-start-date" class="date-padding">
												<div class="form-item form-type-textfield form-item-rooms-start-date-date">
													<label>Date</label>
													<input type="text" id="rooms-start-date" class="form-text" />
													<div class="description">E.g., 07/02/2014</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="end-date">
									<div class="container-inline-date">
										<div class="form-item form-type-date-popup form-item-rooms-end-date">
											<label>Arrival Date</label>
											<div id="edit-rooms-end-date" class="date-padding">
												<div class="form-item form-type-textfield form-item-rooms-end-date-date">
													<label>Date</label>
													<input type="text" id="rooms-end-date" class="form-text" />
													<div class="description">E.g., 07/02/2014</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="form-item form-type-select form-item-rooms">
									<label for="edit-rooms">Rooms</label>
									<select id="edit-rooms" name="rooms" class="form-select">
										<option value="1" selected="selected">1</option>
										<option value="2">2</option>
										<option value="3">3</option>
										<option value="4">4</option>
										<option value="5">5</option>
										<option value="6">6</option>
									</select>
								</div>
							  <div class="form-item form-type-select form-item-group-size-adults:1">
										<label for="edit-group-size-adults1">Group size</label>
										<select id="edit-group-size-adults1" name="group_size_adults:1" class="form-select">
											<option value="1">1</option>
											<option value="2" selected="selected">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
										</select>
									</div>
								<div class="form-actions form-wrapper" id="edit-actions">
									<input type="submit" id="edit-submit" name="op" value="Search for Availability" class="form-submit" />
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- /.block -->
			</div>
			<!-- /.region -->
		</div>
	</div>
</div>
<?php }else{?>
	<?php echo $error_msg_prefix. ' Please provide a booking URL'; ?>
<?php }?>
