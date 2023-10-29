</main>

	<footer class="footer" role="contentinfo">
		<div class="container">
			<div class="links d-flex flex-column flex-md-row">
				<?php if ( is_active_sidebar('footer-1')) : ?>
					<div class="col-md-2">
						<div class="sidebar-content">
							<?php 
							dynamic_sidebar( 'footer-1' ); 
							?>
						</div>
					</div>
				<?php endif; ?> 
				<?php if ( is_active_sidebar('footer-2')) : ?>
					<div class="col-md-2">
						<div class="sidebar-content">
							<?php 
							dynamic_sidebar( 'footer-2' ); 
							?>
						</div>
					</div>
				<?php endif; ?> 
				<?php if ( is_active_sidebar('footer-3')) : ?>
					<div class="col-md-2">
						<div class="sidebar-content">
							<?php 
							dynamic_sidebar( 'footer-3' ); 
							?>
						</div>
					</div>
				<?php endif; ?> 
				<?php if ( is_active_sidebar('footer-4')) : ?>
					<div class="col-md-2">
						<div class="sidebar-content">
							<?php 
							dynamic_sidebar( 'footer-4' ); 
							?>
						</div>
					</div>
				<?php endif; ?> 
				<?php if ( is_active_sidebar('footer-5')) : ?>
					<div class="col-md-2">
						<div class="sidebar-content">
							<?php 
							dynamic_sidebar( 'footer-5' ); 
							?>
						</div>
					</div>
				<?php endif; ?> 
				<?php if ( is_active_sidebar('footer-6')) : ?>
					<div class="col-md-2">
						<div class="sidebar-content">
							<?php 
							dynamic_sidebar( 'footer-6' ); 
							?>
						</div>
					</div>
				<?php endif; ?> 
				
			</div>
			
			<div class="d-flex flex-column flex-md-row mt-4 mb-5">
				
				<div class="col-md-5 col-sm-5 col-xs-12">
					<p class="title mb-0"><strong><?php bloginfo('name'); ?></strong></p>
					<p class="slogan"><?php bloginfo('description'); ?></p>
					<p class="small w-100">
						Tous droits réservés / All rights reserved. <?php echo get_the_time('Y'); ?>.
					</p>
					
				</div>

				<div class="col-md-7 col-sm-7 col-xs-12">
					<div class="d-flex flew-row flex-wrap justify-content-end">
						<?php if(get_field('contact_telephone', 'options')): ?>
							<p class="phone">	
								<div class="mr-4"><i class="fas fa-phone-alt"></i>&nbsp;<?php the_field('contact_telephone', 'options'); ?></div>
							</p>
						<?php endif; ?>
					
						<div class="d-flex flex-row align-items-start justify-content-end">
							<?php if(get_field('facebook', 'options')): ?>
								<a class="mr-4" href="<?php the_field('facebook', 'options'); ?>" target="_blank">
									<span class="svg">
										<i class="fab fa-facebook-square"></i>
									</span>
								</a>
							<?php endif; ?>

							<?php if(get_field('twitter', 'options')): ?>
								<a href="<?php the_field('twitter', 'options'); ?>" target="_blank">
									<span class="svg">
										<i class="fab fa-twitter"></i>
									</span>
								</a>
							<?php endif; ?>

							<?php if(get_field('linkedin', 'options')): ?>
								<a href="<?php the_field('linkedin', 'options'); ?>" target="_blank">
								<span class="svg">
									<i class="fab fa-linkedin"></i>
								</span>
								</a>
							<?php endif; ?>

							<?php if(get_field('instagram', 'options')): ?>
								<a href="<?php the_field('instagram', 'options'); ?>" target="_blank">
									<span class="svg">
										<i class="fab fa-instagram"></i>
									</span>
								</a>
							<?php endif; ?>
						</div><!-- social -->
					</div>
				</div>
			</div>
			
			
			

		</div><!-- container -->
	</footer>

	<!-- Scroll to top -->
	<a href="#top" class="scroll-top">
			<i class="fas fa-sort-up"></i>
	</a>


	<!-- scripts plugin footer -->
	<?php wp_footer(); ?>

	</body>
</html>

