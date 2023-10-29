<?php get_header(); ?>
<?php 
$entete = get_the_post_thumbnail_url();
if($entete) :
?>
<div class="header-wrapper" style="background-image:url('<?php echo $entete; ?>');">
	<div class="overlay h-100">
		<div class="container h-100 ">
			<div class="d-flex flex-column justify-content-center h-100" >
				<div class="page-title-wrapper text-left w-100" >
					<h1 class="page-title" data-aos="fade-down"><?php the_title(); ?></h1>
				</div>
			</div>
		</div>
		<svg class="top" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 110"><path fill="#fff" fill-opacity="1" d="M0,32L80,42.7C160,53,320,75,480,85.3C640,96,800,96,960,90.7C1120,85,1280,75,1360,69.3L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
	</div>
</div>
<?php else : ?>
<div class="header-wrapper no-img">
	<div class="container h-100 ">
		<div class="d-flex flex-column justify-content-center h-100" >
			<div class="page-title-wrapper text-left w-100" >
				<h1 class="page-title no-background" data-aos="fade-down"><?php the_title(); ?></h1>
			</div>
		</div>
	</div>
	<svg class="top" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 110"><path fill="#fff" fill-opacity="1" d="M0,32L80,42.7C160,53,320,75,480,85.3C640,96,800,96,960,90.7C1120,85,1280,75,1360,69.3L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z"></path></svg>
</div>
<?php endif; ?>

	<?php if (have_posts()) :
		while (have_posts()) : the_post(); ?>
		<section>
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<article >
									<h2 class="section-subtitle" data-aos="fade-right"><?php the_title(); ?></h2>
									<?php
										$post_date = get_the_date( 'j M Y' );
										//$date_format = DateTime::createFromFormat('Ymd', $date);
										
									?>
									<?php if($post_date): ?>
										<div class="article-date">
											<p><i class="icofont-ui-calendar"></i>
											<?php  echo $post_date;
											?>
											</p>
										</div>
									<?php endif; ?>


									<div class="cat single"><?php the_category(); ?></div>

									<?php the_content(); ?>

						</article>
					</div>
					<div class="col-md-4 sidebar shadow" style="background-image:url(/wp-content/uploads/BP3A6691-scaled.jpg);">
							<div class="sidebar-content">
								<div class="overlay h-100">
								<?php if ( is_active_sidebar('custom-sidebar')) : 
									dynamic_sidebar( 'custom-sidebar' ); ?>
									<?php endif; ?>
								</div>
								
							</div>
					</div>
				</div>
				<a href="javascript:history.go(-1)"><i class="icofont-dotted-left"></i> Retour</a>
			</div>
		
		</section>
		<div class="espacer"></div>

	<?php endwhile;
	else : ?>
	<p>Il n'y a rien a afficher</p>
<?php endif; ?>


<?php get_footer(); ?>
