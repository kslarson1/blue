<?php
/**
 * Template Name: template b
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
    <div class="row">
      <div class="col-xs-12">
        <div class="header_intro">
          <h2>Curabitur blandit tempus porttitor. Etiam porta sem malesuada magna mollis euismod.</h2>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end of content -->



			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
