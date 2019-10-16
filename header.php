<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="profile" href="https://gmpg.org/xfn/11" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.5/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php ?>
<?php
 if ( has_nav_menu( 'main_menu' ) ) : ?>
 <nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Main menu', 'test' ); ?>">
     <?php
         wp_nav_menu( array(
             'theme_location' => 'main_menu',
             'menu_class'     => 'main-menu',
             'depth'          => 1,
             'link_before'    => '<span class="header-item">',
             'link_after'     => '</span>',
         ) );
     ?>
 </nav><!-- .social-navigation -->
<?php endif;
?>

<div id="page" class="site">
	
	<div id="content" class="site-content">
