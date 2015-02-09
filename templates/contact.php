<?php
/**
 * Template Name: Contact
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
<div id="contact">
<div class="header_standard" style="background-image: url(<?php the_field('contact_header_image'); ?>);">
  <div class="bottom_dark">
    <h1><?php the_field('contact_header'); ?></h1>
  </div>
</div>
<!-- end =header_standard -->
<!-- start of content -->
<div class="bg_color_w">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="header_intro_g">
          <h2><?php the_field('contact_header_intro'); ?></h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-6">
        <?php echo do_shortcode( '[contact-form-7 id="35" title="Contact Page"]' ); ?>
      </div>
      <div class="col-xs-12 col-sm-4 col-sm-offset-1">
        <br>
        <a href="tel:13036832526"><i class="fa fa-phone"></i> <b>Office:</b> (303) 683-2526</a>
        <a href="tel:13039455337"><i class="fa fa-phone"></i> <b>Maintenance:</b> (303) 945-5337</a>
        <i class="fa fa-fax"></i> <b>Fax:</b> (303) 993-8700

        <hr>

        <p><b>Blue Olive Properties</b>
        <br>
        200 West Plaza Drive
        <br>
        Suite 120
        <br>
        Highlands Ranch, CO 80129
        </p>

        <hr>

        info@blueoliveproperties.com
      </div>
    </div>
  </div>
</div>
</div>  <!-- end of =contact id -->
<!-- end of content -->



			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
