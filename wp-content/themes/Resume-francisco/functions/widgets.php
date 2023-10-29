
<?php

/**Regsiter custom sidebar *
 */
 
 function custom_sidebar1_init() {
	register_sidebar( array(
	  'name'          => __( 'Sidebar 1', 'sur-les-bancs-de-lecole' ),
	  'id'            => 'custom-sidebar',
	  'description'   => __( 'Add widgets here to appear in your any area.', 'sur-les-bancs-de-lecole' ),
	  'before_widget' => '<aside id="%1$s" class="widget %2$s">',
	  'after_widget'  => '</aside>',
	  'before_title'  => '<h2 class="widget-title">',
	  'after_title'   => '</h2>',
	) );
  }
  add_action( 'widgets_init', 'custom_sidebar1_init' );

/**
 * Register footer widgets area.
 *
 */
function footer1_widget_init() {
	register_sidebar( array(
	  'name'          => __( 'Footer 1', "wincommunication" ),
	  'id'            => 'footer-1',
	  'description'   => __( 'Add widgets here to appear in your any area.', "wincommunication" ),
	  'before_widget' => '<div id="%1$s" class="widget %2$s">',
	  'after_widget'  => '</div>',
	  'before_title'  => '<h2 class="widget-title">',
	  'after_title'   => '</h2>',
	) );
  }
  add_action( 'widgets_init', 'footer1_widget_init' );

  function footer2_widget_init() {
	register_sidebar( array(
	  'name'          => __( 'Footer 2', "wincommunication" ),
	  'id'            => 'footer-2',
	  'description'   => __( 'Add widgets here to appear in your any area.', "wincommunication" ),
	  'before_widget' => '<div id="%1$s" class="widget %2$s">',
	  'after_widget'  => '</div>',
	  'before_title'  => '<h2 class="widget-title">',
	  'after_title'   => '</h2>',
	) );
  }
  add_action( 'widgets_init', 'footer2_widget_init' );

  
  function footer3_widget_init() {
	register_sidebar( array(
	  'name'          => __( 'Footer 3', "wincommunication" ),
	  'id'            => 'footer-3',
	  'description'   => __( 'Add widgets here to appear in your any area.', "wincommunication" ),
	  'before_widget' => '<div id="%1$s" class="widget %2$s">',
	  'after_widget'  => '</div>',
	  'before_title'  => '<h2 class="widget-title">',
	  'after_title'   => '</h2>',
	) );
  }
  add_action( 'widgets_init', 'footer3_widget_init' );

  function footer4_widget_init() {
	register_sidebar( array(
	  'name'          => __( 'Footer 4', "wincommunication" ),
	  'id'            => 'footer-4',
	  'description'   => __( 'Add widgets here to appear in your any area.', "wincommunication" ),
	  'before_widget' => '<div id="%1$s" class="widget %2$s">',
	  'after_widget'  => '</div>',
	  'before_title'  => '<h2 class="widget-title">',
	  'after_title'   => '</h2>',
	) );
  }
  add_action( 'widgets_init', 'footer4_widget_init' );


  function footer5_widget_init() {
	register_sidebar( array(
	  'name'          => __( 'Footer 5', "wincommunication" ),
	  'id'            => 'footer-5',
	  'description'   => __( 'Add widgets here to appear in your any area.', "wincommunication" ),
	  'before_widget' => '<div id="%1$s" class="widget %2$s">',
	  'after_widget'  => '</div>',
	  'before_title'  => '<h2 class="widget-title">',
	  'after_title'   => '</h2>',
	) );
  }
  add_action( 'widgets_init', 'footer5_widget_init' );

  function footer6_widget_init() {
	register_sidebar( array(
	  'name'          => __( 'Footer 6', "wincommunication" ),
	  'id'            => 'footer-6',
	  'description'   => __( 'Add widgets here to appear in your any area.', "wincommunication" ),
	  'before_widget' => '<div id="%1$s" class="widget %2$s">',
	  'after_widget'  => '</div>',
	  'before_title'  => '<h2 class="widget-title">',
	  'after_title'   => '</h2>',
	) );
  }
  add_action( 'widgets_init', 'footer6_widget_init' );