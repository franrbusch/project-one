<?php get_header(); ?>


<section class="pages search">	
	<div class="container">
	<?php 
    $args = array(
       			'post_type'=> array( 'post', 'page'),
                's'    => $s,
                'paged' => $paged,
                );
        query_posts($args);
	?>
	<?php if (have_posts()) : ?>

					<div class="col-md-10">
						<?php 
							while ( have_posts() ) : the_post();
									get_template_part( 'template-parts/archive/content-search', '' );
							endwhile;
						?>
					</div>
					<div class="col-12">
						<nav class="nav-archives">
							<div class="d-flex flex-md-row">
								<div class="col-md-6">
									<?php if(get_previous_posts_link()):
										echo '<i class="icofont-dotted-left"></i>';
										previous_posts_link( 'Articles suivants' );
									endif; ?>
								</div>

								<div class="col-md-6 text-right">
									<?php if(get_next_posts_link()):
										next_posts_link( 'Articles précedents');
										echo '<i class="icofont-dotted-right"></i>';
									endif; ?>
								</div>
							</div>
						</nav>
					</div>
					<?php
		else: ?>
		
		<h3 class="section-subtitle">Désolé, aucun résultat pour votre recherche <br>
		Veuillez essayer à nouveau !</h3>
		<form role="search" method="get" id="searchform" class="searchform" action="/" autocomplete="off">
			<input type="hidden" name="post_type" value="produit">
			<div class="row">
			
			<input type="text" value="" name="s" id="s" placeholder="Rechercher" class="form-control input-lg m-2 w-50">
			<button class="button-primary btn-lighter mb-2" type="submit">
				<i class="fa fa-search"></i>
			</button>
			</div>
		</form>
		<?php	get_template_part( 'template-parts/page/content', 'none' );
		endif;
		?>

	</div>
</section>
<div class="espacer"></div>
<?php get_footer(); ?>
