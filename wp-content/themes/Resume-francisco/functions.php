<?php

//import functions file
require get_template_directory() . '/functions/navbar.php'; // menu nav
require get_template_directory() . '/functions/widgets.php'; //pour ajouter les widgets dans le menu apparence
require get_template_directory() . '/functions/acf.php'; // all the parameters we need with ACF for all the projects
require get_template_directory() . '/functions/pagination.php'; // function for archive wich define pagination nav
require get_template_directory() . '/functions/custompost.php';
//require get_template_directory() . '/functions/switchlang.php'; // function for switchlang

//load styles and javascript
if( !is_admin() ) {

	//load CSS - only this 2, the other CSS files will be added with SASS main file
	function load_styles() {
		wp_enqueue_style('styles', get_stylesheet_uri());
		wp_enqueue_style('sass', get_stylesheet_directory_uri() . '/css/styles.css?', array(), null, 'all');
		wp_enqueue_style('animate', get_stylesheet_directory_uri() . '/assets/vendor/animate.css/animate.min.css');
		wp_enqueue_style('venobox', get_stylesheet_directory_uri() . '/assets/vendor/venobox/venobox.css');
		wp_enqueue_style('remixicon', get_stylesheet_directory_uri() . '/assets/vendor/remixicon/remixicon.css');
		wp_enqueue_style('aos', get_stylesheet_directory_uri() . '/assets/vendor/aos/aos.css');
		//wp_enqueue_style('carousel', get_stylesheet_directory_uri() . '/assets/vendor/owl.carousel/assets/owl.carousel.min.css');
		wp_enqueue_style('bootstrap_css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css');
		wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css');
	}
	add_action('wp_enqueue_scripts', 'load_styles', 1);

	//load JS - deactivate all the JS we do not need with this projet
	function load_javascript() {
		wp_enqueue_script('jquery');
		wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.5/umd/popper.min.js', false);
		wp_enqueue_script('bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', false);
		//wp_enqueue_script('fontawesome', 'https://pro.fontawesome.com/releases/v5.14.0/js/all.js', false);
		wp_enqueue_script('slick-slider', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js', false);
		//wp_enqueue_script('carrousel owl', get_template_directory_uri() . '/assets/vendor/owl.carousel/owl.carousel.min.js', array( 'jquery' ),  null, 'all');
		wp_enqueue_script('venobox', get_template_directory_uri() . '/assets/vendor/venobox/venobox.min.js', array( 'jquery' ),  null, 'all');
		wp_enqueue_script('aos js', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array( 'jquery' ),  null, 'all');
		wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ),  null, 'all');
	}
	add_action('wp_enqueue_scripts', 'load_javascript', 1);

}

//define jquery version
function replace_core_jquery_version() {
		wp_deregister_script('jquery');
		wp_register_script('jquery', "https://code.jquery.com/jquery-3.4.1.min.js", array(), '3.4.1');
}
add_action('wp_enqueue_scripts', 'replace_core_jquery_version');


//define all the menus we need for the project
add_theme_support('menus');
register_nav_menus(array(
	'menu_principal' => 'Menu',
	'menu_footer' => 'Menu footer',
	'menu_langues' => 'Menu langues'
));


/*Support for pages excerpt*/

add_post_type_support( 'page', 'excerpt' );


/**Add post thumbnail theme support  */
add_theme_support( 'post-thumbnails' );




