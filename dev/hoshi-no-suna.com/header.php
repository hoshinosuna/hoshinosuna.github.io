<?php
/**
 * The header for the OnePress theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OnePress
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <link rel="stylesheet" type="text/css" href="wp-content/themes/onepress/assets/css/import.css">

    <script type="text/javascript" src="wp-content/themes/onepress/assets/js/tinytools.toggleswitch.min.js"></script>
    <script type="text/javascript" src="wp-content/themes/onepress/assets/js/hoshisunaCommon.js"></script>
</head>

<body <?php body_class(); ?>>
    <?php do_action( 'onepress_before_site_start' ); ?>
    <div id="page" class="hfeed site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'onepress' ); ?></a>
        <?php
    /**
     * @since 2.0.0
     */
    onepress_header();
    ?>
