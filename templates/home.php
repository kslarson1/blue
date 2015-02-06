<?php
/**
 * Template Name: Home
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
          <h3>Curabitur tempus porttitor. Etiam porta sem maleda magna mollis euismod.</h3>
        </div>
      <button class="button_raised">hi there</button>
      </div>
    </div>  <!-- end of =header_intro -->
  </div>  <!-- end of container -->

<div class="break">
<div class="container">
  <div class="row">
    <div class="col-xs-12 center">
      <h2>We're the best property managers in Highlands Ranch. Let us show you why.</h2>
    </div>
  </div>
</div>
</div>

<div class="break">
<div class="container">
  <div class="row">
    <div class="col-xs-12 center">
      <h2>We're the best property managers in Highlands Ranch. Let us show you why.</h2>
    </div>
  </div>
</div>
</div>

<div class="break">
<div class="container">
  <div class="row">
    <div class="col-xs-12 center">
      <h2>We're the best property managers in Highlands Ranch. Let us show you why.</h2>
    </div>
  </div>
</div>
</div>

<div class="break">
<div class="container">
  <div class="row">
    <div class="col-xs-12 center">
      <h2>We're the best property managers in Highlands Ranch. Let us show you why.</h2>
    </div>
  </div>
</div>
</div>

<div class="break">
<div class="container">
  <div class="row">
    <div class="col-xs-12 center">
      <h2>We're the best property managers in Highlands Ranch. Let us show you why.</h2>
    </div>
  </div>
</div>
</div>

</div>  <!-- end of content -->



			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
