



<!-- start of responsive header -->

<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Blue
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic' rel='stylesheet' type='text/css'>  <!-- google fonts -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">  <!-- font awesome -->
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>  <!-- modernizr -->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'blue' ); ?></a>

<!-- start of nav -->
<nav id="site-navigation" class="main-navigation" role="navigation">

<ul id="menu">
	<li><a href="/home">Home</a></li>
    <li><a href="#">Services</a>
        <ul>
            <li><a href="#">Property Management</a></li>
            <li><a href="#">Real Estate Brokerage</a></li>
        </ul>
    </li>
     <li><a href="#">For Owners</a>
        <ul>
            <li><a href="#">Request Info</a></li>
            <li><a href="#">Owner Login</a></li>
        </ul>
    </li>
     <li><a href="#">For Residents</a>
        <ul>
            <li><a href="#">Pay Rent</a></li>
            <li><a href="#">Request Maintenance</a></li>
            <li><a href="#">Apply for Lease</a></li>
            <li><a href="#">Lease Policy Overview</a></li>
            <li><a href="#">Tenant Login</a></li>
        </ul>
    </li>
    <li><a href="#">About Us</a></li>
    <li><a href="#">Contact Us</a></li>
    <li><a href="#">Latest News</a></li>
</ul>
</nav>

<script>
	$(function(){
		$('#menu').slicknav();
	});
</script>


<!-- end of nav -->

	<div id="content" class="site-content">
