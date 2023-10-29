<?php get_header(); ?>
<section id="content" class="pages">
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#f6f9fd" fill-opacity="1" d="M0,192L80,202.7C160,213,320,235,480,213.3C640,192,800,128,960,112C1120,96,1280,128,1360,144L1440,160L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z"></path></svg>	
	<div class="page-title-wrapper text-right">
			<h1 class="page-title w-100" data-aos="fade-right"><?php single_term_title(); ?></h1>
	</div>


	<div class="row">
		<?php if (have_posts()) :
			while (have_posts()) : the_post(); ?>


					<div class="col-lg-3 col-md-6 col-12">
						<div class="box box_link">

						<div class="box_thumb">
				         <?php if ( has_post_thumbnail() ) : ?>
				            <?php the_post_thumbnail( 'medium', ['class' => 'img-fluid'] ); ?>
				         <?php else : ?>
				            <img src="<?php echo get_bloginfo( 'stylesheet_directory' ); ?>/img/placeholder.png" class="img-fluid" alt=""/>
				         <?php endif; ?>
						</div>


							<div class="box_content">
					         	<h2><?php the_title(); ?></h2>

								<div class="postmeta">
									<?php echo get_the_tag_list('<span class="tag">', ' </span><br/><span class="tag">', '</span>', $post->ID); ?>
								</div>

								<?php
									$resulttime_year = substr(get_field('resultat_date'), 0, 4);
									$resulttime_month = substr(get_field('resultat_date'), 4, 2);
									$resulttime_day = substr(get_field('resultat_date'), 6, 2);
								?>

					         	<p>
					         		<?php if (get_field('resultat_date')) : ?>
					         			Le aa <strong><?php echo $resulttime_day; ?>/<?php echo $resulttime_month; ?>/<?php echo $resulttime_year; ?></strong><br/>
					         		<?php endif; ?>
					         		<?php if (get_field('resultat_lieu')) : ?>
					         			À <strong><?php the_field('resultat_lieu'); ?></strong>
					         		<?php endif; ?>
					         	</p>

				 				<?php if (get_field('resultat_intro')): ?>
									<p><?php the_field('resultat_intro'); ?></p>
								<?php endif ?>

								<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>, lire la suite"></a>
							</div><!-- .box_content -->
						</div><!-- .box -->
					</div><!-- .col-md-4 -->
				<?php endwhile; ?>

				<?php posts_nav_link(' &#183; ', 'Suivant', 'Précédent'); ?>

	</div>


<?php endif; ?>
</section>
<div class="espacer"></div>

<?php get_footer(); ?>