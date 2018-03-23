<?php
/**
* Template Name: Rentals
*/
get_header('products'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="banner">
    <?php $banner_image = get_field( 'banner_image' ); ?>
<?php if ( $banner_image ) { ?>
  <img src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>" />
<?php } ?>
  <div class="page_title">
    <?php the_field( 'top_header' ); ?>
  </div>

  <div class="intro_p">
    <?php the_field( 'top_paragraph' ); ?>
  </div>

  <div class="in container cordo">
    <div class="accordion">
      <dl>
        <dt>
          <a href="#accordion1" aria-expanded="false" aria-controls="accordion1" class="accordion-title accordionTitle js-accordionTrigger">Our rent to own plan:</a>
        </dt>
        <dd class="accordion-content accordionItem is-collapsed" id="accordion1" aria-hidden="true">
          <?php the_field( 'rent_policy' ); ?>
        </dd>
        <dt>
          <a href="#accordion2" aria-expanded="false" aria-controls="accordion2" class="accordion-title accordionTitle js-accordionTrigger">
            Our quarterly plan:</a>
        </dt>
        <dd class="accordion-content accordionItem is-collapsed" id="accordion2" aria-hidden="true">
          <?php the_field( 'quarterly_plan' ); ?>
        </dd>
      </dl>
    </div>
  </div>

  <div class="navy">
    <div class="in">
      <div class="container">
        <div class="row center instru">
          <div class="col-sm-5">
            <?php the_field( 'contact_form' ); ?>
          </div>
          <div class="col-sm-7">
            <div class="row">
              <div class="col-sm-12">
                <input type="text" placeholder="Your name">
              </div>
              <div class="col-sm-12">
                <input type="text" placeholder="Email address">
              </div>
              <div class="col-sm-12">
                <input type="text" placeholder="Phone number">
              </div>
              <div class="col-sm-12">
                <input type="text" placeholder="School (if necessary)">
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
    </div>
  </div>
<?php endwhile; ?>
<?php endif; ?>

<?php // Gets footer.php
get_footer('rentals');
?>
