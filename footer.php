
	</div><!-- #content -->

<footer id="colophon" class="site-footer">
 <?php
 if ( has_nav_menu( 'footer_menu' ) ) : ?>
 <nav class="footer-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Menu', 'test' ); ?>">
     <?php
         wp_nav_menu( array(
             'theme_location' => 'footer_menu',
             'menu_class'     => 'footer-navigation',
             'depth'          => 1,
             'link_before'    => '<span class="screen-reader-text">',
             'link_after'     => '</span>',
         ) );
     ?>
 </nav><!-- .social-navigation -->
<?php endif;
 ?>
 <p><?php the_field('text', 'option'); ?></p>
</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
