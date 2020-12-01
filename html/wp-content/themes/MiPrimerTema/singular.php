<?php
/**
 * The template for displaying single posts and pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>

<main id="site-content" role="main">

    <h2>Es mi plantilla del post!</h2>

    <h1><?php the_title();?></h1>
    <h1><?php the_excerpt();?></h1>
    <h1><?php the_content();?></h1>


</main><!-- #site-content -->


<?php get_footer(); ?>
