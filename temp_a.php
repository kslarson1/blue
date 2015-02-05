<?php
/**
 * Template Name: template a
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
<div class="header_standard" style="background-image: url(<?php the_field('home_header_image'); ?>);">
  <div class="bottom_dark">
    <h1>Curabitur blandit</h1>
  </div>
</div>
<!-- end =header_standard -->
<!-- start of content -->
<div class="bg_color">
  <div class="container">
    <div class="row">  <!-- start of =header_intro -->
      <div class="col-xs-12">
        <div class="header_intro">
          <h3>Curabitur blandit tempus porttitor. Etiam porta sem maleda magna mollis euismod.</h3>
        </div>
      </div>
    </div>  <!-- end of =header_intro -->
    <div class="row">

<!-- beginning of repeater for tile -->
    <?php
// check if the repeater field has rows of data
if( have_rows('repeater_field_name') ):
 	// loop through the rows of data
    while ( have_rows('repeater_field_name') ) : the_row(); ?>
        <!-- // display a sub field value -->

	  <div class="col-xs-12 col-md-6">
	    <div class="tile">
		  <img src="<?php the_sub_field('fill-in-image-name'); ?>">
		  <h3><?php the_sub_field('fill-in-headername'); ?></h3>
		  <hr>
		  <p><?php the_sub_field('fill-in-textname'); ?></p>
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
</div>  <!-- end of content -->



			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
