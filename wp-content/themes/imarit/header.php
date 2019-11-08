<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package imarit
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(). '/style.css' ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'imarit' ); ?></a>

	<header id="masthead" class="site-header">
        <div class="topbar">
            <p>Free worldwide shipping and return</p>
        </div>

        <nav id="menu" class="navbar navbar-expand-md navbar-light container" role="navigation">
            <button class="navbar-toggle navbar-toggler-left" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php
            wp_nav_menu([
                'menu'                  =>  'primary',
                'theme_location'        =>  'primary',
                'container'             => 'div',
                'container_id'          =>  'bs4navbar',
                'container_class'       =>  'collapse navbar-collapse',
                'menu_id'               =>  'main-menu',
                'menu_class'            =>  'navbar-nav ml-auto',
                'depth'                 =>  2,
                'fallback_cb'           =>  'bs4navwalker::fallback',
                'walker'                =>  new bs4Navwalker()
            ]);
            ?>

            <div class="site-branding navbar-brand logo-max-width">
                <?php
                the_custom_logo();
                ?>
            </div><!-- .site-branding -->




        </nav>
	</header><!-- #masthead -->

	<div id="content" class="site-content container">
