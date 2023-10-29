<?php
/**
 * The main template file
 *
 */

get_header(); ?>

<section class="main-section">
	<?php if (have_posts()) :
		while (have_posts()) : the_post(); ?>

		<!-- appele contenu d'une page article/page -->
			<div class="container">
			
				<!-- <h1 class="page-title"><?php //the_title(); ?></h1> -->
					<?php the_content(); ?>
		
			</div>

	<?php endwhile;
		else : ?>
		<p>Il n'y a rien à afficher</p>
	<?php endif; ?>
</section>
<?php get_footer(); ?>