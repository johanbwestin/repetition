<?php /* Template Name: two_col_page */ ?>
<?php
  get_header();
?>
<div class=" has-text-centered"> <?php the_title(); ?> </div>
<div class="columns has-text-centered">
<?php
		if ( have_posts() ) {

      // Load posts loop.
      ?>
      <div class="right-col column">
        <?php
			  while ( have_posts() ) {
          the_post();
          the_content();
			  }
        ?>
      <?php
			// Previous/next page navigation.
      
		} else {
      
      // If no content, include the "No posts found" template.
      
		}
    ?>
    </div>
    <div class="left-col column">
    <?php echo do_shortcode('[google_map_easy id="1"]')?>
    </div>
  </div>
    <?php
get_footer();