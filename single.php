<?php
  get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php

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
	
		?>
    Single
		</main><!-- .site-main -->
	</section><!-- .content-area -->

<?php
get_footer();