<?php
/**
 * Displays the site header.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$wrapper_classes  = 'site-header';
$wrapper_classes .= has_custom_logo() ? ' has-logo' : '';
$wrapper_classes .= ( true === get_theme_mod( 'display_title_and_tagline', true ) ) ? ' has-title-and-tagline' : '';
$wrapper_classes .= has_nav_menu( 'primary' ) ? ' has-menu' : '';
$blog_info    = get_bloginfo( 'name' );
?>

<div id="bcgovmast">
<header id="mainheader" class="mainhead" role="banner">
<div class="alignwide">


<div class="wiw-logo">
	<img alt="Where Ideas Work logo" 
		height="48" 
		src="http://learningcentre.gww.gov.bc.ca/learninghub/wp-content/uploads/sites/17/2021/07/where-ideas-work.png" 
		width="220">
</div>	
	
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="wordmark">
	<?php //the_custom_logo(); ?>
	Learning <span>HUB</span>
</a>

</div>
</header><!-- #masthead -->

<?php get_template_part( 'template-parts/header/site-nav' ); ?>
</div>