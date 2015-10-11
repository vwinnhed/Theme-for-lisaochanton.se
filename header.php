<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class=""> <!--<![endif]-->

<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<!-- GENERAL -->
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title>Lisa & Anton | <?php echo get_bloginfo( 'title' ); ?></title>
	<meta name="author" content="Arvid Bräne, arvid@arvidbrane.se, http://www.arvidbrane.se" />
	<meta name="keywords" content="Wedding" />
	<meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="image_src" href="<?php echo get_template_directory_uri(); ?>/img/header.jpg" /> <!-- Facebook -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:500,600,700,400' rel='stylesheet' type='text/css'>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/x-icon">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/x-icon">
	

	<!-- MOBILE -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no" />

	<!-- MISC -->
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
	<![endif]-->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

	<!-- GOOGLE ANALYTICS -->
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-56749257-1', 'auto');
		ga('send', 'pageview');
	</script>

	<script type="text/javascript">
		<?php include 'jquery.php'; ?>
	</script>

	<!--DEFUALT HEAD-->
	<?php wp_head(); ?>
</head>

<body>
<div id="content">

	<!-- MENU -->
	<section id="menu">
		<a href="#open_menu" id="menu_toggle">&#9776;</a>
		<div class="grid">
			<div class="row top_bar">
				<div class="c3 logo"><a href="#hero" class="logo_link"><img src="<?php echo get_template_directory_uri(); ?>/img/logo_dark.png" alt="To the Top" id="logo_menu"></a></div>
				<?php include 'page-templates/menu.php'; //MENU?>
			</div>
		</div>
	</section>

