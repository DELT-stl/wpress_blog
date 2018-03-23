<?php
/**
* Template Name: Instrument Categories
*/
get_header('products'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="banner">
  <?php $banner_image = get_field( 'banner_image' ); ?>
<?php if ( $banner_image ) { ?>
	<img src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>" />
<?php } ?>
</div>
  <div class="page_title">
    <?php the_field( 'top_header' ); ?>
  </div>

  <div class="intro_p">
    <?php the_field( 'top_paragraph' ); ?>
  </div>

  <div class="pd"></div>

  <div class="navy in">
    <div class="container">

      <h3 class="center"><?php the_field( 'category_header' ); ?></h3>
      <div class="divide30"></div>
      <div class="row">
        <div class="col-sm-6 h2nomb">
          <div class="imgbrdr">
            <?php $top_left_image = get_field( 'top_left_image' ); ?>
            <?php if ( $top_left_image ) { ?>
            	<img src="<?php echo $top_left_image['url']; ?>" alt="<?php echo $top_left_image['alt']; ?>" />
            <?php } ?>
          </div>
          <h2><?php the_field( 'top_left_header' ); ?></h2>
          <div class="divide30"></div>
        </div>
        <div class="col-sm-6 h2nomb">
          <div class="imgbrdr">
            <?php $top_right_image = get_field( 'top_right_image' ); ?>
<?php if ( $top_right_image ) { ?>
	<img src="<?php echo $top_right_image['url']; ?>" alt="<?php echo $top_right_image['alt']; ?>" />
<?php } ?>
          </div>
          <h2><?php the_field( 'top_right_header' ); ?></h2>
          <div class="divide30"></div>
        </div>
        <div class="col-sm-6 h2nomb">
          <div class="imgbrdr">
            <?php $top_right_image = get_field( 'top_right_image' ); ?>
<?php if ( $top_right_image ) { ?>
	<img src="<?php echo $top_right_image['url']; ?>" alt="<?php echo $top_right_image['alt']; ?>" />
<?php } ?>
          </div>
          <h2><?php the_field( 'bottom_left_header' ); ?></h2>
          <div class="divide30"></div>
        </div>
        <div class="col-sm-6 h2nomb">
          <div class="imgbrdr">
            <?php $bottom_left_image = get_field( 'bottom_left_image' ); ?>
<?php if ( $bottom_left_image ) { ?>
	<img src="<?php echo $bottom_left_image['url']; ?>" alt="<?php echo $bottom_left_image['alt']; ?>" />
<?php } ?>
          </div>
          <h2><?php the_field( 'bottom_right_header' ); ?></h2>
          <div class="divide30"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="in">
    <div class="contain">
      <h3 class="center"><?php the_field( 'featured_brands_header' ); ?></h3>
      <div class="divide30"></div>
      <?php $featured_brands_image = get_field( 'featured_brands_image' ); ?>
<?php if ( $featured_brands_image ) { ?>
	<img src="<?php echo $featured_brands_image['url']; ?>" class="img100" alt="<?php echo $featured_brands_image['alt']; ?>" />
<?php } ?>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-5 right">
        <h3><?php the_field( 'bottom_header' ); ?></h3>
        <button class="mb2 righty">find a store</button>
      </div>
      <div class="col-sm-1"></div>
      <div class="col-sm-6">
        <p><?php the_field( 'bottom_paragraph' ); ?></p>
      </div>
    </div>
  </div>
  <div class="pd"></div>
<?php endwhile; ?>
<?php endif; ?>

<?php // Gets footer.php
get_footer();
?>
