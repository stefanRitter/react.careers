<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>
<!DOCTYPE html>
<html lang="en" itemtype="http://schema.org/WebPage" itemscope>
  <head prefix="og: http://ogp.me/ns#">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<meta property="og:type" content="website">
    <meta property="og:title" content="React.careers - The ultimate directory of companies using React.js">
    <meta property="og:site_name" content="React.careers">
    <meta property="og:url" content="http://react.careers">
    <meta property="og:image" content="http://react.careers/logo.png">
    <meta property="og:description" content="The ultimate directory of companies using React.js - Find jobs at companies who are using your favorite framework: React.js">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://react.careers">
    <meta property="og:title" content="React.careers - The ultimate directory of companies using React.js">
    <meta property="og:description" content="The ultimate directory of companies using React.js - Find jobs at companies who are using your favorite framework: React.js">
    <meta property="og:image" content="http://react.careers/logo.png">
    <meta property="og:site_name" content="React.careers">

	<meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@reactcareers">
    <meta name="twitter:creator" content="@stefanritter">
    <meta name="twitter:title" content="React.careers - The ultimate directory of companies using React.js">
    <meta name="twitter:description" content="The ultimate directory of companies using React.js - Find jobs at companies who are using your favorite framework: React.js">
    <meta name="twitter:image:src" content="http://react.careers/logo.png">

	<link href="http://fonts.googleapis.com/css?family=Raleway:300,700" rel="stylesheet" type="text/css">

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="title">
      <h1><a href="/"><img src="/wp-content/uploads/2016/09/cropped-react-logo.png" alt="React.js"><br class="phone-only">React<br class="phone-only"><em>.careers</em></a></h1>
      <h2>The ultimate directory of companies using React.js.<br>Find jobs at companies who are using your favorite JS framework!</h2>
    </div>

    <form action="//gymnosbody.us8.list-manage.com/subscribe/post?u=8736a6f17f9edb63fd39a1524&amp;amp;id=a025c3ad68" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate class="alerts-form validate">
      <h3>Get React.js job alerts via email:
      </h3>
      <div style="position: absolute; left: -5000px; height: 0;">
        <input type="text" name="b_8736a6f17f9edb63fd39a1524_a025c3ad68" tabindex="-1" value="">
      </div>
      <div class="form-group">
        <label for="mce-EMAIL">Email Address*</label>
        <input type="email" value="" name="EMAIL" id="mce-EMAIL" placeholder="your@email.com" class="required email">
      </div>
      <div class="form-group">
        <label for="mce-LOCATION">Location</label>
        <input type="text" value="" name="LOCATION" id="mce-LOCATION" placeholder="e.g. World, London, USA, ...">
      </div>
      <div class="form-group">
        <label>&nbsp;</label>
        <button type="submit" name="subscribe" class="form-button">Alert me</button>
      </div>
    </form>

    <div class="clear-both"></div>

<div id="page" class="site">
	<div class="site-inner">
		<div id="content" class="site-content">
