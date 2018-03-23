<?php
/**
* Template Name: CustomPageT2
*/
get_header(); ?>
<header class="sub-image" style="background:url(<?php the_post_thumbnail_url(); ?>) center center no-repeat;background-size:cover">
	<div class="trans"></div>
	<div class="allmid">
		<h4>Serving Missouri, Illinois, and Arkansas</h4>
		<h1><?php the_field( 'title' ); ?></h1>
		<a href="/contact/"><button class="mb"><?php the_field( 'button_text' ); ?></button></a>
	</div><!-- end of .callout -->
</header>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


        <div class="entry">
            <?php the_content(); ?>
        </div><!-- entry -->
<?php endwhile; ?>
<?php endif; ?>

<?php // Gets footer.php
get_footer();
?>
