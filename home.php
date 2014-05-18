<?php get_header(); ?>

<p>home.php file</p>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 

	<h2><?php the_title(); ?></h2>
	<?php the_content(); ?>

	<hr>

	<?php endwhile; else: ?>

	<p>No Posts Yet. </p>

<?php endif; ?>

<?php get_footer(); ?>