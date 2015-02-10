<?php
/**
 * Template Name: Services
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
<div class="header_standard" style="background-image: url(<?php the_field('services_header_image'); ?>);">
  <div class="bottom_dark">
    <h1><?php the_field('services_header'); ?></h1>
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
          <h4><?php the_field('services_header_intro'); ?></h4>
        </div>
      </div>
    </div>  <!-- end of =header_intro -->
    <div class="row">

<!-- beginning of repeater for tile -->
    <?php
// check if the repeater field has rows of data
if( have_rows('services_tile') ):
 	// loop through the rows of data
    while ( have_rows('services_tile') ) : the_row(); ?>
        <!-- // display a sub field value -->

	  <div class="col-xs-12 col-md-6">
	    <div class="tile">
		  <img src="<?php the_sub_field('tile_image'); ?>">
		  <h3><?php the_sub_field('tile_header'); ?></h3>
		  <hr>
		  <p><?php the_sub_field('tile_text'); ?></p>
		   <a href="#"><button class="button_ghost_wide">Learn More</button></a>
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
