<?php /* Template Name: full_width_page */ ?>
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
      
		} else {
      
      // If no content, include the "No posts found" template.
      
		}
		?>
    full width page template
    <?php if( get_field('text') ): ?>
		<h2><?php the_field('text'); ?></h2>
		<img src="<?php the_field('image'); ?>" alt="<?php the_field('alt'); ?>">
	<?php endif; ?>
	
<?php

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

?>
		</main><!-- .site-main -->
</section><!-- .content-area -->
<?php
get_footer();