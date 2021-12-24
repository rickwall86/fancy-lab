<?php
/**
 * The default template for displaying all pages
 *
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Fancy Lab
 */

get_header();
?>
		<div class="content-area">
			<main>
					<div class="container">
						<div class="row">
							<?php 
								if(have_posts()) {
									while(have_posts()) {
										the_post(); ?>
											<articule>
												<h1><?php the_title(); ?></h1>
												<p><?php the_content() ?></p>
											</articule>
									<?php }
								}
							?>
						</div>
					</div>
				</section>
			</main>
		</div>
<?php get_footer(); ?>