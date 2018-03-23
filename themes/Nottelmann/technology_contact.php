<?php
/**
* Template Name: Technology Contact
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

<div class="navy">
  <div class="in">
    <div class="contain center">
      <?php the_field( 'contact_header' ); ?>
      <div class="divide30"></div>
    </div>
    <div class="container">
      <div class="row instru">
        <div class="col-sm-6">
          <input type="text" placeholder="Your name">
        </div>
        <div class="col-sm-6">
          <input type="text" placeholder="Email address">
        </div>
        <div class="col-sm-6">
          <input type="text" placeholder="Phone number">
        </div>
        <div class="col-sm-6">
          <input type="text" placeholder="School (if necessary)">
        </div>
        <div class="col-sm-6">
          <h2>I would like more information on the following:<br>(Please check all that apply)</h2>
          <div class="divide20"></div>
        </div>
        <div class="col-sm-4">
          <p>checkboxes will be here</p>
        </div>
        <div class="col-sm-12">
          <input type="text" placeholder="Your message" style="height: 200px;">
        </div>
        <div class="col-sm-6">
          <button class="mb2" style="background:#2457ca">contact us</button>
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
