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

	<header id="masthead" class="site-header row">
        <div class="topbar col-12">
            <p>Free worldwide shipping and return</p>
        </div>

        <div class="container">
            <nav id="menu" class="navbar navbar-expand-md navbar-light flexbox" role="navigation">

                <?php
                wp_nav_menu([
                    'menu'                  =>  'primary',
                    'theme_location'        =>  'primary',
                    'container'             =>  'div',
                    'container_id'          =>  'bs4navbar',
                    'container_class'       =>  'navbar flexItem1',
                    'menu_id'               =>  'main-menu',
                    'menu_class'            =>  'navbar-nav ml-auto',
                    'depth'                 =>  2,
                    'fallback_cb'           =>  'bs4navwalker::fallback',
                    'walker'                =>  new bs4Navwalker()
                ]);
                ?>


                <div class="site-branding navbar-brand logo-max-width flexItem2">
                    <?php
                    the_custom_logo();
                    ?>
                </div>

                <div class="flexItem3">
                    blah
                </div>
            </nav>
        </div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
