<?php
/**
 * Template part for displaying posts
 *
 */
?>

<div class="box-article search shadow">
	<div class="row">
		
		<div class="col-md d-flex flex-column justify-content-center">

			<div class="article-wrapper ">
						
				<header class="entry-header">
					<?php
					the_title( sprintf( '<h3 class="custom-post-title" itemprop="headline"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
					?>
				</header><!-- .entry-header -->
				<span class="cat"><?php the_category(); ?></span>
			</div>
			<p>
				<?php the_excerpt(); ?>
			</p>
			<div class="button-container">
				<a href="<?php echo the_permalink(); ?>" class="button-text">
					<?php esc_html_e( 'En savoir plus', 'sur-les-bancs-de-lecole' ); ?>
				</a>
			</div>
		</div>
		
	</div>						
</div>