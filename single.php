<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package xcode3
 */

get_header();
?>

<main id="primary" class="site-main">
	<div class="container">
		<div class="row">
			<div class="col-lg-8">
				<?php
					while ( have_posts() ) :
						the_post();

						get_template_part( 'template-parts/content', get_post_type() );
						
					endwhile; // End of the loop.
				?>
			</div>
			<div class="col-lg-4">
				<div class="xcode3-recent-posts xcode3-related-posts-box">
						<div class="xcode3-recent-posts-box">
							<?php
							if(is_active_sidebar( 'sidebar-1' )):
								dynamic_sidebar( 'sidebar-1' );
							endif;
							?>
						</div>
					</div>
			</div>
		</div>
	</div>
</main><!-- #main -->

<?php

get_footer();