<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package johanna
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, user-scalable=no">
    <meta property="og:title" content="Johanna Su" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.greengravelcomedyfest.com" />
    <meta property="og:image" content="http://www.greengravelcomedyfest.com/img/branding2.svg" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />
    <script type="text/javascript" src="//use.typekit.net/rsw2iqh.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
        
	<nav class="push-menu-right">
		<ul>
			<li data-type="link"><a href="#updates" data-scroll="updates">News</a></li>
			<li data-type="link"><a href="<?php echo site_url(); ?>/festinfo" data-scroll="about">Fest Info</a></li>
			<li data-type="link"><a href="<?php echo site_url(); ?>/schedule" data-scroll="schedule">Schedule</a></li>
			<li data-type="link"><a href="<?php echo site_url(); ?>/lineup" data-scroll="lineup">Lineup</a></li>
			<li data-type="link"><a href="<?php echo site_url(); ?>/submissions" data-scroll="submissions">Submissions</a></li>
			<li data-type="link"><a href="#sponsors" data-scroll="sponsors">Sponsors</a></li>
			<li data-type="link"><a href="#staff" data-scroll="staff">Staff</a></li>
		</ul>
	</nav>
	
	<button type="button" role="button" class="lines-button x toggle-push-right"><span class="lines"></span></button>
	
	<header class="global-header">
		<div class="logo"></div>
    </header>
        
	<div id="wrapper">

	<main>