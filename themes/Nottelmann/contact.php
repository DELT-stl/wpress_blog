<?php
/**
* Template Name: Contact
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
  <div class="row">
    <div class="col-sm-6 contactlocal">
      <p><?php the_field( 'top_paragraph' ); ?></p>
      <?php the_field( 'first_location' ); ?>
    </div>
    <div class="col-sm-6 contactlocal">
      <?php the_field( 'second_location' ); ?>
    </div>
  </div>

</div>

<div class="pd"></div>
<div class="navy">
      <?php the_field( 'contact_form' ); ?>
</div>

<?php endwhile; ?>
<?php endif; ?>

<?php // Gets footer.php
get_footer();
?>
