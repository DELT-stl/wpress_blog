<?php
/**
* Template Name: Technology
*/
get_header('products'); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <div class="banner">
  <?php $banner_image = get_field( 'banner_image' ); ?>
<?php if ( $banner_image ) { ?>
	<img src="<?php echo $banner_image['url']; ?>" alt="<?php echo $banner_image['alt']; ?>" />
<?php } ?>
<div class="in">
  <div class="container vidbig">
    <?php the_field( 'page_header'); ?>
    <div class="divide40"></div>
    <iframe src="<?php the_field('overview_video'); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  </div>
</div>

<div class="navy">
  <div class="in">
    <div class="contain center">
      <h3><?php the_field('solutions_header'); ?></h3>
      <div class="divide30"></div>
    </div>
    <div class="container smlvids center">
      <h2><?php the_field('classroom_header'); ?></h2>
      <div class="row">
        <div class="col-sm-6">
          <iframe width="560" height="315" src="<?php the_field('classroom_video_one'); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="col-sm-6">
          <iframe width="560" height="315" src="<?php the_field('classroom_video_two'); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      </div>
      <h2><?php the_field('lab_header'); ?></h2>
      <div class="row">
        <div class="col-sm-6">
          <iframe width="560" height="315" src="<?php the_field('lab_video_one'); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="col-sm-6">
          <iframe width="560" height="315" src="<?php the_field('lab_video_two') ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      </div>
      <h2><?php the_field('notation_software_header'); ?></h2>
      <div class="center">
        <button class="mb2" style="margin:auto">find out more</button>
      </div>
    </div>
  </div>

  <div class="">
    <?php the_field('on_the_field_header'); ?>
      <div class="row">
        <div class="col-sm-12">
          <iframe width="560" height="315" src="<?php the_field('sound_systems_video'); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      </div>
      <div class="center">
        <button class="mb2" style="margin:auto">find out more</button>
      </div>
    </div>
  </div>

  <div class="in">
    <div class="contain center">
      <h3><?php the_field('on_the_go_header'); ?></h3>
      <div class="divide30"></div>
    </div>
    <div class="container smlvids center">
      <div class="row">
        <div class="col-sm-6">
          <h2><?php the_field('otg_header_one'); ?></h2>
          <iframe width="560" height="315" src="<?php the_field('otg_video_one'); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="col-sm-6">
          <h2><?php the_field('otg_header_two'); ?></h2>
          <iframe width="560" height="315" src="<?php the_field('otg_video_two'); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
        <div class="col-sm-6">
          <h2><?php the_field('otg_header_three'); ?></h2>
          <iframe width="560" height="315" src="<?php the_field('otg_video_three'); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
        </div>
      </div>
      <div class="center">
        <button class="mb2" style="margin:auto">find out more</button>
      </div>
    </div>
  </div>
</div>


<div class="container in">
  <div class="contain center"><h3><?php the_field('additional_resources_header'); ?></h3></div>
  <div class="divide30"></div>

  <div class="row">
    <div class="col-sm-6">
      <a href="/music-educators/technology/">
        <div class="imgmore">
          <?php $clinician_solutions_image = get_field( 'clinician_solutions_image' ); ?>
<?php if ( $clinician_solutions_image ) { ?>
	<img src="<?php echo $clinician_solutions_image['url']; ?>" alt="<?php echo $clinician_solutions_image['alt']; ?>" />
<?php } ?>
          <h2><?php the_field('clinician_solutions_header'); ?></h2>
        </div>
      </a>
    </div>
    <div class="col-sm-6">
      <a href="/music-educators/technology/">
        <div class="imgmore">
          <?php $music_educators_image = get_field( 'music_educators_image' ); ?>
<?php if ( $music_educators_image ) { ?>
	<img src="<?php echo $music_educators_image['url']; ?>" alt="<?php echo $music_educators_image['alt']; ?>" />
<?php } ?>
          <h2><?php the_field('music_educators_header'); ?></h2>
        </div>
      </a>
    </div>
  </div>
</div>
<?php endwhile; ?>
<?php endif; ?>

<?php // Gets footer.php
get_footer();
?>
