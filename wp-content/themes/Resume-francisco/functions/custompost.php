<?php
	// Custom post catalogue
	function portfolio_init() {
		$labels = array(
			'name' => 'Portfolio',
			'menu_name' => 'Portfolio',
			'singular_name' => 'Portfolio',
			'add_new_item' => 'Ajouter un article',
			'edit_item' => 'Editer un article',
			'new_item' => 'Nouvel article',
			'all_items' => 'Publications',
			'view_item' => 'Voir les articles',
			'search_items' => 'Rechercher un article',
			'not_found' => 'Pas trouvée',
			'not_found_in_trash' => 'Pas trouvée dans la corbeille',
			'parent_item_colon' => '',
		);

		$args = array(
			'labels' => $labels,
			'public' => true,
			'publicly_queryable' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'query_var' => true,
			'rewrite' => array('slug', 'porfolio'),
			'capability_type' => 'post',
			'has_archive' => true,
			'hierarchical' => false,
			'menu_position' => null,
			'supports' => array('title', 'custom_fields', 'editor', 'taxonomy', 'thumbnail')
        );
 

		register_post_type('portfolio', $args);
	}
	add_action('init', 'portfolio_init');

