<?php
/**
* Template Name: Team
*/
get_header('products'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="banner">
  <?php $banner_image = get_field( 'banner_image' ); ?>
<?php if ( $banner_image ) { ?>
	<img src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>" />
<?php } ?>
<div class="page_title">
  <?php the_field( 'page_header' ); ?>
</div>

<div class="intro_p">
  <p><?php the_field( 'page_summary' ); ?></p>
</div>

<div class="pd"></div>

<div class="navy in">
  <div class="contain">
    <h3 class="center"><?php the_field( 'our_employees' ); ?></h3>
    <div class="divide30"></div>
  </div>
  <div class="relly">
    <div class="grade_l"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="divide70"></div>
          <h3 class="mb0"><?php the_field( 'owner_one_name' ); ?></h3>
          <h2 class="mt0">Owner</h2>
          <p><?php the_field( 'owner_one_summary' ); ?></p>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-5">
          <?php $owner_one_image = get_field( 'owner_one_image' ); ?>
  <?php if ( $owner_one_image ) { ?>
  	<img src="<?php echo $owner_one_image['url']; ?>" alt="<?php echo $owner_one_image['alt']; ?>" />
  <?php } ?>
        </div>
      </div>
    </div>
  </div>

  <div class="divide50"></div>

  <div class="relly">
    <div class="grade_r"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-5">
          <?php $owner_two_image = get_field( 'owner_two_image' ); ?>
<?php if ( $owner_two_image ) { ?>
	<img src="<?php echo $owner_two_image['url']; ?>" alt="<?php echo $owner_two_image['alt']; ?>" />
<?php } ?>
        </div>
        <div class="col-sm-1"></div>
        <div class="col-sm-6">
          <div class="divide70"></div>
          <h3 class="mb0"><?php the_field( 'owner_two_name' ); ?></h3>
          <h2 class="mt0">Owner</h2>
          <p><?php the_field( 'owner_two_summary' ); ?></p>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="divide50"></div>
    <div class="row teamh2">
      <div class="col-md-4 col-sm-6">
        <img src="https://nottelmannmusic.com/images/nmc/staff/michael.jpg" class="img100">
        <div class="divide20"></div>
        <h2><?php the_field( 'employee_one_name' ); ?></h2>
      </div>
      <div class="col-md-4 col-sm-6">
        <img src="https://nottelmannmusic.com/images/nmc/staff/jennifer.jpg" class="img100">
        <div class="divide20"></div>
        <h2>Jennifer</h2>
      </div>
      <div class="col-md-4 col-sm-6">
        <img src="https://nottelmannmusic.com/images/nmc/staff/steve_h.jpg" class="img100">
        <div class="divide20"></div>
        <h2>Steve H.</h2>
      </div>
      <div class="col-md-4 col-sm-6">
        <img src="https://nottelmannmusic.com/images/nmc/staff/blaise.jpg" class="img100">
        <div class="divide20"></div>
        <h2>Blaise</h2>
      </div>
      <div class="col-md-4 col-sm-6">
        <img src="https://nottelmannmusic.com/images/nmc/staff/steve_l.jpg" class="img100">
        <div class="divide20"></div>
        <h2>Steve L.</h2>
      </div>
      <div class="col-md-4 col-sm-6">
        <img src="https://nottelmannmusic.com/images/nmc/staff/jim.jpg" class="img100">
        <div class="divide20"></div>
        <h2>Jim</h2>
      </div>
      <div class="col-md-4 col-sm-6">
        <img src="https://nottelmannmusic.com/images/nmc/staff/paul.jpg" class="img100">
        <div class="divide20"></div>
        <h2>Paul</h2>
      </div>
      <div class="col-md-4 col-sm-6">
        <img src="https://nottelmannmusic.com/images/nmc/staff/mike_z.jpg" class="img100">
        <div class="divide20"></div>
        <h2>Mike Z.</h2>
      </div>
      <div class="col-md-4 col-sm-6">
        <img src="https://nottelmannmusic.com/images/nmc/staff/bill.jpg" class="img100">
        <div class="divide20"></div>
        <h2>Bill</h2>
      </div>
      <div class="col-md-4 col-sm-6">
        <img src="https://nottelmannmusic.com/images/nmc/staff/charlie.jpg" class="img100">
        <div class="divide20"></div>
        <h2>Charlie</h2>
      </div>
      <div class="col-md-4 col-sm-6">
        <img src="https://nottelmannmusic.com/images/nmc/staff/steve_o.jpg" class="img100">
        <div class="divide20"></div>
        <h2>Steve O.</h2>
      </div>
      <div class="col-md-4 col-sm-6">
        <img src="https://nottelmannmusic.com/images/nmc/staff/bonnie.jpg" class="img100">
        <div class="divide20"></div>
        <h2>Bonnie</h2>
      </div>
      <div class="col-md-4 col-sm-6">
        <img src="https://nottelmannmusic.com/images/nmc/staff/mark.jpg" class="img100">
        <div class="divide20"></div>
        <h2>Mark</h2>
      </div>
      <div class="col-md-4 col-sm-6">
        <img src="https://nottelmannmusic.com/images/nmc/staff/ray_b.jpg" class="img100">
        <div class="divide20"></div>
        <h2>Ray</h2>
      </div>
      <div class="col-md-4 col-sm-6">
        <img src="https://nottelmannmusic.com/images/nmc/staff/grant.jpg" class="img100">
        <div class="divide20"></div>
        <h2>Grant</h2>
      </div>
    </div>
  </div>
</div>

<div class="in">
  <div class="contain">
    <h3 class="center">Featured woodwind brands </h3>
    <div class="divide30"></div>
    <img class="img100" src="img/woodwind/wood-logos.png">
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-sm-5 right">
      <h3>Buy or rent your woodwind instrument today</h3>
      <button class="mb2 righty">find a store</button>
    </div>
    <div class="col-sm-1"></div>
    <div class="col-sm-6">
      <p>We sell and rent woodwin instruments for musician of all ages and experience levels. To rent a woodwin instrument, visit our <a href="#">rentals page</a>. to purchase, please visit the rentals page and fill out the rental online form.</p>
    </div>
  </div>
</div>
<div class="pd"></div>


<?php endwhile; ?>
<?php endif; ?>
<?php // Gets footer.php
get_footer();
?>
