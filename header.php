<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>
	<head>
        <meta name="google-site-verification" content="J51uBnQrjTYho3xXgnSKRVwmYVRo5yLaTw8zUYbh-mU" />
		<meta name="description" content="Make your life easy with izy shop you get the top products and latest technology in many categories of shopping ... shop Now and get your products at your door">
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

        <link rel="profile" href="https://gmpg.org/xfn/11">	
        <!-- Vendor CSS Files -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/v4-shims.css">	
		<?php wp_head(); ?>

	</head>

<body>
<?php get_template_part( 'template-items/navbar/top-bar' ); ?>
<?php get_template_part( 'template-items/navbar/navbar-main' ); ?>
<?php get_template_part( 'template-items/navbar/navbar-categories' ); ?>