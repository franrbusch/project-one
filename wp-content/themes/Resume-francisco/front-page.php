<?php get_header(); ?>

		<div class="container-fluid p-0">
            <!-- About-->
            <section class="resume-section" id="about">
                <div class="resume-section-content">
                    <h1 class="mb-0">
                        Francisco
                        <span class="text-primary">Rosales</span>
                    </h1>
                    <p class="subheading mb-5">
                        Villeneuve les Maguelone, 34750 · (+33) 07 76 69 00 47 ·
                        <a href="mailto:francisco.tomas.rosales@email.com">francisco.tomas.rosales@gmail.com</a>
                    </p>
                    <?php if(get_field("presentation")) : ?>
                    <p class="lead mb-5"><?php the_field("presentation"); ?></p>
                    <?php endif; ?>
                    <div class="social-icons">
                        <a class="social-icon" href="<?php the_field("lien_linkedin"); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" href="<?php the_field("lien_twitter"); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a class="social-icon" href="skype:live:francisco_7256?chat" target="_blank"><i class="fab fa-skype"></i></a>
                        <a class="social-icon" href="https://wa.me/33776690047" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Portfolio-->
            <section class="resume-section" id="portfolio">
                <div class="resume-section-content">
                    <h2 class="mb-5">Portfolio</h2>
                    <div class="d-flex flex-row flex-wrap w-100 justify-content-center">

                        <?php 
                        $args = array(
                        'post_type'=> 'portfolio',
                        'orderby'   => 'rand',
                        'post_status' => 'publish',
                        'order' => 'ASC'
                        );

                        $portfolio = new WP_Query( $args );
                        if($portfolio->have_posts()) : 
                            while($portfolio->have_posts()) :
                                $portfolio->the_post(); 
                                $imgUrl = get_the_post_thumbnail_url();
                                $site_link = get_field('site_link');
                                ?>
        
                                <div class="col-md-4 ">
                                    <div class="item shadow" data-aos="zoom-in" data-aos-delay="100" style="background-image:url('<?php echo $imgUrl; ?>');">
                                        
                                            <div class="item-info">
                                                <div class="item-info-content">
                                                    <a href="<?php echo $site_link; ?>" target="_blank"><h4><?php the_title(); ?></h4></a>
                                                </div>
                                
                                            </div>
                                            <a href="<?php echo $imgUrl; ?>" data-gall="portfolioGallery" class="venobox preview-link" title="<?php the_title(); ?>"><i class="ri-fullscreen-line"></i></a>
                                       
                                    </div>
                                </div>
                            <?php endwhile; 
                            wp_reset_query(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
            <!-- Skills-->
            <section class="resume-section" id="skills">
                <div class="resume-section-content">
                    <h2 class="mb-5">Compétences</h2>
                    <h3 class="subheading mb-3">Programmation et outils de développement</h3>
                    <ul class="list-inline dev-icons">
                        <li class="list-inline-item"><i class="fab fa-html5"></i></li>
                        <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
                        <li class="list-inline-item"><i class="fab fa-js-square"></i></li>
                        <li class="list-inline-item"><i class="fab fa-sass"></i></li>
                        <li class="list-inline-item"><i class="fab fa-wordpress"></i></li>
                        <li class="list-inline-item"><i class="fab fa-shopify"></i></li>
                        <li class="list-inline-item"><i class="fab fa-bootstrap"></i></li>
                        <li class="list-inline-item"><i class="fab fa-github"></i></li>
                        <li class="list-inline-item"><i class="fab fa-php"></i></li>
                        <li class="list-inline-item"><i class="fab fa-stack-overflow"></i></li>
                        <li class="list-inline-item"><i class="fab fa-mailchimp"></i></li>
                    </ul>
                    
                        <?php 
                        if(get_field('description_competences')) : ?>
                            <div class="skills"><?php the_field('description_competences'); ?></div> 
                        <?php endif;
                        ?>

                </div>
            </section>
            <hr class="m-0" />
            <!-- Services-->
            <!-- <section class="resume-section" id="services">
                <div class="resume-section-content">
                    <h2 class="mb-5">Services</h2>
                    <?php 
                       // if(get_field('description_services')) : ?>
                            <div class="skills"><?php// the_field('description_services'); ?></div> 
                        <?php// endif;
                    ?>
                </div>
            </section>
            <hr class="m-0" /> -->
             <!--Contact-->
             <section class="resume-section" id="contact">
                <div class="resume-section-content">
                    <h2 class="mb-5">Contact</h2>
                    <div class="formulaire-contact">
                    <?php echo do_shortcode('[caldera_form id="CF6197fad735359"]'); ?>
                    </div>
                    <div class="subheading mb-3 mt-5">Sur les réseaux sociaux</div>
                    <div class="social-icons">
                        <a class="social-icon" href="<?php the_field("lien_linkedin"); ?>" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a class="social-icon" href="<?php the_field("lien_twitter"); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a class="social-icon" href="skype:live:francisco_7256?chat" target="_blank"><i class="fab fa-skype"></i></a>
                        <a class="social-icon" href="https://wa.me/33776690047" target="_blank"><i class="fab fa-whatsapp"></i></a>
                    </div>
                </div>
            </section>
            <hr class="m-0" />
		</div>
		
<?php get_footer(); ?>