<?php
	
	//enqueue stylesheets and scripts
	function marcelcabrera_styles_scripts(){
		wp_enqueue_style('google-fonts','https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');
		wp_enqueue_style('main-styles', get_stylesheet_uri() );
		wp_enqueue_script('modernizr', get_template_directory_uri().'/assets/js/vendor/modernizr-3.7.1.min.js',array(),'3.7.1' );
		wp_enqueue_script('plugins',get_template_directory_uri().'/assets/js/plugins.js',array('jquery'),'1.0',true);
		wp_enqueue_script('main-scripts',get_template_directory_uri().'/assets/js/main.js',array('jquery'),'1.0',true);
	}
	add_action('wp_enqueue_scripts','marcelcabrera_styles_scripts');

	//add support for global options page acf
	if( function_exists('acf_add_options_page') ) {
		acf_add_options_page('Opciones del Tema');		
	}

	//add menus support
	function marcelcabrera_register_menus(){
		register_nav_menus(
			array(
				'main-menu' => __('Main Menu'),
				'secondary-menu' => __('Secondary Menu'),
				'footer-menu' =>__('Footer Menu')
			)
		);
	}
	add_action('init','marcelcabrera_register_menus');

	//widgets area
	function marcelcabrera_widgets_init(){
		register_sidebar(array(
			'name' => 'Footer 1',
			'id' => 'footer_1',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>',
		));

		register_sidebar(array(
			'name' => 'Footer 2',
			'id' => 'footer_2',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>',
		));	
		
		register_sidebar(array(
			'name' => 'Footer 3',
			'id' => 'footer_3',
			'before_widget' => '<div>',
			'after_widget'  => '</div>',
			'before_title'  => '<h2>',
			'after_title'   => '</h2>',
		));	
		
	}

	add_action('widgets_init','marcelcabrera_widgets_init');

?>