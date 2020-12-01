<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="stylesheet" href="<?php echo esc_url( get_stylesheet_uri() ); ?>" type="text/css" />
	<?php wp_head(); ?>
</head>
<body>
<?php get_header(); ?>
<?php get_sidebar(); ?>

<?php
if ( have_posts() ) :
    while ( have_posts() ) :
        the_post(); ?>

        <h1>Titulo: <a href=" <?php the_permalink(); ?> "> <?php the_title(); ?></a></h1>
        <?php the_post_thumbnail('thumbnail'); ?>
        <h1> <?php the_excerpt(); ?> </h1>

    <?php
	    the_content();
	    wp_link_pages();
	    //edit_post_link();
    endwhile;

    if ( get_next_posts_link() ) {
		next_posts_link();
	};

	if ( get_previous_posts_link() ) {
		previous_posts_link();
	};

 else:
	echo "<p>No posts found. :(</p>";
endif;

?>



<?php  get_footer();?>
<?php  wp_footer();?>
</body>
</html>