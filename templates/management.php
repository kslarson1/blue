<?php
/**
 * Template Name: Property Management
 *
 * 
 *
 * @package Blue
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

<!-- start =header_standard -->
<div class="header_standard" style="background-image: url(<?php the_field('mgmt_header_image'); ?>);">
  <div class="bottom_dark">
    <h1><?php the_field('mgmt_header'); ?></h1>
  </div>
</div>
<!-- end =header_standard -->
<!-- start of content -->
<div class="bg_color">
<div id="services">
  <div class="container">
    <div class="row">  <!-- start of =header_intro -->
      <div class="col-xs-12">
        <div class="header_intro">
          <h4><?php the_field('mgmt_header_intro'); ?></h4>
        </div>
      </div>
    </div>  <!-- end of =header_intro -->
</div>

<!-- =break -->
<div class="break">
  <h1>Easy Management</h1>
</div>
<!-- end of =break -->

  <div class="container">
    <div class="row">
<!-- beginning of repeater for tile -->
    <?php

// check if the repeater field has rows of data
if( have_rows('management_tile') ): ?>

  <!-- // loop through the rows of data -->
    <?php while ( have_rows('management_tile') ) : the_row(); ?>
        <!-- // display a sub field value -->

    <div class="col-xs-12 col-md-6">
      <div class="tile">
        <img src="<?php the_sub_field('tile_image'); ?>">
        <h3><?php the_sub_field('tile_header'); ?></h3>
        <hr>
        <p><?php the_sub_field('tile_text'); ?></p>
      </div>
    </div>

    <?php endwhile;

else :
    // no rows found
endif;
?>
<!-- end of repeater for tile -->
</div>
</div>

  <!-- =break -->
<div class="break">
  <h1>Tenant Services</h1>
</div>
<!-- end of =break -->

<div class="container">
<div class="row">
<!-- beginning of repeater for tile -->
    <?php
// check if the repeater field has rows of data
if( have_rows('tenant_tile') ):
  // loop through the rows of data
    while ( have_rows('tenant_tile') ) : the_row(); ?>
        <!-- // display a sub field value -->

    <div class="col-xs-12 col-md-6">
      <div class="tile">
        <img src="<?php the_sub_field('tile_image'); ?>">
        <h3><?php the_sub_field('tile_header'); ?></h3>
        <hr>
        <p><?php the_sub_field('tile_text'); ?></p>
      </div>
    </div>

    <?php endwhile;

else :
    // no rows found
endif;
?>
<!-- end of repeater for tile -->
  </div>
</div>

<!-- =break -->
<div class="break">
  <h1>Professional Resources</h1>
</div>
<!-- end of =break -->

<div class="container">
  <div class="row">

<!-- beginning of repeater for tile -->
    <?php
// check if the repeater field has rows of data
if( have_rows('resources_tile') ):
  // loop through the rows of data
    while ( have_rows('resources_tile') ) : the_row(); ?>
        <!-- // display a sub field value -->

    <div class="col-xs-12 col-md-6">
      <div class="tile">
        <img src="<?php the_sub_field('tile_image'); ?>">
        <h3><?php the_sub_field('tile_header'); ?></h3>
        <hr>
        <p><?php the_sub_field('tile_text'); ?></p>
      </div>
    </div>

    <?php endwhile;

else :
    // no rows found
endif;
?>
<!-- end of repeater for tile -->

  </div>
  </div>  <!-- end of container -->

 </div>
</div>  <!-- end of content -->


			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
