<?php
/*
 Single Post Template: single-custom-tamplate-for-posts
 Description: This part is optional, but helpful for describing the Post Template
 */
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package main
 */
?>

<main role="main" class="container">
<?php
		while ( have_posts() ) :
			the_post();

			the_content();
			
		endwhile; // End of the loop.
		?>
</main>

