<?php
/**
* Template Name: About
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
  <div class="contain center">
    <?php the_field( 'about_header' ); ?>
    <div class="divide30"></div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-sm-8">
        <?php the_field( 'first_paragraph' ); ?>
      </div>
      <div class="col-sm-3">
        <?php $about_us_image = get_field( 'about_us_image' ); ?>
<?php if ( $about_us_image ) { ?>
	<img src="<?php echo $about_us_image['url']; ?>" class="img100" alt="<?php echo $about_us_image['alt']; ?>" />
<?php } ?>
      </div>
    </div>

    <div class="divide30"></div>
    <?php the_field( 'second_paragraph' ); ?>
  </div>
</div>

<div class="grey in">
  <div class="container">
    <div class="container">
      <div class="row">
        <div class="col-sm-5">
          <h3  class="right"><?php the_field( 'bottom_header' ); ?></h3>
          <button class="mb2 righty">find out more</button>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-6">
          <p><?php the_field( 'bottom_paragraph' ); ?></p>
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
