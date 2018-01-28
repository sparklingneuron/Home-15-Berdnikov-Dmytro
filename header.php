<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Home_15_Berdnikov_Dmytro
 */

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header class="main-header">
    <div class="container">
        <nav class="main-navigation">
            <h1><?php the_custom_logo(); ?></h1>
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'header-main-menu-location',
                    'menu_class' => 'navigation-list',
                    'container' => ''
                ));
            ?>
        </nav>
    </div>
    <section class="contact-me">
        <img src="<?php echo get_theme_file_uri('assets/img/adam-suaerez.jpg'); ?>" alt="Adam Suaerez photo">
        <div class="container">
            <div>
                <h2>Adam Suaerez</h2>
                <span>Lawyer</span>
            </div>
            <a href="#contact">Contact Me</a>
        </div>
    </section>
</header>