<?php
  get_header();
?>
	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
				the_post();
        the_title();
        the_content();
			}

			// Previous/next page navigation.
      
      // check if the repeater field has rows of data
      if( have_rows('repeater') ):
      
         // loop through the rows of data
          while ( have_rows('repeater') ) : the_row();
      
              // display a sub field value
              the_sub_field('text');
              the_sub_field('content');
      
          endwhile;
      
      else :
      
          // no rows found
      
      endif;

		} else {

			// If no content, include the "No posts found" template.

		}
    ?>
    index
    <?php

?>

		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php
get_footer();