<?php
/**
 * Template part for displaying posts
 *
 */
?>

<div class="box-article">
	<div class="row">
		<?php 
		 /* grab the url for the full size featured image */
		 $featured_img_url = get_the_post_thumbnail_url(); 
		 if($featured_img_url) :?>
		<div class="col-md-5" style="background-image:url(<?php echo $featured_img_url; ?>);"></div>
		<?php endif; ?>
		
		<div class="col-md d-flex flex-column justify-content-between">

			<div class="article-wrapper">
						
				<header class="entry-header">
					<?php
					the_title( sprintf( '<h3 class="custom-post-title" itemprop="headline"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' );
					?>
				</header><!-- .entry-header -->
				<?php if(the_category()): ?>
					
				<span class="cat"><?php the_category(); ?></span>
				<?php endif; ?>
				<div class="meta-date h-100">
					<p>										
						<span><i class="icofont-ui-calendar"></i>
							<?php
							echo esc_html(get_the_date('j M Y')); ?>
						</span>
					</p>
				</div> 
			</div>
			<?php the_excerpt(); ?>
			<div class="button-container">
				<a href="<?php echo the_permalink(); ?>" class="button-text">
					<?php esc_html_e( 'Lire la suite', 'sur-les-bancs-de-lecole' ); ?>
				</a>
			</div>
		</div>
		<div class="text-center social-network">
				<p>
					<a href="https://www.facebook.com/sharer/sharer.php?u=http://sur-les-bancs-de-lcole.local/category/actualites/" target="_blank">
						<span class="social-share">
							<i class="fab fa-facebook-f"></i>
						</span>
					</a>
					<a href="https://twitter.com/intent/tweet?text=http://sur-les-bancs-de-lcole.local/category/actualites/" target="_blank">
						<span class="social-share">
							<i class="fab fa-twitter"></i>
						</span>
					</a>
					<a href="https://www.linkedin.com/shareArticle?mini=true&url=http://sur-les-bancs-de-lcole.local/category/actualites/" target="_blank">
						<span class="social-share">
							<i class="fab fa-linkedin-in"></i>
						</span>
					</a>
				</p>
		</div>
		
	</div>						
</div>