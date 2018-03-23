<?php
/**
* Template Name: Home Page
*/
get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="hp-slider">
			<div class="gallery js-flickity" data-flickity-options='{ "wrapAround": true }'>
					<div class="gallery-cell">
						<?php $slider_image_one = get_field( 'slider_image_one' ); ?>
<?php if ( $slider_image_one ) { ?>
	<img src="<?php echo $slider_image_one['url']; ?>" alt="<?php echo $slider_image_one['alt']; ?>" />
<?php } ?>
							<div class="slide_cap">
								<?php the_field( 'slide_one_caption' ); ?>
									<button class="mb">find a location</button>
							</div>
					</div>
	<div class="gallery-cell">
		<?php $slider_image_two = get_field( 'slider_image_two' ); ?>
<?php if ( $slider_image_two ) { ?>
	<img src="<?php echo $slider_image_two['url']; ?>" alt="<?php echo $slider_image_two['alt']; ?>" />
<?php } ?>
			<div class="slide_cap">
				<?php the_field( 'slide_two_caption' ); ?>
					<button class="mb">find a location</button>
			</div>
	</div>
	<div class="gallery-cell">
		<?php $slider_image_three = get_field( 'slider_image_three' ); ?>
<?php if ( $slider_image_three ) { ?>
	<img src="<?php echo $slider_image_three['url']; ?>" alt="<?php echo $slider_image_three['alt']; ?>" />
<?php } ?>
			<div class="slide_cap">
				<?php the_field( 'slide_three_caption' ); ?>
					<button class="mb">find a location</button>
			</div>
	</div>
</div>
	</div>
	<div class="in">
		<div class="container">
			<div class="row">
				<div class="col-sm-5">
					<h3 class="right"><?php the_field( 'first_header' ); ?></h3>
				</div>
				<div class="col-sm-1"></div>
				<div class="col-sm-6">
					<p><?php the_field( 'first_paragraph' ); ?></p>
				</div>
			</div>
		</div>
		<div class="divide70"></div>
	</div>

	<div class="navy">
		<div class="container">
			<div class="hpsrvy">
				<div class="row rnp srvbrd">
					<div class="col-sm-3">
						<div class="hpsrv srv1 br">
							<?php $our_products_image = get_field( 'our_products_image' ); ?>
<?php if ( $our_products_image ) { ?>
	<img src="<?php echo $our_products_image['url']; ?>" alt="<?php echo $our_products_image['alt']; ?>" />
<?php } ?>
							<div class="imghover"></div>
							<div class="hpsrvtitle">
								<h2><?php the_field( 'our_products_header' ); ?></h2>
								<p class=""><?php the_field( 'our_products_paragraph' ); ?></p>
							</div>
							<div class="fom">FIND OUT MORE</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="hpsrv srv1 br">
							<?php $rentals_image = get_field( 'rentals_image' ); ?>
<?php if ( $rentals_image ) { ?>
	<img src="<?php echo $rentals_image['url']; ?>" alt="<?php echo $rentals_image['alt']; ?>" />
<?php } ?>
							<div class="imghover"></div>
							<div class="hpsrvtitle">
								<h2><?php the_field( 'rentals_header' ); ?></h2>
								<p class=""><?php the_field( 'rentals_paragraph' ); ?></p>
							</div>
							<div class="fom">FIND OUT MORE</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="hpsrv srv1 br">
							<?php $lessons_image = get_field( 'lessons_image' ); ?>
<?php if ( $lessons_image ) { ?>
	<img src="<?php echo $lessons_image['url']; ?>" alt="<?php echo $lessons_image['alt']; ?>" />
<?php } ?>
							<div class="imghover"></div>
							<div class="hpsrvtitle">
								<h2><?php the_field( 'lessons_header' ); ?></h2>
								<p class=""><?php the_field( 'lessons_paragraph' ); ?></p>
							</div>
							<div class="fom">FIND OUT MORE</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="hpsrv srv1">
							<?php $repairs_image = get_field( 'repairs_image' ); ?>
<?php if ( $repairs_image ) { ?>
	<img src="<?php echo $repairs_image['url']; ?>" alt="<?php echo $repairs_image['alt']; ?>" />
<?php } ?>
							<div class="imghover"></div>
							<div class="hpsrvtitle">
							</h2><?php the_field( 'repairs_header' ); ?><h2>
								<p><?php the_field( 'repairs_paragraph' ); ?></p>
							</div>
							<div class="fom">FIND OUT MORE</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="placehold"></div>
		<div class="in">
			<div class="contain center">
				<h3><?php the_field( 'our_brands_header' ); ?></h3>
				<div class="divide30"></div>
			</div>
			<div class="container">
				<div class="row center instru">
					<div class="col-sm-1"></div>
					<div class="col-sm-2">
						<a href="#">
							<img src="http://127.0.0.1/wordpress/wp-content/uploads/2018/02/saxophone.png" alt="Woodwind instruments for sale">
							<h2>woodwinds</h2>
						</a>
					</div>
					<div class="col-sm-2">
						<a href="#">
							<img src="http://127.0.0.1/wordpress/wp-content/uploads/2018/02/drums.png" alt="Woodwind instruments for sale">
							<h2>woodwinds</h2>
						</a>
					</div>
					<div class="col-sm-2">
						<a href="#">
							<img src="http://127.0.0.1/wordpress/wp-content/uploads/2018/02/brass.png" alt="Woodwind instruments for sale">
							<h2>brass & low brass</h2>
						</a>
					</div>
					<div class="col-sm-2">
						<a href="#">
							<img src="http://127.0.0.1/wordpress/wp-content/uploads/2018/02/violin.png" alt="Woodwind instruments for sale">
							<h2>woodwinds</h2>
						</a>
					</div>
					<div class="col-sm-2">
						<a href="#">
							<img src="http://127.0.0.1/wordpress/wp-content/uploads/2018/02/tech.png" alt="Woodwind instruments for sale">
							<h2>woodwinds</h2>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="in">
		<div class="container">
			<div class="row">
				<div class="col-sm-5 right">
					<h3><?php the_field( 'second_header' ); ?></h3>
					<button class="mb2 righty">find a store</button>
				</div>
				<div class="col-sm-1"></div>
				<div class="col-sm-6">
					<p><?php the_field( 'second_paragraph' ); ?></p>
				</div>
			</div>
		</div>
	</div>

<?php endwhile; ?>
<?php endif; ?>

<?php // Gets footer.php
get_footer('');
?>
