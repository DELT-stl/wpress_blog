<?php
/**
* Template Name: Homepage
*/
get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<header class="home-image" style="background:url(<?php the_post_thumbnail_url(); ?>) center center no-repeat;background-size:cover">
	<div class="trans"></div>
	<div class="allmid">
		<h4>Serving Missouri, Illinois, and Arkansas</h4>
		<h1><?php the_field( 'title' ); ?></h1>
		<a href="/contact/"><button class="mb"><?php the_field( 'button_text' ); ?></button></a>
	</div><!-- end of .callout -->
</header>

<div class="rel">
	<div class="ga2"></div>
	<div class="pd container">
		<div class="row">
			<div class="col-md-6">
				<div class="ar"></div>
				<?php the_field( 'opening_text' ); ?>
				<a href="/products/"><button class="mb ">Our Products</button></a>
			</div><!-- end of text container -->
			<div class="col-md-1"></div>
			<div class="col-md-5">
				<div class="greenbox">
					<div class="gbtitle">
						<span class="allmid">our products</span>
					</div>
					<div class="row rnp">
						<div class="col-xs-6 gbbr">
							<a href="/products/roofing/">
								<div class="pbox">
									<div class="allmid">
										<img src="wp-content/uploads/img/Roofing-supplies-icon.png" alt="roofing supplies" class="ic1"> 
										<h2 class="h22">roofing</h2>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xs-6">
							<a href="/products/roofing/">
								<div class="pbox">
									<div class="allmid">
										<img src="wp-content/uploads/img/windows-supplies.png" alt="window supplies"> 
										<h2 class="h22">windows</h2>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xs-6 gbbr">
							<a href="/products/doors/">
								<div class="pbox">
									<div class="allmid">
										<img src="wp-content/uploads/img/door-supplies.png" alt="exterior door supplies"> 
										<h2 class="h22">doors</h2>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xs-6">
							<a href="/products/siding/">
								<div class="pbox">
									<div class="allmid">
										<img src="wp-content/uploads/img/siding-supplies-icon.png" alt="house siding supplies" class="ic1"> 
										<h2 class="h22">siding</h2>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xs-6 gbbr">
							<a href="/products/decking-railing/">
								<div class="pbox">
									<div class="allmid">
										<img src="wp-content/uploads/img/railing-supplies.png" alt="decking and railing supplies"> 
										<h2 class="h22">decking & railing</h2>
									</div>
								</div>
							</a>
						</div>
						<div class="col-xs-6">
							<a href="/products/accessories/">
								<div class="pbox">
									<div class="allmid">
										<img src="wp-content/uploads/img/fencing-supplies.png" alt="fencing supplies"> 
										<h2 class="h22">accessories</h2>
									</div>
								</div>
							</a>
						</div>
					</div>
				</div>
			</div><!-- end of product section -->
		</div>
	</div>
</div>
<section class="bbg pd">
	<div class="container center">
		<div class="row">
			<div class="col-md-6 bbr">
				<div class="mpd">
					<?php $img1 = get_field( 'img1' ); ?>
					<?php if ( $img1 ) { ?>
					<img src="<?php echo $img1['url']; ?>" alt="<?php echo $img1['alt']; ?>" class="circle" />
					<?php } ?>
					<div class="ar automarg"></div>
					<h2 class="head3">For Contractors</h2>
					<p><?php the_field( 'contarctors' ); ?></p>
					<a href="/contractors/"><button>Contractor Info</button></a>
				</div>
			</div><!-- end of .for-contractors -->
			<div class="col-md-6">
				<div class="mpd">
					<?php $img1 = get_field( 'img2' ); ?>
					<?php if ( $img1 ) { ?>
					<img src="<?php echo $img1['url']; ?>" alt="<?php echo $img1['alt']; ?>" class="circle" />
					<?php } ?>
					<div class="ar automarg"></div>
					<h2 class="head3">For Homeowners</h2>
					<p><?php the_field( 'homeowners' ); ?></p>
					<a href="/homeowners/"><button>Homeowner Info</button></a>
				</div>
			</div><!-- end of .for-homeowners -->
		</div>
	</div>
</section>

<div class="container pd">
	<h3 class="center">Specialty Services</h3>
	<div class="divide40"></div>
	<div class="row rnp">
		<div class="col-sm-4">
			<div class="spec_serv gbg">
				<?php $img3 = get_field( 'img3' ); ?>
				<?php if ( $img3 ) { ?>
				<img src="<?php echo $img3['url']; ?>" alt="<?php echo $img3['alt']; ?>" />
				<?php } ?>
				<div class="spec_serv_text">
					<h2 class="head4"><a href="/contractors/job-lockers/" style="color:#fff">Job lockers</a></h2>
					<p class="smallp"><?php the_field( 'joblockers' ); ?></p>
					<a href="/contractors/job-lockers/" style="color:#fff"><button class="mbb">find out more</button></a>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="spec_serv gbg" style="background:#09803b">
				<?php $img3 = get_field( 'img4' ); ?>
				<?php if ( $img3 ) { ?>
				<img src="<?php echo $img3['url']; ?>" alt="<?php echo $img3['alt']; ?>" />
				<?php } ?>
				<div class="spec_serv_text">
					<h2 class="head4"><a href="/contractors/rooftop-deliveries/" style="color:#fff">rooftop deliveries</a></h2>
					<p class="smallp"><?php the_field( 'rooftop' ); ?></p>
					<a href="/contractors/rooftop-deliveries/"><button class="mbb">find out more</button></a>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="spec_serv gbg">
				<?php $img3 = get_field( 'img5' ); ?>
				<?php if ( $img3 ) { ?>
				<img src="<?php echo $img3['url']; ?>" alt="<?php echo $img3['alt']; ?>" />
				<?php } ?>
				<div class="spec_serv_text">
					<h2 class="head4"><a href="/contractors/shingle-recycling-bin/" style="color:#fff">shingle recycle bins</a></h2>
					<p class="smallp"><?php the_field( 'shingles' ); ?></p>
					<a href="/contractors/shingle-recycling-bin/" style="color:#fff"><button class="mbb">find out more</button></a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="contain center">
	<div class="ar automarg"></div>
	<h3 class="pdside"><?php the_field( 'locationtitle' ); ?></h3>
	<?php the_field( 'location_title_(copy)' ); ?>
	<a href="/locations/"><button class="mb">find a location</button></a>
</div>
<div class="pd2"></div>
<?php endwhile; ?>
<?php endif; ?>
<?php // Gets footer.php
get_footer();
?>
