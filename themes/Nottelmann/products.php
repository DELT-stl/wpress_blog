<?php
/**
* Template Name: Products
*/
get_header('products'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="banner">
    <?php $banner_image = get_field( 'banner_image' ); ?>
<?php if ( $banner_image ) { ?>
  <img src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>" />
<?php } ?>
<?php the_field( 'top_header' ); ?>
  <div class="intro_p">
    <p>Nottemann Music Company is a full line music store carrying quality name brand products with an expert staff to help you pick the correct instrument. Whether you are a beginner looking for your first instrument or someone looking to upgrade to a professional level instrument, we carry a wide selection of instruments and accessories to help you get the most out of your playing experience.</p>
  </div>

  <div class="container in indissy">
    <div class="col-sm-4 indisblock">
      <div class="indis">
        <div class="navyblock"></div>
        <?php $woodwind_image = get_field( 'woodwind_image' ); ?>
<?php if ( $woodwind_image ) { ?>
	<img src="<?php echo $woodwind_image['url']; ?>" alt="<?php echo $woodwind_image['alt']; ?>" />
<?php } ?>
      </div>
      <h2><?php the_field( 'woodwind_header' ); ?></h2>
      <p><a href="woodwind.html">find out more</a></p>
    </div>
    <div class="col-sm-4 indisblock">
      <div class="indis">
        <div class="navyblock"></div>
        <?php $brass_image = get_field( 'brass_image' ); ?>
<?php if ( $brass_image ) { ?>
	<img src="<?php echo $brass_image['url']; ?>" alt="<?php echo $brass_image['alt']; ?>" />
<?php } ?>
      </div>
      <h2><?php the_field( 'brass_header' ); ?></h2>
      <p><a>find out more</a></p>
    </div>
    <div class="col-sm-4 indisblock">
      <div class="indis">
        <div class="navyblock"></div>
        <?php $band_image = get_field( 'band_image' ); ?>
<?php if ( $band_image ) { ?>
	<img src="<?php echo $band_image['url']; ?>" alt="<?php echo $band_image['alt']; ?>" />
<?php } ?>
      </div>
      <h2><?php the_field( 'band_header' ); ?></h2>
      <p><a>find out more</a></p>
    </div>
    <div class="col-sm-4 indisblock">
      <div class="indis">
        <div class="navyblock"></div>
        <?php $orchestral_image = get_field( 'orchestral_image' ); ?>
<?php if ( $orchestral_image ) { ?>
	<img src="<?php echo $orchestral_image['url']; ?>" alt="<?php echo $orchestral_image['alt']; ?>" />
<?php } ?>
      </div>
      <h2><?php the_field( 'orchestral_header' ); ?></h2>
      <p><a>find out more</a></p>
    </div>
    <div class="col-sm-4 indisblock">
      <div class="indis">
        <div class="navyblock"></div>
        <?php $guitar_image = get_field( 'guitar_image' ); ?>
<?php if ( $guitar_image ) { ?>
	<img src="<?php echo $guitar_image['url']; ?>" alt="<?php echo $guitar_image['alt']; ?>" />
<?php } ?>
      </div>
      <h2><?php the_field( 'guitar_header' ); ?></h2>
      <p><a>find out more</a></p>
    </div>
    <div class="col-sm-4 indisblock">
      <div class="indis">
        <div class="navyblock"></div>
        <?php $electronics_image = get_field( 'electronics_image' ); ?>
<?php if ( $electronics_image ) { ?>
	<img src="<?php echo $electronics_image['url']; ?>" alt="<?php echo $electronics_image['alt']; ?>" />
<?php } ?>
      </div>
      <h2><?php the_field( 'electronics_header' ); ?></h2>
      <p><a>find out more</a></p>
    </div>
  </div>

  <div class="grey in">
    <div class="container">
      <div class="container">
        <div class="row">
          <div class="col-sm-5">
            <?php the_field( 'bottom_header' ); ?>
            <button class="mb2 righty">find out more</button>
          </div>
          <div class="col-sm-1"></div>
          <div class="col-sm-6">
            <?php the_field( 'bottom_paragraph' ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>


<?php endwhile; ?>
<?php endif; ?>

<?php // Gets footer.php
get_footer();
?>
