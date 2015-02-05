<?php
/**
 * Template Name: template c
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

    <div class="row">  <!-- start of =list_standard -->
      <div class="col-xs-12 col-md-8 col-md-offset-2">
        <div class="list_container">
          <ul class="fa-ul">
        <!-- start repeater for list items -->
        <?php

// check if the repeater field has rows of data
if( have_rows('repeater_field_name') ):
  // loop through the rows of data
    while ( have_rows('repeater_field_name') ) : the_row(); ?>
        <!-- // display a sub field value -->

        <li><i class="fa-li fa fa-check"></i><?php the_sub_field('sub_field_name'); ?></li>

    <?php endwhile;
else :
    // no rows found
endif; ?>
<!-- end of repeater for list items -->
        
          </ul>
        </div>
      </div>
    </div>  <!-- end of =list_standard -->

  </div>
</div>
<!-- end of content -->



      <?php endwhile; // end of the loop. ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php get_footer(); ?>
