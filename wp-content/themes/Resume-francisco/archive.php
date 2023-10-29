<?php
/*
Template Name: Archives
*/
get_header(); ?>

<?php 
$term = get_queried_object();
$entete = get_field('image_entete', $term);
if($entete) :
?>
<div class="header-wrapper" style="background-image:url('<?php echo $entete; ?>');">
    <div class="overlay h-100">
        <div class="container h-100 ">
            <div class="d-flex flex-column justify-content-center h-100">
                <div class="page-title-wrapper text-left w-100">
                    <h1 class="page-title" data-aos="fade-down"><?php single_term_title(); ?></h1>
                </div>
            </div>
        </div>
        <svg class="top" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 110">
            <path fill="#fff" fill-opacity="1"
                d="M0,32L80,42.7C160,53,320,75,480,85.3C640,96,800,96,960,90.7C1120,85,1280,75,1360,69.3L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
            </path>
        </svg>
    </div>
</div>
<?php else : ?>
<div class="header-wrapper no-img">
    <div class="container h-100 ">
        <div class="d-flex flex-column justify-content-center h-100">
            <div class="page-title-wrapper text-left w-100">
                <h1 class="page-title no-background" data-aos="fade-down"><?php single_term_title(); ?></h1>
            </div>
        </div>
    </div>
    <svg class="top" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 110">
        <path fill="#fff" fill-opacity="1"
            d="M0,32L80,42.7C160,53,320,75,480,85.3C640,96,800,96,960,90.7C1120,85,1280,75,1360,69.3L1440,64L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
        </path>
    </svg>
</div>
<?php endif; ?>

<section class="top-page" id="archive-actions">
    <div class="container">
        <?php 
			$category1 = get_category( 3 );
			$category2 = get_category( 4 );
			$category3 = get_category( 1 );
			$category4 = get_category( 17 ); ?>
        <div class="cat-search d-flex flex-row flex-wrap justify-content-start align-items-center pb-2 pt-2">
            <span><i class="icofont-search-1"></i></span>
            <p>Trier par catégorie : </p>
            <ul class='cat-archive flex-wrap'>
                <li><a
                        href="<?php echo esc_url( get_term_link( $category4 ) ); ?>"><?php echo esc_html( $category4->name ); ?></a>
                </li>
                <li><a
                        href="<?php echo esc_url( get_term_link( $category1 ) ); ?>"><?php echo esc_html( $category1->name ); ?></a>
                </li>
                <li><a
                        href="<?php echo esc_url( get_term_link( $category2 ) ); ?>"><?php echo esc_html( $category2->name ); ?></a>
                </li>
                <li><a
                        href="<?php echo esc_url( get_term_link( $category3 ) ); ?>"><?php echo esc_html( $category3->name ); ?></a>
                </li>
            </ul>
        </div>

        <?php if(have_posts()) : ?>
        <div class="row pt-4">
            <div class="col-md-8">
                <?php  while (have_posts() ) : the_post(); 
						get_template_part( 'template-parts/archive/content', '' ); ?>

                <?php endwhile; ?>
            </div>
            <div class="col-md-4 sidebar shadow">
                <div class="overlay h-100">
                    <div class="sidebar-content">
                        <?php if ( is_active_sidebar('custom-sidebar')) : 
								dynamic_sidebar( 'custom-sidebar' ); ?>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

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
        <?php else : ?>
        <p>Il n'y a rien à afficher</p>
        <?php endif; ?>
</section>
<div class="espacer"></div>
<?php get_footer(); ?>