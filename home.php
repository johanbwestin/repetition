<?php
  get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) {

			// Load posts loop.
			while ( have_posts() ) {
        ?>
        <div style="border: 10px solid black">
        <?php
        the_post();
        the_post_thumbnail();
        the_title();
        the_content();
        ?>
        </div>
        <?php
	
			}

			// Previous/next page navigation.

		} else {

			// If no content, include the "No posts found" template.

		}
		?>
    archive
		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php
get_footer();